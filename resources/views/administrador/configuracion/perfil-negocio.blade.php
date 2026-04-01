@php
$title = 'Perfil del negocio';
@endphp

@include('layout.administrador.header')

<body data-page="profile-page">

   <main class="main" id="top">

      @include('layout.administrador.sidebar')
      @include('layout.administrador.topbar')


      <div class="content px-0 pt-navbar">
         <div class="row g-0">

            <!-- Menú -->
            <div class="col-12 col-lg-3 px-0 border-end-xl border-top-sm d-none d-lg-block">
               <div class="bg-body-highlight dark__bg-gray-1100 h-100">
                  <div class="py-4 px-5 py-lg-5" style="height: 90vh;">
                     <div class="sticky-top" style="top: 96px;">
                        <div class="d-flex flex-between-center">
                           <h5 class="mb-2">Configuración</h5>
                           <button class="btn p-0 fs-8 d-lg-none" data-phoenix-dismiss="offcanvas"><span class="fa-solid fa-xmark" data-fa-transform="up-3"></span></button>
                        </div>

                        <div>
                           <a href="{{url('admin/configuracion/perfil-del-negocio')}}" class="d-flex align-items-center link-submenu py-2 active">
                              <i class="mb-1 me-2" data-feather="home" style="height: 15px; width: 15px;"></i>
                              <div class="lh-sm">
                                 <p class="mb-0 fs-9 fw-bold">General</p>
                                 <small>Define los datos públicos.</small>
                              </div>
                           </a>
                           <a href="{{url('admin/configuracion/apariencia')}}" class="d-flex align-items-center link-submenu py-2">
                              <i class="mb-1 me-2" data-feather="pen-tool" style="height: 15px; width: 15px;"></i>
                              <div class="lh-sm">
                                 <p class="mb-0 fs-9 fw-bold">Apriencia</p>
                                 <small>Personaliza tus colores y estilo.</small>
                              </div>
                           </a>
                           <a href="{{url('admin/configuracion/sucursales')}}" class="d-flex align-items-center link-submenu py-2">
                              <i class="mb-1 me-2" data-feather="map-pin" style="height: 15px; width: 15px;"></i>
                              <div class="lh-sm">
                                 <p class="mb-0 fs-9 fw-bold">Sucursales</p>
                                 <small>Administra direcciones y horarios.</small>
                              </div>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <!-- Content -->
            <div class="col-12 col-lg-9 px-0 bg-body">
               <div class="px-4 px-lg-5 py-5">

                  <nav class="mb-3" aria-label="breadcrumb">
                     <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item fw-semibold"><a href="{{url('admin/dashboard')}}"><img src="{{ asset('admin/img/brand/kollabi_icon.svg') }}" class="ms-1 mb-1" alt="Kollabi" width="18" /></a></li>
                        <li class="breadcrumb-item fw-semibold"><a href="{{url('admin/configuracion/perfil-del-negocio')}}">Perfil del negocio</a></li>
                        <li class="breadcrumb-item fw-normal active">Información</li>
                     </ol>
                  </nav>

                  <div class="d-flex flex-row flex-between-center mb-4">
                     <h2 class="mb-0">Perfil del negocio</h2>
                     <button class="btn btn-phoenix-secondary btn-square d-lg-none" data-phoenix-toggle="offcanvas" data-phoenix-target="#fileManagerSideBar"><span class="fa-solid fa-bars"></span></button>
                  </div>

                  <div class="row">
                     <div class="col-md-8">
                        <form class="row g-2">
                           <div class="col-12">
                              <label class="form-label" for="nameSpace">Nombre del colectivo</label>
                              <div class="form-icon-container">
                                 <input class="form-control ps-6" id="nameSpace" name="nameSpace" type="text">
                                 <span class="form-icon" data-feather="tag" style="height: 15px; width: 15px;"></span>
                              </div>
                           </div>
                           <div class="col-12">
                              <label class="form-label" for="description">Descripción breve</label>
                              <textarea class="form-control" name="description" id="description" rows="4"></textarea>
                           </div>
                           <div class="col-md-7">
                              <label class="form-label" for="mail">Correo</label>
                              <div class="form-icon-container">
                                 <input class="form-control ps-6" id="mail" name="mail" type="text">
                                 <span class="form-icon" data-feather="mail" style="height: 15px; width: 15px;"></span>
                              </div>
                           </div>
                           <div class="col-md-5">
                              <label class="form-label" for="phone">Teléfono</label>
                              <div class="form-icon-container">
                                 <input class="form-control ps-6" id="phone" name="phone" type="text">
                                 <span class="form-icon" data-feather="phone" style="height: 15px; width: 15px;"></span>
                              </div>
                           </div>

                           <hr class="mt-4 mb-2">

                           <div class="bg-secondary-subtle border border-translucent rounded-3 p-3">
                              <h4 class="mb-2">Enlace personalizado</h4>
                              <p class="fs-9 mb-">Este será tu enlace único dentro de Kollabi, podrás compartirlo con tus seguidores, clientes y aliados. Una vez guardado, no se podrá cambiar.</p>

                              <div>
                                 <div class="d-flex justify-content-between align-items-end mb-2">
                                    <div class="w-100">
                                       <div class="input-group">
                                          <span class="input-group-text" id="basic-addon1">https://kollabi.store/</span>
                                          <input class="form-control" type="text" id="url" name="url" value="aldea-home" />
                                       </div>
                                    </div>
                                    <a href="" target="_blank" class="btn btn-primary text-nowrap ms-2 d-none"><i class="fa-solid fa-arrow-up-right-from-square me-2 fs-10"></i>Visitar mi sitio</a>
                                    <a href="" class="btn btn-phoenix-secondary text-nowrap ms-2"><i class="fa-solid fa-magnifying-glass me-2 fs-9"></i>Verificar</a>
                                 </div>

                                 <p class="small mb-0">Usa solo letras, números y guiones medios (–). No se permiten espacios, acentos ni caracteres especiales.</p>

                                 <!-- Alerts -->

                                 <!-- <div class="alert alert-subtle-success d-flex align-items-center fs-9 p-2" role="alert">
                                 <span class="fas fa-check-circle text-success fs- me-2"></span>
                                 <p class="mb-0 flex-1">Excelente, está disponible!!</p>
                              </div>

                              <div class="alert alert-subtle-danger d-flex align-items-center fs-9 p-2" role="alert">
                                 <span class="fas fa-times-circle text-danger fs- me-2"></span>
                                 <p class="mb-0 flex-1">Oops! Esta opción ya está ocupada.</p>
                              </div> -->

                              </div>
                           </div>

                           <hr class="mt-4 mb-3">

                           <div class="col-12">
                              <h4 class="mb-2">Redes sociales</h4>
                              <p class="fs-9">Agrega los enlaces oficiales de tus perfiles para que los visitantes puedan encontrarte fácilmente</p>
                           </div>

                           <div class="mb-1">
                              <div class="input-group">
                                 <span class="input-group-text" style="min-width: 115px;" id="basic-addon1"><i class="fa-brands fa-instagram me-2"></i>Instagram</span>
                                 <input class="form-control" type="text" id="instagram" name="instagram" placeholder="https://" />
                              </div>
                           </div>

                           <div class="mb-1">
                              <div class="input-group">
                                 <span class="input-group-text" style="min-width: 115px;" id="basic-addon1"><i class="fa-brands fa-threads me-2"></i>Threads</span>
                                 <input class="form-control" type="text" id="threads" name="threads" placeholder="https://" />
                              </div>
                           </div>

                           <div class="mb-1">
                              <div class="input-group">
                                 <span class="input-group-text" style="min-width: 115px;" id="basic-addon1"><i class="fa-brands fa-tiktok me-2"></i>TikTok</span>
                                 <input class="form-control" type="text" id="tikTok" name="tikTok" placeholder="https://" />
                              </div>
                           </div>

                           <div class="mb-1">
                              <div class="input-group">
                                 <span class="input-group-text" style="min-width: 115px;" id="basic-addon1"><i class="fa-brands fa-facebook-f me-2"></i>Facebook</span>
                                 <input class="form-control" type="text" id="facebook" name="facebook" placeholder="https://" />
                              </div>
                           </div>

                           <div class="mb-1">
                              <div class="input-group">
                                 <span class="input-group-text" style="min-width: 115px;" id="basic-addon1"><i class="fa-brands fa-x-twitter me-2"></i>Twitter / X</span>
                                 <input class="form-control" type="text" id="twitter" name="twitter" placeholder="https://" />
                              </div>
                           </div>

                           <div class="mb-1">
                              <div class="input-group">
                                 <span class="input-group-text" style="min-width: 115px;" id="basic-addon1"><i class="fa-brands fa-linkedin-in mb-1 me-2"></i>LinkedIn</span>
                                 <input class="form-control" type="text" id="linkedIn" name="linkedIn" placeholder="https://" />
                              </div>
                           </div>

                           <div class="col-12 text-end">
                              <button class="btn btn-primary" type="submit" id="saveBtn">Guardar</button>
                           </div>
                        </form>
                     </div>
                  </div>



               </div>
            </div>



         </div>
         @include('layout.administrador.footer')
      </div>

   </main>

   @include('layout.administrador.assets')

   <script src="https://cdn.jsdelivr.net/npm/readmore-js@2.2.1/readmore.min.js"></script>

   <!-- Selects -->
   <link href="{{ asset('admin/vendors/choices/choices.min.css') }}" rel="stylesheet">
   <script src="{{ asset('admin/vendors/choices/choices.min.js') }}"></script>

   <link href="{{ asset('admin/vendors/flatpickr/flatpickr.min.css') }}" rel="stylesheet">
   <script src="{{ asset('admin/vendors/flatpickr/flatpickr.min.js') }}"></script>

   <script src="{{ asset('admin/js/marcas/brand-profile.js') }}"></script>

   <script>
      $(".add-hours-btn").click(function() {
         let list = $(this).data("list");
         $("#" + list).append('<div class="row justify-content-center align-items-center g-1 hours-item mb-1"> <div class="col-4"> <select class="form-select"><option value="" selected>09:00</option></select> </div> <div class="col-1 text-center"> <span>a</span> </div> <div class="col-4"> <select class="form-select"><option value="">18:00</option></select> </div> <div class="col"> <a href="javascript:void(0);" class="btn btn-sm btn-danger ms-2 remove-hours"><i class="fas fa-trash"></i></a> </div> </div>');
      });

      var body = $("body");
      body.on("click", ".remove-hours", function() {
         $(this).parents(".hours-item").remove();
      });
   </script>

</body>

</html>