@php
$title = 'Roles';
@endphp

@include('layout.administrador.header')

<body data-page="rols-page">

   <main class="main" id="top">

      @include('layout.administrador.sidebar')
      @include('layout.administrador.topbar')

      <div class="content">
         <!-- <nav class="mb-3" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
               <li class="breadcrumb-item"><a href="{{url('app/admin/dashboard')}}">Inicio</a></li>
               <li class="breadcrumb-item active">Marcas</li>
            </ol>
         </nav> -->
         <div class="mb-9">
            <div class="row g-2 mb-4">
               <div class="col-auto">
                  <h2 class="mb-0">Roles</h2>
               </div>
            </div>
            <div id="products" data-list='{"valueNames":["rol","permisos"],"page":10,"pagination":true}'>
               <div class="mb-4">
                  <div class="row g-3">
                     <div class="col-auto">
                        <div class="search-box">
                           <form class="position-relative">
                              <input class="form-control search-input search" type="search" placeholder="Buscar marcas..." aria-label="Search" />
                              <span class="fas fa-search search-box-icon"></span>

                           </form>
                        </div>
                     </div>
                     <div class="col-auto scrollbar overflow-hidden-y flex-grow-1">
                     </div>
                     <div class="col-auto">
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#agregarRolModal"><span class="fas fa-plus me-2"></span>Agregar rol</button>
                     </div>
                  </div>

               </div>
               <div class="mx-n4 px-4 mx-lg-n6 py-3 px-lg-6 bg-body-emphasis border-top border-bottom border-translucent position-relative top-1">
                  <div class="table-responsive scrollbar-overlay mx-n1 px-1">
                     <table id="rolesTable" class="table table-hover fs-9 mb-0 w-100">
                        <thead>
                           <tr>
                              <th class="sort align-middle py-3 pe-5" scope="col" data-sort="rol">ROL</th>
                              <th class="sort align-middle py-3 pe-5" scope="col" data-sort="permisos">PERMISOS</th>
                              <th class="sort align-middle py-3 text-end" scope="col" data-sort="last-order"></th>
                           </tr>
                        </thead>
                        <tbody class="list" id="roles-table-body">
                           <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                              <td><a href="#" data-bs-toggle="modal" data-bs-target="#editarPermisosModal" class="text-md mb-0 fw-medium flex-grow-1 ms-3 text-body-emphasis fw-bold">Administrador</a></td>
                              <td>
                                 <div class="d-flex">
                                    <span class="badge badge-tag me-2 mb-2">Marcas</span>
                                    <span class="badge badge-tag me-2 mb-2">Cortes</span>
                                    <span class="badge badge-tag me-2 mb-2">Ventas</span>
                                    <span class="badge badge-tag me-2 mb-2">Reportes</span>
                                    <span class="badge badge-tag me-2 mb-2">Ajustes y configuración</span>
                                    <span class="badge badge-tag me-2 mb-2">Accesos y usuarios</span>
                                 </div>
                              </td>
                              <td class="align-middle white-space-nowrap text-endps-4 btn-reveal-trigger">
                                 <div class="btn-reveal-trigger position-static">
                                    <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                    <div class="dropdown-menu dropdown-menu-end py-2">
                                       <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#editarPermisosModal">Editar</a>
                                       <div class="dropdown-divider"></div>
                                       <a class="dropdown-item text-danger" href="#!">Eliminar</a>
                                    </div>
                                 </div>
                              </td>
                           </tr>
                           <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                              <td><a href="#" data-bs-toggle="modal" data-bs-target="#editarPermisosModal" class="text-md mb-0 fw-medium flex-grow-1 ms-3 text-body-emphasis fw-bold">Encargado</a></td>
                              <td>
                                 <div class="d-flex">
                                    <span class="badge badge-tag me-2 mb-2">Marcas</span>
                                    <span class="badge badge-tag me-2 mb-2">Cortes</span>
                                    <span class="badge badge-tag me-2 mb-2">Ventas</span>
                                 </div>
                              </td>
                              <td class="align-middle white-space-nowrap text-endps-4 btn-reveal-trigger">
                                 <div class="btn-reveal-trigger position-static">
                                    <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                    <div class="dropdown-menu dropdown-menu-end py-2">
                                       <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#editarPermisosModal">Editar</a>
                                       <div class="dropdown-divider"></div>
                                       <a class="dropdown-item text-danger" href="#!">Eliminar</a>
                                    </div>
                                 </div>
                              </td>
                           </tr>
                           <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                              <td><a href="#" data-bs-toggle="modal" data-bs-target="#editarPermisosModal" class="text-md mb-0 fw-medium flex-grow-1 ms-3 text-body-emphasis fw-bold">Vendedor</a></td>
                              <td>
                                 <div class="d-flex">
                                    <span class="badge badge-tag me-2 mb-2">Marcas</span>
                                    <span class="badge badge-tag me-2 mb-2">Ventas</span>
                                 </div>
                              </td>
                              <td class="align-middle white-space-nowrap text-endps-4 btn-reveal-trigger">
                                 <div class="btn-reveal-trigger position-static">
                                    <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                    <div class="dropdown-menu dropdown-menu-end py-2">
                                       <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#editarPermisosModal">Editar</a>
                                       <div class="dropdown-divider"></div>
                                       <a class="dropdown-item text-danger" href="#!">Eliminar</a>
                                    </div>
                                 </div>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
                  <div class="row align-items-center justify-content-between py-2 pe-0 fs-9">
                     <div class="col-auto d-flex">
                        <p class="mb-0 d-none d-sm-block me-3 fw-semibold text-body" data-list-info="data-list-info"></p><a class="fw-semibold" href="#!" data-list-view="*">Ver todo<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a class="fw-semibold d-none" href="#!" data-list-view="less">Ver menos<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                     </div>
                     <div class="col-auto d-flex">
                        <button class="page-link" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                        <ul class="mb-0 pagination"></ul>
                        <button class="page-link pe-0" data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
                     </div>
                  </div>
               </div>
            </div>

         </div>

         @include('layout.administrador.footer')

      </div>

      <!-- Modal editar -->
      <div class="modal fade" id="agregarRolModal" tabindex="-1" aria-labelledby="agregarRolModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content rounded-4">
               <div class="modal-header">
                  <h3 class="modal-title" id="agregarRolModalLabel">Agregar rol</h3>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">

                  <div class="row">
                     <div class="col-md-4 border-end">
                        <div class="form-group mb-2 col">
                           <label for="nombreRol" class="form-label">Nombre del rol</label>
                           <input id="nombreRol" class="form-control r-0 light " type="text">
                        </div>
                        <div class="form-group mb-2 col">
                           <label for="descripcionRol" class="form-label">Descripción del rol</label>
                           <textarea class="form-control" rows="8" name="" id="descripcionRol"></textarea>
                        </div>
                     </div>
                     <div class="col-md-8">
                        <table class="table table-s">
                           <tbody>
                              <tr>
                                 <td>
                                    <div class="form-switch switch-primary d-flex align-items-center gap-3">
                                       <input class="form-check-input" type="checkbox" role="switch" id="switchMarcas">
                                       <label class="form-check-label line-height-1 fw-medium" for="switchMarcas">Marcas</label>
                                    </div>
                                 </td>
                                 <td>
                                    <p class="mb-0 lh-1"><small>Permite crear, editar y eliminar marcas.</small></p>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="form-switch switch-primary d-flex align-items-center gap-3">
                                       <input class="form-check-input" type="checkbox" role="switch" id="switchCortes">
                                       <label class="form-check-label line-height-1 fw-medium" for="switchCortes">Cortes</label>
                                    </div>
                                 </td>
                                 <td>
                                    <p class="mb-0 lh-1"><small>Acceso a la gestión del calendario de Cortes.</small></p>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="form-switch switch-primary d-flex align-items-center gap-3">
                                       <input class="form-check-input" type="checkbox" role="switch" id="switchVentas">
                                       <label class="form-check-label line-height-1 fw-medium" for="switchVentas">Ventas</label>
                                    </div>
                                 </td>
                                 <td>
                                    <p class="mb-0 lh-1"><small>Registro y visualización de las ventas del día.</small></p>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="form-switch switch-primary d-flex align-items-center gap-3">
                                       <input class="form-check-input" type="checkbox" role="switch" id="switchReportes">
                                       <label class="form-check-label line-height-1 fw-medium" for="switchReportes">Reportes</label>
                                    </div>
                                 </td>
                                 <td>
                                    <p class="mb-0 lh-1"><small>Permite crear, visualizar y expostar reportes de venta por periodo.</small></p>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="form-switch switch-primary d-flex align-items-center gap-3">
                                       <input class="form-check-input" type="checkbox" role="switch" id="switchAjustesConfiguracion">
                                       <label class="form-check-label line-height-1 fw-medium" for="switchAjustesConfiguracion">Ajustes y configuración</label>
                                    </div>
                                 </td>
                                 <td>
                                    <p class="mb-0 lh-1"><small>Acceso a la gestión de información del colectivo, sucursales, espacios físicos, categorías y contratos.</small></p>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="form-switch switch-primary d-flex align-items-center gap-3">
                                       <input class="form-check-input" type="checkbox" role="switch" id="switchAccesosUsuarios">
                                       <label class="form-check-label line-height-1 fw-medium" for="switchAccesosUsuarios">Accesos y usuarios</label>
                                    </div>
                                 </td>
                                 <td>
                                    <p class="mb-0 lh-1"><small>Acceso a la gestión de usuarios y roles de la plataforma.</small></p>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>

               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-inverse-light" data-bs-dismiss="modal">Cancelar</button>
                  <button type="button" class="btn btn-primary">Registrar</button>
               </div>
            </div>
         </div>
      </div>

      <!-- Modal editar -->
      <div class="modal fade" id="editarPermisosModal" tabindex="-1" aria-labelledby="editarPermisosModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content rounded-4">
               <div class="modal-header">
                  <h3 class="modal-title" id="editarPermisosModalLabel">Permisos para el rol Administrador</h3>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">

                  <div class="row">
                     <div class="col-md-4 border-end">
                        <div class="form-group mb-2 col">
                           <label for="editarNombreRol" class="form-label">Nombre del rol</label>
                           <input id="editarNombreRol" class="form-control r-0 light " type="text" value="Administrador">
                        </div>
                        <div class="form-group mb-2 col">
                           <label for="editarDescripcionRol" class="form-label">Descripción del rol</label>
                           <textarea class="form-control" rows="8" name="" id="editarDescripcionRol">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo qui minima consectetur. Suscipit deserunt recusandae sunt doloribus.</textarea>
                        </div>
                     </div>
                     <div class="col-md-8">
                         <table class="table table-s">
                           <tbody>
                              <tr>
                                 <td>
                                    <div class="form-switch switch-primary d-flex align-items-center gap-3">
                                       <input class="form-check-input" type="checkbox" role="switch" id="editarSwitchMarcas" checked>
                                       <label class="form-check-label line-height-1 fw-medium" for="editarSwitchMarcas">Marcas</label>
                                    </div>
                                 </td>
                                 <td>
                                    <p class="mb-0 lh-1"><small>Permite crear, editar y eliminar marcas.</small></p>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="form-switch switch-primary d-flex align-items-center gap-3">
                                       <input class="form-check-input" type="checkbox" role="switch" id="editarSwitchCortes" checked>
                                       <label class="form-check-label line-height-1 fw-medium" for="editarSwitchCortes">Cortes</label>
                                    </div>
                                 </td>
                                 <td>
                                    <p class="mb-0 lh-1"><small>Acceso a la gestión del calendario de Cortes.</small></p>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="form-switch switch-primary d-flex align-items-center gap-3">
                                       <input class="form-check-input" type="checkbox" role="switch" id="editarSwitchVentas" checked>
                                       <label class="form-check-label line-height-1 fw-medium" for="editarSwitchVentas">Ventas</label>
                                    </div>
                                 </td>
                                 <td>
                                    <p class="mb-0 lh-1"><small>Registro y visualización de las ventas del día.</small></p>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="form-switch switch-primary d-flex align-items-center gap-3">
                                       <input class="form-check-input" type="checkbox" role="switch" id="editarSwitchReportes" checked>
                                       <label class="form-check-label line-height-1 fw-medium" for="editarSwitchReportes">Reportes</label>
                                    </div>
                                 </td>
                                 <td>
                                    <p class="mb-0 lh-1"><small>Permite crear, visualizar y expostar reportes de venta por periodo.</small></p>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="form-switch switch-primary d-flex align-items-center gap-3">
                                       <input class="form-check-input" type="checkbox" role="switch" id="editarSwitchAjustesConfiguracion" checked>
                                       <label class="form-check-label line-height-1 fw-medium" for="editarSwitchAjustesConfiguracion">Ajustes y configuración</label>
                                    </div>
                                 </td>
                                 <td>
                                    <p class="mb-0 lh-1"><small>Acceso a la gestión de información del colectivo, sucursales, espacios físicos, categorías y contratos.</small></p>
                                 </td>
                              </tr>
                              <tr>
                                 <td>
                                    <div class="form-switch switch-primary d-flex align-items-center gap-3">
                                       <input class="form-check-input" type="checkbox" role="switch" id="editarSwitchAccesosUsuarios" checked>
                                       <label class="form-check-label line-height-1 fw-medium" for="editarSwitchAccesosUsuarios">Accesos y usuarios</label>
                                    </div>
                                 </td>
                                 <td>
                                    <p class="mb-0 lh-1"><small>Acceso a la gestión de usuarios y roles de la plataforma.</small></p>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>

               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-inverse-light" data-bs-dismiss="modal">Cancelar</button>
                  <button type="button" class="btn btn-primary">Actualizar</button>
               </div>
            </div>
         </div>
      </div>

   </main>

   @include('layout.administrador.assets')

   <!-- Selects -->
   <link href="{{ asset('vendors/choices/choices.min.css') }}" rel="stylesheet">
   <script src="{{ asset('vendors/choices/choices.min.js') }}"></script>

   <!-- Range -->
   <link href="{{ asset('vendors/nouislider/nouislider.min.css') }}" rel="stylesheet">
   <script src="{{ asset('vendors/nouislider/nouislider.min.js') }}"></script>

   <!-- Datepickers -->
   <link href="{{ asset('vendors/flatpickr/flatpickr.min.css') }}" rel="stylesheet">
   <script src="{{ asset('vendors/flatpickr/flatpickr.min.js') }}"></script>

</body>

</html>