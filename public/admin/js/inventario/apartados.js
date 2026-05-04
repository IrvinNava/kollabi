$(function () {
   console.log("Apartados JS");

   var body = $("body");

   // Buscar categoria Select2
   $('#categoriaFilter').select2({
      placeholder: 'Selecciona una o más categorías...',
      width: '100%',
      allowClear: true,
      closeOnSelect: false
   });

   // Buscar marca Select2
   $('#marcaFilter').select2({
      placeholder: 'Selecciona una o más marcas...',
      width: '100%',
      allowClear: true,
      closeOnSelect: false
   });

   // Buscar producto y select2
   const $reservedProductSelect = $('#reservedProductInput');
   if (!$reservedProductSelect.length) return;

   const products = [
      {
         id: 1,
         name: 'Collar dorado con dije de luna',
         sku: 'LUN-COL-001',
         brand: 'MagentaTLX',
         price: 280,
         stock: 4,
         discountPercentage: 0
      },
      {
         id: 2,
         name: 'Collar de perlas pequeñas',
         sku: 'AUR-COL-002',
         brand: 'MagentaTLX',
         price: 320,
         stock: 2,
         discountPercentage: 0
      },
      {
         id: 3,
         name: 'Collar plateado minimalista',
         sku: 'MAG-COL-003',
         brand: 'MagentaTLX',
         price: 240,
         stock: 6,
         discountPercentage: 0
      },
      {
         id: 4,
         name: 'Bolsa mini piel',
         sku: 'NUB-BOL-003',
         brand: 'Casa Oliva',
         price: 340,
         stock: 3,
         discountPercentage: 0
      },
      {
         id: 5,
         name: 'Bolsa tejida artesanal',
         sku: 'LUN-BOL-004',
         brand: 'Casa Oliva',
         price: 310,
         stock: 5,
         discountPercentage: 0
      },
      {
         id: 6,
         name: 'Bolsa crossbody nude',
         sku: 'NUB-BOL-005',
         brand: 'Casa Oliva',
         price: 350,
         stock: 1,
         discountPercentage: 0
      },
      {
         id: 7,
         name: 'Vela aromática Lavanda',
         sku: 'COL-VEL-002',
         brand: 'LunaArtesanal',
         price: 180,
         stock: 8,
         discountPercentage: 10
      },
      {
         id: 8,
         name: 'Vela vainilla artesanal',
         sku: 'COL-VEL-003',
         brand: 'LunaArtesanal',
         price: 170,
         stock: 7,
         discountPercentage: 0
      },
      {
         id: 9,
         name: 'Vela cítrica decorativa',
         sku: 'COL-VEL-004',
         brand: 'LunaArtesanal',
         price: 190,
         stock: 2,
         discountPercentage: 0
      },
      {
         id: 10,
         name: 'Aretes dorados',
         sku: 'MAR-ARE-004',
         brand: 'MagentaTLX',
         price: 230,
         stock: 9,
         discountPercentage: 0
      }
   ];

   const select2Products = [
      {
         id: '',
         text: ''
      },
      ...products.map(function (product) {
         return {
            id: String(product.id),
            text: product.name,
            name: product.name,
            sku: product.sku,
            brand: product.brand,
            price: product.price,
            stock: product.stock,
            discountPercentage: product.discountPercentage
         };
      })
   ];

   $reservedProductSelect.select2({
      data: select2Products,
      placeholder: 'Buscar artículo por nombre, código o SKU',
      width: '100%',
      allowClear: true,
      minimumInputLength: 0,
      dropdownParent: $('#reserveItemModal'),

      templateResult: formatProductResult,
      templateSelection: formatProductSelection,

      matcher: function (params, data) {
         if ($.trim(params.term) === '') {
            return data;
         }

         if (!data.id) {
            return null;
         }

         const term = normalizeText(params.term);
         const name = normalizeText(data.name || '');
         const sku = normalizeText(data.sku || '');
         const brand = normalizeText(data.brand || '');

         if (
            name.includes(term) ||
            sku.includes(term) ||
            brand.includes(term)
         ) {
            return data;
         }

         return null;
      }
   });

   $reservedProductSelect.val(null).trigger('change');

   $reservedProductSelect.on('select2:select', function (event) {
      const selectedProductId = event.params.data.id;

      if (!selectedProductId) return;

      const product = products.find(function (item) {
         return String(item.id) === String(selectedProductId);
      });

      if (!product) return;

      fillReservedProductFields(product);
   });

   $reservedProductSelect.on('select2:clear', function () {
      clearReservedProductFields();
   });

   function fillReservedProductFields(product) {
      const quantity = Number($('#reservedQuantityInput').val() || 1);
      const total = product.price * quantity;

      $('#reservedBrandInput').val(product.brand);
      $('#reservedStockInput').val(`${product.stock} piezas`);
      $('#reservedPriceInput').val(formatCurrency(product.price));
      $('#reservedTotalInput').val(formatCurrency(total));
   }

   function clearReservedProductFields() {
      $('#reservedBrandInput').val('');
      $('#reservedStockInput').val('');
      $('#reservedQuantityInput').val(1);
      $('#reservedPriceInput').val('');
      $('#reservedTotalInput').val('');
   }

   $('#reservedQuantityInput').on('input change', function () {
      const selectedProductId = $reservedProductSelect.val();

      if (!selectedProductId) {
         $('#reservedTotalInput').val('');
         return;
      }

      const product = products.find(function (item) {
         return String(item.id) === String(selectedProductId);
      });

      if (!product) return;

      fillReservedProductFields(product);
   });

   function formatProductResult(product) {
      if (!product.id) {
         return product.text;
      }

      const discountBadge =
         Number(product.discountPercentage) > 0
            ? `<span class="select2-product-discount">${product.discountPercentage}% OFF</span>`
            : '';

      return $(`
      <div class="select2-product-result">
         <div class="select2-product-info">
            <div class="select2-product-name-row">
               <strong>${product.name}</strong>
               ${discountBadge}
            </div>

            <small class="d-block">
               ${product.sku}
            </small>
         </div>
      </div>
   `);
   }

   function formatProductSelection(product) {
      if (!product.id) {
         return product.text || 'Buscar artículo por nombre, SKU o marca';
      }

      return $(`
      <div class="select2-product-selection">
         <div class="select2-product-selection-info">
            <strong>${product.name}</strong>
            <small>${product.sku}</small>
         </div>
      </div>
   `);
   }

   function normalizeText(text) {
      return String(text)
         .toLowerCase()
         .normalize('NFD')
         .replace(/[\u0300-\u036f]/g, '');
   }

   function formatCurrency(value) {
      return new Intl.NumberFormat('es-MX', {
         style: 'currency',
         currency: 'MXN'
      }).format(Number(value || 0));
   }


   //   Verifica qué tema está seleccionado actualmente
   function getSwalTheme() {
      const bsTheme = document.documentElement.getAttribute('data-bs-theme');
      if (!bsTheme) return 'auto';
      const normalizedTheme = bsTheme.toLowerCase();
      if (normalizedTheme === 'dark') return 'dark';
      if (normalizedTheme === 'light') return 'light';
      return 'auto';
   }

   // Remueve elemento de carga en modal de editar
   const editReservedItemModal = document.getElementById('editReservedItemModal');
   if (editReservedItemModal) {
      // Se remueve cortina de carga
      editReservedItemModal.addEventListener('shown.bs.modal', () => {
         let thisModal = $(this);
         setTimeout(function () {
            thisModal.find(".loading-shape").remove();
         }, 1000);
      });
      // Al cerrar modal de editReservedItemModal, se agrega cortina de carga
      editReservedItemModal.addEventListener('hidden.bs.modal', event => {
         $(editReservedItemModal).find(".modal-body").append('<div class="loading-shape"><span>Cargando...</span></div>');
      });
   }

   // Offcanvas
   const productOffcanvas = document.getElementById('apartados-offcanvas')
   if (productOffcanvas) {
      productOffcanvas.addEventListener('shown.bs.offcanvas', () => {
         let thisOffCanvas = $(this);
         setTimeout(function () {
            thisOffCanvas.find(".loading-shape").remove();
         }, 1000);
      });

      productOffcanvas.addEventListener('hidden.bs.offcanvas', event => {
         $(productOffcanvas).append('<div class="loading-shape"><span>Cargando...</span></div>');
      });
   }

   // Nuevo apartado
   function getReservedItemHtml(reserveSummary) {
      return `
      <div>
        <p class="mb-3">
          El artículo fue apartado correctamente.
        </p>

        <div class="border rounded-3 p-3 bg-light fs-9">
          <div class="d-flex justify-content-between gap-3 mb-2">
            <span class="text-muted">Artículo</span>
            <strong class="text-end">${reserveSummary.product}</strong>
          </div>

          <div class="d-flex justify-content-between gap-3 mb-2">
            <span class="text-muted">Cliente</span>
            <strong class="text-end">${reserveSummary.customer}</strong>
          </div>

          <div class="d-flex justify-content-between gap-3 mb-2">
            <span class="text-muted">Cantidad</span>
            <strong>${reserveSummary.quantity}</strong>
          </div>

          <div class="d-flex justify-content-between gap-3 mb-2">
            <span class="text-muted">Total</span>
            <strong>${reserveSummary.total}</strong>
          </div>

          <div class="d-flex justify-content-between gap-3 mb-2">
            <span class="text-muted">Anticipo</span>
            <strong>${reserveSummary.advance}</strong>
          </div>

        </div>

        <p class="small text-muted mt-3 mb-0">
          El artículo quedará fuera de venta hasta completar la compra o liberar el apartado.
        </p>
      </div>
    `;
   }

   // Obtiene el valor del input
   function getInputValue(selector, fallback) {
      const value = $(selector).val();

      if (!value || !value.toString().trim()) {
         return fallback;
      }

      return value.toString().trim();
   }

   // Confirmar apartado
   body.on("click", "#btnReserveItem", function () {
      const productText = $("#reservedProductInput option:selected").text().trim();
      const productName = productText && productText !== "Selecciona un artículo"
         ? productText.split("·")[0].trim()
         : "Artículo seleccionado";

      const customerName = getInputValue("#customerNameInput", "Cliente sin nombre");
      const quantityValue = getInputValue("#reservedQuantityInput", "1");
      const totalValue = getInputValue("#reservedTotalInput", "$0.00");
      const advanceValue = getInputValue("#reserveAdvanceInput", "Sin anticipo");
      const limitDateValue = getInputValue("#reserveLimitDateInput", "");

      const reserveSummary = {
         product: productName,
         customer: customerName,
         quantity: quantityValue === "1" ? "1 pieza" : `${quantityValue} piezas`,
         total: totalValue,
         advance: advanceValue,
         limitDate: limitDateValue
      };

      Swal.fire({
         title: "Artículo apartado",
         html: getReservedItemHtml(reserveSummary),
         icon: "success",
         iconHtml: '<i data-feather="bookmark"></i>',
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

   // Guarda cambios de apartado
   body.on("click", "#btnUpdateReservedItem", function () {
      const customerName = $("#editCustomerNameInput").val().trim() || "este cliente";

      Swal.fire({
         title: "Cambios guardados",
         html: `
        <div>
          <p class="mb-0">
            Los cambios del apartado a nombre de <strong>${customerName}</strong> se guardaron correctamente.
          </p>
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

   // Liberar artículo
   body.on("click", ".btn-release-reserved-item", function () {
      const customerName = $(this).data("customer") || "este cliente";

      Swal.fire({
         title: "¿Liberar artículo?",
         html: `
        <div>
          <p class="mb-0">
            El artículo apartado a nombre de <strong>${customerName}</strong> volverá a estar disponible para venta.
          </p>
        </div>
      `,
         icon: "question",
         iconHtml: '<i data-feather="refresh-cw"></i>',
         iconColor: "#fff",
         showCancelButton: true,
         confirmButtonText: "Sí, liberar artículo",
         cancelButtonText: "No, conservar apartado",
         reverseButtons: true,
         confirmButtonColor: "#25b003",
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
            icon: "swal-feather-icon swal-feather-icon-info"
         }
      }).then(function (result) {
         if (!result.isConfirmed) return;

         Swal.fire({
            title: "Artículo liberado",
            html: `
          <div>
            <p class="mb-0">
              El artículo apartado a nombre de <strong>${customerName}</strong> se liberó correctamente y ya está disponible para venta.
            </p>
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

   //Completar venta

   // Plantilla sweet alert detalles de completar venta
   function getCompleteReservedSaleHtml(summary) {
      return `
      <div class="fs-8">
         <p class="mb-1">
         Revisa el resumen antes de completar la venta del apartado.
         </p>

         <div class="border rounded-3 py-2 px-2 bg-body mb-2 lh-sm">

         <div class="d-flex justify-content-between mb-2">
            <span>Cliente</span>
            <strong>${summary.customerName}</strong>
         </div>

         <hr class="my-2">

         <div class="d-flex justify-content-between mb-2">
            <span>Total apartado</span>
            <span>${formatCurrency(summary.total)}</span>
         </div>

         <div class="d-flex justify-content-between mb-2">
            <span>Anticipo</span>
            <strong class="text-success">-${formatCurrency(summary.advance)}</strong>
         </div>

         <hr class="my-2">

         <div class="d-flex justify-content-between align-items-center">
            <span class="fw-bold">Pendiente por cobrar</span>
            <strong class="fs-7">${formatCurrency(summary.pendingTotal)}</strong>
         </div>
         </div>

         <div class="border rounded-3 py-2 px-2">
         <div class="row g-2">
            <div class="col-6">
               <label for="swalReservedCashReceived" class="form-label">Pagó con</label>
               <input
               type="number"
               id="swalReservedCashReceived"
               class="form-control form-control-lg"
               min="0"
               step="0.01"
               placeholder="Ej. 500"
               >
            </div>

            <div class="col-6">
               <label for="swalReservedCashChange" class="form-label">Debes devolver</label>
               <input
               type="text"
               id="swalReservedCashChange"
               class="form-control form-control-lg text-body-highlight"
               value="${formatCurrency(0)}"
               disabled
               >
            </div>
         </div>
         </div>
      </div>
   `;
   }

   // Plantilla sweet alert confirmación
   function getReservedSaleCompletedHtml(paymentData, summary) {
      return `
         <div class="fs-8">
            <p class="mb-3">
            La venta del apartado a nombre de <strong>${summary.customerName}</strong> se completó correctamente.
            </p>

            <div class="border rounded-3 p-3 bg-gray-100">
            <div class="d-flex justify-content-between mb-2">
               <span>Pendiente cobrado</span>
               <strong>${formatCurrency(summary.pendingTotal)}</strong>
            </div>

            <div class="d-flex justify-content-between mb-2">
               <span>Pagó con</span>
               <strong>${formatCurrency(paymentData.cashReceived)}</strong>
            </div>

            <div class="d-flex justify-content-between">
               <span>Cambio</span>
               <strong>${formatCurrency(paymentData.cashChange)}</strong>
            </div>
            </div>
         </div>
      `;
   }

   body.on("click", ".btn-complete-reserved-sale", function () {
      const customerName = $(this).data("customer") || "este cliente";

      const total = Number($(this).data("total") || 0);
      const advance = Number($(this).data("advance") || 0);
      const pendingTotal = Math.max(total - advance, 0);

      const reservedSaleSummary = {
         customerName: customerName,
         total: total,
         advance: advance,
         pendingTotal: pendingTotal
      };

      Swal.fire({
         title: "Completar venta",
         html: getCompleteReservedSaleHtml(reservedSaleSummary),
         icon: "question",
         iconHtml: '<i data-feather="shopping-bag"></i>',
         iconColor: "#fff",
         showCancelButton: true,
         confirmButtonText: "Sí, completar venta",
         cancelButtonText: "Seguir editando",
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

            const cashReceivedInput = document.getElementById("swalReservedCashReceived");
            const cashChangeInput = document.getElementById("swalReservedCashChange");

            if (!cashReceivedInput || !cashChangeInput) return;

            setTimeout(function () {
               cashReceivedInput.focus();
            }, 100);

            cashReceivedInput.addEventListener("input", function () {
               const cashReceived = Number(cashReceivedInput.value || 0);
               const change = cashReceived - reservedSaleSummary.pendingTotal;

               cashChangeInput.value = formatCurrency(Math.max(change, 0));
            });
         },

         preConfirm: function () {
            const cashReceivedInput = document.getElementById("swalReservedCashReceived");
            const cashReceived = Number(cashReceivedInput?.value || 0);

            if (cashReceived < reservedSaleSummary.pendingTotal) {
               Swal.showValidationMessage(
                  `El monto recibido debe ser igual o mayor a ${formatCurrency(reservedSaleSummary.pendingTotal)}.`
               );

               return false;
            }

            return {
               cashReceived: cashReceived,
               cashChange: cashReceived - reservedSaleSummary.pendingTotal
            };
         },

         customClass: {
            icon: "swal-feather-icon swal-feather-icon-success"
         }
      }).then(function (result) {
         if (!result.isConfirmed) return;

         Swal.fire({
            title: "Venta completada",
            html: getReservedSaleCompletedHtml(result.value, reservedSaleSummary),
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