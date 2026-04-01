 <nav class="navbar navbar-vertical navbar-expand-lg" data-navbar-appearance="">
     <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
         <!-- scrollbar removed-->
         <div class="navbar-vertical-content">
             <ul class="navbar-nav flex-column" id="navbarVerticalNav">
                 <li class="nav-item">
                     <div class="nav-item-wrapper"><a id="dashboard-page" class="nav-link label-1" href="{{url('admin/dashboard')}}" role="button" data-bs-toggle="" aria-expanded="false">
                             <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="pie-chart"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Dashboard</span></span>
                             </div>
                         </a>
                     </div>
                 </li>
                 <li class="nav-item">

                     <!-- Section -->
                     <p class="navbar-vertical-label mt-3">Operación
                     </p>
                     <hr class="navbar-vertical-line" />

                     <div class="nav-item-wrapper"><a id="brands-page" class="nav-link label-1" href="{{url('admin/marcas')}}" role="button" data-bs-toggle="" aria-expanded="false">
                             <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="tag"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Marcas / Aliados </span></span>
                             </div>
                         </a>
                     </div>
                     <div class="nav-item-wrapper"><a id="schedule-page" class="nav-link label-1" href="{{url('admin/agenda')}}" role="button" data-bs-toggle="" aria-expanded="false">
                             <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="calendar"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Agenda</span></span>
                             </div>
                         </a>
                     </div>

                     <!-- Section -->
                     <p class="navbar-vertical-label">Finanzas
                     </p>
                     <hr class="navbar-vertical-line" />

                     <div class="nav-item-wrapper"><a class="nav-link label-1" href="{{url('admin/ventas')}}" role="button" data-bs-toggle="" aria-expanded="false">
                             <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="dollar-sign"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Ventas y comisiones</span></span>
                             </div>
                         </a>
                     </div>
                     <div class="nav-item-wrapper"><a class="nav-link label-1" href="{{url('admin/reportes')}}" role="button" data-bs-toggle="" aria-expanded="false">
                             <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="bar-chart-2"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Reportes financieros</span></span>
                             </div>
                         </a>
                     </div>

                     <!-- Section -->
                     <p class="navbar-vertical-label">Sobre el negocio
                     </p>
                     <hr class="navbar-vertical-line" />

                     
                     <div class="nav-item-wrapper"><a id="press-page" class="nav-link label-1" href="{{url('admin/configuracion/centro-informacion')}}" role="button" data-bs-toggle="" aria-expanded="false">
                             <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="message-square"></span></span><span class="nav-link-text-wrapper"><span class="nav-link-text">Centro de información</span></span>
                             </div>
                         </a>
                     </div>

                     <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-icons" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-icons">
                             <div class="d-flex align-items-center">
                                 <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-icon"><span data-feather="settings"></span></span><span class="nav-link-text">Ajustes y configuración</span>
                             </div>
                         </a>
                         <div class="parent-wrapper label-1">
                             <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-icons">
                                 <li class="collapsed-nav-item-title d-none">Ajustes
                                 </li>
                                 <li class="nav-item"><a id="profile-page" class="nav-link" href="{{url('admin/configuracion/perfil-del-negocio')}}">
                                         <div class="d-flex align-items-center"><span class="nav-link-text">Perfil del negocio</span>
                                         </div>
                                     </a>
                                 </li>
                                 <li class="nav-item"><a id="planes-page" class="nav-link" href="{{url('admin/configuracion/planes')}}">
                                         <div class="d-flex align-items-center"><span class="nav-link-text">Planes de renta</span>
                                         </div>
                                     </a>
                                 </li>
                                 <li class="nav-item"><a id="categories-page" class="nav-link" href="{{url('admin/configuracion/categorias')}}">
                                         <div class="d-flex align-items-center"><span class="nav-link-text">Categorías</span>
                                         </div>
                                     </a>
                                 </li>
                             </ul>
                         </div>
                     </div>

                     <div class="nav-item-wrapper"><a class="nav-link dropdown-indicator label-1" href="#nv-config" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-config">
                             <div class="d-flex align-items-center">
                                 <div class="dropdown-indicator-icon-wrapper"><span class="fas fa-caret-right dropdown-indicator-icon"></span></div><span class="nav-link-icon"><span data-feather="users"></span></span><span class="nav-link-text">Accesos y usuarios</span>
                             </div>
                         </a>
                         <div class="parent-wrapper label-1">
                             <ul class="nav collapse parent" data-bs-parent="#navbarVerticalCollapse" id="nv-config">
                                 <li class="collapsed-nav-item-title d-none">Icons
                                 </li>
                                 <li class="nav-item"><a id="users-page" class="nav-link" href="{{url('admin/usuarios')}}">
                                         <div class="d-flex align-items-center"><span class="nav-link-text">Usuarios</span>
                                         </div>
                                     </a>
                                 </li>
                                 <li class="nav-item"><a id="rols-page" class="nav-link" href="{{url('admin/roles')}}">
                                         <div class="d-flex align-items-center"><span class="nav-link-text">Roles</span>
                                         </div>
                                     </a>
                                 </li>
                             </ul>
                         </div>
                     </div>

                     <hr class="navbar-vertical-line d-block" />

                     <div class="px-3 pb-3">
                         <div class="card card-body p-3">
                             <h5>¡Tu lealtad tiene premio!</h5>
                             <p class="mb-0">Cumple 1 año con Kollabi y recibe 1 mes gratis en tu suscripción.</p>
                         </div>
                     </div>

                 </li>

             </ul>
         </div>
     </div>

     <div class="navbar-vertical-footer">
         <button class="btn navbar-vertical-toggle border-0 fw-semibold w-100 white-space-nowrap d-flex align-items-center"><span class="uil uil-left-arrow-to-left fs-8"></span><span class="uil uil-arrow-from-right fs-8"></span><span class="navbar-vertical-footer-text ms-2">Cerrar barra lateral</span></button>
     </div>
 </nav>