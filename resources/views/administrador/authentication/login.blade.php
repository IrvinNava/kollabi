@php
$title = 'Iniciar sesión';
@endphp

@include('layout.administrador.header')

<body>

  <!-- ===============================================-->
  <!--    Main Content-->
  <!-- ===============================================-->
  <main class="main" id="top">
    <div class="row vh-100 g-0">
      <div class="col-lg-6 position-relative d-none d-lg-block">
        <div class="bg-holder" style="background-image: url({{ asset('admin/img/kollabi_cover.jpg') }});">
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
            <div class="text-center mb-5">
              <h3 class="text-body-highlight mb-3">Gestiona tu espacio de la manera más inteligente.</h3>
              <p class="text-body-tertiary">Para comenzar, inicia sesión.</p>
            </div>

            <div class="mb-3 text-start">
              <label class="form-label" for="email">Usuario</label>
              <div class="form-icon-container">
                <input class="form-control form-icon-input" id="email" type="email" /><span class="fas fa-user text-body fs-9 form-icon"></span>
              </div>
            </div>
            <div class="mb-3 text-start">
              <label class="form-label" for="password">Contraseña</label>
              <div class="form-icon-container" data-password="data-password">
                <input class="form-control form-icon-input pe-6" id="password" type="password" data-password-input="data-password-input" /><span class="fas fa-key text-body fs-9 form-icon"></span>
                <button class="btn px-3 py-0 h-100 position-absolute top-0 end-0 fs-7 text-body-tertiary" data-password-toggle="data-password-toggle"><span class="uil uil-eye show"></span><span class="uil uil-eye-slash hide"></span></button>
              </div>
            </div>
            <div class="row flex-between-center mb-7">
              <div class="col-auto"><a class="fs-9 fw-semibold" href="{{url('admin/recuperar-cuenta')}}">Olvidé mi contraseña</a></div>
              <div class="col-auto"></div>
            </div>
            <a href="{{url('admin/dashboard')}}" class="btn btn-primary w-100 mb-3">Continuar</a>
            <div class="text-center"><a class="fs-9 fw-bold" href="{{url('admin/crear-cuenta')}}">Crear cuenta</a></div>
          </div>
        </div>
      </div>
    </div>

  </main>

  @include('layout.administrador.assets')

</body>

</html>