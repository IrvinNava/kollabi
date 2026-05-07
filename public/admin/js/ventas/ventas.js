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

   // Buscar categoria Select2
   $('#categoriaFilter').select2({
      placeholder: 'Selecciona una o más categorías...',
      width: '100%',
      allowClear: true,
      closeOnSelect: false
   });

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

   // Offcanvas
   const packageOffcanvas = document.getElementById('sales-offcanvas');

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

});