@php
$title = 'Crear cuenta';
@endphp

@include('layout.administrador.header')

<body>

  <!-- ===============================================-->
  <!--    Main Content-->
  <!-- ===============================================-->
  <main class="main" id="top">
    <div class="row vh-100 g-0">
      <div class="col-lg-6 position-relative d-none d-lg-block">
        <div class="bg-holder" style="background-image:url({{ asset('admin/img/kollabi_cover.jpg') }});">
        </div>
        <!--/.bg-holder-->

      </div>
      <div class="col-lg-6">
        <div class="row flex-center h-100 g-0 px-4 px-sm-0">
          <div class="col col-sm-6 col-lg-7 col-xl-6">
            <div class="d-flex flex-center text-decoration-none mb-4">
              <div class="d-flex align-items-center fw-bolder fs-3 d-inline-block">
                <img src="{{ asset('admin/img/brand/kollabi_logo.png') }}" alt="Kollabi" width="250" />
              </div>
            </div>
            <div class="text-center mb-7">
              <h3 class="text-body-highlight">Crear cuenta</h3>
              <p class="text-body-tertiary">Cientos de show rooms, colectivos y concept stores adoran Kollabi</p>
            </div>
            <form>
              <div class="mb-3 text-start">
                <label class="form-label" for="name">Nombre</label>
                <input class="form-control" id="name" type="text" />
              </div>
              <div class="mb-3 text-start">
                <label class="form-label" for="email">Correo electrónico</label>
                <input class="form-control" id="email" type="email" />
              </div>
              <div class="row g-3 mb-3">
                <div class="col-sm-6">
                  <label class="form-label" for="password">Contraseña</label>
                  <div class="position-relative" data-password="data-password">
                    <input class="form-control form-icon-input pe-6" id="password" type="password" data-password-input="data-password-input" />
                    <button class="btn px-3 py-0 h-100 position-absolute top-0 end-0 fs-7 text-body-tertiary" data-password-toggle="data-password-toggle"><span class="uil uil-eye show"></span><span class="uil uil-eye-slash hide"></span></button>
                  </div>
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="confirmPassword">Confirma tu contraseña</label>
                  <div class="position-relative" data-password="data-password">
                    <input class="form-control form-icon-input pe-6" id="confirmPassword" type="password" data-password-input="data-password-input" />
                    <button class="btn px-3 py-0 h-100 position-absolute top-0 end-0 fs-7 text-body-tertiary" data-password-toggle="data-password-toggle"><span class="uil uil-eye show"></span><span class="uil uil-eye-slash hide"></span></button>
                  </div>
                </div>
              </div>
              <div class="form-check mb-3">
                <input class="form-check-input" id="termsService" type="checkbox" />
                <label class="form-label fs-9 text-transform-none" for="termsService">Acepto los <a href="#!">términos </a>y <a href="#!">políticas de privacidad</a></label>
              </div>
              <button class="btn btn-primary w-100 mb-3">Registrárme</button>
              <div class="text-center"><a class="fs-9 fw-bold" href="{{url('admin/login')}}">Iniciar sesión con una cuenta existente</a></div>
            </form>
          </div>
        </div>
      </div>
    </div>

  </main>

  @include('layout.administrador.assets')

</body>

</html>