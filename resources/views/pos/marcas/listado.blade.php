@php
$title = 'Marcas / Aliados';
@endphp

@include('layout.administrador.header')

<body data-page="brands-page">

   <main class="main" id="top">

      @include('layout.administrador.sidebar')
      @include('layout.administrador.topbar')

      <div class="content">

         <div class="d-flex justify-content-between">
            <div class="col-auto">
               <h2 class="mb-0">Marcas</h2>
            </div>
         </div>

         <!-- Statistics cards -->
         <div class="row g-3 mt-1 mb-4">
            <div class="col-12 col-sm-6 col-xl-3">
               <div class="card border-0 shadow-sm h-100">
                  <div class="card-body">
                     <div class="d-flex justify-content-between align-items-start">
                        <div>
                           <p class="text-muted mb-1">Marcas activas</p>
                           <h3 class="mb-0">60</h3>
                        </div>
                        <div class="d-flex text-success-emphasis bg-success-subtle borde rounded-3 p-2">
                           <i data-feather="check-circle" style="width: 18px; height: 18px;"></i>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-12 col-sm-6 col-xl-3">
               <div class="card border-0 shadow-sm h-100">
                  <div class="card-body">
                     <div class="d-flex justify-content-between align-items-start">
                        <div>
                           <p class="text-muted mb-1">Categorías en sistema</p>
                           <h3 class="mb-0">20</h3>
                        </div>
                        <div class="d-flex bg-body-highlight rounded-3 p-2">
                           <i data-feather="tag" style="width: 18px; height: 18px;"></i>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-12 col-sm-6 col-xl-3">
               <div class="card border-0 shadow-sm h-100">
                  <div class="card-body">
                     <div class="d-flex justify-content-between align-items-start">
                        <div>
                           <p class="text-muted mb-1">Marcas con adeudo</p>
                           <h3 class="mb-0">3</h3>
                        </div>
                        <div class="d-flex text-warning-emphasis bg-warning-subtle rounded-3 p-2">
                           <i data-feather="credit-card" style="width: 18px; height: 18px;"></i>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-12 col-sm-6 col-xl-3">
               <div class="card border-0 shadow-sm h-100">
                  <div class="card-body">
                     <div class="d-flex justify-content-between align-items-start">
                        <div>
                           <p class="text-muted mb-1">Marcas con poco inventario</p>
                           <h3 class="mb-0">3</h3>
                        </div>
                        <div class="d-flex text-danger-emphasis bg-danger-subtle rounded-3 p-2">
                           <i data-feather="box" style="width: 18px; height: 18px;"></i>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <div class="d-flex flex-wrap gap-2 my-3">
            <a href="#" class="btn btn-primary border btn-sm pe-none">Activas (87)</a>
            <a href="{{url('app/admin/marcas/inactivas')}}" class="btn btn-subtle-secondary border btn-sm">Inactivas (26)</a>
            <a href="{{url('app/admin/marcas/pendientes')}}" class="btn btn-subtle-secondary border btn-sm">Pendientes (1)</a>
         </div>

         <div id="products" data-list='{"valueNames":["marca","responsable","ventas","mensualidad","inventario","visita"],"page":10,"pagination":true}'>
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
                     <button class="btn px-3 btn-phoenix-secondary" type="button" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"><i data-feather="sliders" style="height:14px;width:14px;" class="me-1"></i> Más filtros</button>
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
                     <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addBrandModal"><span class="fas fa-plus me-2"></span>Agregar marca</button>
                  </div>
               </div>

               <div class="collapse" id="collapseExample">
                  <hr>
                  <form class="row gy-2 gx-2 align-items-center more-filters">

                     <div class="col-md-3">
                        <label class="form-label" for="categoriaFilter">Categoría</label>
                        <select class="form-select" id="categoriaFilter" data-choices="data-choices" multiple="multiple" data-options='{"removeItemButton":true,"placeholder":true}'>
                           <option>Joyería y accesorios</option>
                           <option>Moda y ropa</option>
                           <option>Alimentos y bebidas</option>
                           <option>Belleza y cuidado personal</option>
                           <option>Decoración y artículos para hogar</option>
                           <option>Arte, ilustración y diseño</option>
                           <option>Calzado y marroquinería</option>
                           <option>Infantiles / colección</option>
                           <option>Mascotas</option>
                        </select>
                     </div>

                     <div class="col-md-3">
                        <label class="form-label mb-4" for="ventasRange">Ventas</label>
                        <div data-nouislider='{"range":{"min":0,"max":10000},"start":[1000,5000],"connect":true}'></div>
                        <!-- https://refreshless.com/nouislider/ -->
                     </div>

                     <div class="col-md-2">
                        <label class="form-label" for="estatusFilter">Estatus del inventario</label>
                        <select class="form-select" id="estatusFilter">
                           <option selected="selected">Elige...</option>
                           <option value="1">Bueno</option>
                           <option value="2">Regular</option>
                           <option value="3">Malo</option>
                        </select>
                     </div>

                     <div class="col-md-2">
                        <label class="form-label" for="fechaCorteFilter">Por fecha de corte</label>
                        <input class="form-control datetimepicker flatpickr-input" id="fechaCorteFilter" type="text" placeholder="dd/mm/yy al dd/mm/yy" data-options="{&quot;mode&quot;:&quot;range&quot;,&quot;dateFormat&quot;:&quot;d/m/y&quot;,&quot;disableMobile&quot;:true}" readonly="readonly">
                     </div>

                     <div class="col-auto">
                        <button class="btn btn-primary mt-4 px-3" type="submit"><span class="fa-solid fa-search me-2" data-fa-transform="down-3"></span>Aplicar filtros</button>
                        <a class="btn btn-primary mt-4 px-3" href="{{url('app/admin/marcas')}}" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Limpiar filtros">
                           <span class="fa-solid fa-arrows-rotate" data-fa-transform="down-3"></span>
                        </a>
                     </div>

                  </form>
               </div>

            </div>
            <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-body-emphasis border-top border-bottom border-translucent position-relative top-1">
               <div class="table-responsive scrollbar-overlay mx-n1 px-1">
                  <table id="marcasTable" class="table table-hover fs-9 mb-0 w-100 kollabi-table">
                     <thead>
                        <tr>
                           <th class="sort align-middle py-3 pe-5" scope="col" data-sort="marca">NOMBRE COMERCIAL</th>
                           <th class="sort align-middle py-3 pe-5" scope="col" data-sort="responsable">RESPONSABLE</th>
                           <th class="sort align-middle py-3" scope="col" data-sort="ventas">VENTAS DEL MES</th>
                           <th class="sort align-middle py-3" scope="col" data-sort="inventario">INVENTARIO</th>
                           <th class="sort align-middle py-3" scope="col" data-sort="mensualidad">MENSUALIDAD</th>
                           <th class="sort align-middle py-3" scope="col" data-sort="visita">PRÓXIMA VISITA</th>
                           <th class="sort align-middle py-3" scope="col" data-sort="last-order"></th>
                        </tr>
                     </thead>
                     <tbody class="list" id="marcas-table-body">

                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                           <td class="marca align-middle white-space-nowrap pe-5">
                              <div class="d-flex align-items-center text-body-emphasis" href="{{url('app/admin/marca-perfil')}}">
                                 <div class="avatar avatar-l">
                                    <img class="rounded-circle" src="{{ asset('admin/img/magenta.jpg') }}" alt="" />
                                 </div>
                                 <div class="ms-3">
                                    <p class="mb-0 text-body-emphasis fw-bold">MagentaTLX</p>
                                    <div class="td-brand td-actions">
                                       <a href="{{url('app/admin/marcas/perfil')}}" class="text-body fw-normal">Perfil</a>
                                       <span class="mx-1">|</span>
                                       <a href="#" class="text-body fw-normal">Ventas</a>
                                    </div>
                                 </div>
                              </div>
                           </td>
                           <td class="responsable align-middle white-space-nowrap pe-5">
                              <p class="mb-0">Elizabeth Hernández</p>
                              <a href="https://wa.me/+522414209137" target="_blank" class="mb-0 text-body-quaternary td-actions"><i class="fa-brands fa-whatsapp text-success me-1"></i>241 420 9137</a>
                           </td>
                           <td class="ventas align-middle white-space-nowrap fw-bold ps-3 text-body-emphasis">
                              <span>$8,000.00</span>
                           </td>
                           <td class="inventario align-middle ps-3">
                              <span class="badge text-bg-success fw-normal fs-10 text-uppercase">Bueno</span>
                           </td>
                           <td class="mensualidad align-middle fw-semibold text-body-highlight">
                              <span class="badge badge-phoenix fs-10 badge-phoenix-success"><span class="badge-label"><span class="me-1 mb-1" data-feather="check" style="height:12px;width:12px;"></span>Cubierta</span></span>
                              <p class="m-0 mt-1 text-body-quaternary td-actions fs--"><span class="me-1 mb-1" data-feather="calendar" style="height:12px;width:12px;"></span>08 del mes</p>
                           </td>
                           <td class="visita align-middle ps-3 projectprogress">
                              <span class="badge badge-phoenix fs--2 badge-phoenix-secondary py-1"><span class="me-1 mb-1" data-feather="dollar-sign" style="height:12px;width:12px;"></span>Corte mensual</span>
                              <p class="m-0 mt-1 text-body-quaternary fs--2">Hoy &middot; 11 - 12 pm</p>
                           </td>
                           <td class="align-middle white-space-nowrap ps-4 btn-reveal-trigger">
                              <div class="btn-reveal-trigger position-static">
                                 <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                 <div class="dropdown-menu dropdown-menu-end py-2">
                                    <a class="dropdown-item" href="{{url('app/admin/marcas/perfil')}}"><i data-feather="eye" class="me-2"></i>Ver detalle</a>
                                    <a class="dropdown-item" href="javascript:void(0);"><i data-feather="edit-2" class="me-2"></i>Editar</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item btn-delete" href="javascript:void(0);"><i data-feather="trash-2" class="me-2"></i>Eliminar</a>
                                 </div>
                              </div>
                           </td>
                        </tr>

                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                           <td class="marca align-middle white-space-nowrap pe-5">
                              <div class="d-flex align-items-center text-body-emphasis" href="{{url('app/admin/marca-perfil')}}">
                                 <div class="avatar avatar-l">
                                    <img class="rounded-circle" src="{{ asset('admin/img/aldea_logo.jpg') }}" alt="" />
                                 </div>
                                 <div class="ms-3">
                                    <p class="mb-0 text-body-emphasis fw-bold">LunaArtesanal</p>
                                    <div class="td-brand td-actions">
                                       <a href="{{url('app/admin/marcas/perfil')}}" class="text-body fw-normal">Perfil</a>
                                       <span class="mx-1">|</span>
                                       <a href="#" class="text-body fw-normal">Ventas</a>
                                    </div>
                                 </div>
                              </div>
                           </td>
                           <td class="responsable align-middle white-space-nowrap pe-5">
                              <p class="mb-0">Carlos Ramírez</p>
                              <a href="https://wa.me/+522414209137" target="_blank" class="mb-0 text-body-quaternary td-actions"><i class="fa-brands fa-telegram text-info me-1"></i>241 420 9137</a>
                           </td>
                           <td class="ventas align-middle white-space-nowrap fw-bold ps-3 text-body-emphasis">
                              <span>$3,654.00</span>
                           </td>
                           <td class="inventario align-middle ps-3">
                              <span class="badge text-bg-warning fw-normal fs-10 text-uppercase">Regular</span>
                           </td>
                           <td class="mensualidad align-middle fw-semibold text-body-highlight">
                              <span class="badge badge-phoenix fs-10 badge-phoenix-warning"><span class="badge-label"><span class="me-1 mb-1" data-feather="clock" style="height:12px;width:12px;"></span>Pendiente</span></span>
                              <p class="m-0 mt-1 text-body-quaternary td-actions fs--"><span class="me-1 mb-1" data-feather="calendar" style="height:12px;width:12px;"></span>22 del mes</p>
                           </td>
                           <td class="visita align-middle ps-3 projectprogress">
                              <span class="badge badge-phoenix fs--2 badge-phoenix-secondary py-1"><span class="me-1 mb-1" data-feather="refresh-ccw" style="height:12px;width:12px;"></span>Reabastecimiento</span>
                              <p class="m-0 mt-1 text-body-quaternary fs--">En 12 días</p>
                           </td>
                           <td class="align-middle white-space-nowrap ps-4 btn-reveal-trigger">
                              <div class="btn-reveal-trigger position-static">
                                 <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                 <div class="dropdown-menu dropdown-menu-end py-2">
                                    <a class="dropdown-item" href="{{url('app/admin/marcas/perfil')}}"><i data-feather="eye" class="me-2"></i>Ver detalle</a>
                                    <a class="dropdown-item" href="javascript:void(0);"><i data-feather="edit-2" class="me-2"></i>Editar</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item btn-delete" href="javascript:void(0);"><i data-feather="trash-2" class="me-2"></i>Eliminar</a>
                                 </div>
                              </div>
                           </td>
                        </tr>

                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                           <td class="marca align-middle white-space-nowrap pe-5">
                              <div class="d-flex align-items-center text-body-emphasis" href="{{url('app/admin/marca-perfil')}}">
                                 <div class="avatar avatar-l">
                                    <img class="rounded-circle" src="{{ asset('admin/img/aldea_logo.jpg') }}" alt="" />
                                 </div>
                                 <div class="ms-3">
                                    <p class="mb-0 text-body-emphasis fw-bold">VerdeMenta</p>
                                    <div class="td-brand td-actions">
                                       <a href="{{url('app/admin/marcas/perfil')}}" class="text-body fw-normal">Perfil</a>
                                       <span class="mx-1">|</span>
                                       <a href="#" class="text-body fw-normal">Ventas</a>
                                    </div>
                                 </div>
                              </div>
                           </td>
                           <td class="responsable align-middle white-space-nowrap pe-5">
                              <p class="mb-0">Ana Sofía Delgado</p>
                              <a href="https://wa.me/+522414209137" target="_blank" class="mb-0 text-body-quaternary td-actions"><i class="fa-brands fa-whatsapp text-success me-1"></i>241 420 9137</a>
                           </td>
                           <td class="ventas align-middle white-space-nowrap fw-bold ps-3 text-body-emphasis">
                              <span>$4,251.00</span>
                           </td>
                           <td class="inventario align-middle ps-3">
                              <span class="badge text-bg-danger fw-normal fs-10 text-uppercase">Malo</span>
                           </td>
                           <td class="mensualidad align-middle fw-semibold text-body-highlight">
                              <span class="badge badge-phoenix fs-10 badge-phoenix-success"><span class="badge-label"><span class="me-1 mb-1" data-feather="check" style="height:12px;width:12px;"></span>Cubierta</span></span>
                              <p class="m-0 mt-1 text-body-quaternary td-actions fs--"><span class="me-1 mb-1" data-feather="calendar" style="height:12px;width:12px;"></span>14 del mes</p>
                           </td>
                           <td class="visita align-middle ps-3 projectprogress">
                              <span class="badge badge-phoenix fs--2 badge-phoenix-secondary py-1"><span class="me-1 mb-1" data-feather="archive" style="height:12px;width:12px;"></span>Entrega mercancía</span>
                              <p class="m-0 mt-1 text-body-quaternary fs--">En 1 día</p>
                           </td>
                           <td class="align-middle white-space-nowrap ps-4 btn-reveal-trigger">
                              <div class="btn-reveal-trigger position-static">
                                 <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                 <div class="dropdown-menu dropdown-menu-end py-2">
                                    <a class="dropdown-item" href="{{url('app/admin/marcas/perfil')}}"><i data-feather="eye" class="me-2"></i>Ver detalle</a>
                                    <a class="dropdown-item" href="javascript:void(0);"><i data-feather="edit-2" class="me-2"></i>Editar</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item btn-delete" href="javascript:void(0);"><i data-feather="trash-2" class="me-2"></i>Eliminar</a>
                                 </div>
                              </div>
                           </td>
                        </tr>

                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                           <td class="marca align-middle white-space-nowrap pe-5">
                              <div class="d-flex align-items-center text-body-emphasis" href="{{url('app/admin/marca-perfil')}}">
                                 <div class="avatar avatar-l">
                                    <img class="rounded-circle" src="{{ asset('admin/img/aldea_logo.jpg') }}" alt="" />
                                 </div>
                                 <div class="ms-3">
                                    <p class="mb-0 text-body-emphasis fw-bold">KúrameMX</p>
                                    <div class="td-brand td-actions">
                                       <a href="{{url('app/admin/marcas/perfil')}}" class="text-body fw-normal">Perfil</a>
                                       <span class="mx-1">|</span>
                                       <a href="#" class="text-body fw-normal">Ventas</a>
                                    </div>
                                 </div>
                              </div>
                           </td>
                           <td class="responsable align-middle white-space-nowrap pe-5">
                              <p class="mb-0">Diego Torres</p>
                              <a href="https://wa.me/+522414209137" target="_blank" class="mb-0 text-body-quaternary td-actions"><i class="fa-brands fa-telegram text-info me-1"></i>241 420 9137</a>
                           </td>
                           <td class="ventas align-middle white-space-nowrap fw-bold ps-3 text-body-emphasis">
                              <span>$10,048.00</span>
                           </td>
                           <td class="inventario align-middle ps-3">
                              <span class="badge text-bg-success fw-normal fs-10 text-uppercase">Bueno</span>
                           </td>
                           <td class="mensualidad align-middle fw-semibold text-body-highlight">
                              <span class="badge badge-phoenix fs-10 badge-phoenix-success"><span class="badge-label"><span class="me-1 mb-1" data-feather="check" style="height:12px;width:12px;"></span>Cubierta</span></span>
                              <p class="m-0 mt-1 text-body-quaternary td-actions fs--"><span class="me-1 mb-1" data-feather="calendar" style="height:12px;width:12px;"></span>15 del mes</p>
                           </td>
                           <td class="visita align-middle ps-3 projectprogress">
                              <span class="badge badge-phoenix fs--2 badge-phoenix-secondary py-1">Sin agendar</span>
                           </td>
                           <td class="align-middle white-space-nowrap ps-4 btn-reveal-trigger">
                              <div class="btn-reveal-trigger position-static">
                                 <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                 <div class="dropdown-menu dropdown-menu-end py-2">
                                    <a class="dropdown-item" href="{{url('app/admin/marcas/perfil')}}"><i data-feather="eye" class="me-2"></i>Ver detalle</a>
                                    <a class="dropdown-item" href="javascript:void(0);"><i data-feather="edit-2" class="me-2"></i>Editar</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item btn-delete" href="javascript:void(0);"><i data-feather="trash-2" class="me-2"></i>Eliminar</a>
                                 </div>
                              </div>
                           </td>
                        </tr>

                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                           <td class="marca align-middle white-space-nowrap pe-5">
                              <div class="d-flex align-items-center text-body-emphasis" href="{{url('app/admin/marca-perfil')}}">
                                 <div class="avatar avatar-l">
                                    <img class="rounded-circle" src="{{ asset('admin/img/aldea_logo.jpg') }}" alt="" />
                                 </div>
                                 <div class="ms-3">
                                    <p class="mb-0 text-body-emphasis fw-bold">Tribu Urbana</p>
                                    <div class="td-brand td-actions">
                                       <a href="{{url('app/admin/marcas/perfil')}}" class="text-body fw-normal">Perfil</a>
                                       <span class="mx-1">|</span>
                                       <a href="#" class="text-body fw-normal">Ventas</a>
                                    </div>
                                 </div>
                              </div>
                           </td>
                           <td class="responsable align-middle white-space-nowrap pe-5">
                              <p class="mb-0">Jimena Ayala</p>
                              <a href="https://wa.me/+522414209137" target="_blank" class="mb-0 text-body-quaternary td-actions"><i class="fa-brands fa-telegram text-info me-1"></i>241 420 9137</a>
                           </td>
                           <td class="ventas align-middle white-space-nowrap fw-bold ps-3 text-body-emphasis">
                              <span>$5,412.00</span>
                           </td>
                           <td class="inventario align-middle ps-3">
                              <span class="badge text-bg-success fw-normal fs-10 text-uppercase">Bueno</span>
                           </td>
                           <td class="mensualidad align-middle fw-semibold text-body-highlight">
                              <span class="badge badge-phoenix fs-10 badge-phoenix-warning"><span class="badge-label"><span class="me-1 mb-1" data-feather="clock" style="height:12px;width:12px;"></span>Pendiente</span></span>
                              <p class="m-0 mt-1 text-body-quaternary td-actions fs--"><span class="me-1 mb-1" data-feather="calendar" style="height:12px;width:12px;"></span>02 del mes</p>
                           </td>
                           <td class="visita align-middle ps-3 projectprogress">
                              <span class="badge badge-phoenix fs--2 badge-phoenix-secondary py-1"><span class="me-1 mb-1" data-feather="dollar-sign" style="height:12px;width:12px;"></span>Corte mensual</span>
                              <p class="m-0 mt-1 text-body-quaternary fs--2">Hoy &middot; 2 - 3 pm</p>
                           </td>
                           <td class="align-middle white-space-nowrap ps-4 btn-reveal-trigger">
                              <div class="btn-reveal-trigger position-static">
                                 <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                 <div class="dropdown-menu dropdown-menu-end py-2">
                                    <a class="dropdown-item" href="{{url('app/admin/marcas/perfil')}}"><i data-feather="eye" class="me-2"></i>Ver detalle</a>
                                    <a class="dropdown-item" href="javascript:void(0);"><i data-feather="edit-2" class="me-2"></i>Editar</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item btn-delete" href="javascript:void(0);"><i data-feather="trash-2" class="me-2"></i>Eliminar</a>
                                 </div>
                              </div>
                           </td>
                        </tr>

                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                           <td class="marca align-middle white-space-nowrap pe-5">
                              <div class="d-flex align-items-center text-body-emphasis" href="{{url('app/admin/marca-perfil')}}">
                                 <div class="avatar avatar-l">
                                    <img class="rounded-circle" src="{{ asset('admin/img/aldea_logo.jpg') }}" alt="" />
                                 </div>
                                 <div class="ms-3">
                                    <p class="mb-0 text-body-emphasis fw-bold">Flor de Cacto</p>
                                    <div class="td-brand td-actions">
                                       <a href="{{url('app/admin/marcas/perfil')}}" class="text-body fw-normal">Perfil</a>
                                       <span class="mx-1">|</span>
                                       <a href="#" class="text-body fw-normal">Ventas</a>
                                    </div>
                                 </div>
                              </div>
                           </td>
                           <td class="responsable align-middle white-space-nowrap pe-5">
                              <p class="mb-0">Luis Paredes</p>
                              <a href="https://wa.me/+522414209137" target="_blank" class="mb-0 text-body-quaternary td-actions"><i class="fa-brands fa-whatsapp text-success me-1"></i>241 420 9137</a>
                           </td>
                           <td class="ventas align-middle white-space-nowrap fw-bold ps-3 text-body-emphasis">
                              <span>$8,663.00</span>
                           </td>
                           <td class="inventario align-middle ps-3">
                              <span class="badge text-bg-warning fw-normal fs-10 text-uppercase">Regular</span>
                           </td>
                           <td class="mensualidad align-middle fw-semibold text-body-highlight">
                              <span class="badge badge-phoenix fs-10 badge-phoenix-success"><span class="badge-label"><span class="me-1 mb-1" data-feather="check" style="height:12px;width:12px;"></span>Cubierta</span></span>
                              <p class="m-0 mt-1 text-body-quaternary td-actions fs--"><span class="me-1 mb-1" data-feather="calendar" style="height:12px;width:12px;"></span>19 del mes</p>
                           </td>
                           <td class="visita align-middle ps-3 projectprogress">
                              <span class="badge badge-phoenix fs--2 badge-phoenix-secondary py-1"><span class="me-1 mb-1" data-feather="refresh-ccw" style="height:12px;width:12px;"></span>Reabastecimiento</span>
                              <p class="m-0 mt-1 text-body-quaternary fs--2">En 3 días</p>
                           </td>
                           <td class="align-middle white-space-nowrap ps-4 btn-reveal-trigger">
                              <div class="btn-reveal-trigger position-static">
                                 <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                 <div class="dropdown-menu dropdown-menu-end py-2">
                                    <a class="dropdown-item" href="{{url('app/admin/marcas/perfil')}}"><i data-feather="eye" class="me-2"></i>Ver detalle</a>
                                    <a class="dropdown-item" href="javascript:void(0);"><i data-feather="edit-2" class="me-2"></i>Editar</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item btn-delete" href="javascript:void(0);"><i data-feather="trash-2" class="me-2"></i>Eliminar</a>
                                 </div>
                              </div>
                           </td>
                        </tr>

                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                           <td class="marca align-middle white-space-nowrap pe-5">
                              <div class="d-flex align-items-center text-body-emphasis" href="{{url('app/admin/marca-perfil')}}">
                                 <div class="avatar avatar-l">
                                    <img class="rounded-circle" src="{{ asset('admin/img/aldea_logo.jpg') }}" alt="" />
                                 </div>
                                 <div class="ms-3">
                                    <p class="mb-0 text-body-emphasis fw-bold">Ámbar Co.</p>
                                    <div class="td-brand td-actions">
                                       <a href="{{url('app/admin/marcas/perfil')}}" class="text-body fw-normal">Perfil</a>
                                       <span class="mx-1">|</span>
                                       <a href="#" class="text-body fw-normal">Ventas</a>
                                    </div>
                                 </div>
                              </div>
                           </td>
                           <td class="responsable align-middle white-space-nowrap pe-5">
                              <p class="mb-0">Gabriela Méndez</p>
                              <a href="https://wa.me/+522414209137" target="_blank" class="mb-0 text-body-quaternary td-actions"><i class="fa-brands fa-whatsapp text-success me-1"></i>241 420 9137</a>
                           </td>
                           <td class="ventas align-middle white-space-nowrap fw-bold ps-3 text-body-emphasis">
                              <span>$11,034.00</span>
                           </td>
                           <td class="inventario align-middle ps-3">
                              <span class="badge text-bg-success fw-normal fs-10 text-uppercase">Bueno</span>
                           </td>
                           <td class="mensualidad align-middle fw-semibold text-body-highlight">
                              <span class="badge badge-phoenix fs-10 badge-phoenix-success"><span class="badge-label"><span class="me-1 mb-1" data-feather="check" style="height:12px;width:12px;"></span>Cubierta</span></span>
                              <p class="m-0 mt-1 text-body-quaternary td-actions fs--"><span class="me-1 mb-1" data-feather="calendar" style="height:12px;width:12px;"></span>10 del mes</p>
                           </td>
                           <td class="visita align-middle ps-3 projectprogress">
                              <span class="badge badge-phoenix fs--2 badge-phoenix-secondary py-1">Sin agendar</span>
                           </td>
                           <td class="align-middle white-space-nowrap ps-4 btn-reveal-trigger">
                              <div class="btn-reveal-trigger position-static">
                                 <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                 <div class="dropdown-menu dropdown-menu-end py-2">
                                    <a class="dropdown-item" href="{{url('app/admin/marcas/perfil')}}"><i data-feather="eye" class="me-2"></i>Ver detalle</a>
                                    <a class="dropdown-item" href="javascript:void(0);"><i data-feather="edit-2" class="me-2"></i>Editar</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item btn-delete" href="javascript:void(0);"><i data-feather="trash-2" class="me-2"></i>Eliminar</a>
                                 </div>
                              </div>
                           </td>
                        </tr>

                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                           <td class="marca align-middle white-space-nowrap pe-5">
                              <div class="d-flex align-items-center text-body-emphasis" href="{{url('app/admin/marca-perfil')}}">
                                 <div class="avatar avatar-l">
                                    <img class="rounded-circle" src="{{ asset('admin/img/aldea_logo.jpg') }}" alt="" />
                                 </div>
                                 <div class="ms-3">
                                    <p class="mb-0 text-body-emphasis fw-bold">Nube Norte</p>
                                    <div class="td-brand td-actions">
                                       <a href="{{url('app/admin/marcas/perfil')}}" class="text-body fw-normal">Perfil</a>
                                       <span class="mx-1">|</span>
                                       <a href="#" class="text-body fw-normal">Ventas</a>
                                    </div>
                                 </div>
                              </div>
                           </td>
                           <td class="responsable align-middle white-space-nowrap pe-5">
                              <p class="mb-0">Iván López</p>
                              <a href="https://wa.me/+522414209137" target="_blank" class="mb-0 text-body-quaternary td-actions"><i class="fa-brands fa-telegram text-info me-1"></i>241 420 9137</a>
                           </td>
                           <td class="ventas align-middle white-space-nowrap fw-bold ps-3 text-body-emphasis">
                              <span>$9,831.00</span>
                           </td>
                           <td class="inventario align-middle ps-3">
                              <span class="badge text-bg-warning fw-normal fs-10 text-uppercase">Regular</span>
                           </td>
                           <td class="mensualidad align-middle fw-semibold text-body-highlight">
                              <span class="badge badge-phoenix fs-10 badge-phoenix-success"><span class="badge-label"><span class="me-1 mb-1" data-feather="check" style="height:12px;width:12px;"></span>Cubierta</span></span>
                              <p class="m-0 mt-1 text-body-quaternary td-actions fs--"><span class="me-1 mb-1" data-feather="calendar" style="height:12px;width:12px;"></span>30 del mes</p>
                           </td>
                           <td class="visita align-middle ps-3 projectprogress">
                              <span class="badge badge-phoenix fs--2 badge-phoenix-secondary py-1"><span class="me-1 mb-1" data-feather="dollar-sign" style="height:12px;width:12px;"></span>Corte mensual</span>
                              <p class="m-0 mt-1 text-body-quaternary fs--2">En 2 días</p>
                           </td>
                           <td class="align-middle white-space-nowrap ps-4 btn-reveal-trigger">
                              <div class="btn-reveal-trigger position-static">
                                 <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                 <div class="dropdown-menu dropdown-menu-end py-2">
                                    <a class="dropdown-item" href="{{url('app/admin/marcas/perfil')}}"><i data-feather="eye" class="me-2"></i>Ver detalle</a>
                                    <a class="dropdown-item" href="javascript:void(0);"><i data-feather="edit-2" class="me-2"></i>Editar</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item btn-delete" href="javascript:void(0);"><i data-feather="trash-2" class="me-2"></i>Eliminar</a>
                                 </div>
                              </div>
                           </td>
                        </tr>

                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                           <td class="marca align-middle white-space-nowrap pe-5">
                              <div class="d-flex align-items-center text-body-emphasis" href="{{url('app/admin/marca-perfil')}}">
                                 <div class="avatar avatar-l">
                                    <img class="rounded-circle" src="{{ asset('admin/img/aldea_logo.jpg') }}" alt="" />
                                 </div>
                                 <div class="ms-3">
                                    <p class="mb-0 text-body-emphasis fw-bold">Barro&Tela</p>
                                    <div class="td-brand td-actions">
                                       <a href="{{url('app/admin/marcas/perfil')}}" class="text-body fw-normal">Perfil</a>
                                       <span class="mx-1">|</span>
                                       <a href="#" class="text-body fw-normal">Ventas</a>
                                    </div>
                                 </div>
                              </div>
                           </td>
                           <td class="responsable align-middle white-space-nowrap pe-5">
                              <p class="mb-0">Renata Cruz</p>
                              <a href="https://wa.me/+522414209137" target="_blank" class="mb-0 text-body-quaternary td-actions"><i class="fa-brands fa-whatsapp text-success me-1"></i>241 420 9137</a>
                           </td>
                           <td class="ventas align-middle white-space-nowrap fw-bold ps-3 text-body-emphasis">
                              <span>$9,142.00</span>
                           </td>
                           <td class="inventario align-middle ps-3">
                              <span class="badge text-bg-success fw-normal fs-10 text-uppercase">Bueno</span>
                           </td>
                           <td class="mensualidad align-middle fw-semibold text-body-highlight">
                              <span class="badge badge-phoenix fs-10 badge-phoenix-success"><span class="badge-label"><span class="me-1 mb-1" data-feather="check" style="height:12px;width:12px;"></span>Cubierta</span></span>
                              <p class="m-0 mt-1 text-body-quaternary td-actions fs--"><span class="me-1 mb-1" data-feather="calendar" style="height:12px;width:12px;"></span>01 del mes</p>
                           </td>
                           <td class="visita align-middle ps-3 projectprogress">
                              <span class="badge badge-phoenix fs--2 badge-phoenix-secondary py-1"><span class="me-1 mb-1" data-feather="archive" style="height:12px;width:12px;"></span>Entrega de mercancía</span>
                              <p class="m-0 mt-1 text-body-quaternary fs--2">En 5 días</p>
                           </td>
                           <td class="align-middle white-space-nowrap ps-4 btn-reveal-trigger">
                              <div class="btn-reveal-trigger position-static">
                                 <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                 <div class="dropdown-menu dropdown-menu-end py-2">
                                    <a class="dropdown-item" href="{{url('app/admin/marcas/perfil')}}"><i data-feather="eye" class="me-2"></i>Ver detalle</a>
                                    <a class="dropdown-item" href="javascript:void(0);"><i data-feather="edit-2" class="me-2"></i>Editar</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item btn-delete" href="javascript:void(0);"><i data-feather="trash-2" class="me-2"></i>Eliminar</a>
                                 </div>
                              </div>
                           </td>
                        </tr>

                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                           <td class="marca align-middle white-space-nowrap pe-5">
                              <div class="d-flex align-items-center text-body-emphasis" href="{{url('app/admin/marca-perfil')}}">
                                 <div class="avatar avatar-l">
                                    <img class="rounded-circle" src="{{ asset('admin/img/aldea_logo.jpg') }}" alt="" />
                                 </div>
                                 <div class="ms-3">
                                    <p class="mb-0 text-body-emphasis fw-bold">Estilo Tierra</p>
                                    <div class="td-brand td-actions">
                                       <a href="{{url('app/admin/marcas/perfil')}}" class="text-body fw-normal">Perfil</a>
                                       <span class="mx-1">|</span>
                                       <a href="#" class="text-body fw-normal">Ventas</a>
                                    </div>
                                 </div>
                              </div>
                           </td>
                           <td class="responsable align-middle white-space-nowrap pe-5">
                              <p class="mb-0">Tomás Herrera</p>
                              <a href="https://wa.me/+522414209137" target="_blank" class="mb-0 text-body-quaternary td-actions"><i class="fa-brands fa-whatsapp text-success me-1"></i>241 420 9137</a>
                           </td>
                           <td class="ventas align-middle white-space-nowrap fw-bold ps-3 text-body-emphasis">
                              <span>$6,652.00</span>
                           </td>
                           <td class="inventario align-middle ps-3">
                              <span class="badge text-bg-danger fw-normal fs-10 text-uppercase">Malo</span>
                           </td>
                           <td class="mensualidad align-middle fw-semibold text-body-highlight">
                              <span class="badge badge-phoenix fs-10 badge-phoenix-success"><span class="badge-label"><span class="me-1 mb-1" data-feather="check" style="height:12px;width:12px;"></span>Cubierta</span></span>
                              <p class="m-0 mt-1 text-body-quaternary td-actions fs--"><span class="me-1 mb-1" data-feather="calendar" style="height:12px;width:12px;"></span>15 del mes</p>
                           </td>
                           <td class="visita align-middle ps-3 projectprogress">
                              <span class="badge badge-phoenix fs--2 badge-phoenix-secondary py-1">Sin agendar</span>
                           </td>
                           <td class="align-middle white-space-nowrap ps-4 btn-reveal-trigger">
                              <div class="btn-reveal-trigger position-static">
                                 <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                 <div class="dropdown-menu dropdown-menu-end py-2">
                                    <a class="dropdown-item" href="{{url('app/admin/marcas/perfil')}}"><i data-feather="eye" class="me-2"></i>Ver detalle</a>
                                    <a class="dropdown-item" href="javascript:void(0);"><i data-feather="edit-2" class="me-2"></i>Editar</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item btn-delete" href="javascript:void(0);"><i data-feather="trash-2" class="me-2"></i>Eliminar</a>
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

         @include('layout.administrador.footer')

      </div>

      <!-- Modal detalle -->
      <div class="modal fade" id="addBrandModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content rounded-4">
               <div class="modal-header">
                  <!-- <h3 class="modal-title" id="addUserModalLabel">Agregar rol</h3> -->

                  <div class="d-flex align-items-center" id="scrollspyForms">
                     <span class="fa-stack me-2 ms-n1">
                        <i class="fas fa-circle fa-stack-2x text-gray-200"></i>
                        <i class="fa-inverse fa-stack-1x text-gray-500" data-feather="plus" style="height: 15px; width: 15px;" data-fa-transform="shrink-2"></i>
                        <!-- <i class="fa-inverse fa-stack-1x text-primary-subtle fas fa-file-alt" data-fa-transform="shrink-2"></i> -->
                     </span>
                     <div class="col">
                        <h5 class="mb-0 position-relative fw-bold"><span>Nueva marca</span></h5>
                        <p class="mb-0 fs-9 small">Genera una invitación para {nombre colectivo}</p>
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
                                 <label class="form-label" for="brandInput">Nombre de la marca</label>
                                 <input class="form-control form-control-sm" id="brandInput" type="text" />
                              </div>
                              <hr class="my-3 mb-0">
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
                           </div>
                        </div>
                     </div>
                     <div class="col-md-5 bg-light border-start">
                        <div class="p-3">
                           <h5 class="mb-2">Datos de acceso</h5>
                           <p class="small">Tu invitado recibirá un correo para unirse a <strong>{nombre colectivo}</strong>. Obtendrá un enlace para inscribir su marca y no tendrás que preocuparte por registrar todo.</p>
                           <p class="small mb-3">A continuación establece una contraseña para que acceda a su invitación.</p>

                           <div class="mb-2">
                              <label class="form-label" for="userInput">Usuario</label>
                              <input class="form-control form-control-sm" id="userInput" type="text" disabled />
                           </div>
                           <div class="mb-2">
                              <label class="form-label" for="passInput">Contraseña</label>
                              <input class="form-control form-control-sm" id="passInput" type="text" />
                           </div>
                        </div>
                     </div>
                  </div>

               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-inverse-light" data-bs-dismiss="modal">Cancelar</button>
                  <button type="button" class="btn btn-primary">Registrar y enviar invitación</button>
               </div>
            </div>
         </div>
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

   <script src="{{ asset('admin/js/marcas/active-brands.js') }}"></script>

</body>

</html>