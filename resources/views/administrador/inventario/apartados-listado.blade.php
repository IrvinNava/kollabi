@php
$title = 'Artículos apartados';
@endphp

@include('layout.administrador.header')

<body data-page="saved-page">

   <main class="main" id="top">

      @include('layout.administrador.sidebar')
      @include('layout.administrador.topbar')

      <div class="content">

         <div class="d-flex justify-content-between">
            <div class="col-auto">
               <h2 class="mb-0">Artículos apartados</h2>
            </div>
         </div>

         <div class="d-flex flex-wrap gap-2 my-3">
            <a href="{{url('admin/inventario/')}}" class="btn btn-subtle-secondary btn-sm">Todos (200)</a>
            <a href="{{url('admin/inventario/paquetes')}}" class="btn btn-subtle-secondary btn-sm">Paquetes (26)</a>
            <a href="javascript:void(0);" class="btn btn-primary btn-sm pe-none">Apartados (18)</a>
         </div>

         <!-- Table -->
         <div id="products" data-list='{"valueNames":["producto","marca","cliente","precio","anticipo","fecha","estado","ubicacion"],"page":10,"pagination":true}'>

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
                     <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#reserveItemModal"><span class="fas fa-plus me-2"></span>Apartar artículo</button>

                  </div>
               </div>

               <div class="collapse" id="collapseExample">
                  <form class="row gy-2 gx-2 mt-2 align-items-center more-filters bg-body-emphasis p-2 border rounded-2">

                     <div class="col-md-3">
                        <label class="form-label" for="marcaFilter">Marca</label>
                        <select class="form-select form-select-sm" id="marcaFilter" multiple>
                           <option>MagentaTLX</option>
                           <option>Luna Boutique</option>
                           <option>Mora Studio</option>
                           <option>Casa Nube</option>
                           <option>Alma Joyería</option>
                        </select>
                     </div>

                     <div class="col-md-3">
                        <label class="form-label" for="categoriaFilter">Categoría</label>
                        <select class="form-select form-select-sm fs-9" id="categoriaFilter" multiple>
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

                     <div class="col-md-2">
                        <label class="form-label" for="estatusFilter">Sucursal</label>
                        <select class="form-select form-select-sm" id="estatusFilter">
                           <option disabled selected="selected">Elige...</option>
                           <option value="1">Sucursal centro</option>
                           <option value="2">Sucursal parque</option>
                        </select>
                     </div>

                     <div class="col-md-2">
                        <label class="form-label" for="estatusFilter">Estado</label>
                        <select class="form-select form-select-sm" id="estatusFilter">
                           <option disabled selected="selected">Elige...</option>
                           <option value="1">Disponibles</option>
                           <option value="2">Apartados</option>
                        </select>
                     </div>

                     <div class="col-auto">
                        <button class="btn btn-sm btn-primary mt-sm-4" type="submit"><span class="fa-solid fa-search me-2" data-fa-transform="down-3"></span>Buscar</button>
                        <a class="btn btn-sm btn-primary mt-sm-4" href="{{url('admin/inventario/apartados')}}" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Limpiar filtros">
                           <span class="fa-solid fa-arrows-rotate" data-fa-transform="down-3"></span>
                        </a>
                     </div>

                  </form>
               </div>

            </div>

            <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-body-emphasis border-top border-bottom border-translucent position-relative top-1">
               <div class="table-responsive scrollbar-overlay mx-n1 px-1">
                  <table id="savedTable" class="table table-hover fs-9 mb-0 w-100 kollabi-table">
                     <thead>
                        <tr>
                           <th class="sort align-middle pe-5 py-3" scope="col" data-sort="producto">PRODUCTO</th>
                           <th class="sort align-middle pe-5 py-3" scope="col" data-sort="marca">MARCA</th>
                           <th class="sort align-middle pe-5 py-3" scope="col" data-sort="cliente">CLIENTE</th>
                           <th class="sort align-middle py-3" scope="col" data-sort="precio">PRECIO</th>
                           <th class="sort align-middle py-3" scope="col" data-sort="anticipo">ANTICIPO</th>
                           <th class="sort align-middle py-3" scope="col" data-sort="fecha">FECHA DE APARTADO</th>
                           <th class="sort align-middle py-3" scope="col" data-sort="estado">ESTADO</th>
                           <th class="sort align-middle py-3" scope="col" data-sort="ubicacion">UBICACIÓN</th>
                           <th class="sort align-middle py-3" scope="col" data-sort=""></th>
                        </tr>
                     </thead>
                     <tbody class="list" id="saved-table-body">

                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                           <td class="producto align-middle white-space-nowrap pe-5">
                              <a class="d-flex align-items-center" href="#apartados-offcanvas" data-bs-toggle="offcanvas">
                                 <div class="avatar avatar-l">
                                    <img class="rounded-3" src="{{ asset('admin/img/placeholders/image-placeholder.svg') }}" alt="" />
                                 </div>
                                 <div class="ms-3">
                                    <p class="mb-0 fw-semibold text-body-emphasis">Blusa floral premium</p>
                                    <p class="mb-0 text-body-quaternary">SKU: LB-034</p>
                                 </div>
                              </a>
                           </td>
                           <td class="marca align-middle white-space-nowrap pe-5">
                              <p class="mb-0 fw-semibold">Luna Boutique</p>
                              <p class="mb-0 text-body-quaternary"><span class="me-1 mb-1" data-feather="tag" style="height:12px;width:12px;"></span>Ropa</p>
                           </td>
                           <td class="cliente align-middle white-space-nowrap fw-semibold ps-3">
                              <p class="mb-0">Jennifer Ontiveros</p>
                           </td>
                           <td class="precio align-middle white-space-nowrap fw-semibold ps-3">
                              <p class="mb-0">$349.00</p>
                              <span class="text-danger">-10%</span>
                           </td>
                           <td class="anticipo align-middle white-space-nowrap fw-semibold ps-3">
                              <p class="mb-0">$100.00</p>
                           </td>
                           <td class="fecha align-middle white-space-nowrap fw-semibold ps-3">
                              <p class="mb-0">20/04/2026 | 11:45 am</p>
                           </td>
                           <td class="inventario align-middle">
                              <span class="badge badge-phoenix fs-10 badge-phoenix-warning">Apartado</span></span>
                           </td>
                           <td class="ubicacion align-middle">
                              <p class="mb-0 fw-semibold">Sucursal centro</p>
                              <p class="mb-0 text-body-quaternary"><span class="me-1 mb-1" data-feather="map-pin" style="height:12px;width:12px;"></span>Bodega</span></p>
                           </td>
                           <td class="align-middle white-space-nowrap ps-4 btn-reveal-trigger">
                              <div class="btn-reveal-trigger position-static">
                                 <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                 <div class="dropdown-menu dropdown-menu-end py-2">
                                    <a class="dropdown-item" href="#apartados-offcanvas" data-bs-toggle="offcanvas"><i data-feather="eye" class="me-2"></i>Ver detalle</a>
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#editReservedItemModal"><i data-feather="edit-2" class="me-2"></i>Editar</a>
                                    <a class="dropdown-item btn-release-reserved-item"
                                       data-customer="Jennifer Ontiveros"
                                       href="javascript:void(0);">
                                       <i data-feather="corner-up-left" class="me-2"></i>Liberar artículo</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item btn-complete-reserved-sale"
                                       data-customer="Jennifer Ontiveros"
                                       data-total="349"
                                       data-advance="100"
                                       href="avascript:void(0);">
                                       <i data-feather="shopping-bag" class="me-2"></i>Completar venta</a>
                                 </div>
                              </div>
                           </td>
                        </tr>

                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                           <td class="producto align-middle white-space-nowrap pe-5">
                              <a class="d-flex align-items-center" href="#apartados-offcanvas" data-bs-toggle="offcanvas">
                                 <div class="avatar avatar-l">
                                    <img class="rounded-3" src="{{ asset('admin/img/placeholders/image-placeholder.svg') }}" alt="" />
                                 </div>
                                 <div class="ms-3">
                                    <p class="mb-0 fw-semibold text-body-emphasis">Collar dorado minimalista</p>
                                    <p class="mb-0 text-body-quaternary">SKU: AJ-118</p>
                                 </div>
                              </a>
                           </td>
                           <td class="marca align-middle white-space-nowrap pe-5">
                              <span class="mb-0 fw-semibold">MagentaTLX</span>
                              <p class="mb-0 text-body-quaternary"><span class="me-1 mb-1" data-feather="tag" style="height:12px;width:12px;"></span>Joyería</p>
                           </td>
                           <td class="cliente align-middle white-space-nowrap fw-semibold ps-3">
                              <p class="mb-0">Blanca Bernal</p>
                           </td>
                           <td class="precio align-middle white-space-nowrap fw-semibold ps-3">
                              <p class="mb-0">$200.00</p>
                              <span class="text-danger"></span>
                           </td>
                           <td class="anticipo align-middle white-space-nowrap fw-semibold ps-3">
                              <p class="mb-0">$50.00</p>
                           </td>
                           <td class="fecha align-middle white-space-nowrap fw-semibold ps-3">
                              <p class="mb-0">21/04/2026 | 02:38 pm</p>
                           </td>
                           <td class="inventario align-middle">
                              <span class="badge badge-phoenix fs-10 badge-phoenix-warning">Apartado</span></span>
                           </td>
                           <td class="ubicacion align-middle">
                              <p class="mb-0 fw-semibold">Sucursal parque</p>
                              <p class="mb-0 text-body-quaternary"><span class="me-1 mb-1" data-feather="map-pin" style="height:12px;width:12px;"></span>Caja apartados 1</span></p>
                           </td>
                           <td class="align-middle white-space-nowrap ps-4 btn-reveal-trigger">
                              <div class="btn-reveal-trigger position-static">
                                 <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                 <div class="dropdown-menu dropdown-menu-end py-2">
                                    <a class="dropdown-item" href="#apartados-offcanvas" data-bs-toggle="offcanvas"><i data-feather="eye" class="me-2"></i>Ver detalle</a>
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#editReservedItemModal"><i data-feather="edit-2" class="me-2"></i>Editar</a>
                                    <a class="dropdown-item btn-release-reserved-item" data-customer="Blanca Bernal" href="javascript:void(0);"><i data-feather="corner-up-left" class="me-2"></i>Liberar artículo</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item btn-complete-reserved-sale"
                                       data-customer="Blanca Bernal"
                                       data-total="200"
                                       data-advance="50"
                                       href="avascript:void(0);">
                                       <i data-feather="shopping-bag" class="me-2"></i>Completar venta</a>
                                 </div>
                              </div>
                           </td>
                        </tr>

                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                           <td class="producto align-middle white-space-nowrap pe-5">
                              <a class="d-flex align-items-center" href="#apartados-offcanvas" data-bs-toggle="offcanvas">
                                 <div class="avatar avatar-l">
                                    <img class="rounded-3" src="{{ asset('admin/img/placeholders/image-placeholder.svg') }}" alt="" />
                                 </div>
                                 <div class="ms-3">
                                    <p class="mb-0 fw-semibold text-body-emphasis">Bolsa tejida artesanal</p>
                                    <p class="mb-0 text-body-quaternary">SKU: Bolsa tejida artesanal</p>
                                 </div>
                              </a>
                           </td>
                           <td class="marca align-middle white-space-nowrap pe-5">
                              <p class="mb-0 fw-semibold">MagentaTLX</p>
                              <p class="mb-0 text-body-quaternary"><span class="me-1 mb-1" data-feather="tag" style="height:12px;width:12px;"></span>Ropa</p>
                           </td>
                           <td class="cliente align-middle white-space-nowrap fw-semibold ps-3">
                              <p class="mb-0">Gricelda Velazco</p>
                           </td>
                           <td class="precio align-middle white-space-nowrap fw-semibold ps-3">
                              <p class="mb-0">$290.00</p>
                              <span class="text-danger">-10%</span>
                           </td>
                           <td class="anticipo align-middle white-space-nowrap fw-semibold ps-3">
                              <p class="mb-0">$150.00</p>
                           </td>
                           <td class="fecha align-middle white-space-nowrap fw-semibold ps-3">
                              <p class="mb-0">20/04/2026 | 11:45 am</p>
                           </td>
                           <td class="inventario align-middle">
                              <span class="badge badge-phoenix fs-10 badge-phoenix-warning">Apartado</span></span>
                           </td>
                           <td class="ubicacion align-middle">
                              <p class="mb-0 fw-semibold">Sucursal centro</p>
                              <p class="mb-0 text-body-quaternary"><span class="me-1 mb-1" data-feather="map-pin" style="height:12px;width:12px;"></span>Bodega</span></p>
                           </td>
                           <td class="align-middle white-space-nowrap ps-4 btn-reveal-trigger">
                              <div class="btn-reveal-trigger position-static">
                                 <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                 <div class="dropdown-menu dropdown-menu-end py-2">
                                    <a class="dropdown-item" href="#apartados-offcanvas" data-bs-toggle="offcanvas"><i data-feather="eye" class="me-2"></i>Ver detalle</a>
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#editReservedItemModal"><i data-feather="edit-2" class="me-2"></i>Editar</a>
                                    <a class="dropdown-item btn-release-reserved-item" data-customer="Gricelda Velazco" href="javascript:void(0);"><i data-feather="corner-up-left" class="me-2"></i>Liberar artículo</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item btn-complete-reserved-sale"
                                       data-customer="Gricelda Velazco"
                                       data-total="290"
                                       data-advance="150"
                                       href="avascript:void(0);">
                                       <i data-feather="shopping-bag" class="me-2"></i>Completar venta</a>
                                 </div>
                              </div>
                           </td>
                        </tr>

                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                           <td class="producto align-middle white-space-nowrap pe-5">
                              <a class="d-flex align-items-center" href="#apartados-offcanvas" data-bs-toggle="offcanvas">
                                 <div class="avatar avatar-l">
                                    <img class="rounded-3" src="{{ asset('admin/img/placeholders/image-placeholder.svg') }}" alt="" />
                                 </div>
                                 <div class="ms-3">
                                    <p class="mb-0 fw-semibold text-body-emphasis">Vela aromática Lavanda</p>
                                    <p class="mb-0 text-body-quaternary">SKU: COL-VEL-002</p>
                                 </div>
                              </a>
                           </td>
                           <td class="marca align-middle white-space-nowrap pe-5">
                              <span class="mb-0 fw-semibold">Luna Artesanal</span>
                              <p class="mb-0 text-body-quaternary"><span class="me-1 mb-1" data-feather="tag" style="height:12px;width:12px;"></span>Joyería</p>
                           </td>
                           <td class="cliente align-middle white-space-nowrap fw-semibold ps-3">
                              <p class="mb-0">Jazmin Benitez</p>
                           </td>
                           <td class="precio align-middle white-space-nowrap fw-semibold ps-3">
                              <p class="mb-0">$180.00</p>
                              <span class="text-danger"></span>
                           </td>
                           <td class="anticipo align-middle white-space-nowrap fw-semibold ps-3">
                              <p class="mb-0">$50.00</p>
                           </td>
                           <td class="fecha align-middle white-space-nowrap fw-semibold ps-3">
                              <p class="mb-0">21/04/2026 | 02:38 pm</p>
                           </td>
                           <td class="inventario align-middle">
                              <span class="badge badge-phoenix fs-10 badge-phoenix-warning">Apartado</span></span>
                           </td>
                           <td class="ubicacion align-middle">
                              <p class="mb-0 fw-semibold">Sucursal parque</p>
                              <p class="mb-0 text-body-quaternary"><span class="me-1 mb-1" data-feather="map-pin" style="height:12px;width:12px;"></span>Caja apartados 1</span></p>
                           </td>
                           <td class="align-middle white-space-nowrap ps-4 btn-reveal-trigger">
                              <div class="btn-reveal-trigger position-static">
                                 <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                 <div class="dropdown-menu dropdown-menu-end py-2">
                                    <a class="dropdown-item" href="#apartados-offcanvas" data-bs-toggle="offcanvas"><i data-feather="eye" class="me-2"></i>Ver detalle</a>
                                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#editReservedItemModal"><i data-feather="edit-2" class="me-2"></i>Editar</a>
                                    <a class="dropdown-item btn-release-reserved-item" data-customer="Jazmin Benitez" href="javascript:void(0);"><i data-feather="corner-up-left" class="me-2"></i>Liberar artículo</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item btn-complete-reserved-sale"
                                       data-customer="Jazmin Benitez"
                                       data-total="180"
                                       data-advance="50"
                                       href="avascript:void(0);">
                                       <i data-feather="shopping-bag" class="me-2"></i>Completar venta</a>
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

      <!-- Start Offcanvas: Detalle de artículo apartado -->
      <div class="offcanvas offcanvas-end settings-panel border-0" id="apartados-offcanvas" tabindex="-1" aria-labelledby="apartados-offcanvas-label">

         <div class="loading-shape"><span>Cargando...</span></div>

         <div class="offcanvas-header align-items-start border-bottom flex-column border-translucent">
            <div class="pt-1 w-100 d-flex justify-content-between align-items-center">
               <button class="btn p-1 fw-semibolder" type="button" data-bs-dismiss="offcanvas" aria-label="Close">
                  <i class="fa-solid fa-arrow-right-from-bracket fs-7"></i>
               </button>

               <div class="d-flex gap-2">
                  <button class="btn btn-sm btn-phoenix-secondary" type="button" data-bs-toggle="modal" data-bs-target="#editReservedItemModal">
                     <span data-feather="edit-2" class="me-1" style="height: 14px; width: 14px;"></span>
                     Editar
                  </button>
                  <button class="btn btn-sm btn-phoenix-secondary btn-release-reserved-item" data-customer="Ana Martínez" type="button">
                     <span data-feather="corner-up-left" class="me-1" style="height: 15px; width: 15px;"></span>
                     Liberar artículo
                  </button>

               </div>
            </div>
         </div>

         <div class="offcanvas-body scrollbar px-0 pb-10 fs-9" id="themeController">

            <!-- Resumen del producto -->
            <div class="px-3">
               <div class="card">
                  <div class="p-3">
                     <div class="row g-3 align-items-center">

                        <div class="col-5" id="image_gallery">
                           <a class="col-sm-6 col-md-4 col-xl-3 text-center text-decoration-none img-zoom-hover glightbox4 overflow-hidden"
                              href="{{ asset('admin/img/placeholders/image-placeholder.svg') }}"
                              data-glightbox="title: Collar dorado minimalista; description: .custom-desc1; descPosition: right;">

                              <div class="hoverbox rounded-2 photo-details">
                                 <img class="img-fluid object-fit-cover" src="{{ asset('admin/img/placeholders/image-placeholder.svg') }}" alt="Collar dorado minimalista" />

                                 <div class="hoverbox-content flex-center">
                                    <div class="rounded-pill bg-white d-flex flex-center" style="width: 60px; height: 60px">
                                       <span class="text-secondary" data-feather="zoom-in" style="height: 30px; width: 30px;"></span>
                                    </div>
                                 </div>
                              </div>
                           </a>

                           <div class="glightbox-desc custom-desc1">
                              <p class="mb-1"><span class="text-body-quaternary">SKU/Código: AJ-118</span></p>
                              <p class="mb-1">$229.00</p>
                              <p class="mb-1">Alma Joyería</p>
                              <p class="mb-0">
                                 <span class="badge badge-phoenix fs-10 badge-phoenix-warning">Apartado</span>
                              </p>
                           </div>
                        </div>

                        <div class="col-7">
                           <div class="d-flex align-items-center gap-2 mb-2">
                              <span class="badge badge-phoenix fs-10 badge-phoenix-warning">Apartado</span>
                              <span class="badge badge-phoenix fs-10 badge-phoenix-secondary">Con anticipo</span>
                           </div>

                           <h4 class="mb-2 fw-semibold text-body-emphasis" id="apartados-offcanvas-label">
                              Collar dorado minimalista
                           </h4>

                           <p class="mb-2 text-body-tertiary">SKU/Código: AJ-118</p>

                           <h5 class="mb-2 fw-normal">$229.00</h5>

                           <p class="mb-0 text-body-tertiary">
                              Apartado por <strong>Ana Martínez</strong>
                           </p>
                        </div>

                     </div>
                  </div>
               </div>
            </div>

            <hr>

            <!-- Datos del apartado -->
            <div class="px-3">
               <div class="mb-3">
                  <h5 class="my-4">Datos del apartado</h5>

                  <div class="row g-3 flex-sm-column">

                     <div class="col-6 col-sm-12">
                        <div class="d-flex align-items-center mb-1">
                           <span class="me-2" data-feather="flag" style="stroke-width:2.5;"></span>
                           <h6 class="mb-0">Estado del apartado</h6>
                        </div>
                        <p class="mb-0 ms-4">
                           <span class="badge badge-phoenix fs-10 badge-phoenix-warning">Apartado</span>
                        </p>
                     </div>

                     <div class="col-6 col-sm-12">
                        <div class="d-flex align-items-center mb-1">
                           <span class="me-2" data-feather="calendar" style="stroke-width:2.5;"></span>
                           <h6 class="mb-0">Fecha de apartado</h6>
                        </div>
                        <p class="mb-0 fs-9 ms-4">30 abril 2026 | 04:35 pm</p>
                     </div>

                     <div class="col-6 col-sm-12">
                        <div class="d-flex align-items-center mb-1">
                           <span class="me-2" data-feather="clock" style="stroke-width:2.5;"></span>
                           <h6 class="mb-0">Fecha límite</h6>
                        </div>
                        <p class="mb-0 fs-9 ms-4">03 mayo 2026</p>
                     </div>

                     <div class="col-6 col-sm-12">
                        <div class="d-flex align-items-center mb-1">
                           <span class="me-2" data-feather="user-check" style="stroke-width:2.5;"></span>
                           <h6 class="mb-0">Registrado por</h6>
                        </div>
                        <p class="mb-0 fs-9 ms-4">Elizabeth Hernández</p>
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
                        <p class="mb-0 fs-9 ms-4">Ana Martínez</p>
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
                        <p class="mb-0 fs-9 ms-4">ana@email.com</p>
                     </div>

                  </div>
               </div>
            </div>

            <hr>

            <!-- Resumen de pago -->
            <div class="px-3">
               <div class="mb-3">
                  <h5 class="my-4">Resumen</h5>

                  <div class="card bg-light border-0">
                     <div class="card-body p-3">

                        <div class="d-flex justify-content-between align-items-center mb-2">
                           <span class="text-body-tertiary">Cantidad</span>
                           <strong>1 pieza</strong>
                        </div>

                        <div class="d-flex justify-content-between align-items-center mb-2">
                           <span class="text-body-tertiary">Precio unitario</span>
                           <strong>$229.00</strong>
                        </div>

                        <div class="d-flex justify-content-between align-items-center mb-2">
                           <span class="text-body-tertiary">Total apartado</span>
                           <strong>$229.00</strong>
                        </div>

                        <div class="d-flex justify-content-between align-items-center mb-2">
                           <span class="text-body-tertiary">Anticipo</span>
                           <strong class="text-success">$100.00</strong>
                        </div>

                        <hr class="my-2">

                        <div class="d-flex justify-content-between align-items-center">
                           <span class="fw-semibold">Pendiente por pagar</span>
                           <strong class="text-body-emphasis">$129.00</strong>
                        </div>

                     </div>
                  </div>

                  <div class="mt-3">
                     <div class="d-flex align-items-center mb-1">
                        <span class="me-2" data-feather="credit-card" style="stroke-width:2.5;"></span>
                        <h6 class="mb-0">Método del anticipo</h6>
                     </div>
                     <p class="mb-0 fs-9 ms-4">Efectivo</p>
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
                        <p class="mb-0 fs-9 ms-4">Alma Joyería</p>
                     </div>

                     <div class="col-6 col-sm-12">
                        <div class="d-flex align-items-center mb-1">
                           <span class="me-2" data-feather="tag" style="stroke-width:2.5;"></span>
                           <h6 class="mb-0">Categoría</h6>
                        </div>
                        <p class="mb-0 fs-9 ms-4">Accesorios</p>
                     </div>

                     <div class="col-6 col-sm-12">
                        <div class="d-flex align-items-center mb-1">
                           <span class="me-2" data-feather="archive" style="stroke-width:2.5;"></span>
                           <h6 class="mb-0">Stock actual</h6>
                        </div>
                        <p class="mb-0 fs-9 ms-4">Sucursal Centro | 2 piezas</p>
                        <p class="mb-0 fs-9 ms-4">Sucursal Parque | 5 piezas</p>
                     </div>

                     <div class="col-6 col-sm-12">
                        <div class="d-flex align-items-center mb-1">
                           <span class="me-2" data-feather="map-pin" style="stroke-width:2.5;"></span>
                           <h6 class="mb-0">Ubicación</h6>
                        </div>
                        <p class="mb-0 fs-9 ms-4">Sucursal Centro | Vitrina 1</p>
                     </div>

                     <div class="col-6 col-sm-12">
                        <div class="d-flex align-items-center mb-1">
                           <span class="me-2" data-feather="activity" style="stroke-width:2.5;"></span>
                           <h6 class="mb-0">Último movimiento</h6>
                        </div>
                        <p class="mb-0 fs-9 ms-4">Apartado - 30 abril 2026 | 04:35 pm</p>
                     </div>

                  </div>
               </div>
            </div>

            <hr>

            <!-- Notas -->
            <div class="px-3">
               <div class="mb-3">
                  <h5 class="my-4">Notas</h5>

                  <div class="border rounded-3 p-3 bg-light">
                     <p class="mb-0 fs-9">
                        Cliente pasará por el artículo el viernes por la tarde. Confirmó por WhatsApp.
                     </p>
                  </div>
               </div>
            </div>

            <div class="offcanvas-fixed-footer border-top bg-white px-3 py-3">
               <div class="d-flex">
                  <button class="btn btn-primary w-100 btn-complete-reserved-sale" type="button">
                     <span data-feather="shopping-bag" class="me-1" style="height: 14px; width: 14px;"></span>
                     Completar venta
                  </button>
               </div>
            </div>

         </div>

      </div>
      <!-- End Offcanvas: Detalle de artículo apartado -->


      <!-- Modal apartar artículo -->
      <div class="modal fade" id="reserveItemModal" tabindex="-1" aria-labelledby="reserveItemModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content rounded-4">
               <div class="modal-header">

                  <div class="d-flex align-items-center" id="scrollspyForms">
                     <span class="fa-stack me-2 ms-n1">
                        <i class="fas fa-circle fa-stack-2x text-gray-200"></i>
                        <i class="fa-inverse fa-stack-1x text-gray-500" data-feather="bookmark" style="height: 15px; width: 15px;" data-fa-transform="shrink-2"></i>
                     </span>
                     <div class="col">
                        <h5 class="mb-0 position-relative fw-bold" id="reserveItemModalLabel">
                           <span>Apartar artículo</span>
                        </h5>
                        <p class="mb-0 fs-9 small">
                           Registra un producto apartado y define el tiempo límite para completar la compra.
                        </p>
                     </div>
                  </div>

                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

               </div>

               <div class="modal-body py-0">
                  <div class="row">

                     <!-- Columna principal -->
                     <div class="col-md-7">
                        <div class="p-3">
                           <h5>Información del apartado</h5>

                           <div class="row g-2">
                              <div class="col-12">
                                 <label class="form-label" for="reservedProductInput">Artículo</label>
                                 <select id="reservedProductInput" class="form-select w-100">
                                    <option value=""></option>
                                 </select>
                              </div>

                              <div class="col-md-6">
                                 <label class="form-label" for="reservedBrandInput">Marca</label>
                                 <input class="form-control form-control-sm" id="reservedBrandInput" type="text" placeholder="Marca del artículo" disabled />
                              </div>

                              <div class="col-md-3">
                                 <label class="form-label" for="reservedStockInput">Stock</label>
                                 <input class="form-control form-control-sm" id="reservedStockInput" type="text" placeholder="0" disabled />
                              </div>

                              <div class="col-md-3">
                                 <label class="form-label" for="reservedQuantityInput">Cantidad</label>
                                 <input class="form-control form-control-sm" id="reservedQuantityInput" type="number" min="1" value="1" />
                              </div>

                              <div class="col-md-6">
                                 <label class="form-label" for="reservedPriceInput">Precio unitario</label>
                                 <input class="form-control form-control-sm" id="reservedPriceInput" type="text" placeholder="$0.00" disabled />
                              </div>

                              <div class="col-md-6">
                                 <label class="form-label" for="reservedTotalInput">Total apartado</label>
                                 <input class="form-control form-control-sm" id="reservedTotalInput" type="text" placeholder="$0.00" disabled />
                              </div>

                              <hr class="my-3 mb-0">

                              <div class="col-md-6">
                                 <label class="form-label" for="customerNameInput">Nombre del cliente</label>
                                 <input class="form-control form-control-sm" id="customerNameInput" type="text" placeholder="Ej. Ana Martínez" />
                              </div>

                              <div class="col-md-6">
                                 <label class="form-label" for="customerPhoneInput">WhatsApp</label>
                                 <input class="form-control form-control-sm" id="customerPhoneInput" type="text" placeholder="Opcional - 10 dígitos" />
                              </div>

                              <div class="col-md-6">
                                 <label class="form-label" for="customerEmailInput">Correo electrónico</label>
                                 <input class="form-control form-control-sm" id="customerEmailInput" type="email" placeholder="Opcional" />
                              </div>

                              <div class="col-md-6">
                                 <label class="form-label" for="reservedByInput">Registrado por</label>
                                 <input class="form-control form-control-sm" id="reservedByInput" type="text" value="Elizabeth Hernández" disabled />
                              </div>

                              <div class="col-12">
                                 <label class="form-label" for="reserveNotesInput">Notas del apartado</label>
                                 <textarea class="form-control form-control-sm" id="reserveNotesInput" rows="3" placeholder="Ej. Cliente pasará por el artículo el viernes por la tarde."></textarea>
                              </div>
                           </div>
                        </div>
                     </div>

                     <!-- Columna lateral -->
                     <div class="col-md-5 bg-light border-start">
                        <div class="p-3">
                           <h5 class="mb-2">Condiciones</h5>
                           <p class="small">
                              El artículo quedará marcado como <strong>apartado</strong> y no estará disponible para venta hasta que se complete la compra o se libere nuevamente.
                           </p>

                           <div class="mb-2">
                              <label class="form-label" for="reserveLimitDateInput">Fecha límite</label>
                              <input class="form-control form-control-sm datetimepicker" id="reserveLimitDateInput" type="text" placeholder="dd/mm/yyyy" data-options='{"dateFormat":"d/m/Y"}' />

                           </div>

                           <div class="mb-2">
                              <label class="form-label" for="reserveAdvanceInput">Anticipo</label>
                              <input class="form-control form-control-sm" id="reserveAdvanceInput" type="text" placeholder="$0.00" />
                           </div>

                           <div class="mb-2">
                              <label class="form-label" for="reservePaymentMethodInput">Método del anticipo</label>
                              <select class="form-select form-select-sm" id="reservePaymentMethodInput">
                                 <option value="">Sin anticipo</option>
                                 <option value="efectivo">Efectivo</option>
                                 <option value="tarjeta">Tarjeta</option>
                                 <option value="transferencia">Transferencia</option>
                              </select>
                           </div>

                           <div class="form-check">
                              <input class="form-check-input" id="autoReleaseCheck" type="checkbox" checked />
                              <label class="form-check-label small" for="autoReleaseCheck">
                                 Liberar automáticamente si vence el apartado.
                              </label>
                           </div>

                        </div>
                     </div>

                  </div>
               </div>

               <div class="modal-footer">
                  <button type="button" class="btn btn-inverse-light" data-bs-dismiss="modal">Cancelar</button>
                  <button id="btnReserveItem" type="button" class="btn btn-primary">Apartar artículo</button>
               </div>

            </div>
         </div>
      </div>

      <!-- Modal editar apartado -->
      <div class="modal fade" id="editReservedItemModal" tabindex="-1" aria-labelledby="editReservedItemModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content rounded-4">
               <div class="modal-header">

                  <div class="d-flex align-items-center" id="scrollspyForms">
                     <span class="fa-stack me-2 ms-n1">
                        <i class="fas fa-circle fa-stack-2x text-gray-200"></i>
                        <i class="fa-inverse fa-stack-1x text-gray-500" data-feather="edit-2" style="height: 15px; width: 15px;" data-fa-transform="shrink-2"></i>
                     </span>

                     <div class="col">
                        <h5 class="mb-0 position-relative fw-bold" id="editReservedItemModalLabel">
                           <span>Editar apartado</span>
                        </h5>
                        <p class="mb-0 fs-9 small">
                           Actualiza los datos del cliente, anticipo o condiciones del artículo apartado.
                        </p>
                     </div>
                  </div>

                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

               </div>

               <div class="modal-body py-0">
                  <div class="loading-shape"><span>Cargando...</span></div>

                  <div class="row">

                     <!-- Columna principal -->
                     <div class="col-md-7">
                        <div class="p-3">
                           <h5>Información del apartado</h5>

                           <div class="row g-2">

                              <div class="col-12">

                                 <div class="p-2 border rounded-3 mt-2">
                                    <div class="d-flex align-items-center">
                                       <div class="avatar avatar-l">
                                          <img class="rounded-3" src="{{ asset('admin/img/placeholders/image-placeholder.svg') }}" alt="" />
                                       </div>
                                       <div class="ms-3 fs-9">
                                          <p class="mb-0 fw-semibold text-body-emphasis">Collar dorado minimalista</p>
                                          <p class="mb-0 text-body-quaternary">SKU/Código: AJ-118</p>
                                       </div>
                                    </div>
                                 </div>

                              </div>

                              <div class="col-md-6">
                                 <label class="form-label" for="editReservedBrandInput">Marca</label>
                                 <input
                                    class="form-control form-control-sm"
                                    id="editReservedBrandInput"
                                    type="text"
                                    value="Alma Joyería"
                                    disabled />
                              </div>

                              <div class="col-md-3">
                                 <label class="form-label" for="editReservedStockInput">Stock</label>
                                 <input
                                    class="form-control form-control-sm"
                                    id="editReservedStockInput"
                                    type="text"
                                    value="2 piezas"
                                    disabled />
                              </div>

                              <div class="col-md-3">
                                 <label class="form-label" for="editReservedQuantityInput">Cantidad</label>
                                 <input
                                    class="form-control form-control-sm"
                                    id="editReservedQuantityInput"
                                    type="number"
                                    min="1"
                                    value="1" />
                              </div>

                              <div class="col-md-6">
                                 <label class="form-label" for="editReservedPriceInput">Precio unitario</label>
                                 <input
                                    class="form-control form-control-sm"
                                    id="editReservedPriceInput"
                                    type="text"
                                    value="$229.00"
                                    disabled />
                              </div>

                              <div class="col-md-6">
                                 <label class="form-label" for="editReservedTotalInput">Total apartado</label>
                                 <input
                                    class="form-control form-control-sm"
                                    id="editReservedTotalInput"
                                    type="text"
                                    value="$229.00"
                                    disabled />
                              </div>

                              <hr class="my-3 mb-0">

                              <div class="col-md-6">
                                 <label class="form-label" for="editCustomerNameInput">Nombre del cliente</label>
                                 <input
                                    class="form-control form-control-sm"
                                    id="editCustomerNameInput"
                                    type="text"
                                    value="Ana Martínez"
                                    placeholder="Ej. Ana Martínez" />
                              </div>

                              <div class="col-md-6">
                                 <label class="form-label" for="editCustomerPhoneInput">WhatsApp</label>
                                 <input
                                    class="form-control form-control-sm"
                                    id="editCustomerPhoneInput"
                                    type="text"
                                    value="2461234567"
                                    placeholder="Opcional - 10 dígitos" />
                              </div>

                              <div class="col-md-6">
                                 <label class="form-label" for="editCustomerEmailInput">Correo electrónico</label>
                                 <input
                                    class="form-control form-control-sm"
                                    id="editCustomerEmailInput"
                                    type="email"
                                    value="ana@email.com"
                                    placeholder="Opcional" />
                              </div>

                              <div class="col-md-6">
                                 <label class="form-label" for="editReservedByInput">Registrado por</label>
                                 <input
                                    class="form-control form-control-sm"
                                    id="editReservedByInput"
                                    type="text"
                                    value="Elizabeth Hernández"
                                    disabled />
                              </div>

                              <div class="col-12">
                                 <label class="form-label" for="editReserveNotesInput">Notas del apartado</label>
                                 <textarea
                                    class="form-control form-control-sm"
                                    id="editReserveNotesInput"
                                    rows="3"
                                    placeholder="Ej. Cliente pasará por el artículo el viernes por la tarde.">Cliente pasará por el artículo el viernes por la tarde. Confirmó por WhatsApp.</textarea>
                              </div>

                           </div>
                        </div>
                     </div>

                     <!-- Columna lateral -->
                     <div class="col-md-5 bg-light border-start">
                        <div class="p-3">
                           <h5 class="mb-2">Condiciones</h5>

                           <p class="small">
                              Puedes modificar la fecha límite, el anticipo o las condiciones del apartado sin afectar el historial del artículo.
                           </p>

                           <div class="mb-2">
                              <label class="form-label" for="editReserveLimitDateInput">Fecha límite</label>
                              <input
                                 class="form-control form-control-sm datetimepicker"
                                 id="editReserveLimitDateInput"
                                 type="text"
                                 value="03/05/2026"
                                 placeholder="dd/mm/yyyy"
                                 data-options='{"dateFormat":"d/m/Y"}' />
                           </div>

                           <div class="mb-2">
                              <label class="form-label" for="editReserveAdvanceInput">Anticipo</label>
                              <input
                                 class="form-control form-control-sm"
                                 id="editReserveAdvanceInput"
                                 type="text"
                                 value="$100.00"
                                 placeholder="$0.00" />
                           </div>

                           <div class="mb-2">
                              <label class="form-label" for="editReservePaymentMethodInput">Método del anticipo</label>
                              <select class="form-select form-select-sm" id="editReservePaymentMethodInput">
                                 <option value="">Sin anticipo</option>
                                 <option value="efectivo" selected>Efectivo</option>
                                 <option value="tarjeta">Tarjeta</option>
                                 <option value="transferencia">Transferencia</option>
                              </select>
                           </div>

                           <div class="border rounded-3 p-3 bg-white my-3 fs-9">
                              <div class="d-flex justify-content-between align-items-center mb-2">
                                 <span class="text-body-tertiary">Total apartado</span>
                                 <strong>$229.00</strong>
                              </div>

                              <div class="d-flex justify-content-between align-items-center mb-2">
                                 <span class="text-body-tertiary">Anticipo</span>
                                 <strong class="text-success">$100.00</strong>
                              </div>

                              <hr class="my-2">

                              <div class="d-flex justify-content-between align-items-center">
                                 <span class="fw-semibold">Pendiente por pagar</span>
                                 <strong>$129.00</strong>
                              </div>
                           </div>

                           <div class="form-check mb-2">
                              <input class="form-check-input" id="editAutoReleaseCheck" type="checkbox" checked />
                              <label class="form-check-label small" for="editAutoReleaseCheck">
                                 Liberar automáticamente si vence el apartado.
                              </label>
                           </div>

                        </div>
                     </div>

                  </div>
               </div>

               <div class="modal-footer">
                  <button type="button" class="btn btn-inverse-light" data-bs-dismiss="modal">Cancelar</button>
                  <button id="btnUpdateReservedItem" type="button" class="btn btn-primary">
                     Guardar cambios
                  </button>
               </div>

            </div>
         </div>
      </div>

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

   <script src="{{ asset('admin/js/inventario/apartados.js') }}"></script>

</body>

</html>