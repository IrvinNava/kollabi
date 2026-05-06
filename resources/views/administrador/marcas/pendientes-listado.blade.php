@php
$title = 'Marcas pendientes';
@endphp

@include('layout.administrador.header')

<body>

   <main class="main" id="top">

      @include('layout.administrador.sidebar')
      @include('layout.administrador.topbar')

      <div class="content">
         <!-- <nav class="mb-3" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
               <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Inicio</a></li>
               <li class="breadcrumb-item active">Marcas</li>
            </ol>
         </nav> -->
         <div class="mb-9">
            <div class="row g-2 mb-4">
               <div class="col-auto">
                  <h2 class="mb-0">Marcas pendientes de confirmación</h2>
               </div>
            </div>

            <div class="d-flex flex-wrap gap-2 my-3">
               <a href="{{url('admin/marcas')}}" class="btn btn-subtle-secondary border btn-sm">Activas (87)</a>
               <a href="{{url('admin/marcas/inactivas')}}" class="btn btn-subtle-secondary border btn-sm">Inactivas (26)</a>
               <a href="#" class="btn btn-primary border btn-sm pe-none">Pendientes (1)</a>
            </div>

            <div id="products" data-list='{"valueNames":["marca","responsable","fecha"],"page":10,"pagination":true}'>
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
                        <a class="btn btn-phoenix-primary px-3 me-1 text-body btn-list-style"
                           href="javascript:void(0);" data-bs-toggle="tooltip" id="listaCompacta"
                           data-bs-placement="top" data-bs-title="Lista compacta"><span class="fa-solid fa-list fs-10"></span>
                        </a>
                        <a class="btn btn-phoenix-primary px-3 me-1 text-body border-0 btn-list-style bg-gray-300"
                           href="javascript:void(0);" data-bs-toggle="tooltip" id="listaExtendida"
                           data-bs-placement="top" data-bs-title="Lista extendida"><span class="" data-feather="list"></span>
                        </a>
                     </div>
                  </div>

               </div>
               <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-body-emphasis border-top border-bottom border-translucent position-relative top-1">
                  <div class="table-responsive scrollbar-overlay mx-n1 px-1">
                     <table id="marcasTable" class="table table-hover fs-9 mb-0 w-100 kollabi-table">
                        <thead>
                           <tr>
                              <th class="sort align-middle py-3" scope="col" data-sort="marca">NOMBRE COMERCIAL</th>
                              <th class="sort align-middle py-3" scope="col" data-sort="responsable">RESPONSABLE</th>
                              <th class="sort align-middle py-3" scope="col" data-sort="fecha">FECHA DE INVITACIÓN</th>
                              <th class="sort align-middle py-3" scope="col" data-sort="last-order"></th>
                           </tr>
                        </thead>
                        <tbody class="list" id="marcas-table-body">

                           <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                              <td class="marca align-middle white-space-nowrap">
                                 <p class="mb-0 ms-2 text-body-emphasis fw-bold">Estilo Tierra</p>
                              </td>
                              <td class="responsable align-middle white-space-nowrap">
                                 <p class="mb-0">Tomás Herrera</p>
                                 <p class="mb-0 text-body-quaternary">241 420 9137</a>
                              </td>
                              <td class="fecha align-middle white-space-nowrap">
                                 <p class="mb-0 text-body-emphasis">15/08/2025</p>
                                 <p class="mb-0 text-body-quaternary">12:15 pm</a>
                              </td>
                              <td class="align-middle white-space-nowrap ps-4 btn-reveal-trigger">
                                 <div class="btn-reveal-trigger position-static dropstart">
                                    <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                    <div class="dropdown-menu dropdown-menu-end py-2">
                                       <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#detailModal">Ver</a>
                                       <div class="dropdown-divider"></div>
                                       <a class="dropdown-item text-danger btn-delete" href="avascript:void(0);">Eliminar invitación</a>
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

      <!-- Modal detalle -->
      <div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content rounded-4">
               <div class="modal-header">
                  <!-- <h3 class="modal-title" id="addUserModalLabel">Agregar rol</h3> -->

                  <div class="d-flex align-items-center" id="scrollspyForms">
                     <span class="fa-stack me-2 ms-n1">
                        <i class="fas fa-circle fa-stack-2x text-gray-200"></i>
                        <i class="fa-inverse fa-stack-1x text-gray-500" data-feather="user-check" style="height: 15px; width: 15px;" data-fa-transform="shrink-2"></i>
                        <!-- <i class="fa-inverse fa-stack-1x text-primary-subtle fas fa-file-alt" data-fa-transform="shrink-2"></i> -->
                     </span>
                     <div class="col">
                        <h5 class="mb-0 position-relative fw-bold"><span>Tomás Herrera</span></h5>
                        <p class="mb-0 fs-9 small">Dueñ@ de Estilo Tierra</p>
                     </div>
                  </div>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

               </div>
               <div class="modal-body py-0">
                  <div class="loading-shape"><span>Cargando...</span></div>
                  <div class="row">
                     <div class="col-md-7">
                        <div class="p-3">
                           <div class="row g-2">
                              <div class="col-12">
                                 <label class="form-label" for="brandInputEdit">Nombre de la marca</label>
                                 <input class="form-control form-control-sm" id="brandInputEdit" type="text" value="Estilo Tierra" />
                              </div>
                              <hr class="my-3 mb-0">
                              <div class="col-12">
                                 <label class="form-label" for="nameInputEdit">Nombre(s)</label>
                                 <input class="form-control form-control-sm" id="nameInputEdit" type="text" value="Elizabeth" />
                              </div>
                              <div class="col-md-6">
                                 <label class="form-label" for="firstLastNameInputEdit">Primer apellido</label>
                                 <input class="form-control form-control-sm" id="firstLastNameInputEdit" type="text" value="Hernández" />
                              </div>
                              <div class="col-md-6">
                                 <label class="form-label" for="secondLastNameInputEdit">Segundo apellido</label>
                                 <input class="form-control form-control-sm" id="secondLastNameInputEdit" type="text" value="Morales" />
                              </div>
                              <div class="col-md-8">
                                 <label class="form-label" for="emailInputEdit">Correo electrónico </label>
                                 <input class="form-control form-control-sm" id="emailInputEdit" type="text" value="cyberelizabeth@gmail.com" />
                              </div>
                              <div class="col-md-4">
                                 <label class="form-label" for="phoneInputEdit">WhatsApp</label>
                                 <input class="form-control form-control-sm" id="phoneInputEdit" type="text" placeholder="10 digitos" value="2414209137" />
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-5 bg-light border-start">
                        <div class="p-3">
                           <h5 class="mb-2">Datos de acceso</h5>
                           <p class="small mb-3">Estos datos de acceso podrán ser utilizados por la persona encargada de la nueva marca y así dar de alta su marca en {nombre colectivo}.</p>
                          
                           <div class="mb-2">
                              <label class="form-label" for="userInput">Usuario</label>
                              <input class="form-control form-control-sm" id="userInputEdit" type="text" value="cyberelizabeth@gmail.com" disabled />
                           </div>
                           <div class="mb-2">
                              <label class="form-label" for="passInput">Contraseña</label>
                              <input class="form-control form-control-sm" id="passInputEdit" type="text" value="#magenta2025#" />
                           </div>
                           <div class="mt-3">
                              <a href="javascript:void(0);" class="btn btn-primary btn-sm">Reenviar invitación</a>
                           </div>
                        </div>
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

   <script src="{{ asset('admin/js/marcas/pendidng-brands.js') }}"></script>

   <!-- <script>
      $(function() {
         $('#detailModal').modal('show')
      });
   </script> -->

</body>

</html>