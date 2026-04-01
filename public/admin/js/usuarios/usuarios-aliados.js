function copyToClipboard(idInput) {
   let texto = $(idInput).val();
   navigator.clipboard.writeText(texto)
      .then(function () {
         //
      })
      .catch(function (err) {
         console.error("Error al copiar: ", err);
      });
}

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

   $("#copyPass").on('click', function () {
      let pass = $("#passInputEdit");
      copyToClipboard(pass);
   });

   // Select de marca
   const values = [
      {
         value: '01',
         label: '<img src="../img/magenta.jpg" class="marca-select"/> MagentaTLX',
         id: 1
      },
      {
         value: '02',
         label: '<img src="../img/aldea_logo.jpg" class="marca-select"/> Luna Artesanal Tlaxcala',
         id: 2
      },
      {
         value: '03',
         label: '<img src="../img/aldea_logo.jpg" class="marca-select"/> VerdeMenta',
         id: 3
      },
      {
         value: '04',
         label: '<img src="../img/aldea_logo.jpg" class="marca-select"/> LunaArtesanal',
         id: 4
      },
      {
         value: '05',
         label: '<img src="../img/aldea_logo.jpg" class="marca-select"/> KúrameMX',
         id: 5
      },
      {
         value: '06',
         label: '<img src="../img/aldea_logo.jpg" class="marca-select"/> Tribu Urbana',
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
         placeholderValue: 'Elige su marca...',
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