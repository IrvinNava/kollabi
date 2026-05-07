$(function () {

   var body = $("body");

   $('.readmore').readmore({
      speed: 75,
      collapsedHeight: 26,
      moreLink: '<a href="#" style="font-size: 12px; color: #b165a5;">Ver más</a>',
      lessLink: '<a href="#" style="font-size: 12px; color: #b165a5;">Ver menos</a>',
      blockCSS: 'overflow: hidden; width: 50%;',
   });

   
   $('#productLocations').select2({
      placeholder: 'Selecciona una o más ubicaciones...',
      width: '100%',
   });

   // Select de marca
   const values = [
      {
         value: '01',
         label: '<i class="fa-solid fa-circle-check text-success me-1"></i>Bueno',
         id: 1
      },
      {
         value: '02',
         label: '<i class="fa-solid fa-circle-exclamation text-warning me-1"></i>Regular',
         id: 2
      },
      {
         value: '03',
         label: '<i class="fa-solid fa-triangle-exclamation text-danger me-1"></i>Malo',
         id: 3
      },
   ]

   var stockSelectElement = $("#stockSelect");
   if (stockSelectElement.length) {
      const stockSelect = document.querySelector('#stockSelect');
      const stockChoices = new Choices(stockSelect, {
         choices: values,
         allowHTML: true,
         removeItemButton: true,
         placeholder: true,
         placeholderValue: 'Elige su estatus...',
         loadingText: 'Cargando...',
         noResultsText: 'No se encontró ese estatus',
         noChoicesText: 'No hay opciones para elegir',
         itemSelectText: 'Enter',
      });
   }

});