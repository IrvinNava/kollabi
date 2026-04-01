@php
$title = 'Sesión finalizada';
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
            <div class="text-center mb-6 mx-auto">
              <img src="{{ asset('admin/img/brand/kollabi_logo.png') }}" alt="Kollabi" width="250" />
              <div class="my-6">
                <h4 class="text-body-highlight mb-3">Sesión finalizada. ¡Vuelve pronto!</h4>
                <p class="text-body-tertiary">Gracias por confiar en nosotros para gestionar tu colectivo. Estaremos aquí cuando lo necesites.</p>

                <!-- - Tu espacio sigue creciendo, y nosotros seguimos aquí para apoyarte en cada paso.
                -Tómate un respiro, tu showroom está en buenas manos.
                -Seguimos trabajando contigo para que tu colectivo sea cada día más fuerte.
                -Sabemos cuánto esfuerzo pones en tu espacio. Aquí estaremos cuando decidas volver.
                -Tu comunidad es parte de algo grande. ¡Gracias por construirlo con nosotros!
                -Tu colectivo avanza gracias a ti. Vuelve cuando estés listo para continuar.
                -Con cada acción, estás transformando tu espacio. Gracias por ser parte del cambio.
                -Tu dedicación mueve al colectivo. Aquí estaremos cuando regreses.
                -Tu impacto sigue creciendo. ¡Nos vemos pronto para seguir construyendo juntos! -->

              </div>
              <div class="d-grid mt-5 mb-3">
                <a class="btn btn-primary" href="{{url('admin/login')}}"><span class="fas fa-angle-left me-2"></span>Iniciar sesión</a>
              </div>

              <small>Gracias por usar Kollabi.</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  @include('layout.administrador.assets')

</body>

</html>