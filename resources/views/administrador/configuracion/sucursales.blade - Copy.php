@php
$title = 'Marcas pendientes';
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
                  </div>

                  <div class="card mt-5">
                     <div class="card-header py-3 px-4 d-non">
                        <div class="row g-3 flex-between-center">
                           <div class="col-auto">
                              <h5 class="mb-0">My Files</h5>
                           </div>
                           <div class="col-auto d-flex"><a class="btn btn-phoenix-secondary btn-square me-2" href="../../apps/file-manager/grid-view.html" data-bs-toggle="tooltip" data-bs-title="Grid view"><span class="fa-solid fa-table-cells-large"></span></a><a class="border-primary text-primary btn btn-phoenix-secondary btn-square" href="../../apps/file-manager/list-view.html" data-bs-toggle="tooltip" data-bs-title="List view"><span class="fa-solid fa-list"></span></a>

                           </div>
                        </div>
                     </div>
                     <div class="card-body p-0">
                        <div class="table-responsive scrollbar-overlay mx-n1 px-1">
                           <table id="usuariosTable" class="table table-hover fs-9 mb-0 w-100 kollabi-table">
                              <thead class="bg-light">
                                 <tr>
                                    <th class="sort align-middle ps-3" scope="col" data-sort="name">NOMBRE</th>
                                    <th class="sort align-middle" scope="col" data-sort="fecha">MARCAS</th>
                                    <th class="sort align-middle" scope="col" data-sort="fecha">PRODUCTOS</th>
                                    <th class="sort align-middle" scope="col" data-sort="estatus">DISPONIBILIDAD</th>
                                    <th class="sort align-middle" scope="col" data-sort="estatus">ESTATUS</th>
                                    <th class="sort align-middle" scope="col" data-sort="fecha">FECHA DE REGISTRO</th>
                                 </tr>
                              </thead>
                              <tbody class="list" id="usuarios-table-body">
                                 <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                    <td class="name align-middle pe-5 ps-3">
                                       <p class="mb-0 text-body-emphasis fw-bold">Perpetua Zócalo</p>
                                       <div class="d-flex td-actions">
                                          <a href="#profile-offcanvas" data-bs-toggle="offcanvas">Ver</a>
                                          <span class="mx-2">|</span>
                                          <a href="{{url('admin/configuracion/centro-informacion/editar')}}">Editar</a>
                                          <span class="mx-2">|</span>
                                          <a href="javascript:void(0);" class="btn-delete">Eliminar</a>
                                       </div>
                                    </td>
                                    <td class="marcas align-middle ps-3">
                                       <p class="mb-0">25</p>
                                    </td>
                                    <td class="articulos align-middle ps-3">
                                       <p class="mb-0">250</p>
                                    </td>
                                    <td class="disponibilidad align-middle">
                                       <span class="badge text-bg-success fs-10">Abierto</span>
                                    </td>
                                    <td class="estatus align-middle">
                                       <span class="badge badge-phoenix fs-10 badge-phoenix-success">Activa</span>
                                    </td>
                                    <td class="registro align-middle">
                                       <p class="mb-0">30/05/2025 | 12:25 am</p>
                                    </td>
                                 </tr>
                                 <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                    <td class="name align-middle pe-5 ps-3">
                                       <p class="mb-0 text-body-emphasis fw-bold">Perpetua Home</p>
                                       <div class="d-flex td-actions">
                                          <a href="#profile-offcanvas" data-bs-toggle="offcanvas">Ver</a>
                                          <span class="mx-2">|</span>
                                          <a href="{{url('admin/configuracion/centro-informacion/editar')}}">Editar</a>
                                          <span class="mx-2">|</span>
                                          <a href="javascript:void(0);" class="btn-delete">Eliminar</a>
                                       </div>
                                    </td>
                                    <td class="marcas align-middle ps-3">
                                       <p class="mb-0">25</p>
                                    </td>
                                    <td class="articulos align-middle ps-3">
                                       <p class="mb-0">250</p>
                                    </td>
                                    <td class="disponibilidad align-middle">
                                       <span class="badge text-bg-success fs-10">Abierto</span>
                                    </td>
                                    <td class="estatus align-middle">
                                       <span class="badge badge-phoenix fs-10 badge-phoenix-success">Activa</span>
                                    </td>
                                    <td class="registro align-middle">
                                       <p class="mb-0">30/05/2025 | 12:25 am</p>
                                    </td>
                                 </tr>
                                 <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                    <td class="name align-middle pe-5 ps-3">
                                       <p class="mb-0 text-body-emphasis fw-bold">Perpetua Apizaco</p>
                                       <div class="d-flex td-actions">
                                          <a href="#profile-offcanvas" data-bs-toggle="offcanvas">Ver</a>
                                          <span class="mx-2">|</span>
                                          <a href="{{url('admin/configuracion/centro-informacion/editar')}}">Editar</a>
                                          <span class="mx-2">|</span>
                                          <a href="javascript:void(0);" class="btn-delete">Eliminar</a>
                                       </div>
                                    </td>
                                    <td class="marcas align-middle ps-3">
                                       <p class="mb-0">25</p>
                                    </td>
                                    <td class="articulos align-middle ps-3">
                                       <p class="mb-0">250</p>
                                    </td>
                                    <td class="disponibilidad align-middle">
                                       <span class="badge text-bg-secondary fs-10">Cerrado</span>
                                    </td>
                                    <td class="estatus align-middle">
                                       <span class="badge badge-phoenix fs-10 badge-phoenix-success">Activa</span>
                                    </td>
                                    <td class="registro align-middle">
                                       <p class="mb-0">30/05/2025 | 12:25 am</p>
                                    </td>
                                 </tr>

                              </tbody>
                           </table>
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