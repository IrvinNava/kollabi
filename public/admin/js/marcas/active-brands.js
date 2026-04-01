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

});