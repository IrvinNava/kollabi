$(function () {

   var body = $("body");

   // Select de marca
   const values = [
      {
         value: '01',
         label: 'MagentaTLX - <img src="../admin/img/magenta.jpg" class="marca-select"/>',
         id: 1
      },
      {
         value: '02',
         label: ' Luna Artesanal Tlaxcala - <img src="../admin/img/aldea_logo.jpg" class="marca-select"/>',
         id: 2
      },
      {
         value: '03',
         label: 'VerdeMenta - <img src="../admin/img/aldea_logo.jpg" class="marca-select"/>',
         id: 3
      },
      {
         value: '04',
         label: 'Netzmark - <img src="../admin/img/aldea_logo.jpg" class="marca-select"/>',
         id: 4
      },
      {
         value: '05',
         label: 'KúrameMX - <img src="../admin/img/aldea_logo.jpg" class="marca-select"/>',
         id: 5
      },
      {
         value: '06',
         label: 'Tribu Urbana - <img src="../admin/img/aldea_logo.jpg" class="marca-select"/>',
         id: 6
      },
   ]

   const valueSelected = [
      {
         value: '01',
         label: '<img src="../img/magenta.jpg" class="marca-select"/> MagentaTLX',
         id: 1,
         selected: true
      },
   ]

   var marcaSelectElement = $("#brandSelect");
   if (marcaSelectElement.length) {
      const marcaSelect = document.querySelector('#brandSelect');
      const marcaChoices = new Choices(marcaSelect, {
         choices: values,
         allowHTML: true,
         removeItemButton: true,
         placeholder: true,
         placeholderValue: 'Elige el emprendimiento...',
         loadingText: 'Cargando...',
         noResultsText: 'No se encontró la marca',
         noChoicesText: 'No hay opciones para elegir',
         itemSelectText: 'Enter',
      });
   }

   var marcaSelectElement = $("#brandSelectEdit");
   if (marcaSelectElement.length) {
      const marcaSelect = document.querySelector('#brandSelectEdit');
      const marcaChoices = new Choices(marcaSelect, {
         choices: valueSelected,
         allowHTML: true,
         removeItemButton: true,
         placeholder: true,
         placeholderValue: 'Elige su marca...',
         loadingText: 'Cargando...',
         noResultsText: 'No se encontró la marca',
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