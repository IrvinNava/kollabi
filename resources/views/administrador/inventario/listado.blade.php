@php
$title = 'Inventario';
@endphp

@include('layout.administrador.header')

<body data-page="inventory-page">

   <main class="main" id="top">

      @include('layout.administrador.sidebar')
      @include('layout.administrador.topbar')

      <div class="content">

         <div class="d-flex justify-content-between">
            <div class="col-auto">
               <h2 class="mb-0">Inventario</h2>
            </div>
         </div>

         <!-- Statistics cards -->
         <div class="row g-3 mt-1 mb-4">
            <div class="col-12 col-sm-6 col-xl-3">
               <div class="card border-0 shadow-sm h-100">
                  <div class="card-body">
                     <div class="d-flex justify-content-between align-items-start">
                        <div>
                           <p class="text-muted mb-1">Productos activos</p>
                           <h3 class="mb-0">180</h3>
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
                           <p class="text-muted mb-1">Unidades en stock</p>
                           <h3 class="mb-0">436</h3>
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
                           <p class="text-muted mb-1">Paquetes / Pickups</p>
                           <h3 class="mb-0">32</h3>
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
                           <p class="text-muted mb-1">Artículos apartados</p>
                           <h3 class="mb-0">18</h3>
                        </div>
                        <div class="d-flex bg-body-highlight rounded-3 p-2">
                           <i data-feather="archive" style="width: 18px; height: 18px;"></i>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <div class="d-flex flex-wrap gap-2 my-3">
            <a href="javascript:void(0);" class="btn btn-primary btn-sm pe-none">Todos (200)</a>
            <a href="{{url('admin/inventario/paquetes')}}" class="btn btn-subtle-secondary btn-sm">Paquetes (26)</a>
            <a href="{{url('admin/inventario/apartados')}}" class="btn btn-subtle-secondary btn-sm">Apartados (18)</a>
         </div>

         <!-- Table -->
         <div id="products" data-list='{"valueNames":["producto","marca","precio","estado","ubicacion"],"page":10,"pagination":true}'>

            <div class="mb-3">
               <div class="row g-3">
                  <div class="col-auto">
                     <div class="search-box">
                        <form class="position-relative">
                           <input class="form-control form-control-sm search-input search" type="search" placeholder="Buscar producto..." aria-label="Search" />
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
                     <button class="btn btn-sm btn-success">
                        <i data-feather="download" class="me-1"></i>
                        Exportar
                     </button>

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

                     <div class="col-md-4">
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

                     <div class="col-md-4">
                        <label class="form-label" for="ventasRange">Costo <span id="ventasRangeLabel" class="text-body-quaternary">($0 - $1000)</span> </label>
                        <div class="px-2 mt-2">
                           <div id="ventasRange" data-nouislider='{"range":{"min":0,"max":1000},"start":[0,1000],"connect":true}'></div>
                        </div>
                        <!-- https://refreshless.com/nouislider/ -->
                        <input type="hidden" id="costoMin" name="costo_min" value="0">
                        <input type="hidden" id="costoMax" name="costo_max" value="1000">
                     </div>

                     <div class="col-md-3">
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
                        <a class="btn btn-sm btn-primary mt-sm-4" href="{{url('admin/inventario')}}" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Limpiar filtros">
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
                           <th class="sort align-middle pe-5 py-3" scope="col" data-sort="producto">PRODUCTO</th>
                           <th class="sort align-middle pe-5 py-3" scope="col" data-sort="marca">MARCA</th>
                           <th class="sort align-middle py-3" scope="col" data-sort="precio">PRECIO</th>
                           <th class="sort align-middle py-3" scope="col" data-sort="estado">ESTADO</th>
                           <th class="sort align-middle py-3" scope="col" data-sort="ubicacion">UBICACIÓN</th>
                           <th class="sort align-middle py-3" scope="col" data-sort=""></th>
                        </tr>
                     </thead>
                     <tbody class="list" id="products-table-body">

                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                           <td class="producto align-middle white-space-nowrap pe-5">
                              <a class="d-flex align-items-center" href="#product-offcanvas" data-bs-toggle="offcanvas">
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
                           <td class="precio align-middle white-space-nowrap fw-semibold ps-3">
                              <p class="mb-0">$349.00</p>
                              <span class="text-danger">-10%</span>
                           </td>
                           <td class="estado align-middle">
                              <span class="badge badge-phoenix fs-10 badge-phoenix-success text-success"><span class="badge-label">Disponible</span></span>
                           </td>
                           <td class="ubicacion align-middle">
                              <p class="mb-0 fw-semibold">Sucursal centro</p>
                              <p class="mb-0 text-body-quaternary"><span class="me-1 mb-1" data-feather="map-pin" style="height:12px;width:12px;"></span>Estantería 1</span></p>
                           </td>
                           <td class="align-middle white-space-nowrap ps-4 btn-reveal-trigger">
                              <div class="btn-reveal-trigger position-static">
                                 <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                 <div class="dropdown-menu dropdown-menu-end py-2">
                                    <a class="dropdown-item" href="#product-offcanvas" data-bs-toggle="offcanvas"><i data-feather="eye" class="me-2"></i>Ver detalle</a>
                                    <a class="dropdown-item" href="#"><i data-feather="edit-2" class="me-2"></i>Editar</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item text-danger btn-delete" href="avascript:void(0);"><i data-feather="minus-circle" class="me-2"></i>Registrar salida</a>
                                 </div>
                              </div>
                           </td>
                        </tr>

                        <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                           <td class="producto align-middle white-space-nowrap pe-5">
                              <a class="d-flex align-items-center" href="#product-offcanvas" data-bs-toggle="offcanvas">
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
                           <td class="precio align-middle white-space-nowrap fw-semibold ps-3">
                              <p class="mb-0">$200.00</p>
                              <span class="text-danger"></span>
                           </td>
                           <td class="estado align-middle">
                              <span class="badge badge-phoenix fs-10 badge-phoenix-warning">Apartado</span></span>
                           </td>
                           <td class="ubicacion align-middle">
                              <p class="mb-0 fw-semibold">Sucursal parque</p>
                              <p class="mb-0 text-body-quaternary"><span class="me-1 mb-1" data-feather="map-pin" style="height:12px;width:12px;"></span>Rack 2</span></p>
                           </td>
                           <td class="align-middle white-space-nowrap ps-4 btn-reveal-trigger">
                              <div class="btn-reveal-trigger position-static">
                                 <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                 <div class="dropdown-menu dropdown-menu-end py-2">
                                    <a class="dropdown-item" href="#product-offcanvas" data-bs-toggle="offcanvas"><i data-feather="eye" class="me-2"></i>Ver detalle</a>
                                    <a class="dropdown-item" href="#"><i data-feather="edit-2" class="me-2"></i>Editar</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item text-danger btn-delete" href="avascript:void(0);"><i data-feather="minus-circle" class="me-2"></i>Registrar salida</a>
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
      <div class="offcanvas offcanvas-end settings-panel border-0" id="product-offcanvas" tabindex="-1" aria-labelledby="product-offcanvas">

         <div class="loading-shape"><span>Cargando...</span></div>
         <div class="offcanvas-header align-items-start border-bottom flex-column border-translucent">
            <div class="pt-1 w-100 d-flex justify-content-between align-items-center">
               <button class="btn p-1 fw-semibolder" type="button" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fa-solid fa-arrow-right-from-bracket fs-7"></i></button>
            </div>
         </div>

         <div class="offcanvas-body scrollbar px-0 fs-9" id="themeController">
            <div class="px-3">

               <div class="card">
                  <div class="p-3">
                     <div class="row g-3 align-items-center">
                        <div class="col-5" id="image_gallery">
                           <a class="col-sm-6 col-md-4 col-xl-3 text-center text-decoration-none img-zoom-hover glightbox4 overflow-hidden" href="{{ asset('admin/img/placeholders/image-placeholder.svg') }}" data-glightbox="title: Collar dorado minimalista; description: .custom-desc1; descPosition: right;">
                              <div class="hoverbox rounded-2 photo-details">
                                 <img class="img-fluid object-fit-cover" src="{{ asset('admin/img/placeholders/image-placeholder.svg') }}" alt="" />
                                 <div class="hoverbox-content flex-center">
                                    <div class="rounded-pill bg-white d-flex flex-center" style="width: 60px; height: 60px">
                                       <span class="text-secondary" data-feather="zoom-in" style="height: 30px; width: 30px;"></span>
                                    </div>
                                 </div>
                              </div>
                           </a>
                           <div class="glightbox-desc custom-desc1">
                              <p class="mb-"><span class="text-body-quaternary">SKU/Codígo: AJ-118</span></p>
                              <p class="mb-">$200.00</p>
                              <p class="mb-">MagentaTLX</p>
                              <p class="mb-"><span class="badge badge-phoenix fs-10 badge-phoenix-success text-success">Disponible</span></p>
                           </div>
                        </div>
                        <div class="col-7">
                           <h4 class="mb-2 fw-semibold text-body-emphasis">Collar dorado minimalista</h4>
                           <p class="mb-2 text-body-tertiary">SKU/Codígo: AJ-118</p>
                           <h5 class="mb-2 fw-normal">$200.00</h5>
                           <p class="mb-2 text-danger">-10%</p>
                        </div>

                     </div>
                  </div>
               </div>
            </div>
            <hr>
            <div class="px-3">
               <div class="mb-3">
                  <h5 class="my-4">Datos del artículo</h5>
                  <div class="row g-3 flex-sm-column">

                     <div class="col-6 col-sm-12">
                        <div class="d-flex align-items-center mb-1"><span class="me-2" data-feather="flag" style="stroke-width:2.5;"></span>
                           <h6 class="mb-0">Estado</h6>
                        </div>
                        <p class="mb-0 ms-4">
                           <span class="badge badge-phoenix fs-10 badge-phoenix-success text-success">Disponible</span>
                           <span class="badge badge-phoenix fs-10 badge-phoenix-warning">Apartado</span></span>
                        </p>
                     </div>
                     <div class="col-6 col-sm-12">
                        <div class="d-flex align-items-center mb-1"><span class="me-2" data-feather="user" style="stroke-width:2.5;"></span>
                           <h6 class="mb-0">Marca</h6>
                        </div>
                        <p class="mb-0 fs-9 ms-4">MagentaTLX</p>
                     </div>
                     <div class="col-6 col-sm-12">
                        <div class="d-flex align-items-center mb-1"><span class="me-2" data-feather="tag" style="stroke-width:2.5;"></span>
                           <h6 class="mb-0">Categoría</h6>
                        </div>
                        <p class="mb-0 fs-9 ms-4">Joyería</p>
                     </div>
                     <div class="col-6 col-sm-12">
                        <div class="d-flex align-items-center mb-1"><span class="me-2" data-feather="archive" style="stroke-width:2.5;"> </span>
                           <h6 class="mb-0">Stock</h6>
                        </div>
                        <p class="mb-0 fs-9 ms-4">Sucursal Centro | 2 piezas</p>
                        <p class="mb-0 fs-9 ms-4"><span class="text-body-quaternary">Repisa 1</span></p>
                        <p class="mb-0 fs-9 ms-4">Sucursal Parque | 5 piezas</p>
                        <p class="mb-0 fs-9 ms-4"><span class="text-body-quaternary">Bodega</span></p>
                     </div>
                     <div class="col-6 col-sm-12">
                        <div class="d-flex align-items-center mb-1"><span class="me-2" data-feather="calendar" style="stroke-width:2.5;"></span>
                           <h6 class="mb-0">Útimo movimiento</h6>
                        </div>
                        <p class="mb-0 ms-4">Entrada - 25 Abril 2026 | 12:00 pm</p>
                     </div>
                  </div>
               </div>
            </div>

            <hr>

            <!-- Indicaciones de entrega -->
            <div class="px-3">
               <div class="mb-3">
                  <h5 class="mb-3">Notas</h5>

                  <div class="border rounded-3 p-3 bg-light">
                     <p class="mb-0 fs-9">
                        Mantener el producto refrigerado o en un lugar fresco.
                     </p>
                  </div>
               </div>
            </div>

         </div>
      </div>
      <!-- End Offcamvas -->

   </main>

   @include('layout.administrador.assets')

   <link href="{{ asset('admin/vendors/glightbox/glightbox.min.css') }}" rel="stylesheet">

   <!-- Selects filters -->
   <link href="{{ asset('admin/vendors/choices/choices.min.css') }}" rel="stylesheet">
   <script src="{{ asset('admin/vendors/choices/choices.min.js') }}"></script>

   <!-- Range -->
   <link href="{{ asset('admin/vendors/nouislider/nouislider.min.css') }}" rel="stylesheet">
   <script src="{{ asset('admin/vendors/nouislider/nouislider.min.js') }}"></script>

   <!-- Datepickers -->
   <link href="{{ asset('admin/vendors/flatpickr/flatpickr.min.css') }}" rel="stylesheet">
   <script src="{{ asset('admin/vendors/flatpickr/flatpickr.min.js') }}"></script>

   <script src="{{ asset('admin/vendors/glightbox/glightbox.min.js') }}"></script>

   <script src="{{ asset('admin/js/inventario/inventario.js') }}"></script>

</body>

</html>