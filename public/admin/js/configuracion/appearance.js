$(function () {

   const $hexInput = $('#hexInput');
   const $rgbInput = $('#rgbInput');

   const pickr = Pickr.create({
      el: '#color-picker',
      theme: 'classic',
      default: '#f29678',
      swatches: [
         '#F44336', '#E91E63', '#9C27B0', '#2196F3',
         '#4CAF50', '#FFEB3B', '#FF9800', '#f29678',
         '#b06fac', '#868686'
      ],
      components: {
         preview: true,
         opacity: false,
         hue: true,
         interaction: {
            hex: true,
            rgba: true,
            input: true,
            save: true,
            clear: false,
         }
      },
      i18n: {
         'ui:dialog': 'Selector de color',
         'btn:toggle': 'Alternar color picker',
         'btn:swatch': 'Muestra de color',
         'btn:last-color': 'Usar último color',
         'btn:save': 'Aceptar',
         'btn:cancel': 'Cancelar',
         'btn:clear': 'Limpiar'
      }
   });

   // 👉 función simple para inyectar reglas con !important
   function applyPrimary(hex) {
      let tag = document.getElementById('dynamic-primary');
      if (!tag) {
         tag = document.createElement('style');
         tag.id = 'dynamic-primary';
         document.head.appendChild(tag);
      }
      tag.textContent = `
         .bg-primary { background-color: ${hex} !important; }
         .text-primary { color: ${hex} !important; }
         .border-primary { border-color: ${hex} !important; }
         .btn-primary { background-color: ${hex} !important; border-color: ${hex} !important; }
         
      `;
   }

   // Sincronizar con inputs
   pickr.on('change', (color) => {
      console.log("appearance");
      
      const hex = color.toHEXA().toString(0);
      const rgb = color.toRGBA().toString(0);

      $hexInput.val(hex);
      $rgbInput.val(rgb);

      applyPrimary(hex); // ahora todo va con !important

      let themeHtml = $("html").attr("data-bs-theme");

      if (themeHtml === "light") {
         $(".navbar-vertical").attr("data-navbar-appearance", "darker");
         $(".navbar-vertical").css("background-color", hex);
         $(".navbar-vertical-footer").css("background-color", hex);
      }

      if (themeHtml === "dark") {
         $('.nav-link.active').css('color', hex);
      }
   });

   // Cambiar color al escribir en inputs
   document.getElementById('hexInput').addEventListener('input', (e) => {
      pickr.setColor(e.target.value);
      applyPrimary(e.target.value);
   });

   document.getElementById('rgbInput').addEventListener('input', (e) => {
      pickr.setColor(e.target.value);
      // optional: puedes parsear RGB -> HEX y aplicar también aquí
   });
});
