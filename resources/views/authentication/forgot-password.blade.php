@php
$title = 'Recuperar cuenta';
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
            <div class="text-center">
              <h4 class="text-body-highlight mb-3">¿Olvidaste tu contraseña?</h4>
              <p class="text-body-tertiary mb-5">Introduce tu correo electrónico y te enviaremos a <br class="d-xxl-none" />un enlace para restablecer la contraseña.</p>
              <form class="d-flex align-items-center mb-5">
                <input class="form-control flex-1" id="email" type="email" placeholder="Correo electrónico" />
                <a class="btn btn-primary ms-2" href="{{url('resetear-contrasena')}}">Enviar<span class="fas fa-chevron-right ms-2"></span></a>
              </form><a class="fs-9 fw-bold" href="{{url('login')}}">Recuerdo mi contraseña</a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </main>

  @include('layout.administrador.assets')

</body>

</html>