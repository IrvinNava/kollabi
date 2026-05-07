@php
$title = 'Ventas';
@endphp

@include('layout.administrador.header')

<body data-page="sales-page">

   <main class="main" id="top">

      @include('layout.administrador.sidebar')
      @include('layout.administrador.topbar')

      <div class="content">

         <div class="d-flex justify-content-between">
            <div class="col-auto">
               <h2 class="mb-0">Ventas</h2>
            </div>
         </div>

         <!-- Statistics cards -->
         <div class="row g-3 mt-1 mb-4">
            <div class="col-12 col-sm-6 col-xl-3">
               <div class="card border-0 shadow-sm h-100">
                  <div class="card-body">
                     <div class="d-flex justify-content-between align-items-start">
                        <div>
                           <p class="text-muted mb-1">Total vendido hoy</p>
                           <h3 class="mb-0">$9,185.00</h3>
                        </div>
                        <div class="d-flex bg-body-highlight borde rounded-3 p-2">
                           <i data-feather="grid" style="width: 18px; height: 18px;"></i>
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
                           <p class="text-muted mb-1">Ventas realizadas</p>
                           <h3 class="mb-0">65</h3>
                        </div>
                        <div class="d-flex bg-body-highlight rounded-3 p-2">
                           <i data-feather="clipboard" style="width: 18px; height: 18px;"></i>
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
                           <p class="text-muted mb-1">Artículos vendidos</p>
                           <h3 class="mb-0">112</h3>
                        </div>
                        <div class="d-flex bg-body-highlight rounded-3 p-2">
                           <i data-feather="shopping-bag" style="width: 18px; height: 18px;"></i>
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
                           <p class="text-muted mb-1">Ticket promedio</p>
                           <h3 class="mb-0">$100.00</h3>
                        </div>
                        <div class="d-flex bg-body-highlight rounded-3 p-2">
                           <i data-feather="archive" style="width: 18px; height: 18px;"></i>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <!-- Table -->
         <div id="products" data-list='{"valueNames":["folio","fecha","productos","metodo","subtotal","descuento","total","vendedor"],"page":10,"pagination":true}'>

            <div class="mb-3">
               <div class="row g-3">
                  <div class="col-auto">
                     <div class="search-box">
                        <form class="position-relative">
                           <input class="form-control form-control-sm search-input search" type="search" placeholder="Buscar folio..." aria-label="Search" />
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
                     <a href="javascript:void(0);" class="btn btn-sm btn-primary">
                        <div class="d-flex align-items-center">
                           <i data-feather="clipboard" style="width: 14px; height: 14px;"></i>
                           Realizar corte
                        </div>
                     </a>

                  </div>
               </div>

               <div class="collapse" id="collapseExample">
                  <form class="row gy-2 gx-2 mt-2 align-items-center more-filters bg-body-emphasis p-2 border rounded-2">

                     <div class="col-md-2">
                        <label class="form-label" for="estatusFilter">Periodo</label>
                        <select class="form-select form-select-sm" id="estatusFilter">
                           <option value="1" selected>Hoy</option>
                           <option value="2">Esta semana</option>
                        </select>
                     </div>

                     <div class="col-md-2">
                        <label class="form-label" for="metodoPago">Método de pago</label>
                        <select class="form-select form-select-sm" id="metodoPago">
                           <option disabled selected>Elige...</option>
                           <option value="1">Efectivo</option>
                           <option value="2">Tarjeta</option>
                           <option value="3">Transferencia</option>
                        </select>
                     </div>

                     <div class="col-auto">
                        <button class="btn btn-sm btn-primary mt-sm-4" type="submit"><span class="fa-solid fa-search me-2" data-fa-transform="down-3"></span>Buscar</button>
                        <a class="btn btn-sm btn-primary mt-sm-4" href="{{url('app/admin/inventario')}}" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Limpiar filtros">
                           <span class="fa-solid fa-arrows-rotate" data-fa-transform="down-3"></span>
                        </a>
                     </div>

                  </form>
               </div>

            </div>

            <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-body-emphasis border-top border-bottom border-translucent position-relative top-1">
               <div class="table-responsive scrollbar-overlay mx-n1 px-1">
                  <table id="productsTable" class="table table-hover fs-9 mb-0 w-100 kollabi-table">
                     <thead>
                        <tr>
                           <th class="sort align-middle py-3" scope="col" data-sort="folio">FOLIO</th>
                           <th class="sort align-middle py-3" scope="col" data-sort="fecha">FECHA</th>
                           <th class="sort align-middle py-3" scope="col" data-sort="productos">PRODUCTOS</th>
                           <th class="sort align-middle py-3" scope="col" data-sort="metodo">MÉTODO</th>
                           <th class="sort align-middle py-3" scope="col" data-sort="subtotal">SUBTOTAL</th>
                           <th class="sort align-middle py-3" scope="col" data-sort="descuento">DESCUENTO</th>
                           <th class="sort align-middle py-3" scope="col" data-sort="total">TOTAL</th>
                           <th class="sort align-middle py-3" scope="col" data-sort="vendedor">ATENDIÓ</th>
                           <th class="sort align-middle py-3" scope="col" data-sort=""></th>
                        </tr>
                     </thead>
                     <tbody class="list" id="products-table-body">

                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                           <td class="folio align-middle white-space-nowrap">
                              <a class="text-body-emphasis ms-2" href="#sales-offcanvas" data-bs-toggle="offcanvas">
                                 V-1028
                              </a>
                           </td>
                           <td class="fecha align-middle white-space-nowrap fw-semibold ps-3">
                              <p class="mb-0">05 mayo 2026 | 12:42 p.m.</p>
                           </td>
                           <td class="productos align-middle white-space-nowrap">
                              <p class="mb-0 fw-semibold">3</p>
                           </td>
                           <td class="metodo align-middle">
                              <span class="badge badge-phoenix fs-10 badge-phoenix-secondary"><span class="badge-label">Efectivo</span></span>
                           </td>
                           <td class="subtotal align-middle white-space-nowrap fw-semibold ps-3">
                              <p class="mb-0">$780.00</p>
                           </td>
                           <td class="descuento align-middle white-space-nowrap fw-semibold ps-3">
                              <p class="mb-0">$0.00</p>
                           </td>
                           <td class="total align-middle white-space-nowrap fw-semibold ps-3">
                              <p class="mb-0">$780.00</p>
                           </td>
                           <td class="vendedor align-middle">
                              <p class="mb-0 fw-semibold">Mariana</p>
                           </td>
                           <td class="align-middle white-space-nowrap ps-4 btn-reveal-trigger">
                              <div class="btn-reveal-trigger position-static">
                                 <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                 <div class="dropdown-menu dropdown-menu-end py-2">
                                    <a class="dropdown-item" href="#sales-offcanvas" data-bs-toggle="offcanvas"><i data-feather="eye" class="me-2"></i>Ver detalle</a>
                                 </div>
                              </div>
                           </td>
                        </tr>


                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                           <td class="folio align-middle white-space-nowrap">
                              <a class="text-body-emphasis ms-2" href="#sales-offcanvas" data-bs-toggle="offcanvas">
                                 V-1027
                              </a>
                           </td>
                           <td class="fecha align-middle white-space-nowrap fw-semibold ps-3">
                              <p class="mb-0">05 mayo 2026 | 11:15 a.m.</p>
                           </td>
                           <td class="productos align-middle white-space-nowrap">
                              <p class="mb-0 fw-semibold">5</p>
                           </td>
                           <td class="metodo align-middle">
                              <span class="badge badge-phoenix fs-10 badge-phoenix-info"><span class="badge-label">Tarjeta</span></span>
                           </td>
                           <td class="subtotal align-middle white-space-nowrap fw-semibold ps-3">
                              <p class="mb-0">$1,250.00</p>
                           </td>
                           <td class="descuento align-middle white-space-nowrap fw-semibold ps-3">
                              <p class="mb-0">$125.00</p>
                           </td>
                           <td class="total align-middle white-space-nowrap fw-semibold ps-3">
                              <p class="mb-0">$1,125.00</p>
                           </td>
                           <td class="vendedor align-middle">
                              <p class="mb-0 fw-semibold">Sofía</p>
                           </td>
                           <td class="align-middle white-space-nowrap ps-4 btn-reveal-trigger">
                              <div class="btn-reveal-trigger position-static">
                                 <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                 <div class="dropdown-menu dropdown-menu-end py-2">
                                    <a class="dropdown-item" href="#sales-offcanvas" data-bs-toggle="offcanvas"><i data-feather="eye" class="me-2"></i>Ver detalle</a>
                                 </div>
                              </div>
                           </td>
                        </tr>

                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                           <td class="folio align-middle white-space-nowrap">
                              <a class="text-body-emphasis ms-2" href="#sales-offcanvas" data-bs-toggle="offcanvas">
                                 V-1026
                              </a>
                           </td>
                           <td class="fecha align-middle white-space-nowrap fw-semibold ps-3">
                              <p class="mb-0">06 mayo 2026 | 04:33 p.m.</p>
                           </td>
                           <td class="productos align-middle white-space-nowrap">
                              <p class="mb-0 fw-semibold">2</p>
                           </td>
                           <td class="metodo align-middle">
                              <span class="badge badge-phoenix fs-10 badge-phoenix-secondary"><span class="badge-label">Efectivo</span></span>
                           </td>
                           <td class="subtotal align-middle white-space-nowrap fw-semibold ps-3">
                              <p class="mb-0">$540.00</p>
                           </td>
                           <td class="descuento align-middle white-space-nowrap fw-semibold ps-3">
                              <p class="mb-0">$0.00</p>
                           </td>
                           <td class="total align-middle white-space-nowrap fw-semibold ps-3">
                              <p class="mb-0">$540.00</p>
                           </td>
                           <td class="vendedor align-middle">
                              <p class="mb-0 fw-semibold">Mariana</p>
                           </td>
                           <td class="align-middle white-space-nowrap ps-4 btn-reveal-trigger">
                              <div class="btn-reveal-trigger position-static">
                                 <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                 <div class="dropdown-menu dropdown-menu-end py-2">
                                    <a class="dropdown-item" href="#sales-offcanvas" data-bs-toggle="offcanvas"><i data-feather="eye" class="me-2"></i>Ver detalle</a>
                                 </div>
                              </div>
                           </td>
                        </tr>

                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                           <td class="folio align-middle white-space-nowrap">
                              <a class="text-body-emphasis ms-2" href="#sales-offcanvas" data-bs-toggle="offcanvas">
                                 V-1025
                              </a>
                           </td>
                           <td class="fecha align-middle white-space-nowrap fw-semibold ps-3">
                              <p class="mb-0">07 mayo 2026 | 10:05 a.m.</p>
                           </td>
                           <td class="productos align-middle white-space-nowrap">
                              <p class="mb-0 fw-semibold">6</p>
                           </td>
                           <td class="metodo align-middle">
                              <span class="badge badge-phoenix fs-10 badge-phoenix-info"><span class="badge-label">Tarjeta</span></span>
                           </td>
                           <td class="subtotal align-middle white-space-nowrap fw-semibold ps-3">
                              <p class="mb-0">$2,300.00</p>
                           </td>
                           <td class="descuento align-middle white-space-nowrap fw-semibold ps-3">
                              <p class="mb-0">$230.00</p>
                           </td>
                           <td class="total align-middle white-space-nowrap fw-semibold ps-3">
                              <p class="mb-0">$2,070.00</p>
                           </td>
                           <td class="vendedor align-middle">
                              <p class="mb-0 fw-semibold">Andrea</p>
                           </td>
                           <td class="align-middle white-space-nowrap ps-4 btn-reveal-trigger">
                              <div class="btn-reveal-trigger position-static">
                                 <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                 <div class="dropdown-menu dropdown-menu-end py-2">
                                    <a class="dropdown-item" href="#sales-offcanvas" data-bs-toggle="offcanvas"><i data-feather="eye" class="me-2"></i>Ver detalle</a>
                                 </div>
                              </div>
                           </td>
                        </tr>

                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                           <td class="folio align-middle white-space-nowrap">
                              <a class="text-body-emphasis ms-2" href="#sales-offcanvas" data-bs-toggle="offcanvas">
                                 V-1024
                              </a>
                           </td>
                           <td class="fecha align-middle white-space-nowrap fw-semibold ps-3">
                              <p class="mb-0">08 mayo 2026 | 02:18 p.m.</p>
                           </td>
                           <td class="productos align-middle white-space-nowrap">
                              <p class="mb-0 fw-semibold">4</p>
                           </td>
                           <td class="metodo align-middle">
                              <span class="badge badge-phoenix fs-10 badge-phoenix-warning"><span class="badge-label">Transferencia</span></span>
                           </td>
                           <td class="subtotal align-middle white-space-nowrap fw-semibold ps-3">
                              <p class="mb-0">$1,680.00</p>
                           </td>
                           <td class="descuento align-middle white-space-nowrap fw-semibold ps-3">
                              <p class="mb-0">$80.00</p>
                           </td>
                           <td class="total align-middle white-space-nowrap fw-semibold ps-3">
                              <p class="mb-0">$1,600.00</p>
                           </td>
                           <td class="vendedor align-middle">
                              <p class="mb-0 fw-semibold">Sofía</p>
                           </td>
                           <td class="align-middle white-space-nowrap ps-4 btn-reveal-trigger">
                              <div class="btn-reveal-trigger position-static">
                                 <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                 <div class="dropdown-menu dropdown-menu-end py-2">
                                    <a class="dropdown-item" href="#sales-offcanvas" data-bs-toggle="offcanvas"><i data-feather="eye" class="me-2"></i>Ver detalle</a>
                                 </div>
                              </div>
                           </td>
                        </tr>

                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                           <td class="folio align-middle white-space-nowrap">
                              <a class="text-body-emphasis ms-2" href="#sales-offcanvas" data-bs-toggle="offcanvas">
                                 V-1023
                              </a>
                           </td>
                           <td class="fecha align-middle white-space-nowrap fw-semibold ps-3">
                              <p class="mb-0">09 mayo 2026 | 05:47 p.m.</p>
                           </td>
                           <td class="productos align-middle white-space-nowrap">
                              <p class="mb-0 fw-semibold">3</p>
                           </td>
                           <td class="metodo align-middle">
                              <span class="badge badge-phoenix fs-10 badge-phoenix-info"><span class="badge-label">Tarjeta</span></span>
                           </td>
                           <td class="subtotal align-middle white-space-nowrap fw-semibold ps-3">
                              <p class="mb-0">$1,920.00</p>
                           </td>
                           <td class="descuento align-middle white-space-nowrap fw-semibold ps-3">
                              <p class="mb-0">$192.00</p>
                           </td>
                           <td class="total align-middle white-space-nowrap fw-semibold ps-3">
                              <p class="mb-0">$1,728.00</p>
                           </td>
                           <td class="vendedor align-middle">
                              <p class="mb-0 fw-semibold">Mariana</p>
                           </td>
                           <td class="align-middle white-space-nowrap ps-4 btn-reveal-trigger">
                              <div class="btn-reveal-trigger position-static">
                                 <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                 <div class="dropdown-menu dropdown-menu-end py-2">
                                    <a class="dropdown-item" href="#sales-offcanvas" data-bs-toggle="offcanvas"><i data-feather="eye" class="me-2"></i>Ver detalle</a>
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

      <!-- Start Offcanvas -->
      <div class="offcanvas offcanvas-end settings-panel border-0" id="sales-offcanvas" tabindex="-1" aria-labelledby="sales-offcanvas">

         <div class="loading-shape"><span>Cargando...</span></div>
         <div class="offcanvas-header align-items-start border-bottom flex-column border-translucent">
            <div class="pt-1 w-100 d-flex justify-content-between align-items-center">
               <button class="btn p-1 fw-semibolder" type="button" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fa-solid fa-arrow-right-from-bracket fs-7"></i></button>
            </div>
         </div>

         <div class="offcanvas-body scrollbar px-0 pt-0 fs-9">

            <div class="p-4 bg-body-highlight">
               <div class="d-flex align-items-center justify-content-between gap-3">
                  <div>
                     <p class="mb-0 text-body-secondary fs-9">Folio de venta</p>
                     <h4 class="my-2 text-body-emphasis">V-1028</h4>
                     <div class="d-flex align-items-center gap-2 flex-wrap">
                        <span class="badge badge-phoenix fs- badge-phoenix-success">
                           <span class="badge-label">Completada</span>
                        </span>
                        <span class="badge badge-phoenix fs- badge-phoenix-secondary">
                           <span class="badge-label"><i data-feather="dollar-sign" style="width: 10px;height: 10px;"></i>Efectivo</span>
                        </span>
                     </div>
                  </div>

                  <div class="avatar avatar-xl">
                     <div class="avatar-name rounded-circle bg-purple-opacity text-purple d-flex align-items-center justify-content-center">
                        <span data-feather="shopping-bag" style="width: 25px;height: 25px;"></span>
                     </div>
                  </div>
               </div>
            </div>

            <!-- Información general -->
            <div class="px-3 mb-4">
               <h5 class="my-4"><span class="me-2" data-feather="info" style="stroke-width:2.5;"></span>Información general</h5>

               <div class="row g-4">

                  <div class="col-4">
                     <div class="d-flex align-items-center mb-1">
                        <h6 class="mb-1">Fecha</h6>
                     </div>
                     <p class="mb-0 fs-9">03 mayo 2026</p>
                  </div>

                  <div class="col-4">
                     <div class="d-flex align-items-center mb-1">
                        <h6 class="mb-1">Hora</h6>
                     </div>
                     <p class="mb-0 fs-9">12:42 p.m.</p>
                  </div>

                  <div class="col-4">
                     <div class="d-flex align-items-center mb-1">
                        <h6 class="mb-1">Atendió</h6>
                     </div>
                     <p class="mb-0 fs-9">Mariana</p>
                  </div>

               </div>
            </div>

            <hr>

            <!-- Productos en la venta -->
            <div class="px-3 pt-0 mb-3">

               <div class="d-flex align-items-center justify-content-between gap-3 mb-3">
                  <h5 class="mb-0"><span data-feather="package" class="me-2"></span>Productos vendidos</h6>
                     <span class="badge badge-phoenix fs-10 badge-kollabi-purple">
                        <span class="badge-label">3 artículos</span>
                     </span>
               </div>


               <div class="row g-3">

                  <div class="col-3">
                     <a class="col-sm-6 col-md-4 col-xl-3 text-center text-decoration-none img-zoom-hover glightbox4 overflow-hidden"
                        href="{{ asset('admin/img/placeholders/image-placeholder.svg') }}"
                        data-glightbox="title: Bolsa mini satín rosa; description: .desc-MGT-BOL-014; descPosition: right;">

                        <div class="hoverbox rounded-2 photo-details">
                           <img class="img-fluid object-fit-cover" src="{{ asset('admin/img/placeholders/image-placeholder.svg') }}" alt="Aretes de plata" />

                           <div class="hoverbox-content flex-center">
                              <div class="rounded-pill bg-white d-flex flex-center" style="width: 60px; height: 60px">
                                 <span class="text-secondary" data-feather="zoom-in" style="height: 30px; width: 30px;"></span>
                              </div>
                           </div>
                        </div>
                     </a>
                     <div class="glightbox-desc desc-MGT-BOL-014">
                        <p class="mb-1"><span class="text-body-quaternary">SKU/Código: MGT-BOL-014</span></p>
                        <p class="mb-1">$320.00</p>
                        <p class="mb-1">Luna Artesanal</p>
                        <p class="mb-0">
                           <span class="badge badge-phoenix fs-10 badge-phoenix-success">Vendido</span>
                        </p>
                     </div>
                  </div>

                  <div class="col-5">
                     <div class="d-flex justify-content-between gap-3">
                        <div>
                           <h6 class="mb-1">Bolsa mini satín rosa</h6>
                           <p class="mb-0 text-body-quaternary fs-9">SKU: MGT-BOL-014</p>
                           <p class="mb-0 text-body-secondary fs-9">
                              <span data-feather="tag" class="me-1" style="width:14px;height:14px;"></span>
                              Luna Artesanal
                           </p>
                        </div>
                     </div>
                  </div>

                  <div class="col-4 text-end">
                     <p class="mb-1 fw-semibold">$320.00</p>
                     <p class="mb-0 text-body-secondary fs-9">x1</p>
                  </div>

               </div>

               <hr class="my-2">

               <div class="row g-3">

                  <div class="col-3">
                     <a class="col-sm-6 col-md-4 col-xl-3 text-center text-decoration-none img-zoom-hover glightbox4 overflow-hidden"
                        href="{{ asset('admin/img/placeholders/image-placeholder.svg') }}"
                        data-glightbox="title: Aretes corazón dorado; description: .desc-MGT-ACC-087; descPosition: right;"> <!-- .desc-MGT-ACC-087 es imporatne, se le concatena el sku para una clase unica -->
                        <div class="hoverbox rounded-2 photo-details">
                           <img class="img-fluid object-fit-cover" src="{{ asset('admin/img/placeholders/image-placeholder.svg') }}" alt="Aretes de plata" />

                           <div class="hoverbox-content flex-center">
                              <div class="rounded-pill bg-white d-flex flex-center" style="width: 60px; height: 60px">
                                 <span class="text-secondary" data-feather="zoom-in" style="height: 30px; width: 30px;"></span>
                              </div>
                           </div>
                        </div>
                     </a>
                     <div class="glightbox-desc desc-MGT-ACC-087"> <!-- Aquí se usa la calse unica desc-MGT-ACC-087 para indicar cuál es su descripción -->
                        <p class="mb-1"><span class="text-body-quaternary">SKU/Código: MGT-ACC-087</span></p>
                        <p class="mb-1">$180.00</p>
                        <p class="mb-2">MagentaTLX</p>
                        <p class="mb-0">
                           <span class="badge badge-phoenix fs-10 badge-phoenix-success">Vendido</span>
                        </p>
                     </div>
                  </div>

                  <div class="col-5">
                     <div class="d-flex justify-content-between gap-3">
                        <div>
                           <h6 class="mb-1">Aretes corazón dorado</h6>
                           <p class="mb-0 text-body-quaternary fs-9">SKU: MGT-ACC-087</p>
                           <p class="mb-0 text-body-secondary fs-9">
                              <span data-feather="tag" class="me-1" style="width:14px;height:14px;"></span>
                              MagentaTLX
                           </p>
                        </div>
                     </div>
                  </div>

                  <div class="col-4 text-end">
                     <p class="mb-1 fw-semibold">$180.00</p>
                     <p class="mb-0 text-body-secondary fs-9">x1</p>
                  </div>
               </div>

               <hr class="my-2">

               <div class="row g-3">

                  <div class="col-3">
                     <a class="col-sm-6 col-md-4 col-xl-3 text-center text-decoration-none img-zoom-hover glightbox4 overflow-hidden"
                        href="{{ asset('admin/img/placeholders/image-placeholder.svg') }}"
                        data-glightbox="title: Pulsera perlas mini; description: .desc-MGT-ACC-052; descPosition: right;">
                        <div class="hoverbox rounded-2 photo-details">
                           <img class="img-fluid object-fit-cover" src="{{ asset('admin/img/placeholders/image-placeholder.svg') }}" alt="Aretes de plata" />

                           <div class="hoverbox-content flex-center">
                              <div class="rounded-pill bg-white d-flex flex-center" style="width: 60px; height: 60px">
                                 <span class="text-secondary" data-feather="zoom-in" style="height: 30px; width: 30px;"></span>
                              </div>
                           </div>
                        </div>
                     </a>
                     <div class="glightbox-desc desc-MGT-ACC-052">
                        <p class="mb-1"><span class="text-body-quaternary">SKU/Código: MGT-ACC-052</span></p> <!-- Aquí se usa la calse unica desc-MGT-ACC-087 para indicar cuál es su descripción -->
                        <p class="mb-1">$280.00</p>
                        <p class="mb-1">MagentaTLX</p>
                        <p class="mb-0">
                           <span class="badge badge-phoenix fs-10 badge-phoenix-success">Vendido</span>
                        </p>
                     </div>
                  </div>

                  <div class="col-5">
                     <div class="d-flex justify-content-between gap-3">
                        <div>
                           <h6 class="mb-1">Pulsera perlas mini</h6>
                           <p class="mb-0 text-body-quaternary fs-9">SKU: MGT-ACC-052</p>
                           <p class="mb-0 text-body-secondary fs-9">
                              <span data-feather="tag" class="me-1" style="width:14px;height:14px;"></span>
                              MagentaTLX
                           </p>
                        </div>
                     </div>
                  </div>

                  <div class="col-4 text-end">
                     <p class="mb-1 fw-semibold">$280.00</p>
                     <p class="mb-0 text-body-secondary fs-9">x1</p>
                  </div>

               </div>

               <hr class="my-2">

            </div>

            <!-- Rwesumen de importes -->
            <div class="px-3 pt-0 mb-3">

               <h5 class="my-4"><span class="me-2" data-feather="dollar-sign" style="stroke-width:2.5;"></span>Resumen de importes</h5>

               <div class="d-flex justify-content-between align-items-center mb-2">
                  <p class="mb-0 text-body-secondary">Subtotal</p>
                  <p class="mb-0 fw-semibold">$780.00</p>
               </div>

               <div class="d-flex justify-content-between align-items-center mb-2">
                  <p class="mb-0 text-body-secondary">Descuento</p>
                  <p class="mb-0 fw-semibold">$0.00</p>
               </div>

               <div class="d-flex justify-content-between align-items-center mb-2">
                  <p class="mb-0 text-body-secondary">Comisiones</p>
                  <p class="mb-0 fw-semibold">$0.00</p>
               </div>

               <hr>

               <div class="d-flex justify-content-between align-items-center">
                  <p class="mb-0 fw-bold text-body-emphasis">Total de la venta</p>
                  <h5 class="mb-0 text-body-emphasis">$780.00</h5>
               </div>
            </div>

            <hr>

            <!-- Información de pago -->
            <div class="px-3 pt-0">

               <h5 class="my-4"><span class="me-2" data-feather="dollar-sign" style="stroke-width:2.5;"></span>Información de pago</h5>

               <div class="card border">
                  <div class="card-body">
                     <div class="d-flex align-items-center justify-content-between">
                        <div>
                           <h6 class="mb-0 text-body-secondary fs-9">Método de pago</h6>
                        </div>
                        <span class="badge badge-phoenix fs- badge-phoenix-secondary">
                           <i data-feather="dollar-sign" style="width: 10px;height: 10px;"></i>Efectivo
                        </span>
                     </div>

                     <hr>

                     <div class="row g-3">

                        <div class="col-4">
                           <div class="d-flex align-items-center mb-1">
                              <h6 class="mb-1">Total cobrado</h6>
                           </div>
                           <p class="mb-0 fs-9">$780.00</p>
                        </div>

                        <div class="col-4">
                           <div class="d-flex align-items-center mb-1">
                              <h6 class="mb-0">Recibido</h6>
                           </div>
                           <p class="mb-0 fs-9">$800.00</p>
                        </div>

                        <div class="col-4">
                           <div class="d-flex align-items-center mb-1">
                              <h6 class="mb-1">Cambio entregado</h6>
                           </div>
                           <p class="mb-0 fs-9">$20.00</p>
                        </div>

                        <div class="col-4">
                           <div class="d-flex align-items-center mb-1">
                              <h6 class="mb-1">Referencia</h6>
                           </div>
                           <p class="mb-0 fs-9">No aplica</p>
                        </div>

                     </div>
                  </div>
               </div>
            </div>

         </div>
      </div>

      <!-- End Offcamvas -->

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

   <script src="{{ asset('admin/js/ventas/ventas.js') }}"></script>

</body>

</html>