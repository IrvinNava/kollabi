$(function () {

   const body = $("body");

   $("#addFeature").click(function () {
      $("#planFeaturesList").append('<div class="row g-2 mb-2 feature-item"><div class="col-md-11"><input class="form-control form-control-sm feature-input" type="text" placeholder="Escribe una característica aquí..."></div><div class="col-md-1"><a href="javascript:void(0);" class="btn btn-sm btn-phoenix-secondary text-body-quaternary remove-feature"><i class="fas fa-trash"></i></a></div></div>');
   });

   body.on("click", ".remove-feature", function () {
      $(this).parents(".feature-item").remove();
   });

   var sucursalSelect = document.querySelector('#sucursalSelect');
   if (sucursalSelect) {
      console.log("sucursalSelect");

      const sucursalChoices = new Choices(sucursalSelect, {
         removeItemButton: true,
         placeholder: true,
         placeholderValue: "Seleccionar sucursal...",
         searchPlaceholderValue: "Buscar sucursal...",


         loadingText: 'Cargando...',
         noResultsText: 'No se encontró la marca',
         noChoicesText: 'No hay opciones para elegir',
         itemSelectText: 'Enter',

      });
   }

   $("#comisionSwitch").on('change', function () {
      console.log("change");
      if ($(this).is(':checked')) {
         $("#percentageContainer").addClass('d-none',false);
         $("#percentageContainer").removeClass('d-none');
      } else {
         $("#percentageComision").prop('disabled',true);
         $("#percentageContainer").addClass('d-none');
      }
   })

});