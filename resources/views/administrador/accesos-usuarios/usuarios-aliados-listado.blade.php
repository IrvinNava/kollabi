@php
$title = 'Aliados';
@endphp

@include('layout.administrador.header')

<body data-page="users-page">

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
                  <h2 class="mb-0">Usuarios <small>(Aliados)</small></h2>
               </div>
            </div>
            <ul class="nav nav-links mb-3 mb-lg-2 mx-n3">
               <li class="nav-item"><a class="nav-link" href="{{url('admin/usuarios')}}"><span>Administradores </span><span class="text-body-tertiary fw-semibold">(5)</span></a></li>
               <li class="nav-item"><a class="nav-link pe-none active" href="javascript:void(0);" aria-current="page"><span>Aliados </span><span class="text-body-tertiary fw-semibold">(46)</span></a></li>
            </ul>
            <div id="products" data-list='{"valueNames":["nombre","correo","marca","ubicacion","actividad","visita"],"page":10,"pagination":true}'>
               <div class="mb-4">
                  <div class="row g-3">
                     <div class="col-auto">
                        <div class="search-box">
                           <form class="position-relative">
                              <input class="form-control search-input search" type="search" placeholder="Buscar usuarios..." aria-label="Search" />
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
                        <!-- <button class="btn btn-link text-success me-4 px-0"><span class="fa-solid fa-file-export fs-9 me-2"></span>Exportar</button> -->
                        <!-- <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addUserModal"><span class="fas fa-plus me-2"></span>Agregar aliado</button> -->
                     </div>
                  </div>

               </div>
               <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-body-emphasis border-top border-bottom border-translucent position-relative top-1">
                  <div class="table-responsive scrollbar-overlay mx-n1 px-1">
                     <table id="usuariosTable" class="table table-hover fs-9 mb-0 w-100 kollabi-table">
                        <thead>
                           <tr>
                              <th class="sort align-middle ps-3" scope="col" data-sort="nombre">NOMBRE</th>
                              <th class="sort align-middle" scope="col" data-sort="correo">CORREO</th>
                              <th class="sort align-middle" scope="col" data-sort="marca">MARCA</th>
                              <th class="sort align-middle" scope="col" data-sort="ubicacion">UBICACIÓN</th>
                              <th class="sort align-middle" scope="col" data-sort="actividad">ÚLTIMA ACTIVIDAD</th>
                           </tr>
                        </thead>
                        <tbody class="list" id="usuarios-table-body">
                           <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                              <td class="nombre align-middle ps-3">
                                 <p class="mb-0 text-body-emphasis fw-bold">Elizabeth Hernández</p>
                                 <div class="d-flex td-actions">
                                    <a href="#profile-offcanvas" data-bs-toggle="offcanvas">Ver</a>
                                    <span class="mx-2">|</span>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#editUserModal">Editar</a>
                                 </div>
                              </td>
                              <td class="correo align-middle pe-5">
                                 <p class="mb-0">cyberelizabeth@gmail.com</p>
                              </td>
                              <td class="marca align-middle pe-5">
                                 <a class="d-flex align-items-center text-body-emphasis" href="{{url('admin/marca-perfil')}}">
                                    <div class="avatar avatar-m">
                                       <img class="rounded-circle" src="{{ asset('admin/img/magenta.jpg') }}" alt="" />
                                    </div>
                                    <p class="mb-0 ms-3 text-body-emphasis fw-bold">MagentaTLX</p>
                                 </a>
                              </td>
                              <td class="ubicacion align-middle fw-semibold text-body-highlight">
                                 <p class="mb-0">Apizaco</p>
                              </td>
                              <td class="actividad align-middle fw-semibold text-body-highlight">
                                 <p class="mb-0">Hoy 02:45</p>
                              </td>
                           </tr>
                           <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                              <td class="nombre align-middle ps-3">
                                 <p class="mb-0 text-body-emphasis fw-bold">Carlos Ramírez</p>
                                 <div class="d-flex td-actions">
                                    <a href="#profile-offcanvas" data-bs-toggle="offcanvas">Ver</a>
                                    <span class="mx-2">|</span>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#editUserModal">Editar</a>
                                 </div>
                              </td>
                              <td class="correo align-middle pe-5">
                                 <p class="mb-0">carlos@gmail.com</p>
                              </td>
                              <td class="marca align-middle pe-5">
                                 <a class="d-flex align-items-center text-body-emphasis" href="{{url('admin/marca-perfil')}}">
                                    <div class="avatar avatar-m">
                                       <img class="rounded-circle" src="{{ asset('admin/img/aldea_logo.jpg') }}" alt="" />
                                    </div>
                                    <p class="mb-0 ms-3 text-body-emphasis fw-bold">LunaArtesanal</p>
                                 </a>
                              </td>
                              <td class="ubicacion align-middle fw-semibold text-body-highlight">
                                 <p class="mb-0">Apizaco</p>
                              </td>
                              <td class="actividad align-middle fw-semibold text-body-highlight">
                                 <p class="mb-0">Hoy 02:45</p>
                              </td>
                           </tr>
                           <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                              <td class="nombre align-middle ps-3">
                                 <p class="mb-0 text-body-emphasis fw-bold">Ana Sofía Delgado</p>
                                 <div class="d-flex td-actions">
                                    <a href="#profile-offcanvas" data-bs-toggle="offcanvas">Ver</a>
                                    <span class="mx-2">|</span>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#editUserModal">Editar</a>
                                 </div>
                              </td>
                              <td class="correo align-middle pe-5">
                                 <p class="mb-0">sofia@gmail.com</p>
                              </td>
                              <td class="marca align-middle pe-5">
                                 <a class="d-flex align-items-center text-body-emphasis" href="{{url('admin/marca-perfil')}}">
                                    <div class="avatar avatar-m">
                                       <img class="rounded-circle" src="{{ asset('admin/img/aldea_logo.jpg') }}" alt="" />
                                    </div>
                                    <p class="mb-0 ms-3 text-body-emphasis fw-bold">VerdeMenta</p>
                                 </a>
                              </td>
                              <td class="ubicacion align-middle fw-semibold text-body-highlight">
                                 <p class="mb-0">Apizaco</p>
                              </td>
                              <td class="actividad align-middle fw-semibold text-body-highlight">
                                 <p class="mb-0">Hoy 02:45</p>
                              </td>
                           </tr>
                           <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                              <td class="nombre align-middle ps-3">
                                 <p class="mb-0 text-body-emphasis fw-bold">Diego Torres</p>
                                 <div class="d-flex td-actions">
                                    <a href="#profile-offcanvas" data-bs-toggle="offcanvas">Ver</a>
                                    <span class="mx-2">|</span>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#editUserModal">Editar</a>
                                 </div>
                              </td>
                              <td class="correo align-middle pe-5">
                                 <p class="mb-0">torres@gmail.com</p>
                              </td>
                              <td class="marca align-middle pe-5">
                                 <a class="d-flex align-items-center text-body-emphasis" href="{{url('admin/marca-perfil')}}">
                                    <div class="avatar avatar-m">
                                       <img class="rounded-circle" src="{{ asset('admin/img/aldea_logo.jpg') }}" alt="" />
                                    </div>
                                    <p class="mb-0 ms-3 text-body-emphasis fw-bold">KúrameMX</p>
                                 </a>
                              </td>
                              <td class="ubicacion align-middle fw-semibold text-body-highlight">
                                 <p class="mb-0">Apizaco</p>
                              </td>
                              <td class="actividad align-middle fw-semibold text-body-highlight">
                                 <p class="mb-0">Hoy 02:45</p>
                              </td>
                           </tr>
                           <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                              <td class="nombre align-middle ps-3">
                                 <p class="mb-0 text-body-emphasis fw-bold">Jimena Ayala</p>
                                 <div class="d-flex td-actions">
                                    <a href="#profile-offcanvas" data-bs-toggle="offcanvas">Ver</a>
                                    <span class="mx-2">|</span>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#editUserModal">Editar</a>
                                 </div>
                              </td>
                              <td class="correo align-middle pe-5">
                                 <p class="mb-0">ayala@gmail.com</p>
                              </td>
                              <td class="marca align-middle pe-5">
                                 <a class="d-flex align-items-center text-body-emphasis" href="{{url('admin/marca-perfil')}}">
                                    <div class="avatar avatar-m">
                                       <img class="rounded-circle" src="{{ asset('admin/img/aldea_logo.jpg') }}" alt="" />
                                    </div>
                                    <p class="mb-0 ms-3 text-body-emphasis fw-bold">Tribu Urbana</p>
                                 </a>
                              </td>
                              <td class="ubicacion align-middle fw-semibold text-body-highlight">
                                 <p class="mb-0">Apizaco</p>
                              </td>
                              <td class="actividad align-middle fw-semibold text-body-highlight">
                                 <p class="mb-0">Hoy 02:45</p>
                              </td>
                           </tr>
                           <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                              <td class="nombre align-middle ps-3">
                                 <p class="mb-0 text-body-emphasis fw-bold">Luis Paredes</p>
                                 <div class="d-flex td-actions">
                                    <a href="#profile-offcanvas" data-bs-toggle="offcanvas">Ver</a>
                                    <span class="mx-2">|</span>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#editUserModal">Editar</a>
                                 </div>
                              </td>
                              <td class="correo align-middle pe-5">
                                 <p class="mb-0">paredes@gmail.com</p>
                              </td>
                              <td class="marca align-middle pe-5">
                                 <a class="d-flex align-items-center text-body-emphasis" href="{{url('admin/marca-perfil')}}">
                                    <div class="avatar avatar-m">
                                       <img class="rounded-circle" src="{{ asset('admin/img/aldea_logo.jpg') }}" alt="" />
                                    </div>
                                    <p class="mb-0 ms-3 text-body-emphasis fw-bold">Flor de Cacto</p>
                                 </a>
                              </td>
                              <td class="ubicacion align-middle fw-semibold text-body-highlight">
                                 <p class="mb-0">Apizaco</p>
                              </td>
                              <td class="actividad align-middle fw-semibold text-body-highlight">
                                 <p class="mb-0">Hoy 02:45</p>
                              </td>
                           </tr>
                           <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                              <td class="nombre align-middle ps-3">
                                 <p class="mb-0 text-body-emphasis fw-bold">Gabriela Méndez</p>
                                 <div class="d-flex td-actions">
                                    <a href="#profile-offcanvas" data-bs-toggle="offcanvas">Ver</a>
                                    <span class="mx-2">|</span>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#editUserModal">Editar</a>
                                 </div>
                              </td>
                              <td class="correo align-middle pe-5">
                                 <p class="mb-0">mendez@gmail.com</p>
                              </td>
                              <td class="marca align-middle pe-5">
                                 <a class="d-flex align-items-center text-body-emphasis" href="{{url('admin/marca-perfil')}}">
                                    <div class="avatar avatar-m">
                                       <img class="rounded-circle" src="{{ asset('admin/img/aldea_logo.jpg') }}" alt="" />
                                    </div>
                                    <p class="mb-0 ms-3 text-body-emphasis fw-bold">Ámbar Co.</p>
                                 </a>
                              </td>
                              <td class="ubicacion align-middle fw-semibold text-body-highlight">
                                 <p class="mb-0">Apizaco</p>
                              </td>
                              <td class="actividad align-middle fw-semibold text-body-highlight">
                                 <p class="mb-0">Hoy 02:45</p>
                              </td>
                           </tr>
                           <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                              <td class="nombre align-middle ps-3">
                                 <p class="mb-0 text-body-emphasis fw-bold">Iván López</p>
                                 <div class="d-flex td-actions">
                                    <a href="#profile-offcanvas" data-bs-toggle="offcanvas">Ver</a>
                                    <span class="mx-2">|</span>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#editUserModal">Editar</a>
                                 </div>
                              </td>
                              <td class="correo align-middle pe-5">
                                 <p class="mb-0">lopez@gmail.com</p>
                              </td>
                              <td class="marca align-middle pe-5">
                                 <a class="d-flex align-items-center text-body-emphasis" href="{{url('admin/marca-perfil')}}">
                                    <div class="avatar avatar-m">
                                       <img class="rounded-circle" src="{{ asset('admin/img/aldea_logo.jpg') }}" alt="" />
                                    </div>
                                    <p class="mb-0 ms-3 text-body-emphasis fw-bold">Nube Norte</p>
                                 </a>
                              </td>
                              <td class="ubicacion align-middle fw-semibold text-body-highlight">
                                 <p class="mb-0">Apizaco</p>
                              </td>
                              <td class="actividad align-middle fw-semibold text-body-highlight">
                                 <p class="mb-0">Hoy 02:45</p>
                              </td>
                           </tr>
                           <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                              <td class="nombre align-middle ps-3">
                                 <p class="mb-0 text-body-emphasis fw-bold">Renata Cruz</p>
                                 <div class="d-flex td-actions">
                                    <a href="#profile-offcanvas" data-bs-toggle="offcanvas">Ver</a>
                                    <span class="mx-2">|</span>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#editUserModal">Editar</a>
                                 </div>
                              </td>
                              <td class="correo align-middle pe-5">
                                 <p class="mb-0">cruz@gmail.com</p>
                              </td>
                              <td class="marca align-middle pe-5">
                                 <a class="d-flex align-items-center text-body-emphasis" href="{{url('admin/marca-perfil')}}">
                                    <div class="avatar avatar-m">
                                       <img class="rounded-circle" src="{{ asset('admin/img/aldea_logo.jpg') }}" alt="" />
                                    </div>
                                    <p class="mb-0 ms-3 text-body-emphasis fw-bold">Barro&Tela</p>
                                 </a>
                              </td>
                              <td class="ubicacion align-middle fw-semibold text-body-highlight">
                                 <p class="mb-0">Apizaco</p>
                              </td>
                              <td class="actividad align-middle fw-semibold text-body-highlight">
                                 <p class="mb-0">Hoy 02:45</p>
                              </td>
                           </tr>
                           <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                              <td class="nombre align-middle ps-3">
                                 <p class="mb-0 text-body-emphasis fw-bold">Tomás Herrera</p>
                                 <div class="d-flex td-actions">
                                    <a href="#profile-offcanvas" data-bs-toggle="offcanvas">Ver</a>
                                    <span class="mx-2">|</span>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#editUserModal">Editar</a>
                                 </div>
                              </td>
                              <td class="correo align-middle pe-5">
                                 <p class="mb-0">tomas@gmail.com</p>
                              </td>
                              <td class="marca align-middle pe-5">
                                 <a class="d-flex align-items-center text-body-emphasis" href="{{url('admin/marca-perfil')}}">
                                    <div class="avatar avatar-m">
                                       <img class="rounded-circle" src="{{ asset('admin/img/aldea_logo.jpg') }}" alt="" />
                                    </div>
                                    <p class="mb-0 ms-3 text-body-emphasis fw-bold">Estilo Tierra</p>
                                 </a>
                              </td>
                              <td class="ubicacion align-middle fw-semibold text-body-highlight">
                                 <p class="mb-0">Contla</p>
                              </td>
                              <td class="actividad align-middle fw-semibold text-body-highlight">
                                 <p class="mb-0">Hoy 03:45</p>
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

               <a class="btn btn-phoenix-secondary d-flex align-items-center flex-wrap">
                  <img src="{{asset('admin/img/magenta.jpg')}}" class="rounded-circle me-2" width="20">
                  <p class="mb-0">Ir a MagentaTLX</p>
               </a>
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
                           <h5>Elizabeth Hernández Morales</h5>
                           <p class="text-body-secondary fs-9 mb-0">
                              <span class="me-2" data-feather="mail" style="height:12px; width:12px;"></span>cyberelizabeth@gmail.com <span class="mx-2">|</span> <span class="me-2" data-feather="phone" style="height:12px; width:12px;"></span>241 164 1462
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="p-x3 border-top">
                     <div class="row g-0">
                        <div class="col-4 border-end p-3">
                           <p class="text-muted mb-0">Marca</p>
                           <p class="fw-bold mb-0">MagentaTLX</p>
                        </div>
                        <div class="col-4 border-end p-3">
                           <p class="text-muted mb-0">Categoría</a>
                           <p class="fw-bold mb-0">Joyería y accesorios</p>
                        </div>
                        <div class="col-4 p-3">
                           <p class="text-muted mb-0">Ventas este mes</p>
                           <p class="fw-bold mb-0">$5,845.00</p>
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
                              <p class="mb-0 fs-9 ms-4">Elizabeth Hernández Morales</p>
                           </div>
                           <div class="col-6 col-sm-12">
                              <div class="d-flex align-items-center mb-1"><span class="me-2" data-feather="mail" style="stroke-width:2.5;"></span>
                                 <h6 class="mb-0">Coreo electrónico</h6>
                              </div>
                              <p class="mb-0 fs-9 ms-4"><a href="mailto:cyberelizabeth@gmail.com">cyberelizabeth@gmail.com</a></p>
                           </div>
                           <div class="col-6 col-sm-12">
                              <div class="d-flex align-items-center mb-1"><span class="me-2" data-feather="phone" style="stroke-width:2.5;"> </span>
                                 <h6 class="mb-0">Teléfono</h6>
                              </div><a class="d-block fs-9 ms-4" href="tel:2411641462">+52 241 164 1462</a>
                           </div>
                           <div class="col-6 col-sm-12">
                              <div class="d-flex align-items-center mb-1"><span class="me-2" data-feather="home" style="stroke-width:2.5;"></span>
                                 <h6 class="mb-0">Dirección</h6>
                              </div>
                              <div class="ms-4">
                                 <p class="text-body-secondary mb-0 fs-9">Xicohténcatl #1109, 90337</p>
                                 <p class="text-body-secondary mb-0 fs-9">Centro, Apizaco, Tlaxcala</p>
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
                                    <p class="fs-10 fw-semibold text-body-tertiary text-opacity-85 text-end">01 JUN, 2023<br class="d-none d-md-block" /> 10:30 PM</p>
                                 </div>
                                 <div class="timeline-item-bar position-md-relative me-3 me-md-0">
                                    <div class="icon-item icon-item-sm rounded-7 shadow-none bg-primary-subtle"><span class="fa-solid fa-hand-holding-dollar text-primary-dark fs-9"></span></div><span class="timeline-bar border-end border-dashed"></span>
                                 </div>
                              </div>
                              <div class="col">
                                 <div class="timeline-item-content ps-6 ps-md-3">
                                    <h5 class="fs-9 lh-sm">Recolección de corte</h5>
                                    <p class="fs-9 text-body-secondary mb-5">Se hizo la recolección del corte mensual por $2,000 pesos. También dejó un par de paquetes para recolecci+on con clientes.</p>
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
                                    <h5 class="fs-9 lh-sm">Reabastecimiento</h5>
                                    <p class="fs-9 text-body-secondary mb-5">Se hizo el reabastecimiento de su inventario trayendo 20 artículos.</p>
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
                                    <h5 class="fs-9 lh-sm">Pago de mensualidad</h5>
                                    <p class="fs-9 text-body-secondary mb-0">Se realizó el pago de mensualidad correspondiente a su renta por $1,500 pesos.</p>
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
                        <h5 class="mb-0 position-relative fw-bold"><span>Elizabeth Hernandez</span></h5>
                        <p class="mb-0 fs-9 small">Dueñ@ de MagentaTLX</p>
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
                                 <input class="form-control form-control-sm" id="streetInputEdit" type="text" value="Xicohténcatl" />
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
                              <label class="form-label" for="brandSelectEdit">Marca</label>
                              <div class="d-flex align-items-center border p-2 rounded-2">
                                 <img src="{{asset('admin/img/magenta.jpg')}}" class="rounded-circle me-2" width="30" height="30">
                                 <p class="m-0">MagentaTLX</p>
                              </div>
                           </div>
                           <hr class="mb-2">
                           <div class="mb-2">
                              <label class="form-label" for="userInput">Usuario</label>
                              <input class="form-control form-control-sm" id="userInputEdit" type="text" value="cyberelizabeth@gmail.com" disabled />
                           </div>
                           <div class="mb-2">
                              <label class="form-label" for="passInput">Contraseña</label>
                              <input class="form-control form-control-sm" id="passInputEdit" type="text" value="#magenta2025#" />
                           </div>
                           <div class="mt-3">
                              <a href="javascript:void(0);" class="btn btn-primary btn-sm" id="copyPass">Copiar contraseña</a>
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

   </main>

   @include('layout.administrador.assets')

   <!-- Selects -->
   <link href="{{ asset('admin/vendors/choices/choices.min.css') }}" rel="stylesheet">
   <script src="{{ asset('admin/vendors/choices/choices.min.js') }}"></script>

   <!-- Datepickers -->
   <link href="{{ asset('admin/vendors/flatpickr/flatpickr.min.css') }}" rel="stylesheet">
   <script src="{{ asset('admin/vendors/flatpickr/flatpickr.min.js') }}"></script>

   <script src="{{ asset('admin/js/usuarios/usuarios-aliados.js') }}"></script>

   <!-- <script>
      $(function() {
         $('#editUserModal').modal('show')
      });
   </script> -->

</body>

</html>