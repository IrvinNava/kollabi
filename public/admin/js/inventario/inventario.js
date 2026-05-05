$(function () {

   var body = $("body");

   console.log("Inventario JS");

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

   // Modales Usuarios Aliados
   const editUserModal = document.getElementById('editUserModal');
   if (editUserModal) {
      // Se remueve cortina de carga
      editUserModal.addEventListener('shown.bs.modal', () => {
         let thisModal = $(this);
         setTimeout(function () {
            thisModal.find(".loading-shape").remove();
         }, 1000);
      });
      // Al cerrar modal de editUserModal, se agrega cortina de carga
      editUserModal.addEventListener('hidden.bs.modal', event => {
         $(editUserModal).find(".modal-body").append('<div class="loading-shape"><span>Cargando...</span></div>');
      });
   }

   // Offcanvas
   const productOffcanvas = document.getElementById('product-offcanvas')
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

   // Rango de costos y label
   function initCurrencyRange(sliderSelector, labelSelector, minInputSelector, maxInputSelector) {
      const sliderElement = document.querySelector(sliderSelector);
      const labelElement = document.querySelector(labelSelector);
      const minInput = document.querySelector(minInputSelector);
      const maxInput = document.querySelector(maxInputSelector);

      if (!sliderElement || !labelElement || !minInput || !maxInput || !sliderElement.noUiSlider) return;

      sliderElement.noUiSlider.on('update', function (values) {
         const minValue = Math.round(Number(values[0]));
         const maxValue = Math.round(Number(values[1]));

         // Visual
         labelElement.textContent = `($${minValue}.00 - $${maxValue}).00`;

         // Valores limpios para backend
         minInput.value = minValue;
         maxInput.value = maxValue;
      });
   }

   initCurrencyRange('#ventasRange', '#ventasRangeLabel', '#costoMin', '#costoMax');
});