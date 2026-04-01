@php
$title = 'Sucursales';
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
                  <div class="p-4 py-lg-5" style="height: 90vh;">
                     <div class="sticky-top" style="top: 96px;">
                        <div class="d-flex flex-between-center">
                           <h5 class="mb-2">Configuración</h5>
                           <button class="btn p-0 fs-8 d-lg-none" data-phoenix-dismiss="offcanvas"><span class="fa-solid fa-xmark" data-fa-transform="up-3"></span></button>
                        </div>

                        <div>
                           <a href="{{url('admin/configuracion/perfil-del-negocio')}}" class="d-flex align-items-center link-submenu py-2">
                              <i class="mb-1 me-2" data-feather="home" style="height: 15px; width: 15px;"></i>
                              <div class="lh-sm">
                                 <p class="mb-0 fs-9 fw-bold">General</p>
                                 <small>Define los datos públicos de tu espacio</small>
                              </div>
                           </a>
                           <a href="{{url('admin/configuracion/apariencia')}}" class="d-flex align-items-center link-submenu py-2">
                              <i class="mb-1 me-2" data-feather="pen-tool" style="height: 15px; width: 15px;"></i>
                              <div class="lh-sm">
                                 <p class="mb-0 fs-9 fw-bold">Apriencia</p>
                                 <small>Personaliza tus colores y estilo</small>
                              </div>
                           </a>
                           <a href="{{url('admin/configuracion/sucursales')}}" class="d-flex align-items-center link-submenu active py-2">
                              <i class="mb-1 me-2" data-feather="map-pin" style="height: 15px; width: 15px;"></i>
                              <div class="lh-sm">
                                 <p class="mb-0 fs-9 fw-bold">Sucursales</p>
                                 <small>Administra direcciones y horarios</small>
                              </div>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <!-- Content -->
            <div class="col-12 col-lg-9 px-0 bg-body">
               <div class="px-4 px-lg-4 py-5">

                  <nav class="mb-3" aria-label="breadcrumb">
                     <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item fw-semibold"><a href="{{url('admin/dashboard')}}"><img src="{{ asset('admin/img/brand/kollabi_icon.svg') }}" class="ms-1 mb-1" alt="Kollabi" width="18" /></a></li>
                        <li class="breadcrumb-item fw-semibold"><a href="{{url('admin/configuracion/perfil-del-negocio')}}">Perfil del negocio</a></li>
                        <li class="breadcrumb-item fw-normal active">Sucursales</li>
                     </ol>
                  </nav>

                  <div class="d-flex flex-row flex-between-center">
                     <h2 class="mb-0">Sucursales</h2>
                     <button class="btn btn-phoenix-secondary btn-square d-lg-none" data-phoenix-toggle="offcanvas" data-phoenix-target="#fileManagerSideBar"><span class="fa-solid fa-bars"></span></button>
                     <a href="{{url('admin/configuracion/sucursales/nueva')}}" class="btn btn-primary"><span class="fas fa-plus me-2"></span>Agregar sucursal</a>
                  </div>

                  <div class="mt-3">

                     <div class="card card-body element-item fs-9 mb-3">
                        <div class="row g-0">
                           <div class="col-2 col-md-1">
                              <div class="d-flex justify-content-center align-items-start align-items-md-center h-100">
                                 <div class="bg-body-highlight rounded-3 py-3 px-3">
                                    <i class="fas fa-store text-body-quaternary fa-2x"></i>
                                 </div>
                              </div>
                           </div>
                           <div class="col-10 col-md-7">
                              <div class="d-flex align-items-center ms-3">
                                 <h4 class="mb-0 me-2">Perpetua Zócalo</h4>
                                 <span class="badge badge-phoenix fs-10 badge-phoenix-success">Activa</span>
                              </div>
                              <p class="mb-0 text-body ms-3 mt-2 mb-2"><span class="mb-1 me-1" data-feather="map-pin" style="height: 12px; width: 12px;"></span>Emiliano Zapata #30, Col. Centro, 90300, Tlaxcala, Tlaxcala</p>
                              <div class="d-flex td-actions ms-3">
                                 <a href="#profile-offcanvas" data-bs-toggle="offcanvas">Ver</a>
                                 <span class="mx-2">|</span>
                                 <a href="{{url('admin/configuracion/sucursales/editar')}}">Editar</a>
                                 <span class="mx-2">|</span>
                                 <a href="javascript:void(0);" class="btn-delete disabled">Eliminar</a>
                              </div>
                           </div>
                           <div class="col-md-4 text-end">
                              <span class="badge text-bg-success fs-9">Abierto</span>
                              <p class="mt-2"><span class="mb-1 me-1" data-feather="shopping-bag" style="height: 12px; width: 12px;"></span>25 Marcas y 250 artículos</p>
                           </div>
                        </div>
                     </div>

                     <div class="card card-body element-item fs-9 mb-3">
                        <div class="row g-0">
                           <div class="col-2 col-md-1">
                              <div class="d-flex justify-content-center align-items-start align-items-md-center h-100">
                                 <div class="bg-body-highlight rounded-3 py-3 px-3">
                                    <i class="fas fa-store text-body-quaternary fa-2x"></i>
                                 </div>
                              </div>
                           </div>
                           <div class="col-10 col-md-7">
                              <div class="d-flex align-items-center ms-3">
                                 <h4 class="mb-0 me-2">Perpetua Apizaco</h4>
                                 <span class="badge badge-phoenix fs-10 badge-phoenix-success">Activa</span>
                              </div>
                              <p class="mb-0 text-body ms-3 mt-2 mb-2"><span class="mb-1 me-1" data-feather="map-pin" style="height: 12px; width: 12px;"></span>Av. Insurgentes #303, Col. Centro, 90300, Apizaco, Tlaxcala</p>
                              <div class="d-flex td-actions ms-3">
                                 <a href="#profile-offcanvas" data-bs-toggle="offcanvas">Ver</a>
                                 <span class="mx-2">|</span>
                                 <a href="{{url('admin/configuracion/sucursales/editar')}}">Editar</a>
                                 <span class="mx-2">|</span>
                                 <a href="javascript:void(0);" class="btn-delete">Eliminar</a>
                              </div>
                           </div>
                           <div class="col-md-4 text-end">
                              <span class="badge text-bg-secondary fs-9">Cerrado</span>
                              <p class="mt-2"><span class="mb-1 me-1" data-feather="shopping-bag" style="height: 12px; width: 12px;"></span>25 Marcas y 250 artículos</p>
                           </div>
                        </div>
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

</body>

</html>