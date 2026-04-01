/*-----------------------------------------------
 |   Dropzone (con espejo en <img> del DOM)
 -----------------------------------------------*/
$(function () {
   window.Dropzone ? (window.Dropzone.autoDiscover = false) : '';

   const dropzoneInit = () => {
      const { getData } = window.phoenix.utils;

      const Selector = {
         DROPZONE: '[data-dropzone]',
         DZ_ERROR_MESSAGE: '.dz-error-message',
         DZ_PREVIEW: '.dz-preview',
         DZ_PROGRESS: '.dz-preview .dz-preview-cover .dz-progress',
         DZ_PREVIEW_COVER: '.dz-preview .dz-preview-cover'
      };

      const ClassName = {
         DZ_FILE_PROCESSING: 'dz-file-processing',
         DZ_FILE_COMPLETE: 'dz-file-complete',
         DZ_COMPLETE: 'dz-complete',
         DZ_PROCESSING: 'dz-processing'
      };

      const DATA_KEY = { OPTIONS: 'options' };

      const Events = {
         ADDED_FILE: 'addedfile',
         REMOVED_FILE: 'removedfile',
         COMPLETE: 'complete',
         THUMBNAIL: 'thumbnail'
      };

      const dropzones = document.querySelectorAll(Selector.DROPZONE);

      !!dropzones.length && dropzones.forEach(item => {
         let userOptions = getData(item, DATA_KEY.OPTIONS) || {};
         const data = userOptions.data ? userOptions.data : {};

         // Permite pasar un selector CSS del <img> a actualizar, ej: '#logoPreview'
         const targetImgSelector = userOptions.targetImg || null;
         const targetImgEl = targetImgSelector ? document.querySelector(targetImgSelector) : null;

         const setTargetImage = (src) => {
            if (targetImgEl && src) {
               targetImgEl.setAttribute('src', src);
               // Opcional: si usas <img> con alt y quieres indicar estado
               targetImgEl.setAttribute('data-has-image', 'true');
            }
         };

         const options = merge$1(
            {
               url: '/assets/php/',
               addRemoveLinks: false,
               previewsContainer: item.querySelector(Selector.DZ_PREVIEW),
               previewTemplate: item.querySelector(Selector.DZ_PREVIEW).innerHTML,
               thumbnailWidth: null,
               thumbnailHeight: null,
               maxFilesize: 2,
               autoProcessQueue: false,
               filesizeBase: 1000,
               init: function init() {
                  const thisDropzone = this;

                  // Precarga de archivos (mock data)
                  if (data.length) {
                     data.forEach(v => {
                        const mockFile = { name: v.name, size: v.size };
                        thisDropzone.options.addedfile.call(thisDropzone, mockFile);
                        thisDropzone.options.thumbnail.call(
                           thisDropzone,
                           mockFile,
                           `${v.url}/${v.name}`
                        );
                        // Reflejar también en el <img> objetivo
                        setTargetImage(`${v.url}/${v.name}`);
                     });
                  }

                  thisDropzone.on(Events.ADDED_FILE, function addedfile(file) {
                     // Manejo de maxFiles = 1 (limpia previos)
                     if ('maxFiles' in userOptions) {
                        if (
                           userOptions.maxFiles === 1 &&
                           item.querySelectorAll(Selector.DZ_PREVIEW_COVER).length > 1
                        ) {
                           item.querySelector(Selector.DZ_PREVIEW_COVER).remove();
                        }
                        if (userOptions.maxFiles === 1 && this.files.length > 1) {
                           this.removeFile(this.files[0]);
                        }
                     }

                     // Si quieres que el <img> se actualice inmediato (antes de thumbnail),
                     // puedes usar ObjectURL como fallback:
                     if (targetImgEl && file && file.type && file.type.startsWith('image/')) {
                        try {
                           const objectURL = URL.createObjectURL(file);
                           file._objectURLForImgMirror = objectURL; // guardar para revoke
                           setTargetImage(objectURL);
                        } catch (e) {
                           // Silencioso: algunos entornos pueden no permitir createObjectURL
                        }
                     }
                  });
               },
               error(file, message) {
                  if (file.previewElement) {
                     file.previewElement.classList.add('dz-error');
                     if (typeof message !== 'string' && message.error) {
                        message = message.error;
                     }
                     for (let node of file.previewElement.querySelectorAll(
                        '[data-dz-errormessage]'
                     )) {
                        node.textContent = message;
                     }
                  }
               }
            },
            userOptions
         );

         // Limpia el template HTML incrustado para que Dropzone lo use internamente
         item.querySelector(Selector.DZ_PREVIEW).innerHTML = '';

         const dropzone = new window.Dropzone(item, options);

         // Actualiza el <img> objetivo cuando Dropzone genera el thumbnail (dataURL)
         dropzone.on(Events.THUMBNAIL, (file, dataUrl) => {
            if (dataUrl) setTargetImage(dataUrl);
         });

         dropzone.on(Events.ADDED_FILE, () => {
            if (item.querySelector(Selector.DZ_PREVIEW_COVER)) {
               item
                  .querySelector(Selector.DZ_PREVIEW_COVER)
                  .classList.remove(ClassName.DZ_FILE_COMPLETE);
            }
            item.classList.add(ClassName.DZ_FILE_PROCESSING);
            document
               .querySelector('.kanban-custom-bg-radio')
               ?.setAttribute('checked', true);
         });

         dropzone.on(Events.REMOVED_FILE, (file) => {
            if (item.querySelector(Selector.DZ_PREVIEW_COVER)) {
               item
                  .querySelector(Selector.DZ_PREVIEW_COVER)
                  .classList.remove(ClassName.DZ_PROCESSING);
            }
            item.classList.add(ClassName.DZ_FILE_COMPLETE);

            // Libera el ObjectURL si se usó
            if (file && file._objectURLForImgMirror) {
               try { URL.revokeObjectURL(file._objectURLForImgMirror); } catch (_) { }
               file._objectURLForImgMirror = null;
            }

            // Si maxFiles = 1 y se elimina, puedes limpiar el <img> (opcional)
            // if (targetImgEl && (userOptions.maxFiles === 1)) {
            //   targetImgEl.removeAttribute('src');
            //   targetImgEl.removeAttribute('data-has-image');
            // }
         });

         dropzone.on(Events.COMPLETE, () => {
            if (item.querySelector(Selector.DZ_PREVIEW_COVER)) {
               item
                  .querySelector(Selector.DZ_PREVIEW_COVER)
                  .classList.remove(ClassName.DZ_PROCESSING);
            }
            item.classList.add(ClassName.DZ_FILE_COMPLETE);
         });
      });
   };
});