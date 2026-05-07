@php
$title = 'Salidas de productos';
@endphp

@include('layout.administrador.header')

<body data-page="discontinued-page">
   <main class="main" id="top">

      @include('layout.administrador.sidebar')
      @include('layout.administrador.topbar')

      <div class="content">

         <div class="d-flex justify-content-between mb-4">
            <div class="col-auto">
               <h2 class="mb-1">Salidas de productos</h2>
               <p class="text-body-secondary mb-0">
                  Consulta y confirma las salidas generadas por las marcas.
               </p>
            </div>
         </div>



         <div class="row g-3">

            <!-- Columna principal -->
            <div class="col-xl-8">
               <div class="card card-body border-0 p-4 h-100">

                  <!-- Select -->
                  <div class="mb-3">
                     <p class="mb-2">Elige la marca que va a registrar una salida</p>
                     <select class="form-select form-select-sm" id="brandSelect">
                        <option></option>
                     </select>
                  </div>

                  <!-- Estado vacío / contenedor inicial -->
                  <div class="card bg-body d-flex align-items-center justify-content-center text-center py-8 p-15 mb-3 d-non"
                     style="min-height: 340px;">
                     <div>
                        <div class="mx-auto mb-3 rounded-circle bg-purple-opacity d-flex align-items-center justify-content-center"
                           style="width: 90px; height: 90px;">
                           <i data-feather="package" class="text-purple" style="width: 40px; height: 40px;"></i>
                        </div>

                        <p class="mb-2 fw-bold">Al seleccionar una marca, aquí aparecerán los artículos incluidos en la salida pendiente.</p>
                        <p class="text-body-secondary fw-normal mb-0">
                           Los detalles de los artículos se mostrarán para que puedas revisarlos antes de confirmar la salida.
                        </p>
                     </div>
                  </div>

                  <!-- Estado vacío / no hay salidas pendientes -->
                  <div class="card bg-body d-flex align-items-center justify-content-center text-center py-8 p-15 mb-3 d-non"
                     style="min-height: 340px;">
                     <div>
                        <div class="mx-auto mb-3 rounded-circle bg-purple-opacity d-flex align-items-center justify-content-center"
                           style="width: 90px; height: 90px;">
                           <i data-feather="check-circle" class="text-purple" style="width: 40px; height: 40px;"></i>
                        </div>

                        <p class="mb-2 fw-bold">No hay salidas pendientes</p>
                        <p class="text-body-secondary fw-normal mb-0">
                           Por ahora, esta marca no tiene salidas pendientes. Cuando registre artículos para dar de baja, podrás consultarlos y confirmar la salida desde este espacio.
                        </p>
                     </div>
                  </div>

                  <!-- Contenido de Salida -->
                  <div>
                     <div class="alert alert-subtle-secondary py-2 px-2" role="alert">
                        <span class="ms-1 me-2" data-feather="info"></span>Estos artículos se van a dar de baja por <span class="fw-bold">MagentaTLX</span>. Revisa y confirma la salida física.
                     </div>
                     <!-- Table -->
                     <div id="discontinued" data-list='{"valueNames":["articulo","marca","precio","algo"],"page":10,"pagination":true}'>

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

                        </div>

                        <div class="mx-n4 px-4 px-lg-6 bg-body-emphasis border-top border-bottom border-translucent position-relative top-1">
                           <div class="table-responsive dropdown-table-visible scrollbar-overlay mx-n1 px-1">
                              <table id="discontinuedTable" class="table table-hover fs-9 mb-0 w-100 kollabi-table">
                                 <thead>
                                    <tr>
                                       <th class="align-middle ps-0" scope="col"><input type="checkbox" class="check-select-all"></th>
                                       <th class="sort align-middle pe-5 py-3" scope="col" data-sort="articulo">ARTÍCULO</th>
                                       <th class="sort align-middle py-3" scope="col" data-sort="marca">MARCA</th>
                                       <th class="sort align-middle py-3" scope="col" data-sort="precio">COSTO</th>
                                       <th class="align-middle py-3" scope="col"></th>
                                    </tr>
                                 </thead>
                                 <tbody class="list" id="discontinued-table-body">

                                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                       <td class="align-middle"><input type="checkbox" class="checkbox-row"></td>
                                       <td class="articulo align-middle white-space-nowrap pe-5" data-search="Vela aromática SKU PK-0001 PK0001">
                                          <a class="d-flex align-items-center" href="#product-offcanvas" data-bs-toggle="offcanvas">
                                             <div class="avatar avatar-l">
                                                <img class="rounded-3" src="{{ asset('admin/img/placeholders/image-placeholder.svg') }}" alt="" />
                                             </div>
                                             <div class="ms-3">
                                                <p class="mb-0 fw-semibold text-body-emphasis">Vela aromática</p>
                                                <p class="mb-0 text-body-quaternary">SKU: PK-0001-56</p>
                                             </div>
                                          </a>
                                       </td>
                                       <td class="marca align-middle white-space-nowrap pe-5">
                                          <p class="mb-0 fw-semibold">Casa nube</p>
                                          <p class="mb-0 text-body-quaternary"><span class="me-1 mb-1" data-feather="tag" style="height:12px;width:12px;"></span>Ropa</p>
                                       </td>
                                       <td class="precio align-middle white-space-nowrap fw-semibold">
                                          <p class="mb-0">$120.00</p>
                                          <span class="text-danger">-10%</span>
                                       </td>
                                       <td class="align-middle ps-4">
                                          <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                          <div class="dropdown-menu dropdown-menu-end py-2">
                                             <a class="dropdown-item" href="#product-offcanvas" data-bs-toggle="offcanvas"><i data-feather="eye" class="me-2"></i>Ver detalle</a>
                                          </div>
                                       </td>
                                    </tr>

                                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                       <td class="align-middle"><input type="checkbox" class="checkbox-row"></td>
                                       <td class="articulo align-middle white-space-nowrap pe-5">
                                          <a class="d-flex align-items-center" href="#product-offcanvas" data-bs-toggle="offcanvas">
                                             <div class="avatar avatar-l">
                                                <img class="rounded-3" src="{{ asset('admin/img/placeholders/image-placeholder.svg') }}" alt="" />
                                             </div>
                                             <div class="ms-3">
                                                <p class="mb-0 fw-semibold text-body-emphasis">Aretes de perla</p>
                                                <p class="mb-0 text-body-quaternary">SKU: PK-0002</p>
                                             </div>
                                          </a>
                                       </td>
                                       <td class="marca align-middle white-space-nowrap pe-5">
                                          <p class="mb-0 fw-semibold">Magenta TLX</p>
                                          <p class="mb-0 text-body-quaternary"><span class="me-1 mb-1" data-feather="tag" style="height:12px;width:12px;"></span>Joyería</p>
                                       </td>
                                       <td class="precio align-middle white-space-nowrap fw-semibold">
                                          <p class="mb-0">$200.00</p>
                                       </td>
                                       <td class="align-middle ps-4">
                                          <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                          <div class="dropdown-menu dropdown-menu-end py-2">
                                             <a class="dropdown-item" href="#product-offcanvas" data-bs-toggle="offcanvas"><i data-feather="eye" class="me-2"></i>Ver detalle</a>
                                          </div>
                                       </td>
                                    </tr>

                                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                       <td class="align-middle"><input type="checkbox" class="checkbox-row"></td>
                                       <td class="articulo align-middle white-space-nowrap pe-5">
                                          <a class="d-flex align-items-center" href="#product-offcanvas" data-bs-toggle="offcanvas">
                                             <div class="avatar avatar-l">
                                                <img class="rounded-3" src="{{ asset('admin/img/placeholders/image-placeholder.svg') }}" alt="" />
                                             </div>
                                             <div class="ms-3">
                                                <p class="mb-0 fw-semibold text-body-emphasis">Collar perrito</p>
                                                <p class="mb-0 text-body-quaternary">SKU: PK-0003</p>
                                             </div>
                                          </a>
                                       </td>
                                       <td class="marca align-middle white-space-nowrap pe-5">
                                          <p class="mb-0 fw-semibold">Magenta TLX</p>
                                          <p class="mb-0 text-body-quaternary"><span class="me-1 mb-1" data-feather="tag" style="height:12px;width:12px;"></span>Joyería</p>
                                       </td>
                                       <td class="precio align-middle white-space-nowrap fw-semibold">
                                          <p class="mb-0">$200.00</p>
                                       </td>
                                       <td class="align-middle ps-4">
                                          <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs-10" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                          <div class="dropdown-menu dropdown-menu-end py-2">
                                             <a class="dropdown-item" href="#product-offcanvas" data-bs-toggle="offcanvas"><i data-feather="eye" class="me-2"></i>Ver detalle</a>
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

               </div>
            </div>

            <!-- Resumen lateral -->
            <div class="col-xl-4">
               <div class="card border-0 h-10 sticky-top" style="top: 80px;">
                  <div class="card-body p-4">

                     <div class="d-flex align-items-center mb-4">
                        <div class="d-flex bg-body-highlight border border-translucent rounded-3 p-2">
                           <i data-feather="clipboard" class="" style="width: 20px; height: 20px;"></i>
                        </div>
                        <div class="ms-2">
                           <h5 class="mb-0">Salida pendiente detectada</h5>
                        </div>
                     </div>

                     <hr>

                     <div class="d-flex justify-content-between align-items-center py-2">
                        <div class="d-flex align-items-center text-body-quaternary">
                           <span class="me-1" data-feather="shopping-bag" style="height: 14px; width: 14px;"></span>
                           <span class="">Marca:</span>
                        </div>
                        <span class="fw-semibold">MagentaTLX</span>
                     </div>

                     <div class="d-flex justify-content-between align-items-center py-2">
                        <div class="d-flex align-items-center text-body-quaternary">
                           <span class="me-1" data-feather="list" style="height: 14px; width: 14px;"></span>
                           <span class="">Artículos:</span>
                        </div>
                        <span class="fw-semibold">3</span>
                     </div>

                     <div class="d-flex justify-content-between align-items-center py-2">
                        <div class="d-flex align-items-center text-body-quaternary">
                           <span class="me-1" data-feather="user" style="height: 14px; width: 14px;"></span>
                           <span class="">Generada por:</span>
                        </div>
                        <span class="fw-semibold">Elizabeth Hernández</span>
                     </div>

                     <div class="d-flex justify-content-between align-items-center py-2">
                        <div class="d-flex align-items-center text-body-quaternary">
                           <span class="me-1" data-feather="calendar" style="height: 14px; width: 14px;"></span>
                           <span class="">Fecha de solicitud:</span>
                        </div>
                        <span class="fw-semibold">Hoy, 10:42 a.m.</span>
                     </div>

                     <div class="d-flex justify-content-between align-items-center py-2">
                        <div class="d-flex align-items-center text-body-quaternary">
                           <span class="me-1" data-feather="map-pin" style="height: 14px; width: 14px;"></span>
                           <span class="">Sucursal:</span>
                        </div>
                        <span class="fw-semibold">Sucursal parque</span>
                     </div>

                     <hr>

                     <div class="d-flex justify-content-between align-items-center pt-2 mb-3">
                        <span class="text-body-secondary">Estado:</span>
                        <span class="badge badge-phoenix badge-phoenix-warning px-3 py-2">
                           <i data-feather="clock" style="width:14px;height:14px;" class="me-1"></i>
                           Pendiente de confirmar
                        </span>
                     </div>


                     <button id="btn-registrar-salida" class="btn btn-sm btn-primary w-100">
                        <i data-feather="log-out" class="me-1"></i>
                        Confirmar salida
                     </button>

                  </div>
               </div>
            </div>

         </div>
















         @include('layout.administrador.footer')

      </div>

      <!-- Start Offcanvas: Detalle de recolección -->
      <div class="offcanvas offcanvas-end settings-panel border-0" id="product-offcanvas" tabindex="-1" aria-labelledby="product-offcanvas-label">

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
                           </div>
                        </div>

                        <div class="col-7">
                           <h4 class="mb-2 fw-semibold text-body-emphasis" id="product-offcanvas-label">
                              Aretes de plata
                           </h4>

                           <p class="mb-2 text-body-tertiary">SKU/Código: PK-0001</p>

                           <h5 class="mb-2 fw-normal">$420.00</h5>
                           <p class="mb-2 text-danger">-10%</p>
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
      <!-- End Offcanvas: Detalle de recolección -->

   </main>

   @include('layout.administrador.assets')

   <link href="{{ asset('admin/vendors/glightbox/glightbox.min.css') }}" rel="stylesheet">

   <!-- Select 2 -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

   <script src="{{ asset('admin/vendors/glightbox/glightbox.min.js') }}"></script>

   <script src="{{ asset('admin/js/inventario/salidas.js') }}"></script>

</body>

</html>