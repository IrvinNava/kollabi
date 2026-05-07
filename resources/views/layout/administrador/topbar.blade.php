 <nav class="navbar navbar-top fixed-top navbar-expand" id="navbarDefault">
     <div class="collapse navbar-collapse justify-content-between">
         <div class="navbar-logo">

             <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
             <a class="navbar-brand me-1 me-sm-3" href="index.html">
                 <div class="d-flex align-items-center">
                     <div class="d-flex align-items-center"><img src="{{ asset('admin/img/brand/kollabi_logo.png') }}" id="logoPreview" alt="phoenix" width="140" />
                         <!-- <h5 class="logo-text ms-2 d-none d-sm-block">Aldea Home</h5> -->
                     </div>
                 </div>
             </a>
         </div>

         <div class="search-box navbar-top-search-box d-none d-lg-block" data-list='{"valueNames":["title"]}' style="width:25rem;">
             <form class="position-relative" data-bs-toggle="search" data-bs-display="static">
                 <input class="form-control search-input fuzzy-search rounded-pill form-control-sm" type="search" placeholder="Buscar..." aria-label="Search" />
                 <span class="fas fa-search search-box-icon"></span>
             </form>
             <div class="btn-close position-absolute end-0 top-50 translate-middle cursor-pointer shadow-none" data-bs-dismiss="search">
                 <button class="btn btn-link p-0" aria-label="Close"></button>
             </div>
             <div class="dropdown-menu border start-0 py-0 overflow-hidden w-100">
                 <div class="scrollbar-overlay" style="max-height: 30rem;">
                     <div class="list pb-3">
                         <h6 class="dropdown-header text-body-highlight fs-10 py-2">14 <span class="text-body-quaternary">resultados</span></h6>
                         <hr class="my-0" />
                         <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Marcas</h6>
                         <div class="py-2">

                             <a class="dropdown-item py-2 d-flex align-items-center" href="{{url('app/admin/marcas/perfil')}}">
                                 <div class="file-thumbnail me-2"><img class="h-100 w-100 object-fit-cover rounded-3" src="{{ asset('admin/img/magenta.jpg') }}" alt="" /></div>
                                 <div class="flex-1">
                                     <h6 class="mb-0 text-body-highlight title">MagentaTLX</h6>
                                     <p class="fs-10 mb-0 d-flex text-body-tertiary"><span class="fw-medium text-body-tertiary text-opactity-85">Joyería y accesorios</span></p>
                                 </div>
                             </a>

                             <a class="dropdown-item py-2 d-flex align-items-center" href="{{url('app/admin/marcas/perfil')}}">
                                 <div class="file-thumbnail me-2"><img class="h-100 w-100 object-fit-cover rounded-3" src="{{ asset('admin/img/aldea_logo.jpg') }}" alt="" /></div>
                                 <div class="flex-1">
                                     <h6 class="mb-0 text-body-highlight title">LunaArtesanal</h6>
                                     <p class="fs-10 mb-0 d-flex text-body-tertiary"><span class="fw-medium text-body-tertiary text-opactity-85">Decoración y artículos para el hogar</span></p>
                                 </div>
                             </a>

                         </div>
                         <hr class="my-0" />
                         <h6 class="dropdown-header text-body-highlight fs-9 border-bottom border-translucent py-2 lh-sm">Usuarios emprendedores</h6>
                         <div class="py-2"><a class="dropdown-item py-2 d-flex align-items-center" href="pages/members.html">
                                 <div class="avatar avatar-l status-online  me-2 text-body">
                                     <div class="avatar-name rounded-circle"><span>E</span></div>
                                 </div>
                                 <div class="flex-1">
                                     <h6 class="mb-0 text-body-highlight title">Elizabeth Hernandez</h6>
                                     <p class="fs-10 mb-0 d-flex text-body-tertiary">241 164 1462</p>
                                 </div>
                             </a>
                             <a class="dropdown-item py-2 d-flex align-items-center" href="pages/members.html">
                                 <div class="avatar avatar-l  me-2 text-body">
                                     <div class="avatar-name rounded-circle"><span>C</span></div>
                                 </div>
                                 <div class="flex-1">
                                     <h6 class="mb-0 text-body-highlight title">Carlos Ramirez</h6>
                                     <p class="fs-10 mb-0 d-flex text-body-tertiary">241 898 4623</p>
                                 </div>
                             </a>
                         </div>
                     </div>
                     <div class="text-center">
                         <p class="fallback fw-bold fs-7 d-non">No se encontraron coincidencias</p>
                     </div>
                 </div>
             </div>
         </div>

         <ul class="d-print-none navbar-nav navbar-nav-icons flex-row">
             <li class="nav-item d-none d-sm-flex">
                 <a id="new-sale" class="btn btn-primary btn-sm me-1 mb-1 key-tag f12" href="{{url('pos/nueva-venta')}}"><span class="fas fa-shopping-basket me-2"></span>Nueva venta</a>
             </li>

             <!-- Light/Dark -->
             <li class="nav-item">
                 <div class="theme-control-toggle fa-icon-wait px-2">
                     <input class="form-check-input ms-0 theme-control-toggle-input" type="checkbox" data-theme-control="phoenixTheme" value="dark" id="themeControlToggle" />
                     <label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Cambiar a claro" style="height:32px;width:32px;"><span class="icon" data-feather="moon"></span></label>
                     <label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Cambiar a dark" style="height:32px;width:32px;"><span class="icon" data-feather="sun"></span></label>
                 </div>
             </li>

             <li class="nav-item dropdown d-none d-sm-flex">
                 <a class="nav-link" href="#" style="min-width: 2.25rem" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-bs-auto-close="outside"><span class="d-block" style="height:20px;width:20px;"><span data-feather="inbox" style="height:20px;width:20px;"></span></span></a>

                 <div class="dropdown-menu dropdown-menu-end notification-dropdown-menu py-0 shadow border navbar-dropdown-caret" id="navbarDropdownNotfication" aria-labelledby="navbarDropdownNotfication">
                     <div class="card position-relative border-0">
                         <div class="card-header p-3">
                             <div class="d-flex justify-content-between">
                                 <h6 class="text-body-emphasis mb-0 d-flex align-items-center"><span class="me-2" data-feather="inbox" style="height:15px;width:15px;"></span> Últimos movimientos hoy</h6>
                             </div>
                         </div>
                         <div class="card-body p-0">
                             <div class="scrollbar-overlay" style="height: 439.6px;">

                                 <!-- Item -->
                                 <div class="px-2 px-sm-3 py-3 notification-card position-relative read border-bottom">
                                     <div class="d-flex align-items-center justify-content-between position-relative">
                                         <div class="d-flex align-items-start gap-3">
                                             <div class="bg-body border border-gray-300 rounded-circle d-flex align-items-center justify-content-center" style="width: 35px; height: 35px;">
                                                 <i data-feather="shopping-bag" style="width: 16px; height: 16px;"></i>
                                             </div>
                                             <div class="flex-1 lh-md">
                                                 <h4 class="fs-9 text-body-emphasis">Nueva venta</h4>
                                                 <p class="fs-9 text-body-highlight mb-0 fw-normal">Collar dorado con dije de luna - $280.00</p>
                                                 <p class="text-body-secondary fs-9 mb-0"><span class="me-1" data-feather="clock" style="height: 12px; width: 12px;"></span>10:41 am</p>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <!-- Item -->
                                 <div class="px-2 px-sm-3 py-3 notification-card position-relative read border-bottom">
                                     <div class="d-flex align-items-center justify-content-between position-relative">
                                         <div class="d-flex align-items-start gap-3">
                                             <div class="bg-body border border-gray-300 rounded-circle d-flex align-items-center justify-content-center" style="width: 35px; height: 35px;">
                                                 <i data-feather="upload" style="width: 16px; height: 16px;"></i>
                                             </div>
                                             <div class="flex-1 lh-md">
                                                 <h4 class="fs-9 text-body-emphasis">Pickup / Recolección</h4>
                                                 <p class="fs-9 text-body-highlight mb-0 fw-normal">Bolsa tejida LunaArtesanal</p>
                                                 <p class="text-body-secondary fs-9 mb-0"><span class="me-1" data-feather="clock" style="height: 12px; width: 12px;"></span>10:41 am</p>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <!-- Item -->
                                 <div class="px-2 px-sm-3 py-3 notification-card position-relative read border-bottom">
                                     <div class="d-flex align-items-center justify-content-between position-relative">
                                         <div class="d-flex align-items-start gap-3">
                                             <div class="bg-body border border-gray-300 rounded-circle d-flex align-items-center justify-content-center" style="width: 35px; height: 35px;">
                                                 <i data-feather="shopping-bag" style="width: 16px; height: 16px;"></i>
                                             </div>
                                             <div class="flex-1 lh-md">
                                                 <h4 class="fs-9 text-body-emphasis">Nueva venta</h4>
                                                 <p class="fs-9 text-body-highlight mb-0 fw-normal">Collar dorado con dije de luna - $280.00</p>
                                                 <p class="text-body-secondary fs-9 mb-0"><span class="me-1" data-feather="clock" style="height: 12px; width: 12px;"></span>10:41 am</p>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <!-- Item -->
                                 <div class="px-2 px-sm-3 py-3 notification-card position-relative read border-bottom">
                                     <div class="d-flex align-items-center justify-content-between position-relative">
                                         <div class="d-flex align-items-start gap-3">
                                             <div class="bg-body border border-gray-300 rounded-circle d-flex align-items-center justify-content-center" style="width: 35px; height: 35px;">
                                                 <i data-feather="download" style="width: 16px; height: 16px;"></i>
                                             </div>
                                             <div class="flex-1 lh-md">
                                                 <h4 class="fs-9 text-body-emphasis">Entrada de mercancía</h4>
                                                 <p class="fs-9 text-body-highlight mb-0 fw-normal">MagentaTLX - 20 artículos</p>
                                                 <p class="text-body-secondary fs-9 mb-0"><span class="me-1" data-feather="clock" style="height: 12px; width: 12px;"></span>10:41 am</p>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <!-- Item -->
                                 <div class="px-2 px-sm-3 py-3 notification-card position-relative read border-bottom">
                                     <div class="d-flex align-items-center justify-content-between position-relative">
                                         <div class="d-flex align-items-start gap-3">
                                             <div class="bg-body border border-gray-300 rounded-circle d-flex align-items-center justify-content-center" style="width: 35px; height: 35px;">
                                                 <i data-feather="download" style="width: 16px; height: 16px;"></i>
                                             </div>
                                             <div class="flex-1 lh-md">
                                                 <h4 class="fs-9 text-body-emphasis">Entrada de mercancía</h4>
                                                 <p class="fs-9 text-body-highlight mb-0 fw-normal">Marca: MagentaTLX - 20 artículos</p>
                                                 <p class="text-body-secondary fs-9 mb-0"><span class="me-1" data-feather="clock" style="height: 12px; width: 12px;"></span>10:41 am</p>
                                             </div>
                                         </div>
                                     </div>
                                 </div>

                             </div>
                         </div>
                         <div class="card-footer p-0 border-top border-translucent border-0">
                             <div class="my-2 text-center fw-bold fs-9 text-body-tertiary text-opactity-85"><a class="fw-bolder text-dark" href="{{url('app/admin/historial-movimientos')}}">Ver todo</a></div>
                         </div>
                     </div>
                 </div>
             </li>

             <li class="nav-item dropdown d-flex d-sm-none">
                 <a class="nav-link" id="navbarDropdownNindeDots" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" data-bs-auto-close="outside" aria-expanded="false">
                     <svg width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                         <circle cx="2" cy="2" r="2" fill="currentColor"></circle>
                         <circle cx="2" cy="8" r="2" fill="currentColor"></circle>
                         <circle cx="2" cy="14" r="2" fill="currentColor"></circle>
                         <circle cx="8" cy="8" r="2" fill="currentColor"></circle>
                         <circle cx="8" cy="14" r="2" fill="currentColor"></circle>
                         <circle cx="14" cy="8" r="2" fill="currentColor"></circle>
                         <circle cx="14" cy="14" r="2" fill="currentColor"></circle>
                         <circle cx="8" cy="2" r="2" fill="currentColor"></circle>
                         <circle cx="14" cy="2" r="2" fill="currentColor"></circle>
                     </svg></a>

                 <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-nine-dots shadow border" aria-labelledby="navbarDropdownNindeDots">
                     <div class="card bg-body-emphasis position-relative border-0">
                         <div class="card-body pt-3 px-3 pb-0 overflow-auto scrollbar">
                             <div class="row text-center align-items-center gx-0 gy-0">
                                 <div class="col-4">
                                     <a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="{{url('app/admin/nueva-venta')}}">
                                         <span class="fas fa-shopping-basket text-secondary"></span>
                                         <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Venta</p>
                                     </a>
                                 </div>
                                 <div class="col-4">
                                     <a class="d-block bg-body-secondary-hover p-2 rounded-3 text-center text-decoration-none mb-3" href="{{url('app/admin/nueva-venta')}}">
                                         <span class="fas fa-history text-secondary"></span>
                                         <p class="mb-0 text-body-emphasis text-truncate fs-10 mt-1 pt-1">Historial</p>
                                     </a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </li>

             <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0" id="navbarDropdownUser" href="#!" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                     <div class="avatar avatar-l ">
                         <img class="rounded-circle " src="{{ asset('admin/img/9.webp') }}" alt="" />

                     </div>
                 </a>
                 <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border" aria-labelledby="navbarDropdownUser">
                     <div class="card position-relative border-0">
                         <div class="card-body p-0">
                             <div class="text-center pt-4 pb-3">
                                 <div class="avatar avatar-xl ">
                                     <img class="rounded-circle " src="{{ asset('admin/img/9.webp') }}" alt="" />

                                 </div>
                                 <h6 class="mt-2 text-body-emphasis">Elizabeth Hernández</h6>
                                 <p class="mb-1">cyberelizabeth@gmail.com</p>
                                 <span class="badge badge-tag">Administrador</span>
                             </div>
                             <hr class="mt-1 mb-2">
                         </div>
                         <div class="overflow-auto scrollbar">
                             <ul class="nav d-flex flex-column mb-2 pb-1">
                                 <li class="nav-item"><a class="nav-link px-3 d-block" href="{{url('app/perfil')}}"> <span class="me-2 text-body align-bottom" data-feather="user"></span><span>Perfil</span></a></li>
                                 <li class="nav-item"><a class="nav-link px-3 d-block" href="#settings-offcanvas" data-bs-toggle="offcanvas"> <span class="me-2 text-body align-bottom" data-feather="sliders"></span>Apariencia</a></li>
                                 <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span class="me-2 text-body align-bottom" data-feather="help-circle"></span>Centro de ayuda</a></li>
                                 <li class="nav-item"><a class="nav-link px-3 d-block" href="#!"> <span class="me-2 text-body align-bottom" data-feather="globe"></span>Soporte técnico</a></li>
                             </ul>
                         </div>
                         <div class="card-footer p-0 border-top border-translucent pt-3">
                             <div class="px-3"> <a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="{{url('app/sesion-finalizada')}}"> <span class="me-2" data-feather="log-out"> </span>Cerrar sesión</a></div>
                             <div class="my-2 text-center fw-bold fs-10 text-body-quaternary"><a class="text-body-quaternary me-1" href="#!">Politica de privacidad</a>&bull;<a class="text-body-quaternary mx-1" href="#!">Términos</a></div>
                         </div>
                     </div>
                 </div>
             </li>
         </ul>
     </div>
 </nav>