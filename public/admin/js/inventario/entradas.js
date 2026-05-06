$(function () {
   console.log("Entradas JS");

   var body = $("body");

   // Buscar marca Select2
   const marcas = [
      {
         id: 1,
         text: "MagentaTLX",
         logo: "../../admin/img/magenta.jpg"
      },
      {
         id: 2,
         text: "Casa Nube",
         logo: "../../admin/img/aldea_logo.jpg"
      },
      {
         id: 3,
         text: "Luna Studio",
         logo: "../../admin/img/magenta.jpg"
      },
      {
         id: 4,
         text: "Brava Market",
         logo: "../../admin/img/aldea_logo.jpg"
      }
   ];

   $("#brandSelect").select2({
      data: marcas,
      placeholder: "Elige una marca...",
      allowClear: true,
      width: "100%",
      minimumResultsForSearch: 5,
      templateResult: formatBrandOption,
      templateSelection: formatBrandSelection,
      escapeMarkup: function (markup) {
         return markup;
      }
   });

   function formatBrandOption(brand) {
      if (!brand.id) return brand.text;

      const logo = brand.logo || "admin/img/placeholders/image-placeholder.svg";

      return `
         <div class="d-flex align-items-center">
            <div class="avatar avatar-s me-2">
               <img src="${logo}" class="rounded-circle" alt="${brand.text}">
            </div>
            <div>
               <p class="mb-0 fw-semibold">${brand.text}</p>
            </div>
         </div>
      `;
   }

   function formatBrandSelection(brand) {
      if (!brand.id) return brand.text;

      const logo = brand.logo || "admin/img/placeholders/image-placeholder.svg";

      return `
         <div class="d-flex align-items-center">
            <img src="${logo}" 
                 class="rounded-circle me-2" 
                 alt="${brand.text}" 
                 style="width: 22px; height: 22px; object-fit: cover;">
            <span>${brand.text}</span>
         </div>
      `;
   }

   // Control de checkboxes
   const table = $("#discontinuedTable");
   // Seleccionar / deseleccionar todos
   table.on("change", ".check-select-all", function () {
      const isChecked = $(this).is(":checked");
      table.find("tbody .checkbox-row").prop("checked", isChecked);
   });
   // Sincronizar checkbox principal al cambiar checks individuales
   table.on("change", "tbody .checkbox-row", function () {
      const totalCheckboxes = table.find("tbody .checkbox-row").length;
      const checkedCheckboxes = table.find("tbody .checkbox-row:checked").length;
      table.find(".check-select-all").prop("checked", totalCheckboxes === checkedCheckboxes);
   });

   function registrarSalidaProductos() {
      const selectedProducts = $("#discontinuedTable tbody .checkbox-row:checked");
      const numeroArticulos = selectedProducts.length;

      if (numeroArticulos === 0) {
         Swal.fire({
            title: "Sin artículos seleccionados",
            text: "Selecciona al menos un producto para registrar su salida.",
            icon: "warning",
            iconHtml: '<i data-feather="alert-triangle"></i>',
            iconColor: '#fff',
            confirmButtonText: "Entendido",
            reverseButtons: true,
            confirmButtonColor: '#49525d',
            theme: getSwalTheme(),
            didOpen: function () {
               if (window.feather) {
                  feather.replace();
               }
            },
            customClass: {
               icon: 'swal-feather-icon swal-feather-icon-warning'
            }
         });

         return;
      }

      Swal.fire({
         title: "¿Registrar salida?",
         html: `
         <p class="mb-0">
            Se darán de baja <strong>${numeroArticulos}</strong> 
            ${numeroArticulos === 1 ? "artículo seleccionado" : "artículos seleccionados"} del inventario.
         </p>
         <p class="text-body-secondary mt-2 mb-0">
            Esta acción registrará la salida de mercancía.
         </p>
      `,
         icon: "question",
         iconHtml: '<i data-feather="log-out"></i>',
         iconColor: "#fff",
         showCancelButton: true,
         confirmButtonText: "Sí, registrar salida",
         cancelButtonText: "Cancelar",
         reverseButtons: true,
         confirmButtonColor: "#25b003",
         cancelButtonColor: "#eff2f6",
         theme: getSwalTheme(),
         width: 520,
         allowEscapeKey: false,
         allowOutsideClick: false,
         didOpen: function () {
            if (window.feather) {
               feather.replace();
            }
         },
         customClass: {
            icon: "swal-feather-icon swal-feather-icon-success"
         }
      }).then((result) => {
         if (!result.isConfirmed) return;

         // Aquí después puedes mandar selectedProducts al backend.
         // Por ahora solo simulamos la baja visualmente o la confirmación.

         Swal.fire({
            title: "Salida registrada",
            html: `
            <p class="mb-0">
               Se registró correctamente la salida de 
               <strong>${numeroArticulos}</strong> 
               ${numeroArticulos === 1 ? "artículo" : "artículos"}.
            </p>
         `,
            icon: "success",
            iconHtml: '<i data-feather="check-circle"></i>',
            iconColor: "#fff",
            confirmButtonText: "Aceptar",
            confirmButtonColor: "#49525d",
            reverseButtons: true,
            theme: getSwalTheme(),
            allowEscapeKey: false,
            allowOutsideClick: false,
            didOpen: function () {
               if (window.feather) {
                  feather.replace();
               }
            },
            customClass: {
               icon: "swal-feather-icon swal-feather-icon-success"
            }
         });
      });
   }

   $("body").on("click", "#btn-registrar-salida", function () {
      registrarSalidaProductos();
   });

   // Verifica qué tema está seleccionado actualmente
   function getSwalTheme() {
      const bsTheme = document.documentElement.getAttribute('data-bs-theme');

      if (!bsTheme) return 'auto';

      const normalizedTheme = bsTheme.toLowerCase();

      if (normalizedTheme === 'dark') return 'dark';
      if (normalizedTheme === 'light') return 'light';

      return 'auto';
   }

   // Offcanvas
   const productOffcanvas = document.getElementById('product-offcanvas');
   if (productOffcanvas) {
      productOffcanvas.addEventListener('shown.bs.offcanvas', function () {
         let thisOffCanvas = $(productOffcanvas);

         setTimeout(function () {
            thisOffCanvas.find(".loading-shape").remove();
         }, 1000);
      });

      productOffcanvas.addEventListener('hidden.bs.offcanvas', function () {
         $(productOffcanvas).append('<div class="loading-shape"><span>Cargando...</span></div>');
      });
   }



});