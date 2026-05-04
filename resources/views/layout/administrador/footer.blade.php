<footer class="footer position-absolute">
   <div class="row g-0 justify-content-between align-items-center h-100">
      <div class="col-12 col-sm-auto text-center">
         <p class="mb-0 mt-2 mt-sm-0 text-body fs-9 fw-semibold">
            Gracias por utilizar
            <img src="{{ asset('admin/img/brand/kollabi_logo.svg') }}" class="ms-1" alt="Kollabi" width="70" />
            <span class="d-none d-sm-inline-block mx-1">|</span>
            <a class="mx-1 text-primary" href="https://kollabi.store">Kollabi</a> &copy; 2025
         </p>
      </div>
      <div class="col-12 col-sm-auto text-center">
         <p class="mb-0 text-body-tertiary text-opacity-85 fs-9">v1.23.0</p>
      </div>
   </div>
</footer>

<script>
   var navbarTopStyle = window.config.config.phoenixNavbarTopStyle;
   var navbarTop = document.querySelector('.navbar-top');
   if (navbarTopStyle === 'darker') {
      navbarTop.setAttribute('data-navbar-appearance', 'darker');
   }

   var navbarVerticalStyle = window.config.config.phoenixNavbarVerticalStyle;
   var navbarVertical = document.querySelector('.navbar-vertical');
   if (navbarVertical && navbarVerticalStyle === 'darker') {
      navbarVertical.setAttribute('data-navbar-appearance', 'darker');
   }
</script>

<!-- Offcanvas personalización -->
<div class="offcanvas offcanvas-end" data-bs-scroll="false" data-bs-backdrop="true" tabindex="-1" id="settings-offcanvas" aria-labelledby="settings-offcanvasLabel">

   <div class="offcanvas-header align-items-start border-bottom flex-column border-translucent">
      <div class="pt-1 w-100 d-flex justify-content-between align-items-start">
         <div class="d-flex align-items-center" id="scrollspyForms">
            <span class="fa-stack me-2 ms-n1">
               <i class="fas fa-circle fa-stack-2x text-gray-200"></i>
               <span class="fas fa-palette fs-8 fa-stack-1x text-gray-800"></span>
               <!-- <i class="fa-inverse fa-stack-1x text-primary-subtle fas fa-file-alt" data-fa-transform="shrink-2"></i> -->
            </span>
            <div class="col">
               <h5 class="mb-0 position-relative fw-bold"><span>Tema de la interfaz.</span></h5>
               <p class="mb-0 fs-9 small">Personaliza la apariencia de tu aplicación.</p>
            </div>
         </div>
         <button class="btn p-1 fw-bolder" type="button" data-bs-dismiss="offcanvas" aria-label="Close"><span class="fas fa-times fs-8"> </span></button>
      </div>
   </div>
   <div class="offcanvas-body" id="themeController">
      <div class="setting-panel-item border-0 p-3 mt-0">
         <h5 class="setting-panel-item-title">Color de la interfaz</h5>
         <p class="fs-9">Elige entre modo claro, oscuro o automático según la configuración de tu dispositivo.</p>
         <div class="row gx-2">
            <div class="col-4">
               <input class="btn-check" id="themeSwitcherLight" name="theme-color" type="radio" value="light" data-theme-control="phoenixTheme" />
               <label class="btn d-inline-block btn-navbar-style fs-9 mb-0" for="themeSwitcherLight"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="{{ asset('admin/img/static/default-light.png') }}" alt="" /></span><span class="label-text">Light</span></label>
            </div>
            <div class="col-4">
               <input class="btn-check" id="themeSwitcherDark" name="theme-color" type="radio" value="dark" data-theme-control="phoenixTheme" />
               <label class="btn d-inline-block btn-navbar-style fs-9 mb-0" for="themeSwitcherDark"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="{{ asset('admin/img/static/default-dark.png') }}" alt="" /></span><span class="label-text"> Dark</span></label>
            </div>
            <div class="col-4">
               <input class="btn-check" id="themeSwitcherAuto" name="theme-color" type="radio" value="auto" data-theme-control="phoenixTheme" />
               <label class="btn d-inline-block btn-navbar-style fs-9 mb-0" for="themeSwitcherAuto"> <span class="mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="{{ asset('admin/img/static/auto.png') }}" alt="" /></span><span class="label-text"> Auto</span></label>
            </div>
         </div>
      </div>
      <div class="setting-panel-item p-3 border-0">
         <h5 class="setting-panel-item-title">Barra de navegación</h5>
         <p class="fs-9">Elige el estilo de tu barra lateral. El color que se aplicará puede personalizarse desde la sección de <a href="{{url('admin/configuracion/apariencia')}}">Apariencia<span class="ms-1 mb-1" data-feather="external-link" style="height: 11px; width: 11px;"></span></a>, para que refleje la identidad de tu marca.</p>
         <div class="row gx-2">
            <div class="col-6">
               <input class="btn-check" id="navbar-style-default" type="radio" name="config.name" value="default" data-theme-control="phoenixNavbarVerticalStyle" />
               <label class="btn d-block w-100 btn-navbar-style fs-9 mb-0" for="navbar-style-default">
                  <img class="img-fluid img-prototype d-dark-none" src="{{ asset('admin/img/static/default-light.png') }}" alt="" />
                  <img class="img-fluid img-prototype d-light-none" src="{{ asset('admin/img/static/default-dark.png') }}" alt="" />
                  <span class="label-text d-dark-none"> Default</span><span class="label-text d-light-none">Default</span>
               </label>
            </div>
            <div class="col-6">
               <input class="btn-check" id="navbar-style-dark" type="radio" name="config.name" value="darker" data-theme-control="phoenixNavbarVerticalStyle" />
               <label class="btn d-block w-100 btn-navbar-style fs-9 mb-0" for="navbar-style-dark"> <img class="img-fluid img-prototype d-dark-none" src="{{ asset('admin/img/static/vertical-darker.png') }}" alt="" /><img class="img-fluid img-prototype d-light-none" src="{{ asset('admin/img/static/vertical-lighter.png') }}" alt="" /><span class="label-text d-dark-none"> Darker</span><span class="label-text d-light-none">Lighter</span></label>
            </div>
         </div>
      </div>

      <button class="btn btn-phoenix-secondary w-100 mt-3" data-theme-control="reset"><span class="fas fa-arrows-rotate me-2 fs-10"></span>Restablecer valores predeterminados</button>
   </div>

</div>