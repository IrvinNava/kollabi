$(function () {
   console.log("Recolecciones JS");

   var body = $("body");

   // Buscar marca Select2
   $('#marcaFilter').select2({
      placeholder: 'Selecciona una o más marcas...',
      width: '100%',
      allowClear: true,
      closeOnSelect: false
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

   // Formato moneda
   function formatCurrency(amount) {
      const numericAmount = Number(amount || 0);

      return numericAmount.toLocaleString('es-MX', {
         style: 'currency',
         currency: 'MXN'
      });
   }

   // Offcanvas
   const packageOffcanvas = document.getElementById('package-offcanvas');

   if (packageOffcanvas) {
      packageOffcanvas.addEventListener('shown.bs.offcanvas', function () {
         let thisOffCanvas = $(packageOffcanvas);

         setTimeout(function () {
            thisOffCanvas.find(".loading-shape").remove();
         }, 1000);
      });

      packageOffcanvas.addEventListener('hidden.bs.offcanvas', function () {
         $(packageOffcanvas).append('<div class="loading-shape"><span>Cargando...</span></div>');
      });
   }

   // =====================================================
   // Cancelar paquete
   // =====================================================
   body.on("click", ".btn-cancel-package", function () {
      const customerName = $(this).data("customer") || "este cliente";
      const brandName = $(this).data("brand") || "la marca";
      const itemName = $(this).data("item") || "este artículo";
      const folio = $(this).data("code") || "este paquete";

      Swal.fire({
         title: "¿Cancelar paquete?",
         html: `
            <div class="fs-9">
               <p class="mb-3">
                  Esta acción cancelará la recolección del paquete <strong>${folio}</strong>.
               </p>

               <div class="border rounded-3 p-3 bg-body lh-sm text-start">
                  <div class="d-flex justify-content-between mb-2">
                     <span>Artículo</span>
                     <strong>${itemName}</strong>
                  </div>

                  <div class="d-flex justify-content-between mb-2">
                     <span>Cliente</span>
                     <strong>${customerName}</strong>
                  </div>

                  <div class="d-flex justify-content-between">
                     <span>Marca</span>
                     <strong>${brandName}</strong>
                  </div>
               </div>

               <p class="mb-0 mt-3">
                  El paquete deberá regresar a manos de <strong>${brandName}</strong> y ya no quedará disponible para entrega al cliente.
               </p>
            </div>
         `,
         icon: "question",
         iconHtml: '<i data-feather="corner-up-left"></i>',
         iconColor: "#fff",
         showCancelButton: true,
         confirmButtonText: "Sí, cancelar paquete",
         cancelButtonText: "No, conservar paquete",
         reverseButtons: true,
         confirmButtonColor: "#e63757",
         cancelButtonColor: "#eff2f6",
         theme: getSwalTheme(),
         allowEscapeKey: false,
         allowOutsideClick: false,
         didOpen: function () {
            if (window.feather) {
               feather.replace();
            }
         },
         customClass: {
            icon: "swal-feather-icon swal-feather-icon-danger"
         }
      }).then(function (result) {
         if (!result.isConfirmed) return;

         Swal.fire({
            title: "Paquete cancelado",
            html: `
               <div class="fs-9">
                  <p class="mb-3">
                     El paquete <strong>${folio}</strong> fue cancelado correctamente.
                  </p>

                  <div class="border rounded-3 p-3 bg-gray-100 lh-sm text-start">
                     <div class="d-flex justify-content-between mb-2">
                        <span>Artículo</span>
                        <strong>${itemName}</strong>
                     </div>

                     <div class="d-flex justify-content-between mb-2">
                        <span>Cliente</span>
                        <strong>${customerName}</strong>
                     </div>

                     <div class="d-flex justify-content-between">
                        <span>Debe regresar a</span>
                        <strong>${brandName}</strong>
                     </div>
                  </div>
               </div>
            `,
            icon: "success",
            iconHtml: '<i data-feather="check"></i>',
            iconColor: "#fff",
            confirmButtonText: "Aceptar",
            confirmButtonColor: "#49525d",
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
         }).then(function () {
            window.location.reload();
         });
      });
   });


   // =====================================================
   // Completar recolección de paquete ya pagado
   // =====================================================
   body.on("click", ".btn-complete-paid-pickup", function () {
      const customerName = $(this).data("customer") || "este cliente";
      const brandName = $(this).data("brand") || "la marca";
      const itemName = $(this).data("item") || "este artículo";
      const folio = $(this).data("code") || "este paquete";

      Swal.fire({
         title: "¿Completar recolección?",
         html: `
         <div class="fs-9">
            <p class="mb-3">
               Confirma que el paquete <strong>${folio}</strong> fue entregado correctamente al cliente.
            </p>

            <div class="border rounded-3 p-3 bg-body lh-sm text-start">
               <div class="d-flex justify-content-between mb-2">
                  <span>Artículo</span>
                  <strong>${itemName}</strong>
               </div>

               <div class="d-flex justify-content-between mb-2">
                  <span>Cliente</span>
                  <strong>${customerName}</strong>
               </div>

               <div class="d-flex justify-content-between mb-2">
                  <span>Marca</span>
                  <strong>${brandName}</strong>
               </div>

            </div>

            <p class="mb-0 mt-3">
               Como el paquete ya está pagado, solo se registrará la entrega.
            </p>
         </div>
      `,
         icon: "question",
         iconHtml: '<i data-feather="check-circle"></i>',
         iconColor: "#fff",
         showCancelButton: true,
         confirmButtonText: "Sí, registrar entrega",
         cancelButtonText: "Cancelar",
         reverseButtons: true,
         confirmButtonColor: "#25b003",
         cancelButtonColor: "#eff2f6",
         theme: getSwalTheme(),
         allowEscapeKey: false,
         allowOutsideClick: false,
         allowEnterKey: false,
         didOpen: function () {
            if (window.feather) {
               feather.replace();
            }
         },
         customClass: {
            icon: "swal-feather-icon swal-feather-icon-success"
         }
      }).then(function (result) {
         if (!result.isConfirmed) return;

         Swal.fire({
            title: "Recolección completada",
            html: `
            <div class="fs-9">
               <p class="mb-3">
                  La recolección del paquete <strong>${folio}</strong> se completó correctamente.
               </p>

               <div class="border rounded-3 p-3 bg-gray-100 lh-sm text-start">
                  <div class="d-flex justify-content-between mb-2">
                     <span>Artículo</span>
                     <strong>${itemName}</strong>
                  </div>

                  <div class="d-flex justify-content-between mb-2">
                     <span>Cliente</span>
                     <strong>${customerName}</strong>
                  </div>

                  <div class="d-flex justify-content-between">
                     <span>Marca</span>
                     <strong>${brandName}</strong>
                  </div>
               </div>
            </div>
         `,
            icon: "success",
            iconHtml: '<i data-feather="check"></i>',
            iconColor: "#fff",
            confirmButtonText: "Aceptar",
            confirmButtonColor: "#49525d",
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
         }).then(function () {
            window.location.reload();
         });
      });
   });

   // =====================================================
   // Completar recolección de paquete por pagar
   // =====================================================
   body.on("click", ".btn-complete-unpaid-pickup", function () {
      const customerName = $(this).data("customer") || "este cliente";
      const brandName = $(this).data("brand") || "la marca";
      const itemName = $(this).data("item") || "este artículo";
      const folio = $(this).data("code") || "este paquete";

      const total = Number($(this).data("total") || 0);

      Swal.fire({
         title: "Cobrar y entregar",
         html: `
         <div class="fs-9">
            <p class="mb-1">
               Revisa el resumen antes de cobrar el paquete y completar la recolección.
            </p>

            <div class="border rounded-3 py-2 px-2 bg-body mb-2 lh-sm text-start">
               <div class="d-flex justify-content-between mb-2">
                  <span>Folio</span>
                  <strong>${folio}</strong>
               </div>

               <div class="d-flex justify-content-between mb-2">
                  <span>Cliente</span>
                  <strong>${customerName}</strong>
               </div>

               <div class="d-flex justify-content-between mb-2">
                  <span>Marca</span>
                  <strong>${brandName}</strong>
               </div>

               <hr class="my-2">

               <div class="d-flex justify-content-between mb-2">
                  <span>Artículo</span>
                  <strong>${itemName}</strong>
               </div>

               <div class="d-flex justify-content-between align-items-center">
                  <span class="fw-bold">Total por cobrar</span>
                  <strong class="fs-7">${formatCurrency(total)}</strong>
               </div>
            </div>

            <div class="border rounded-3 py-2 px-2">
               <div class="row g-2">
                  <div class="col-6">
                     <label for="swalPickupCashReceived" class="form-label">Pagó con</label>
                     <input
                        type="number"
                        id="swalPickupCashReceived"
                        class="form-control form-control-lg"
                        min="0"
                        step="0.01"
                        placeholder="Ej. 500"
                     >
                  </div>

                  <div class="col-6">
                     <label for="swalPickupCashChange" class="form-label">Debes devolver</label>
                     <input
                        type="text"
                        id="swalPickupCashChange"
                        class="form-control form-control-lg text-body-highlight"
                        value="${formatCurrency(0)}"
                        disabled
                     >
                  </div>
               </div>
            </div>
         </div>
      `,
         icon: "question",
         iconHtml: '<i data-feather="shopping-bag"></i>',
         iconColor: "#fff",
         showCancelButton: true,
         confirmButtonText: "Sí, cobrar y entregar",
         cancelButtonText: "Cancelar",
         reverseButtons: true,
         confirmButtonColor: "#25b003",
         cancelButtonColor: "#eff2f6",
         theme: getSwalTheme(),
         width: 520,
         allowEscapeKey: false,
         allowOutsideClick: false,
         allowEnterKey: false,

         didOpen: function () {
            if (window.feather) {
               feather.replace();
            }

            const cashReceivedInput = document.getElementById("swalPickupCashReceived");
            const cashChangeInput = document.getElementById("swalPickupCashChange");

            if (!cashReceivedInput || !cashChangeInput) return;

            setTimeout(function () {
               cashReceivedInput.focus();
            }, 100);

            cashReceivedInput.addEventListener("input", function () {
               const cashReceived = Number(cashReceivedInput.value || 0);
               const change = cashReceived - total;

               cashChangeInput.value = formatCurrency(Math.max(change, 0));
            });
         },

         preConfirm: function () {
            const cashReceivedInput = document.getElementById("swalPickupCashReceived");
            const cashReceived = Number(cashReceivedInput?.value || 0);

            if (cashReceived < total) {
               Swal.showValidationMessage(
                  `El monto recibido debe ser igual o mayor a ${formatCurrency(total)}.`
               );

               return false;
            }

            return {
               cashReceived: cashReceived,
               cashChange: cashReceived - total
            };
         },

         customClass: {
            icon: "swal-feather-icon swal-feather-icon-success"
         }
      }).then(function (result) {
         if (!result.isConfirmed) return;

         Swal.fire({
            title: "Recolección completada",
            html: `
            <div class="fs-9">
               <p class="mb-3">
                  El pago y la recolección del paquete <strong>${folio}</strong> se completaron correctamente.
               </p>

               <div class="border rounded-3 p-3 bg-gray-100 lh-sm text-start">
                  <div class="d-flex justify-content-between mb-2">
                     <span>Artículo</span>
                     <strong>${itemName}</strong>
                  </div>

                  <div class="d-flex justify-content-between mb-2">
                     <span>Cliente</span>
                     <strong>${customerName}</strong>
                  </div>

                  <div class="d-flex justify-content-between mb-2">
                     <span>Marca</span>
                     <strong>${brandName}</strong>
                  </div>

                  <hr class="my-2">

                  <div class="d-flex justify-content-between mb-2">
                     <span>Total cobrado</span>
                     <strong>${formatCurrency(total)}</strong>
                  </div>

                  <div class="d-flex justify-content-between mb-2">
                     <span>Pagó con</span>
                     <strong>${formatCurrency(result.value.cashReceived)}</strong>
                  </div>

                  <div class="d-flex justify-content-between">
                     <span>Cambio</span>
                     <strong>${formatCurrency(result.value.cashChange)}</strong>
                  </div>
               </div>
            </div>
         `,
            icon: "success",
            iconHtml: '<i data-feather="check"></i>',
            iconColor: "#fff",
            confirmButtonText: "Aceptar",
            confirmButtonColor: "#49525d",
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
         }).then(function () {
            window.location.reload();
         });
      });
   });

});