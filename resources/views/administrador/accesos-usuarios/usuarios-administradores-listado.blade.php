@php
$title = 'Usuarios';
@endphp

@include('layout.administrador.header')

<body data-page="users-page">

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
                  <h2 class="mb-0">Usuarios <small>(Administradores)</small></h2>
               </div>
            </div>
            <ul class="nav nav-links mb-3 mb-lg-2 mx-n3">
               <li class="nav-item"><a class="nav-link pe-none active" aria-current="page" href="#"><span>Administradores </span><span class="text-body-tertiary fw-semibold">(5)</span></a></li>
               <li class="nav-item"><a class="nav-link" href="{{url('app/admin/usuarios/aliados')}}"><span>Aliados </span><span class="text-body-tertiary fw-semibold">(46)</span></a></li>
            </ul>
            <div id="products" data-list='{"valueNames":["name","rol","email","phone","location","activity","joined"],"page":10,"pagination":true}'>
               <div class="mb-4">
                  <div class="d-flex flex-wrap gap-3">
                     <div class="search-box">
                        <form class="position-relative">
                           <input class="form-control search-input search" type="search" placeholder="Buscar usuarios..." aria-label="Search" />
                           <span class="fas fa-search search-box-icon"></span>
                        </form>
                     </div>
                     <div class="col-auto scrollbar overflow-hidden-y flex-grow-1">
                        <div class="btn-group position-static" role="group">
                           <div class="btn-group position-static text-nowrap">
                              <button class="btn btn-phoenix-secondary px-7 flex-shrink-0" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent">
                                 Estatus<span class="fas fa-angle-down ms-2"></span></button>
                              <ul class="dropdown-menu">
                                 <li><a class="dropdown-item" href="#">Activos</a></li>
                                 <li><a class="dropdown-item" href="#">Inactivos</a></li>
                              </ul>
                           </div>
                        </div>
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
                        <!-- <button class="btn btn-link text-success me-4 px-0"><span class="fa-solid fa-file-export fs-9 me-2"></span>Exportar</button> -->
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addUserModal"><span class="fas fa-plus me-2"></span>Agregar usuario</button>
                     </div>
                  </div>

               </div>
               <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-body-emphasis border-top border-bottom border-translucent position-relative top-1">
                  <div class="table-responsive scrollbar-overlay mx-n1 px-1">
                     <table id="usuariosTable" class="table table-hover fs-9 mb-0 w-100 kollabi-table">
                        <thead>
                           <tr>
                              <th class="sort align-middle ps-3" scope="col" data-sort="name">NOMBRE</th>
                              <th class="sort align-middle" scope="col" data-sort="rol">ROL</th>
                              <th class="sort align-middle" scope="col" data-sort="email">CORREO</th>
                              <th class="sort align-middle" scope="col" data-sort="phone">TELÉFONO</th>
                              <th class="sort align-middle" scope="col" data-sort="location">UBICACIÓN</th>
                              <th class="sort align-middle" scope="col" data-sort="activity">ÚLTIMA ACTIVIDAD</th>
                              <th class="sort align-middle" scope="col" data-sort="joined">FECHA REGISTRO</th>
                           </tr>
                        </thead>
                        <tbody class="list" id="usuarios-table-body">
                           <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                              <td class="name align-middle pe-5 ps-3">
                                 <p class="mb-0 text-body-emphasis fw-bold">Elizabeth Hernández</p>
                                 <div class="d-flex td-actions">
                                    <a href="#profile-offcanvas" data-bs-toggle="offcanvas">Ver</a>
                                    <span class="mx-2">|</span>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#editUserModal">Editar</a>
                                    <span class="mx-2">|</span>
                                    <a href="javascript:void(0);" class="btn-delete">Eliminar</a>
                                 </div>
                              </td>
                              <td class="rol align-middle">
                                 <span class="badge badge-tag me-2 mb-2">Administrador</span>
                              </td>
                              <td class="email align-middle pe-5 fw-semibold">
                                 <p class="mb-0">cyberelizabeth@gmail.com</p>
                              </td>
                              <td class="phone align-middle pe-5 fw-semibold">
                                 <p class="mb-0">241 164 1462</p>
                              </td>
                              <td class="location align-middle fw-semibold text-body-highlight">
                                 <p class="mb-0">Apizaco, Tlaxcala, Tlaxcala</p>
                              </td>
                              <td class="activity align-middle fw-semibold text-body-highlight">
                                 <p class="mb-0">Hoy 02:45</p>
                              </td>
                              <td class="joined align-middle ps-3">
                                 <p class="mb-0">30/05/2025</p>
                              </td>
                           </tr>
                           <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                              <td class="name align-middle pe-5 ps-3">
                                 <p class="mb-0 text-body-emphasis fw-bold">Irvin Nava</p>
                                 <div class="d-flex td-actions">
                                    <a href="#profile-offcanvas" data-bs-toggle="offcanvas">Ver</a>
                                    <span class="mx-2">|</span>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#editUserModal">Editar</a>
                                    <span class="mx-2">|</span>
                                    <a href="javascript:void(0);" class="btn-delete">Eliminar</a>
                                 </div>
                              </td>
                              <td class="rol align-middle">
                                 <span class="badge badge-tag me-2 mb-2">Administrador</span>
                              </td>
                              <td class="email align-middle pe-5 fw-semibold">
                                 <p class="mb-0">irvinnava@gmail.com</p>
                              </td>
                              <td class="phone align-middle pe-5 fw-semibold">
                                 <p class="mb-0">241 420 9137</p>
                              </td>
                              <td class="location align-middle fw-semibold text-body-highlight">
                                 <p class="mb-0">Xaloztoc, Tlaxcala</p>
                              </td>
                              <td class="activity align-middle fw-semibold text-body-highlight">
                                 <p class="mb-0">Hoy 02:45</p>
                              </td>
                              <td class="joined align-middle ps-3">
                                 <p class="mb-0">15/03/2025</p>
                              </td>
                           </tr>
                           <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                              <td class="name align-middle pe-5 ps-3">
                                 <p class="mb-0 text-body-emphasis fw-bold">Carlos Ramírez</p>
                                 <div class="d-flex td-actions">
                                    <a href="#profile-offcanvas" data-bs-toggle="offcanvas">Ver</a>
                                    <span class="mx-2">|</span>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#editUserModal">Editar</a>
                                    <span class="mx-2">|</span>
                                    <a href="javascript:void(0);" class="btn-delete">Eliminar</a>
                                 </div>
                              </td>
                              <td class="rol align-middle">
                                 <span class="badge badge-tag me-2 mb-2">Encargado</span>
                              </td>
                              <td class="email align-middle pe-5 fw-semibold">
                                 <p class="mb-0">carlosramirez@gmail.com</p>
                              </td>
                              <td class="phone align-middle pe-5 fw-semibold">
                                 <p class="mb-0">241 420 9137</p>
                              </td>
                              <td class="location align-middle fw-semibold text-body-highlight">
                                 <p class="mb-0">Tlaxcala, Tlaxcala</p>
                              </td>
                              <td class="activity align-middle fw-semibold text-body-highlight">
                                 <p class="mb-0">Hoy 02:45</p>
                              </td>
                              <td class="joined align-middle ps-3">
                                 <p class="mb-0">05/03/2025</p>
                              </td>
                           </tr>
                           <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                              <td class="name align-middle pe-5 ps-3">
                                 <p class="mb-0 text-body-emphasis fw-bold">Ana Sofía Delgado</p>
                                 <div class="d-flex td-actions">
                                    <a href="#profile-offcanvas" data-bs-toggle="offcanvas">Ver</a>
                                    <span class="mx-2">|</span>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#editUserModal">Editar</a>
                                    <span class="mx-2">|</span>
                                    <a href="javascript:void(0);" class="btn-delete">Eliminar</a>
                                 </div>
                              </td>
                              <td class="rol align-middle">
                                 <span class="badge badge-tag me-2 mb-2">Vendedor</span>
                              </td>
                              <td class="email align-middle pe-5 fw-semibold">
                                 <p class="mb-0">sofiadelgado@gmail.com</p>
                              </td>
                              <td class="phone align-middle pe-5 fw-semibold">
                                 <p class="mb-0">241 420 9137</p>
                              </td>
                              <td class="location align-middle fw-semibold text-body-highlight">
                                 <p class="mb-0">Tlaxcala, Tlaxcala</p>
                              </td>
                              <td class="activity align-middle fw-semibold text-body-highlight">
                                 <p class="mb-0">Hoy 02:45</p>
                              </td>
                              <td class="joined align-middle ps-3">
                                 <p class="mb-0">25/02/2025</p>
                              </td>
                           </tr>
                           <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                              <td class="name align-middle pe-5 ps-3">
                                 <p class="mb-0 text-body-emphasis fw-bold">Diego Torres</p>
                                 <div class="d-flex td-actions">
                                    <a href="#profile-offcanvas" data-bs-toggle="offcanvas">Ver</a>
                                    <span class="mx-2">|</span>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#editUserModal">Editar</a>
                                    <span class="mx-2">|</span>
                                    <a href="javascript:void(0);" class="btn-delete">Eliminar</a>
                                 </div>
                              </td>
                              <td class="rol align-middle">
                                 <span class="badge badge-tag me-2 mb-2">Vendedor</span>
                              </td>
                              <td class="email align-middle pe-5 fw-semibold">
                                 <p class="mb-0">diegotorres@gmail.com</p>
                              </td>
                              <td class="phone align-middle pe-5 fw-semibold">
                                 <p class="mb-0">241 420 9137</p>
                              </td>
                              <td class="location align-middle fw-semibold text-body-highlight">
                                 <p class="mb-0">Tlaxcala, Tlaxcala</p>
                              </td>
                              <td class="activity align-middle fw-semibold text-body-highlight">
                                 <p class="mb-0">Hoy 02:45</p>
                              </td>
                              <td class="joined align-middle ps-3">
                                 <p class="mb-0">12/01/2025</p>
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

      <!-- Start Offcanvas -->
      <div class="offcanvas offcanvas-end settings-panel border-0" id="profile-offcanvas" data-bs-backdrop="static" tabindex="-1" aria-labelledby="settings-offcanvas">

         <div class="loading-shape"><span>Cargando...</span></div>
         <div class="offcanvas-header align-items-start border-bottom flex-column border-translucent">
            <div class="pt-1 w-100 d-flex justify-content-between align-items-center">
               <button class="btn p-1 fw-bolder" type="button" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fa-solid fa-arrow-right-from-bracket fs-7"></i></button>

               
            </div>
         </div>

         <div class="offcanvas-body scrollbar px-0 fs-9" id="themeController">
            <div class="px-3">

               <div class="card">
                  <div class="p-3">
                     <div class="d-flex align-items-center">
                        <div class="avatar avatar-l">
                           <div class="avatar-name rounded-circle"><span>E</span></div>
                        </div>
                        <div class="ms-3">
                           <h5>Irvin Nava Rancaño</h5>
                           <p class="text-body-secondary fs-9 mb-0">
                              <span class="me-2" data-feather="mail" style="height:12px; width:12px;"></span>irvinxf@gmail.com <span class="mx-2">|</span> <span class="me-2" data-feather="phone" style="height:12px; width:12px;"></span>241 420 9137
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="d-flex alight-items-center justify-content-between mt-3">
                  <p class="mb-0"></p>
                  <p class="mb-0"><span class="fa-solid fa-circle text-success me-1" data-fa-transform="shrink-8"></span>Última actividad: 25/08/2025 | 10:45 am</p>
               </div>
            </div>
            <hr>
            <div class="px-3">

               <ul class="mb-3 nav nav-underline text-center gap-0 optionChainTableHeader" id="informationAndhistorialTab" role="tablist">
                  <li class="nav-item w-50"><a class="nav-link active" id="information-tab" href="#tab-information" data-bs-toggle="tab" role="tab" aria-controls="tab-information" aria-selected="true"><span class="me-2" data-feather="info"></span>Información</a></li>
                  <li class="nav-item w-50"><a class="nav-link" id="historial-tab" href="#tab-historial" data-bs-toggle="tab" role="tab" aria-controls="tab-historial" aria-selected="false"><span class="me-2" data-feather="clock"></span>Historial </a></li>
               </ul>
               <div class="tab-content mb-3" id="informationTabContent">
                  <div class="tab-pane fade show active" id="tab-information" role="tabpanel" aria-labelledby="information-tab">
                     <div class="col-12 col-sm-auto">
                        <h5 class="my-4">Datos del usuario</h5>
                        <div class="row g-4 flex-sm-column">
                           <div class="col-6 col-sm-12">
                              <div class="d-flex align-items-center mb-1"><span class="me-2" data-feather="user" style="stroke-width:2.5;"></span>
                                 <h6 class="mb-0">Nombre</h6>
                              </div>
                              <p class="mb-0 fs-9 ms-4">Irvin Nava Rancaño</p>
                           </div>
                           <div class="col-6 col-sm-12">
                              <div class="d-flex align-items-center mb-1"><span class="me-2" data-feather="mail" style="stroke-width:2.5;"></span>
                                 <h6 class="mb-0">Coreo electrónico</h6>
                              </div>
                              <p class="mb-0 fs-9 ms-4"><a href="mailto:irvinxf@gmail.com">irvinxf@gmail.com</a></p>
                           </div>
                           <div class="col-6 col-sm-12">
                              <div class="d-flex align-items-center mb-1"><span class="me-2" data-feather="phone" style="stroke-width:2.5;"> </span>
                                 <h6 class="mb-0">Teléfono</h6>
                              </div><a class="d-block fs-9 ms-4" href="tel:2414209137">+52 241 420 9137</a>
                           </div>
                           <div class="col-6 col-sm-12">
                              <div class="d-flex align-items-center mb-1"><span class="me-2" data-feather="home" style="stroke-width:2.5;"></span>
                                 <h6 class="mb-0">Dirección</h6>
                              </div>
                              <div class="ms-4">
                                 <p class="text-body-secondary mb-0 fs-9">Emiliano Zapata #30, 90460</p>
                                 <p class="text-body-secondary mb-0 fs-9">Centro, Apizaco, Tlaxcala, Tlaxcala</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="tab-historial" role="tabpanel" aria-labelledby="historial-tab">

                     <h5 class="my-4">Historial de movimientos</h5>
                     <div class="timeline-vertical timeline-with-details">
                        <div class="timeline-item position-relative">
                           <div class="row g-md-3">
                              <div class="col-12 col-md-auto d-flex">
                                 <div class="timeline-item-date order-1 order-md-0 me-md-4">
                                    <p class="fs-10 fw-semibold text-body-tertiary text-opacity-85 text-end">14 JUN, 2023<br class="d-none d-md-block" /> 10:30 AM</p>
                                 </div>
                                 <div class="timeline-item-bar position-md-relative me-3 me-md-0">
                                    <div class="icon-item icon-item-sm rounded-7 shadow-none bg-primary-subtle"><span class="fa-solid fa-cash-register text-primary-dark fs-9"></span></div><span class="timeline-bar border-end border-dashed"></span>
                                 </div>
                              </div>
                              <div class="col">
                                 <div class="timeline-item-content ps-6 ps-md-3">
                                    <h5 class="fs-9 lh-sm">Venta de artículo</h5>
                                    <p class="fs-9 text-body-secondary mb-0">Marca: MagentaTLX</p>
                                    <p class="fs-9 text-body-secondary mb-0">Artículo: Collar perla</p>
                                    <p class="fs-9 text-body-secondary mb-5">Monto: $200.00</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="timeline-item position-relative">
                           <div class="row g-md-3">
                              <div class="col-12 col-md-auto d-flex">
                                 <div class="timeline-item-date order-1 order-md-0 me-md-4">
                                    <p class="fs-10 fw-semibold text-body-tertiary text-opacity-85 text-end">01 JUN, 2023<br class="d-none d-md-block" /> 10:30 PM</p>
                                 </div>
                                 <div class="timeline-item-bar position-md-relative me-3 me-md-0">
                                    <div class="icon-item icon-item-sm rounded-7 shadow-none bg-primary-subtle"><span class="fa-solid fa-hand-holding-dollar text-primary-dark fs-9"></span></div><span class="timeline-bar border-end border-dashed"></span>
                                 </div>
                              </div>
                              <div class="col">
                                 <div class="timeline-item-content ps-6 ps-md-3">
                                    <h5 class="fs-9 lh-sm">Entrega de corte</h5>
                                    <p class="fs-9 text-body-secondary mb-0">Marca: MagentaTLX</p>
                                    <p class="fs-9 text-body-secondary mb-5">Monto: $2,000.00</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="timeline-item position-relative">
                           <div class="row g-md-3">
                              <div class="col-12 col-md-auto d-flex">
                                 <div class="timeline-item-date order-1 order-md-0 me-md-4">
                                    <p class="fs-10 fw-semibold text-body-tertiary text-opacity-85 text-end">20 MAY, 2025<br class="d-none d-md-block" /> 12:30 PM</p>
                                 </div>
                                 <div class="timeline-item-bar position-md-relative me-3 me-md-0">
                                    <div class="icon-item icon-item-sm rounded-7 shadow-none bg-primary-subtle"><span class="fa-solid fa-arrows-rotate text-primary-dark fs-9"></span></div><span class="timeline-bar border-end border-dashed"></span>
                                 </div>
                              </div>
                              <div class="col">
                                 <div class="timeline-item-content ps-6 ps-md-3">
                                    <h5 class="fs-9 lh-sm">Recibimiento de inventario</h5>
                                    <p class="fs-9 text-body-secondary mb-5">Marca: MagentaTLX</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="timeline-item position-relative">
                           <div class="row g-md-3">
                              <div class="col-12 col-md-auto d-flex">
                                 <div class="timeline-item-date order-1 order-md-0 me-md-4">
                                    <p class="fs-10 fw-semibold text-body-tertiary text-opacity-85 text-end">15 MAY, 2025<br class="d-none d-md-block" /> 2:30 PM</p>
                                 </div>
                                 <div class="timeline-item-bar position-md-relative me-3 me-md-0">
                                    <div class="icon-item icon-item-sm rounded-7 shadow-none bg-primary-subtle"><span class="fa-solid fa-money-bill text-primary-dark fs-9"></span></div>
                                 </div>
                              </div>
                              <div class="col">
                                 <div class="timeline-item-content ps-6 ps-md-3">
                                    <h5 class="fs-9 lh-sm">Recibimiento de mensualidad</h5>
                                    <p class="fs-9 text-body-secondary mb-5">Marca: MagentaTLX</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>

                  </div>
               </div>

            </div>
         </div>
      </div>
      <!-- End Offcamvas -->

      <!-- Modal agregar -->
      <div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content rounded-4">
               <div class="modal-header">
                  <!-- <h3 class="modal-title" id="addUserModalLabel">Agregar rol</h3> -->

                  <div class="d-flex align-items-center" id="scrollspyForms">
                     <span class="fa-stack me-2 ms-n1">
                        <i class="fas fa-circle fa-stack-2x text-gray-200"></i>
                        <i class="fa-stack-1x text-gray-800" data-feather="user-plus" style="height: 15px; width: 15px;" data-fa-transform="shrink-2"></i>
                        <!-- <i class="fa-inverse fa-stack-1x text-primary-subtle fas fa-file-alt" data-fa-transform="shrink-2"></i> -->
                     </span>
                     <div class="col">
                        <h5 class="mb-0 position-relative fw-bold"><span>Nuevo usuario</span></h5>
                        <p class="mb-0 fs-9 small">Cada usuario aliado podrá gestionar su espacio de forma independiente.</p>
                     </div>
                  </div>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

               </div>
               <div class="modal-body py-0">

                  <div class="row">
                     <div class="col-md-7">
                        <div class="p-3">
                           <h5>Información</h5>
                           <div class="row g-2">
                              <div class="col-12">
                                 <label class="form-label" for="nameInput">Nombre(s)</label>
                                 <input class="form-control form-control-sm" id="nameInput" type="text" />
                              </div>
                              <div class="col-md-6">
                                 <label class="form-label" for="firstLastNameInput">Primer apellido</label>
                                 <input class="form-control form-control-sm" id="firstLastNameInput" type="text" />
                              </div>
                              <div class="col-md-6">
                                 <label class="form-label" for="secondLastNameInput">Segundo apellido</label>
                                 <input class="form-control form-control-sm" id="secondLastNameInput" type="text" />
                              </div>
                              <div class="col-md-8">
                                 <label class="form-label" for="emailInput">Correo electrónico </label>
                                 <input class="form-control form-control-sm" id="emailInput" type="text" />
                              </div>
                              <div class="col-md-4">
                                 <label class="form-label" for="phoneInput">WhatsApp</label>
                                 <input class="form-control form-control-sm" id="phoneInput" type="text" placeholder="10 digitos" />
                              </div>
                              <hr class="my-3 mb-0">
                              <div class="col-md-12">
                                 <label class="form-label" for="streetInput">Calle / Avenida</label>
                                 <input class="form-control form-control-sm" id="streetInput" type="text" />
                              </div>
                              <div class="col-md-6">
                                 <label class="form-label" for="coloniaInput">Colonia</label>
                                 <input class="form-control form-control-sm" id="coloniaInput" type="text" />
                              </div>
                              <div class="col-md-3">
                                 <label class="form-label" for="cpInput">Código postal</label>
                                 <input class="form-control form-control-sm" id="cpInput" type="text" />
                              </div>
                              <div class="col-md-3">
                                 <label class="form-label" for="numberInput">Número</label>
                                 <input class="form-control form-control-sm text-center" id="numberInput" type="text" placeholder="#" />
                              </div>
                              <div class="col-md-6">
                                 <label class="form-label" for="stateSelect">Estado</label>
                                 <select class="form-select form-control-sm" name="stateSelect" id="stateSelect"></select>
                              </div>
                              <div class="col-md-6">
                                 <label class="form-label" for="citySelect">Ciudad</label>
                                 <select class="form-select" name="citySelect" id="citySelect"></select>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-5 bg-light border-start">
                        <div class="p-3">
                           <h5 class="mb-2">Datos de acceso</h5>
                           <p class="small mb-3">Este usuario tendrá acceso a los diferentes módulos del sistema dependiendo del rol que se le asigne.</p>

                           <div class="mb">
                              <label class="form-label" for="rolSelect">Rol</label>
                              <select class="form-select form-control-sm" id="rolSelect">
                                 <option value="">Elige...</option>
                                 <option value="">Vendedor</option>
                                 <option value="">Encargado</option>
                                 <option value="">Administrador</option>
                              </select>
                           </div>
                           <hr class="mb-2">
                           <div class="mb-2">
                              <label class="form-label" for="userInput">Usuario</label>
                              <input class="form-control form-control-sm" id="userInput" type="text" disabled />
                           </div>
                           <div class="mb-2">
                              <label class="form-label" for="passInput">Contraseña</label>
                              <input class="form-control form-control-sm" id="passInput" type="text" />
                           </div>
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="emailNotificacionCheck" id="emailNotificacionCheck" checked>
                              <label class="form-check-label" for="emailNotificacionCheck">
                                 Notificar su contraseña por correo
                              </label>
                           </div>
                        </div>
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
      <div class="modal fade" id="editUserModal" tabindex="-1" aria-labelledby="editUserModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content rounded-4">
               <div class="modal-header">
                  <!-- <h3 class="modal-title" id="addUserModalLabel">Agregar rol</h3> -->

                  <div class="d-flex align-items-center" id="scrollspyForms">
                     <span class="fa-stack me-2 ms-n1">
                        <i class="fas fa-circle fa-stack-2x text-gray-200"></i>
                        <i class="fa-stack-1x text-gray-800" data-feather="user-check" style="height: 15px; width: 15px;" data-fa-transform="shrink-2"></i>
                        <!-- <i class="fa-inverse fa-stack-1x text-primary-subtle fas fa-file-alt" data-fa-transform="shrink-2"></i> -->
                     </span>
                     <div class="col">
                        <h5 class="mb-0 position-relative fw-bold"><span>Irvin Nava</span></h5>
                        <p class="mb-0 fs-9 small">Usuario Administrador</p>
                     </div>
                  </div>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

               </div>
               <div class="modal-body py-0">
                  <div class="loading-shape"><span>Cargando...</span></div>
                  <div class="row">
                     <div class="col-md-7">
                        <div class="p-3">
                           <h5>Información</h5>
                           <div class="row g-2">
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
                              <hr class="my-3 mb-0">
                              <div class="col-md-12">
                                 <label class="form-label" for="streetInputEdit">Calle / Avenida</label>
                                 <input class="form-control form-control-sm" id="streetInputEdit" type="text" value="Xicohotencatl" />
                              </div>
                              <div class="col-md-6">
                                 <label class="form-label" for="coloniaInputEdit">Colonia</label>
                                 <input class="form-control form-control-sm" id="coloniaInputEdit" type="text" />
                              </div>
                              <div class="col-md-3">
                                 <label class="form-label" for="cpInputEdit">Código postal</label>
                                 <input class="form-control form-control-sm" id="cpInputEdit" type="text" />
                              </div>
                              <div class="col-md-3">
                                 <label class="form-label" for="numberInputEdit">Número</label>
                                 <input class="form-control form-control-sm text-center" id="numberInputEdit" type="text" placeholder="#" />
                              </div>
                              <div class="col-md-6">
                                 <label class="form-label" for="stateSelectEdit">Estado</label>
                                 <select class="form-select form-control-sm" name="stateSelect" id="stateSelectEdit"></select>
                              </div>
                              <div class="col-md-6">
                                 <label class="form-label" for="citySelectEdit">Ciudad</label>
                                 <select class="form-select" name="citySelect" id="citySelectEdit"></select>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-5 bg-light border-start">
                        <div class="p-3">
                           <h5 class="mb-2">Datos de acceso</h5>
                           <p class="small mb-3">Este usuario podrá consultar sus ventas y dar seguimiento a su inventario. Así no tendrás que notificarle cada que necesite reabastecer.</p>

                           <div class="mb">
                              <label class="form-label" for="rolSelectEdit">Rol</label>
                              <select class="form-select form-control-sm" id="rolSelectEdit">
                                 <option value="">Vendedor</option>
                                 <option value="">Encargado</option>
                                 <option value="" selected>Administrador</option>
                              </select>
                           </div>
                           <hr class="mb-2">
                           <div class="mb-2">
                              <label class="form-label" for="userInput">Usuario</label>
                              <input class="form-control form-control-sm" id="userInputEdit" type="text" value="cyberelizabeth@gmail.com" disabled />
                           </div>
                           <div class="mb-2">
                              <label class="form-label" for="passInput">Contraseña</label>
                              <input class="form-control form-control-sm" id="passInputEdit" type="text" value="#admin2025#" />
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

   <!-- Selects -->
   <link href="{{ asset('admin/vendors/choices/choices.min.css') }}" rel="stylesheet">
   <script src="{{ asset('admin/vendors/choices/choices.min.js') }}"></script>
   
   <script src="{{ asset('admin/js/usuarios/usuarios-administradores.js') }}"></script>

</body>

</html>