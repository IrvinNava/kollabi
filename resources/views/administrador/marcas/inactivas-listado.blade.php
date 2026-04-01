@php
$title = 'Marcas inactivas';
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
                  <h2 class="mb-0">Marcas dadas de baja</h2>
               </div>
            </div>
            <ul class="nav nav-links mb-3 mb-lg-2 mx-n3">
               <li class="nav-item"><a class="nav-link" aria-current="page" href="{{url('admin/marcas')}}"><span>Activas </span><span class="text-body-tertiary fw-semibold">(87)</span></a></li>
               <li class="nav-item"><a class="nav-link pe-none active" href="{{url('admin/marcas/inactivas')}}"><span>Inactivas </span><span class="text-body-tertiary fw-semibold">(26)</span></a></li>
                              <li class="nav-item"><a class="nav-link" href="{{url('admin/marcas/pendientes')}}"><span>Pendientes </span><span class="text-body-tertiary fw-semibold">(1)</span></a></li>
            </ul>
            <div id="products" data-list='{"valueNames":["marca","responsable","visita","fecha"],"page":10,"pagination":true}'>
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
                        <a class="btn btn-phoenix-primary px-3 me-1 text-body border-0 btn-list-style"
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
                              <th class="sort align-middle pe-5" scope="col" data-sort="marca">NOMBRE COMERCIAL</th>
                              <th class="sort align-middle pe-5" scope="col" data-sort="responsable">RESPONSABLE</th>
                              <th class="sort align-middle" scope="col" data-sort="visita">ÚLTIMA VISITA</th>
                              <th class="sort align-middle" scope="col" data-sort="fecha">FECHA DE BAJA</th>
                              <th class="sort align-middle" scope="col" data-sort="last-order"></th>
                           </tr>
                        </thead>
                        <tbody class="list" id="marcas-table-body">

                           <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                              <td class="marca align-middle white-space-nowrap pe-5">
                                 <a class="d-flex align-items-center text-body-emphasis" href="{{url('admin/marcas/marca-perfil')}}">
                                    <div class="avatar avatar-m">
                                       <img class="rounded-circle inactive-brand" src="{{ asset('admin/img/aldea_logo.jpg') }}" alt="" />
                                    </div>
                                    <p class="mb-0 ms-3 text-body-emphasis fw-bold">Flor de Cacto</p>
                                 </a>
                              </td>
                              <td class="responsable align-middle white-space-nowrap pe-5">
                                 <p class="mb-0">Luis Paredes</p>
                                 <a href="https://wa.me/+522414209137" target="_blank" class="mb-0 text-body-quaternary td-actions"><i class="fa-brands fa-whatsapp text-success me-1"></i>241 420 9137</a>
                              </td>
                              <td class="visita align-middle ps-3 projectprogress">
                                 <span class="badge badge-phoenix fs--2 badge-phoenix-secondary py-1"><span class="me-1" data-feather="archive" style="height:12px;width:12px;"></span>Entrega de mercancía</span>
                                 <p class="m-0 mt-1 text-body-quaternary fs--2">22/05/2024</p>
                              </td>
                              <td class="fecha align-middle white-space-nowrap">
                                    <p class="mb-0 text-body-emphasis">30/05/2024</p>
                                 <p class="mb-0 text-body-quaternary">12:15 pm</a>
                              </td>
                              <td class="align-middle white-space-nowrap ps-4 btn-reveal-trigger">
                                 <div class="btn-reveal-trigger position-static">
                                    <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                    <div class="dropdown-menu dropdown-menu-end py-2">
                                       <a class="dropdown-item" href="{{url('admin/marcas/marca-perfil')}}">Ver perfil</a>
                                       
                                       
                                       
                                       <div class="dropdown-divider"></div>
                                       <a class="dropdown-item text-success" href="#!">Restablecer</a>
                                    </div>
                                 </div>
                              </td>
                           </tr>

                           <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                              <td class="marca align-middle white-space-nowrap pe-5">
                                 <a class="d-flex align-items-center text-body-emphasis" href="{{url('admin/marcas/marca-perfil')}}">
                                    <div class="avatar avatar-m">
                                       <img class="rounded-circle inactive-brand" src="{{ asset('admin/img/aldea_logo.jpg') }}" alt="" />
                                    </div>
                                    <p class="mb-0 ms-3 text-body-emphasis fw-bold">Ámbar Co.</p>
                                 </a>
                              </td>
                              <td class="responsable align-middle white-space-nowrap pe-5">
                                 <p class="mb-0">Gabriela Méndez</p>
                                 <a href="https://wa.me/+522414209137" target="_blank" class="mb-0 text-body-quaternary td-actions"><i class="fa-brands fa-whatsapp text-success me-1"></i>241 420 9137</a>
                              </td>
                              <td class="visita align-middle ps-3 projectprogress">
                                 <span class="badge badge-phoenix fs--2 badge-phoenix-secondary py-1"><span class="me-1" data-feather="archive" style="height:12px;width:12px;"></span>Entrega de mercancía</span>
                                 <p class="m-0 mt-1 text-body-quaternary fs--2">22/05/2024</p>
                              </td>
                              <td class="fecha align-middle white-space-nowrap">
                                    <p class="mb-0 text-body-emphasis">30/05/2024</p>
                                 <p class="mb-0 text-body-quaternary">12:15 pm</a>
                              </td>
                              <td class="align-middle white-space-nowrap ps-4 btn-reveal-trigger">
                                 <div class="btn-reveal-trigger position-static">
                                    <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                    <div class="dropdown-menu dropdown-menu-end py-2">
                                       <a class="dropdown-item" href="{{url('admin/marcas/marca-perfil')}}">Ver perfil</a>
                                       
                                       
                                       
                                       <div class="dropdown-divider"></div>
                                       <a class="dropdown-item text-success" href="#!">Restablecer</a>
                                    </div>
                                 </div>
                              </td>
                           </tr>

                           <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                              <td class="marca align-middle white-space-nowrap pe-5">
                                 <a class="d-flex align-items-center text-body-emphasis" href="{{url('admin/marcas/marca-perfil')}}">
                                    <div class="avatar avatar-m">
                                       <img class="rounded-circle inactive-brand" src="{{ asset('admin/img/aldea_logo.jpg') }}" alt="" />
                                    </div>
                                    <p class="mb-0 ms-3 text-body-emphasis fw-bold">Nube Norte</p>
                                 </a>
                              </td>
                              <td class="responsable align-middle white-space-nowrap pe-5">
                                 <p class="mb-0">Iván López</p>
                                 <a href="https://wa.me/+522414209137" target="_blank" class="mb-0 text-body-quaternary td-actions"><i class="fa-brands fa-telegram text-info me-1"></i>241 420 9137</a>
                              </td>
                              <td class="visita align-middle ps-3 projectprogress">
                                 <span class="badge badge-phoenix fs--2 badge-phoenix-secondary py-1"><span class="me-1" data-feather="archive" style="height:12px;width:12px;"></span>Entrega de mercancía</span>
                                 <p class="m-0 mt-1 text-body-quaternary fs--2">22/05/2024</p>
                              </td>
                              <td class="fecha align-middle white-space-nowrap">
                                    <p class="mb-0 text-body-emphasis">30/05/2024</p>
                                 <p class="mb-0 text-body-quaternary">12:15 pm</a>
                              </td>
                              <td class="align-middle white-space-nowrap ps-4 btn-reveal-trigger">
                                 <div class="btn-reveal-trigger position-static">
                                    <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                    <div class="dropdown-menu dropdown-menu-end py-2">
                                       <a class="dropdown-item" href="{{url('admin/marcas/marca-perfil')}}">Ver perfil</a>
                                       
                                       
                                       
                                       <div class="dropdown-divider"></div>
                                       <a class="dropdown-item text-success" href="#!">Restablecer</a>
                                    </div>
                                 </div>
                              </td>
                           </tr>

                           <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                              <td class="marca align-middle white-space-nowrap pe-5">
                                 <a class="d-flex align-items-center text-body-emphasis" href="{{url('admin/marcas/marca-perfil')}}">
                                    <div class="avatar avatar-m">
                                       <img class="rounded-circle inactive-brand" src="{{ asset('admin/img/aldea_logo.jpg') }}" alt="" />
                                    </div>
                                    <p class="mb-0 ms-3 text-body-emphasis fw-bold">Barro&Tela</p>
                                 </a>
                              </td>
                              <td class="responsable align-middle white-space-nowrap pe-5">
                                 <p class="mb-0">Renata Cruz</p>
                                 <a href="https://wa.me/+522414209137" target="_blank" class="mb-0 text-body-quaternary td-actions"><i class="fa-brands fa-whatsapp text-success me-1"></i>241 420 9137</a>
                              </td>
                              <td class="visita align-middle ps-3 projectprogress">
                                 <span class="badge badge-phoenix fs--2 badge-phoenix-secondary py-1"><span class="me-1" data-feather="archive" style="height:12px;width:12px;"></span>Entrega de mercancía</span>
                                 <p class="m-0 mt-1 text-body-quaternary fs--2">22/05/2024</p>
                              </td>
                              <td class="fecha align-middle white-space-nowrap">
                                    <p class="mb-0 text-body-emphasis">30/05/2024</p>
                                 <p class="mb-0 text-body-quaternary">12:15 pm</a>
                              </td>
                              <td class="align-middle white-space-nowrap ps-4 btn-reveal-trigger">
                                 <div class="btn-reveal-trigger position-static">
                                    <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                    <div class="dropdown-menu dropdown-menu-end py-2">
                                       <a class="dropdown-item" href="{{url('admin/marcas/marca-perfil')}}">Ver perfil</a>
                                       
                                       
                                       
                                       <div class="dropdown-divider"></div>
                                       <a class="dropdown-item text-success" href="#!">Restablecer</a>
                                    </div>
                                 </div>
                              </td>
                           </tr>

                           <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                              <td class="marca align-middle white-space-nowrap pe-5">
                                 <a class="d-flex align-items-center text-body-emphasis" href="{{url('admin/marcas/marca-perfil')}}">
                                    <div class="avatar avatar-m">
                                       <img class="rounded-circle inactive-brand" src="{{ asset('admin/img/aldea_logo.jpg') }}" alt="" />
                                    </div>
                                    <p class="mb-0 ms-3 text-body-emphasis fw-bold">Estilo Tierra</p>
                                 </a>
                              </td>
                              <td class="responsable align-middle white-space-nowrap pe-5">
                                 <p class="mb-0">Tomás Herrera</p>
                                 <a href="https://wa.me/+522414209137" target="_blank" class="mb-0 text-body-quaternary td-actions"><i class="fa-brands fa-whatsapp text-success me-1"></i>241 420 9137</a>
                              </td>
                              <td class="visita align-middle ps-3 projectprogress">
                                 <span class="badge badge-phoenix fs--2 badge-phoenix-secondary py-1"><span class="me-1" data-feather="archive" style="height:12px;width:12px;"></span>Entrega de mercancía</span>
                                 <p class="m-0 mt-1 text-body-quaternary fs--2">22/05/2024</p>
                              </td>
                              <td class="fecha align-middle white-space-nowrap">
                                    <p class="mb-0 text-body-emphasis">30/05/2024</p>
                                 <p class="mb-0 text-body-quaternary">12:15 pm</a>
                              </td>
                              <td class="align-middle white-space-nowrap ps-4 btn-reveal-trigger">
                                 <div class="btn-reveal-trigger position-static">
                                    <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                    <div class="dropdown-menu dropdown-menu-end py-2">
                                       <a class="dropdown-item" href="{{url('admin/marcas/marca-perfil')}}">Ver perfil</a>
                                       
                                       
                                       
                                       <div class="dropdown-divider"></div>
                                       <a class="dropdown-item text-success" href="#!">Restablecer</a>
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



   </main>

   @include('layout.administrador.assets')

   <!-- Selects -->
   <link href="{{ asset('admin/vendors/choices/choices.min.css') }}" rel="stylesheet">
   <script src="{{ asset('admin/vendors/choices/choices.min.js') }}"></script>

   <!-- Range -->
   <link href="{{ asset('admin/vendors/nouislider/nouislider.min.css') }}" rel="stylesheet">
   <script src="{{ asset('admin/vendors/nouislider/nouislider.min.js') }}"></script>

   <!-- Datepickers -->
   <link href="{{ asset('admin/vendors/flatpickr/flatpickr.min.css') }}" rel="stylesheet">
   <script src="{{ asset('admin/vendors/flatpickr/flatpickr.min.js') }}"></script>

</body>

</html>