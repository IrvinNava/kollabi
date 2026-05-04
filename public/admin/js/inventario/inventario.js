$(function () {

   var body = $("body");

   console.log("Inventario JS");

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
});