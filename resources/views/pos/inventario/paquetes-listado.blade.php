@php
$title = 'Paquetes / recolecciones';
@endphp

@include('layout.administrador.header')

<body data-page="pickups-page">

   <main class="main" id="top">

      @include('layout.administrador.sidebar')
      @include('layout.administrador.topbar')

      <div class="content">

         <div class="d-flex justify-content-between">
            <div class="col-auto">
               <h2 class="mb-0">Paquetes / recolecciones</h2>
            </div>
         </div>

         <div class="d-flex flex-wrap gap-2 my-3">
            <a href="{{url('app/admin/inventario/')}}" class="btn btn-subtle-secondary btn-sm">Todos (200)</a>
            <a href="javascript:void(0);{{url('app/admin/inventario/paquetes')}}" class="btn btn-primary btn-sm pe-none">Paquetes (26)</a>
            <a href="{{url('app/admin/inventario/apartados')}}" class="btn btn-subtle-secondary btn-sm">Apartados (18)</a>
         </div>

         <!-- Table -->
         <div id="products" data-list='{"valueNames":["articulo","cliente","marca","precio","estado","plazo","ubicacion"],"page":10,"pagination":true}'>

            <div class="mb-3">
               <div class="row g-3">
                  <div class="col-auto">
                     <div class="search-box">
                        <form class="position-relative">
                           <input class="form-control search-input search" type="search" placeholder="Buscar producto..." aria-label="Search" />
                           <span class="fas fa-search search-box-icon"></span>

                        </form>
                     </div>
                  </div>
                  <div class="col-auto scrollbar overflow-hidden-y flex-grow-1">
                     <button class="btn btn-sm px-3 btn-phoenix-secondary" type="button" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"><i data-feather="sliders" style="height:14px;width:14px;" class="me-1"></i> Más filtros</button>
                  </div>
                  <div class="col-auto">
                     <a class="btn btn-sm btn-phoenix-primary px-3 me-1 text-body btn-list-style"
                        href="javascript:void(0);" data-bs-toggle="tooltip" id="listaCompacta"
                        data-bs-placement="top" data-bs-title="Lista compacta"><span class="fa-solid fa-list fs-10"></span>
                     </a>
                     <a class="btn btn-sm btn-phoenix-primary px-3 me-1 text-body border-0 btn-list-style bg-gray-300"
                        href="javascript:void(0);" data-bs-toggle="tooltip" id="listaExtendida"
                        data-bs-placement="top" data-bs-title="Lista extendida"><span class="" data-feather="list"></span>
                     </a>

                  </div>
               </div>

               <div class="collapse" id="collapseExample">
                  <form class="row gy-2 gx-2 mt-2 align-items-center more-filters bg-body-emphasis p-2 border rounded-2">

                     <div class="col-md-4">
                        <label class="form-label" for="marcaFilter">Marca</label>
                        <select class="form-select form-select-sm" id="marcaFilter" multiple>
                           <option>MagentaTLX</option>
                           <option>Luna Boutique</option>
                           <option>Mora Studio</option>
                           <option>Casa Nube</option>
                           <option>Alma Joyería</option>
                        </select>
                     </div>

                     <div class="col-md-2">
                        <label class="form-label" for="estatusFilter">Sucursal</label>
                        <select class="form-select form-select-sm" id="estatusFilter">
                           <option disabled selected="selected">Elige...</option>
                           <option value="1">Sucursal centro</option>
                           <option value="2">Sucursal parque</option>
                        </select>
                     </div>

                     <div class="col-md-2">
                        <label class="form-label" for="estatusFilter">Estado pago</label>
                        <select class="form-select form-select-sm" id="estatusFilter">
                           <option disabled selected="selected">Elige...</option>
                           <option value="1">Pagado</option>
                           <option value="2">Por pagar</option>
                        </select>
                     </div>

                     <div class="col-md-2">
                        <label class="form-label" for="estatusFilter">Plazo</label>
                        <select class="form-select form-select-sm" id="estatusFilter">
                           <option disabled selected="selected">Elige...</option>
                           <option value="1">En plazo</option>
                           <option value="2">Por vencer</option>
                           <option value="2">Vencido</option>
                        </select>
                     </div>

                     <div class="col-auto">
                        <button class="btn btn-sm btn-primary mt-sm-4" type="submit"><span class="fa-solid fa-search me-2" data-fa-transform="down-3"></span>Buscar</button>
                        <a class="btn btn-sm btn-primary mt-sm-4" href="{{url('app/admin/inventario/apartados')}}" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Limpiar filtros">
                           <span class="fa-solid fa-arrows-rotate" data-fa-transform="down-3"></span>
                        </a>
                     </div>

                  </form>
               </div>

            </div>

            <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-body-emphasis border-top border-bottom border-translucent position-relative top-1">
               <div class="table-responsive dropdown-table-visible scrollbar-overlay mx-n1 px-1">
                  <table id="packagesTable" class="table table-hover fs-9 mb-0 w-100 kollabi-table">
                     <thead>
                        <tr>
                           <th class="sort align-middle pe-5 py-3" scope="col" data-sort="articulo">ARTÍCULO</th>
                           <th class="sort align-middle pe-5 py-3" scope="col" data-sort="cliente">CLIENTE</th>
                           <th class="sort align-middle py-3" scope="col" data-sort="marca">MARCA</th>
                           <th class="sort align-middle py-3" scope="col" data-sort="precio">COSTO</th>
                           <th class="sort align-middle py-3" scope="col" data-sort="estado">ESTADO PAGO</th>
                           <th class="sort align-middle py-3" scope="col" data-sort="plazo">PLAZO</th>
                           <th class="sort align-middle py-3" scope="col" data-sort="ubicacion">UBICACIÓN</th>
                           <th class="sort align-middle py-3" scope="col" data-sort=""></th>
                        </tr>
                     </thead>
                     <tbody class="list" id="packages-table-body">

                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                           <td class="articulo align-middle white-space-nowrap pe-5">
                              <a class="d-flex align-items-center" href="#package-offcanvas" data-bs-toggle="offcanvas">
                                 <div class="avatar avatar-l">
                                    <img class="rounded-3" src="{{ asset('admin/img/placeholders/image-placeholder.svg') }}" alt="" />
                                 </div>
                                 <div class="ms-3">
                                    <p class="mb-0 fw-semibold text-body-emphasis">Vela aromática</p>
                                    <p class="mb-0 text-body-quaternary">SKU: PK-0001</p>
                                 </div>
                              </a>
                           </td>
                           <td class="cliente align-middle white-space-nowrap fw-semibold">
                              <p class="mb-0">Mariana López</p>
                           </td>
                           <td class="marca align-middle white-space-nowrap pe-5">
                              <p class="mb-0 fw-semibold">Casa nube</p>
                           </td>
                           <td class="precio align-middle white-space-nowrap fw-semibold">
                              <p class="mb-0">$120.00</p>
                           </td>
                           <td class="estado align-middle">
                              <span class="badge badge-phoenix badge-phoenix-warning">Por pagar</span>
                           </td>
                           <td class="plazo align-middle white-space-nowrap fw-semibold">
                              <span class="badge badge-phoenix badge-phoenix-success">En plazo</span>
                              <p class="mb-0 text-body-quaternary">Vence en 23 días</p>
                           </td>
                           <td class="ubicacion align-middle">
                              <p class="mb-0 fw-semibold">Sucursal centro</p>
                              <p class="mb-0 text-body-quaternary"><span class="me-1 mb-1" data-feather="map-pin" style="height:12px;width:12px;"></span>Bodega</span></p>
                           </td>
                           <td class="align-middle white-space-nowrap ps-4 btn-reveal-trigger">
                              <div class="btn-reveal-trigger position-static">
                                 <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                 <div class="dropdown-menu dropdown-menu-end py-2">
                                    <a class="dropdown-item" href="#package-offcanvas" data-bs-toggle="offcanvas"><i data-feather="eye" class="me-2"></i>Ver detalle</a>
                                    <a class="dropdown-item btn-cancel-package"
                                       data-code="PK-0002"
                                       data-customer="Andrea Martínez"
                                       data-brand="Casa Nube"
                                       data-item="Vela aromática"
                                       href="javascript:void(0);">
                                       <i data-feather="slash" class="me-2"></i>Cancelar</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item btn-complete-unpaid-pickup"
                                       data-code="PK-0002"
                                       data-customer="Andrea Martínez"
                                       data-brand="Casa Nube"
                                       data-item="Vela aromática"
                                       data-total="120"
                                       href="javascript:void(0);">
                                       <i data-feather="shopping-bag" class="me-2"></i>Cobrar y entregar</a>
                                 </div>
                              </div>
                           </td>
                        </tr>

                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                           <td class="articulo align-middle white-space-nowrap pe-5">
                              <a class="d-flex align-items-center" href="#package-offcanvas" data-bs-toggle="offcanvas">
                                 <div class="avatar avatar-l">
                                    <img class="rounded-3" src="{{ asset('admin/img/placeholders/image-placeholder.svg') }}" alt="" />
                                 </div>
                                 <div class="ms-3">
                                    <p class="mb-0 fw-semibold text-body-emphasis">Aretes de perla</p>
                                    <p class="mb-0 text-body-quaternary">SKU: PK-0002</p>
                                 </div>
                              </a>
                           </td>
                           <td class="cliente align-middle white-space-nowrap fw-semibold">
                              <p class="mb-0">Andrea Martínez</p>
                           </td>
                           <td class="marca align-middle white-space-nowrap pe-5">
                              <p class="mb-0 fw-semibold">Magenta TLX</p>
                           </td>
                           <td class="precio align-middle white-space-nowrap fw-semibold">
                              <p class="mb-0">$0.00</p>
                           </td>
                           <td class="estado align-middle">
                              <span class="badge badge-phoenix badge-phoenix-success">Pagado</span>
                           </td>
                           <td class="plazo align-middle white-space-nowrap fw-semibold">
                              <span class="badge badge-phoenix badge-phoenix-warning">Por vencer</span>
                              <p class="mb-0 text-body-quaternary">Vence en 7 días</p>
                           </td>
                           <td class="ubicacion align-middle">
                              <p class="mb-0 fw-semibold">Sucursal centro</p>
                              <p class="mb-0 text-body-quaternary"><span class="me-1 mb-1" data-feather="map-pin" style="height:12px;width:12px;"></span>Bodega</span></p>
                           </td>
                           <td class="align-middle white-space-nowrap ps-4 btn-reveal-trigger">
                              <div class="btn-reveal-trigger position-static">
                                 <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                 <div class="dropdown-menu dropdown-menu-end py-2">
                                    <a class="dropdown-item" href="#package-offcanvas" data-bs-toggle="offcanvas"><i data-feather="eye" class="me-2"></i>Ver detalle</a>
                                    <a class="dropdown-item btn-cancel-package"
                                       data-code="PK-0002"
                                       data-customer="Andrea Martínez"
                                       data-brand="Casa Nube"
                                       data-item="Vela aromática"
                                       href="javascript:void(0);">
                                       <i data-feather="slash" class="me-2"></i>Cancelar</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item btn-complete-paid-pickup"
                                       data-code="PK-0002"
                                       data-customer="Andrea Martínez"
                                       data-brand="Casa Nube"
                                       data-item="Vela aromática"
                                       href="javascript:void(0);">
                                       <i data-feather="shopping-bag" class="me-2"></i>Registrar entrega</a>
                                 </div>
                              </div>
                           </td>
                        </tr>

                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                           <td class="articulo align-middle white-space-nowrap pe-5">
                              <a class="d-flex align-items-center" href="#package-offcanvas" data-bs-toggle="offcanvas">
                                 <div class="avatar avatar-l">
                                    <img class="rounded-3" src="{{ asset('admin/img/placeholders/image-placeholder.svg') }}" alt="" />
                                 </div>
                                 <div class="ms-3">
                                    <p class="mb-0 fw-semibold text-body-emphasis">Collar perrito</p>
                                    <p class="mb-0 text-body-quaternary">SKU: PK-0003</p>
                                 </div>
                              </a>
                           </td>
                           <td class="cliente align-middle white-space-nowrap fw-semibold">
                              <p class="mb-0">Andrea Martínez</p>
                           </td>
                           <td class="marca align-middle white-space-nowrap pe-5">
                              <p class="mb-0 fw-semibold">Magenta TLX</p>
                           </td>
                           <td class="precio align-middle white-space-nowrap fw-semibold">
                              <p class="mb-0">$0.00</p>
                           </td>
                           <td class="estado align-middle">
                              <span class="badge badge-phoenix badge-phoenix-success">Pagado</span>
                           </td>
                           <td class="plazo align-middle white-space-nowrap fw-semibold">
                              <span class="badge badge-phoenix badge-phoenix-danger">Vencido</span>
                              <p class="mb-0 text-body-quaternary">Venció hace 2 días</p>
                           </td>
                           <td class="ubicacion align-middle">
                              <p class="mb-0 fw-semibold">Sucursal parque</p>
                              <p class="mb-0 text-body-quaternary"><span class="me-1 mb-1" data-feather="map-pin" style="height:12px;width:12px;"></span>Bodega</span></p>
                           </td>
                           <td class="align-middle white-space-nowrap ps-4 btn-reveal-trigger">
                              <div class="btn-reveal-trigger position-static">
                                 <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                 <div class="dropdown-menu dropdown-menu-end py-2">
                                    <a class="dropdown-item" href="#package-offcanvas" data-bs-toggle="offcanvas"><i data-feather="eye" class="me-2"></i>Ver detalle</a>
                                    <a class="dropdown-item btn-cancel-package"
                                       data-code="PK-0002"
                                       data-customer="Andrea Martínez"
                                       data-brand="Casa Nube"
                                       data-item="Vela aromática"
                                       href="javascript:void(0);">
                                       <i data-feather="slash" class="me-2"></i>Cancelar</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item btn-complete-paid-pickup"
                                       data-code="PK-0002"
                                       data-customer="Andrea Martínez"
                                       data-brand="Casa Nube"
                                       data-item="Vela aromática"
                                       href="javascript:void(0);">
                                       <i data-feather="shopping-bag" class="me-2"></i>Registrar entrega</a>
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

      <!-- Start Offcanvas: Detalle de recolección -->
      <div class="offcanvas offcanvas-end settings-panel border-0" id="package-offcanvas" tabindex="-1" aria-labelledby="package-offcanvas-label">

         <div class="loading-shape"><span>Cargando...</span></div>

         <div class="offcanvas-header align-items-start border-bottom flex-column border-translucent">
            <div class="pt-1 w-100 d-flex justify-content-between align-items-center">
               <button class="btn p-1 fw-semibolder" type="button" data-bs-dismiss="offcanvas" aria-label="Close">
                  <i class="fa-solid fa-arrow-right-from-bracket fs-7"></i>
               </button>

            </div>
         </div>

         <div class="offcanvas-body scrollbar px-0 pb-10 fs-9" id="themeController">

            <!-- Resumen del artículo -->
            <div class="px-3">
               <div class="card">
                  <div class="p-3">
                     <div class="row g-3 align-items-center">

                        <div class="col-5" id="image_gallery">
                           <a class="col-sm-6 col-md-4 col-xl-3 text-center text-decoration-none img-zoom-hover glightbox4 overflow-hidden"
                              href="{{ asset('admin/img/placeholders/image-placeholder.svg') }}"
                              data-glightbox="title: Aretes de plata; description: .custom-desc-recoleccion-1; descPosition: right;">

                              <div class="hoverbox rounded-2 photo-details">
                                 <img class="img-fluid object-fit-cover" src="{{ asset('admin/img/placeholders/image-placeholder.svg') }}" alt="Aretes de plata" />

                                 <div class="hoverbox-content flex-center">
                                    <div class="rounded-pill bg-white d-flex flex-center" style="width: 60px; height: 60px">
                                       <span class="text-secondary" data-feather="zoom-in" style="height: 30px; width: 30px;"></span>
                                    </div>
                                 </div>
                              </div>
                           </a>

                           <div class="glightbox-desc custom-desc-recoleccion-1">
                              <p class="mb-1"><span class="text-body-quaternary">SKU/Código: PK-0001</span></p>
                              <p class="mb-1">$420.00</p>
                              <p class="mb-1">MagentaTLX</p>
                              <p class="mb-0">
                                 <span class="badge badge-phoenix fs-10 badge-phoenix-warning">Por pagar</span>
                              </p>
                           </div>
                        </div>

                        <div class="col-7">
                           <div class="d-flex align-items-center gap-2 mb-2 flex-wrap">
                              <span class="badge badge-phoenix fs-10 badge-phoenix-warning">Por pagar</span>
                              <span class="badge badge-phoenix fs-10 badge-phoenix-success">En plazo</span>
                           </div>

                           <h4 class="mb-2 fw-semibold text-body-emphasis" id="package-offcanvas-label">
                              Aretes de plata
                           </h4>

                           <p class="mb-2 text-body-tertiary">SKU/Código: PK-0001</p>

                           <h5 class="mb-2 fw-normal">$420.00</h5>

                           <p class="mb-0 text-body-tertiary">
                              Para entregar a <strong>Mariana López</strong>
                           </p>
                        </div>

                     </div>
                  </div>
               </div>
            </div>

            <hr>

            <!-- Cliente -->
            <div class="px-3">
               <div class="mb-3">
                  <h5 class="my-4">Cliente</h5>

                  <div class="row g-3 flex-sm-column">

                     <div class="col-6 col-sm-12">
                        <div class="d-flex align-items-center mb-1">
                           <span class="me-2" data-feather="user" style="stroke-width:2.5;"></span>
                           <h6 class="mb-0">Nombre</h6>
                        </div>
                        <p class="mb-0 fs-9 ms-4">Mariana López</p>
                     </div>

                     <div class="col-6 col-sm-12">
                        <div class="d-flex align-items-center mb-1">
                           <span class="me-2" data-feather="phone" style="stroke-width:2.5;"></span>
                           <h6 class="mb-0">WhatsApp</h6>
                        </div>
                        <p class="mb-0 fs-9 ms-4">246 123 4567</p>
                     </div>

                     <div class="col-6 col-sm-12">
                        <div class="d-flex align-items-center mb-1">
                           <span class="me-2" data-feather="mail" style="stroke-width:2.5;"></span>
                           <h6 class="mb-0">Correo electrónico</h6>
                        </div>
                        <p class="mb-0 fs-9 ms-4">mariana@email.com</p>
                     </div>

                  </div>
               </div>
            </div>

            <hr>

            <!-- Resumen de pago -->
            <div class="px-3">
               <div class="mb-3">
                  <div class="d-flex justify-content-between align-items-center mb-3">
                     <h5 class="mb-0">Resumen de pago</h5>
                     <span class="badge badge-phoenix fs-10 badge-phoenix-warning">Por pagar</span>
                  </div>

                  <div class="card bg-light border-0">
                     <div class="card-body p-3">

                        <div class="d-flex justify-content-between align-items-center mb-2">
                           <span class="text-body-tertiary">Precio del artículo</span>
                           <strong>$420.00</strong>
                        </div>

                        <div class="d-flex justify-content-between align-items-center mb-2">
                           <span class="text-body-tertiary">Total</span>
                           <strong>$420.00</strong>
                        </div>

                        <div class="d-flex justify-content-between align-items-center mb-2">
                           <span class="text-body-tertiary">Pagado</span>
                           <strong class="text-success">$0.00</strong>
                        </div>

                        <hr class="my-2">

                        <div class="d-flex justify-content-between align-items-center">
                           <span class="fw-semibold">Pendiente por pagar</span>
                           <strong class="text-body-emphasis">$420.00</strong>
                        </div>

                     </div>
                  </div>

               </div>
            </div>

            <hr>

            <!-- Datos del artículo -->
            <div class="px-3">
               <div class="mb-3">
                  <h5 class="my-4">Datos del artículo</h5>

                  <div class="row g-3 flex-sm-column">

                     <div class="col-6 col-sm-12">
                        <div class="d-flex align-items-center mb-1">
                           <span class="me-2" data-feather="shopping-bag" style="stroke-width:2.5;"></span>
                           <h6 class="mb-0">Marca</h6>
                        </div>
                        <p class="mb-0 fs-9 ms-4">MagentaTLX</p>
                     </div>

                     <div class="col-6 col-sm-12">
                        <div class="d-flex align-items-center mb-1">
                           <span class="me-2" data-feather="tag" style="stroke-width:2.5;"></span>
                           <h6 class="mb-0">Categoría</h6>
                        </div>
                        <p class="mb-0 fs-9 ms-4">Joyería y accesorios</p>
                     </div>

                     <div class="col-6 col-sm-12">
                        <div class="d-flex align-items-center mb-1">
                           <span class="me-2" data-feather="archive" style="stroke-width:2.5;"></span>
                           <h6 class="mb-0">Tipo de paquete</h6>
                        </div>
                        <p class="mb-0 fs-9 ms-4">Artículo individual</p>
                     </div>

                     <div class="col-6 col-sm-12">
                        <div class="d-flex align-items-center mb-1">
                           <span class="me-2" data-feather="calendar" style="stroke-width:2.5;"></span>
                           <h6 class="mb-0">Plazo</h6>
                        </div>
                        <p class="mb-0 ms-4">
                           <span class="badge badge-phoenix fs-10 badge-phoenix-success">En plazo</span>
                        <p class="mb-0 fs-9 ms-4">Vence en 23 días</p>
                     </div>

                     <div class="col-6 col-sm-12">
                        <div class="d-flex align-items-center mb-1">
                           <span class="me-2" data-feather="user-check" style="stroke-width:2.5;"></span>
                           <h6 class="mb-0">Registrado por</h6>
                        </div>
                        <p class="mb-0 fs-9 ms-4">Elizabeth Hernandez</p>
                     </div>

                     <div class="col-6 col-sm-12">
                        <div class="d-flex align-items-center mb-1">
                           <span class="me-2" data-feather="map-pin" style="stroke-width:2.5;"></span>
                           <h6 class="mb-0">Ubicación</h6>
                        </div>
                        <p class="mb-0 fs-9 ms-4">Sucursal Centro</p>
                        <p class="mb-0 fs-9 ms-4">Bodega 1</p>
                     </div>

                  </div>
               </div>
            </div>

            <hr>

            <!-- Indicaciones de entrega -->
            <div class="px-3">
               <div class="mb-3">
                  <h5 class="mb-3">Indicaciones de entrega</h5>

                  <div class="border rounded-3 p-3 bg-light">
                     <p class="mb-0 fs-9">
                        Validar nombre completo del cliente antes de entregar. El paquete ya se encuentra pagado y listo para entregar.
                     </p>
                  </div>
               </div>
            </div>

         </div>

         <div class="offcanvas-fixed-footer border-top bg-white px-3 py-3">
            <button class="btn btn-primary w-100" type="button">
               <span data-feather="check-circle" class="me-1" style="height: 15px; width: 15px;"></span>
               Registrar entrega
            </button>
         </div>

      </div>
      <!-- End Offcanvas: Detalle de recolección -->

   </main>

   @include('layout.administrador.assets')

   <link href="{{ asset('admin/vendors/glightbox/glightbox.min.css') }}" rel="stylesheet">

   <!-- Select 2 -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

   <!-- Range -->
   <link href="{{ asset('admin/vendors/nouislider/nouislider.min.css') }}" rel="stylesheet">
   <script src="{{ asset('admin/vendors/nouislider/nouislider.min.js') }}"></script>

   <!-- Datepickers -->
   <link href="{{ asset('admin/vendors/flatpickr/flatpickr.min.css') }}" rel="stylesheet">
   <script src="{{ asset('admin/vendors/flatpickr/flatpickr.min.js') }}"></script>

   <script src="{{ asset('admin/vendors/glightbox/glightbox.min.js') }}"></script>

   <script src="{{ asset('admin/js/inventario/paquetes.js') }}"></script>

</body>

</html>