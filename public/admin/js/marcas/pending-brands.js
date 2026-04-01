$(function () {

   var body = $("body");

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

   // Modales Usuarios Aliados
   const editUserModal = document.getElementById('detailModal');

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

});