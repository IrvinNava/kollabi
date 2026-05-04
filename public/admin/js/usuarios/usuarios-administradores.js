$(function () {

   var body = $("body");

   console.log("Inventario js");

   body.on("click", ".btn-delete", function () {
      Swal.fire({
         title: "¿Está seguro de eliminar este elemento?",
         text: "",
         icon: "warning",
         buttons: true,
         dangerMode: true,
      }).then((result) => {
         if (result.isConfirmed) {
            var row = $(this).parents('tr');
            row.remove();

            Swal.fire({
               title: "Eliminado",
               text: "El elemento ha sido eliminado.",
               icon: "success",
            });
         }
      });
   });

   $("#emailInput").on('input', function () {
      $('#userInput').val($(this).val());
   });

  
   var estadoSelectElement = $("#stateSelect");
   if (estadoSelectElement.length) {
      const estadoSelect = document.querySelector('#stateSelect');
      const estadocChoices = new Choices(estadoSelect, {
         allowHTML: true,
         removeItemButton: true,
         placeholder: true,
         placeholderValue: 'Elige...',
         loadingText: 'Cargando...',
         noResultsText: 'No se encontró el estado',
         noChoicesText: 'No hay opciones para elegir',
         itemSelectText: 'Enter',
      });
   }

   var ciudadSelectElement = $("#citySelect");
   if (ciudadSelectElement.length) {
      const ciudadSelect = document.querySelector('#citySelect');
      const ciudadChoices = new Choices(ciudadSelect, {
         allowHTML: true,
         removeItemButton: true,
         placeholder: true,
         placeholderValue: 'Elige...',
         loadingText: 'Cargando...',
         noResultsText: 'No se encontró la ciudad',
         noChoicesText: 'No hay opciones para elegir',
         itemSelectText: 'Enter',
      });
   }

   // Modales Usuarios Aliados
   const editUserModal = document.getElementById('editUserModal');

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

   // Offcanvas
   const profileOffcanvas = document.getElementById('profile-offcanvas')

   profileOffcanvas.addEventListener('shown.bs.offcanvas', () => {
      let thisOffCanvas = $(this);
      setTimeout(function () {
         thisOffCanvas.find(".loading-shape").remove();
      }, 1000);
   });

   profileOffcanvas.addEventListener('hidden.bs.offcanvas', event => {
      $(profileOffcanvas).append('<div class="loading-shape"><span>Cargando...</span></div>');
   });

});