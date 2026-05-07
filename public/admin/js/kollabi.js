$(document).ready(function () {
   const body = $("body");

   const currentPage = body.data("page");
   $("#" + currentPage).addClass("active");
   $("#" + currentPage).parents(".parent").addClass("show");

   let marcasTable = $(".kollabi-table");
   if (marcasTable.length) {
      $(".btn-list-style").click(function () {
         $(".btn-list-style").removeClass('border-0').removeClass('bg-gray-300');
         let type = $(this).attr('id');
         switch (type) {
            case 'listaCompacta':
               $("#listaCompacta").addClass('border-0').addClass('bg-gray-300');
               $(".kollabi-table").addClass('table-sm');
               break;
            case 'listaExtendida':
               $("#listaExtendida").addClass('border-0').addClass('bg-gray-300');
               $(".kollabi-table").removeClass('table-sm');
               break;

         }
      });
   }

   // Test Offcanvas
   // document.addEventListener('DOMContentLoaded', function () {
   //    const offcanvasElement = document.getElementById('product-offcanvas');
   //    if (!offcanvasElement) return;
   //    const offcanvas = new bootstrap.Offcanvas(offcanvasElement);
   //    offcanvas.show();
   // });


});