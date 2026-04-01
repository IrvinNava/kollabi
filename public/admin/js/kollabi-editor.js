const editor = new EditorJS({
   holder: 'editorjs',
   i18n: {
      messages: {
         ui: {
            "blockTunes": {
               "toggler": {
                  "Click to tune": "Click para ajustar",
                  "or drag to move": "o arrastre para mover"
               },
            },
            "inlineToolbar": {
               "converter": {
                  "Convert to": "Convertir a"
               }
            },
            "toolbar": {
               "toolbox": {
                  "Add": "Agregar"
               }
            },
            "popover": {
               "Filter": "Buscar en",
               "Nothing found": "No se ha encontrado nada"
            },
            "settings": "Configuración",
            "confirm": "Confirmar",
            "cancel": "Cancelar"
         },
         toolNames: {
            "Text": "Texto",
            "Heading": "Encabezado",
            "List": "Lista",
            "Warning": "Advertencia",
            "Quote": "Cita",
            "Code": "Código",
            "Delimiter": "Separador",
            "Raw HTML": "HTML",
            "Table": "Tabla",
            "Link": "Enlace",
            "Marker": "Marcador",
            "Bold": "Negritas",
            "Italic": "Cursiva",
            "Image": "Imagen",
            "Embed": "Multimedia"
         },
         tools: {
            "warning": {
               "Title": "Título",
               "Message": "Mensaje"
            },
            "link": {
               "Add a link": "Agregar un enlace"
            },
            "stub": {
               "The block can not be displayed": "El bloque no se puede mostrar"
            },
            "image": {
               "Caption": "Subtítulo",
               "Select an Image": "Selecciona una imagen",
               "With border": "Con borde",
               "Stretch image": "Expandir imagen",
               "With background": "Con fondo"
            },
            "embed": {
               "Enter a link": "Ingresa un enlace",
               "Paste a link to embed": "Pega un enlace para insertar",
               "Wrong format": "Formato incorrecto"
            },
            "list": {
               "Ordered": "Lista ordenada",
               "Unordered": "Lista sin orden"
            },
         },
         blockTunes: {
            "delete": {
               "Delete": "Eliminar"
            },
            "moveUp": {
               "Move up": "Subir"
            },
            "moveDown": {
               "Move down": "Bajar"
            }
         }
      }
   },
   tools: {
      header: {
         class: Header,
         inlineToolbar: true,
         config: {
            levels: [1, 2, 3, 4],
            defaultLevel: 2
         }
      },
      paragraph: {
         class: Paragraph,
         inlineToolbar: true
      },
      marker: {
         class: Marker,
         shortcut: 'CMD+SHIFT+M'
      },
      list: {
         class: EditorjsList,
         inlineToolbar: true,
         toolbox: [
            {
               title: 'Lista ordenada',
               data: {
                  style: 'ordered',
               }
            },
            {
               title: 'Lista no ordenada',
               data: {
                  style: 'unordered',
               }
            }
         ]
      },
      image: {
         class: ImageTool,
         config: {
            endpoints: {
               byFile: 'upload.php', // simulado o real
               byUrl: 'https://dummy-endpoint.com/fetchUrl' // puedes dejarlo así si no lo usas
            }
         }
      },
      table: {
         class: Table,
         inlineToolbar: true
      },
      quote: {
         class: Quote,
         inlineToolbar: true,
         config: {
            quotePlaceholder: 'Escribe una cita...',
            captionPlaceholder: 'Autor de la cita...'
         }
      },
      link: {
         class: LinkTool,
         inlineToolbar: true,
         config: {
            placeholder: 'Escribe el enlace...'
         }
      },
      embed: {
         class: Embed,
         inlineToolbar: true,
         config: {
            services: {
               youtube: true,
               twitter: true,
               instagram: true,
            }
         }
      },
   },
   data: {
      blocks: [{
         type: "header",
         data: {
            text: "Comienza escribiendo un subtítulo aquí",
            level: 3
         }
      },
      {
         type: "paragraph",
         data: {
            text: "Recuerda que puedes usar encabezados, enlaces, listas, tablas y más."
         }
      },
      {
         type: "paragraph",
         data: {
            text: "Escribe / para agregar un bloque."
         }
      }
      ]
   }
});