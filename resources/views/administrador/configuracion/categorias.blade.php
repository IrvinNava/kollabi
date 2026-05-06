@php
$title = 'Categorías';
@endphp

@include('layout.administrador.header')

<body data-page="categories-page">

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
                  <h2 class="mb-0">Categorías</h2>
               </div>
            </div>
            <div id="products" data-list='{"valueNames":["name","marcas","productos","estatus","fecha"],"page":10,"pagination":true}'>
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
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCategoryModal"><span class="fas fa-plus me-2"></span>Agregar categoría</button>
                     </div>
                  </div>

               </div>
               <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-body-emphasis border-top border-bottom border-translucent position-relative top-1">
                  <div class="table-responsive scrollbar-overlay mx-n1 px-1">
                     <table id="usuariosTable" class="table table-hover fs-9 mb-0 w-100 kollabi-table">
                        <thead>
                           <tr>
                              <th class="sort align-middle ps-3" scope="col" data-sort="name">NOMBRE</th>
                              <th class="sort align-middle" scope="col" data-sort="marcas">MARCAS</th>
                              <th class="sort align-middle" scope="col" data-sort="productos">PRODUCTOS</th>
                              <th class="sort align-middle" scope="col" data-sort="estatus">ESTATUS</th>
                              <th class="sort align-middle" scope="col" data-sort="fecha">FECHA REGISTRO</th>
                           </tr>
                        </thead>
                        <tbody class="list" id="usuarios-table-body">
                           <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                              <td class="name align-middle pe-5 ps-3">
                                 <p class="mb-0 text-body-emphasis fw-bold">Joyería y accesorios</p>
                                 <div class="d-flex td-actions">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#editCategoryModal">Editar</a>
                                    <span class="mx-2">|</span>
                                    <a href="javascript:void(0);" class="btn-delete">Eliminar</a>
                                 </div>
                              </td>
                              <td class="marcas align-middle">5</td>
                              <td class="productos align-middle">180</td>
                              <td class="estatus align-middle">
                                 <span class="badge badge-phoenix fs-10 badge-phoenix-success">Activa</span>
                              </td>
                              <td class="fecha align-middle ps-3">
                                 <p class="mb-0">30/05/2025</p>
                              </td>
                           </tr>
                           <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                              <td class="name align-middle pe-5 ps-3">
                                 <p class="mb-0 text-body-emphasis fw-bold">Ropa</p>
                                 <div class="d-flex td-actions">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#editCategoryModal">Editar</a>
                                    <span class="mx-2">|</span>
                                    <a href="javascript:void(0);" class="btn-delete">Eliminar</a>
                                 </div>
                              </td>
                              <td class="marcas align-middle">8</td>
                              <td class="productos align-middle">36</td>
                              <td class="estatus align-middle">
                                 <span class="badge badge-phoenix fs-10 badge-phoenix-success">Activa</span>
                              </td>
                              <td class="fecha align-middle ps-3">
                                 <p class="mb-0">15/03/2025</p>
                              </td>
                           </tr>
                           <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                              <td class="name align-middle pe-5 ps-3">
                                 <p class="mb-0 text-body-emphasis fw-bold">Alimentos y consumibles</p>
                                 <div class="d-flex td-actions">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#editCategoryModal">Editar</a>
                                    <span class="mx-2">|</span>
                                    <a href="javascript:void(0);" class="btn-delete">Eliminar</a>
                                 </div>
                              </td>
                              <td class="marcas align-middle">3</td>
                              <td class="productos align-middle">43</td>
                              <td class="estatus align-middle">
                                 <span class="badge badge-phoenix fs-10 badge-phoenix-success">Activa</span>
                              </td>
                              <td class="fecha align-middle ps-3">
                                 <p class="mb-0">05/03/2025</p>
                              </td>
                           </tr>
                           <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                              <td class="name align-middle pe-5 ps-3">
                                 <p class="mb-0 text-body-emphasis fw-bold">Juguetes y coleccionables</p>
                                 <div class="d-flex td-actions">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#editCategoryModal">Editar</a>
                                    <span class="mx-2">|</span>
                                    <a href="javascript:void(0);" class="btn-delete">Eliminar</a>
                                 </div>
                              </td>
                              <td class="marcas align-middle">8</td>
                              <td class="productos align-middle">159</td>
                              <td class="estatus align-middle">
                                 <span class="badge badge-phoenix fs-10 badge-phoenix-success">Activa</span>
                              </td>
                              <td class="fecha align-middle ps-3">
                                 <p class="mb-0">25/02/2025</p>
                              </td>
                           </tr>
                           <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                              <td class="name align-middle pe-5 ps-3">
                                 <p class="mb-0 text-body-emphasis fw-bold">Arte</p>
                                 <div class="d-flex td-actions">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#editCategoryModal">Editar</a>
                                    <span class="mx-2">|</span>
                                    <a href="javascript:void(0);" class="btn-delete">Eliminar</a>
                                 </div>
                              </td>
                              <td class="marcas align-middle">3</td>
                              <td class="productos align-middle">78</td>
                              <td class="estatus align-middle">
                                 <span class="badge badge-phoenix fs-10 badge-phoenix-success">Activa</span>
                              </td>
                              <td class="fecha align-middle ps-3">
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

      <!-- Modal agregar -->
      <div class="modal fade" id="addCategoryModal" tabindex="-1" aria-labelledby="addCategoryModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-4">
               <div class="modal-header">
                  <div class="d-flex align-items-center" id="scrollspyForms">
                     <span class="fa-stack me-2 ms-n1">
                        <i class="fas fa-circle fa-stack-2x text-gray-200"></i>
                        <i class="fa-stack-1x text-gray-800" data-feather="tag" style="height: 15px; width: 15px;" data-fa-transform="shrink-2"></i>
                        <!-- <i class="fa-inverse fa-stack-1x text-primary-subtle fas fa-file-alt" data-fa-transform="shrink-2"></i> -->
                     </span>
                     <div class="col">
                        <h5 class="mb-0 position-relative fw-bold"><span>Nueva categoría</span></h5>
                     </div>
                  </div>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body py-0">
                  <div class="p-3">
                     <p class="mb-2 fs-9 small">Crea una categoría para agrupar productos similares.</p>
                     <div class="mb-3">
                        <label class="form-label" for="nameInput">Nombre(s)</label>
                        <input class="form-control form-control-sm" id="nameInput" type="text" />
                     </div>
                     <div class="mb-0">
                        <label class="form-label" for="descriptionTextarea">Descripción</label>
                        <textarea class="form-control" id="descriptionTextarea" rows="3"> </textarea>
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
      <div class="modal fade" id="editCategoryModal" tabindex="-1" aria-labelledby="editCategoryModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-4">
               <div class="modal-header">
                  <!-- <h3 class="modal-title" id="addCategoryModalLabel">Agregar rol</h3> -->

                  <div class="d-flex align-items-center" id="scrollspyForms">
                     <span class="fa-stack me-2 ms-n1">
                        <i class="fas fa-circle fa-stack-2x text-gray-200"></i>
                        <i class="fa-stack-1x text-gray-800" data-feather="edit" style="height: 15px; width: 15px;" data-fa-transform="shrink-2"></i>
                        <!-- <i class="fa-inverse fa-stack-1x text-primary-subtle fas fa-file-alt" data-fa-transform="shrink-2"></i> -->
                     </span>
                     <div class="col">
                        <h5 class="mb-0 position-relative fw-bold"><span>Joyería y accesorios</span></h5>
                        <p class="mb-0 fs-9 small">Haz ajustes para que esta categoría sea más clara o precisa.</p>
                     </div>
                  </div>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

               </div>
               <div class="modal-body p-0">
                  <div class="alert alert-subtle-secondary  border-top-0 rounded-0 p-3 mb-0" role="alert">
                     <p class="mb-0 fs-9 lh-sm">Las modificaciones que hagas a esta categoría, no afectarán a los productos asignados.</p>
                  </div>
                  <div class="px-4 pt-3 pb-4">
                     <div class="mb-3">
                        <label class="form-label" for="nameInputEdit">Nombre(s)</label>
                        <input class="form-control form-control-sm" id="nameInputEdit" type="text" value="Joyería y accesorios" />
                     </div>
                     <div class="mb-0">
                        <label class="form-label" for="descriptionTextareaEdit">Descripción</label>
                        <textarea class="form-control" id="descriptionTextareaEdit" rows="3">Categoría para agrupar productos que incluyen collares, pulseras, charms, aretes, etc.</textarea>
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

   <!-- <script>
      $(function() {
         $('#addCategoryModal').modal('show')
      });
   </script> -->

</body>

</html>