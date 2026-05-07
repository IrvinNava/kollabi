@php
$title = 'Planes de renta';
@endphp

@include('layout.administrador.header')

<body data-page="planes-page">

   <main class="main" id="top">

      @include('layout.administrador.sidebar')
      @include('layout.administrador.topbar')

      <div class="content">
         <!-- <nav class="mb-3" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
               <li class="breadcrumb-item"><a href="{{url('app/admin/dashboard')}}">Inicio</a></li>
               <li class="breadcrumb-item active">Marcas</li>
            </ol>
         </nav> -->
         <div class="mb-9">
            <div class="row align-items-center justify-content-between g-3 mb-4">
               <div class="col-auto">
                  <h2 class="mb-0">Planes de renta</h2>
               </div>
               <div class="col-auto">
                  <a class="btn btn-phoenix-primary text-secondary-emphasis btn-icon me-2" data-bs-toggle="collapse" href="#collapseAbout" role="button" aria-expanded="false" aria-controls="collapseAbout">
                     <span class="fas fa-circle-question fa-lg"></span>
                  </a>
               </div>

               <div class="collapse" id="collapseAbout">
                  <div class="border border-translucent bg-gray-100 p-3 rounded d-flex align-items-start fs-9">
                     <div class="bg-gray-200 p-2 me-3 rounded-2">
                        <span class="" data-feather="info" style="height: 20px; width: 20px;"></span>
                     </div>
                     <div>
                        <p class="fs-9 mb-0">En esta sección puedes <b>crear</b> y <b>administrar</b> los planes de renta disponibles para tus marcas o aliados. Define el <b>nombre</b>, <b>condiciones</b>, <b>precio</b> y duración de cada plan según el tipo de <b>espacio</b> o <b>beneficio que ofrezcas</b>. Esta herramienta te permite mantener el control de las opciones disponibles y asignarlas fácilmente a cada colaborador.</p>
                     </div>
                  </div>
               </div>
            </div>
            <div id="products" data-list='{"valueNames":["name","marcas","productos","estatus","fecha"],"page":10,"pagination":true}'>
               <div class="mb-4">
                  <div class="d-flex flex-wrap gap-3">
                     <div class="search-box">
                        <form class="position-relative">
                           <input class="form-control search-input search" type="search" placeholder="Buscar plan..." aria-label="Search" />
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
                        <a href="{{url('app/admin/configuracion/planes/nuevo')}}" class="btn btn-primary"><span class="fas fa-plus me-2"></span>Agregar plan</a>
                     </div>
                  </div>

               </div>
               <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-body-emphasis border-top border-bottom border-translucent position-relative top-1">
                  <div class="table-responsive scrollbar-overlay mx-n1 px-1">
                     <table id="usuariosTable" class="table table-hover fs-9 mb-0 w-100 kollabi-table">
                        <thead>
                           <tr>
                              <th class="sort align-middle ps-3" scope="col" data-sort="name">NOMBRE</th>
                              <th class="sort align-middle" scope="col" data-sort="estatus">ESTATUS</th>
                              <th class="sort align-middle" scope="col" data-sort="actualizacion">ÚLTIMA ACTUALIZACIÓN</th>
                              <th class="sort align-middle" scope="col" data-sort="publicacion">FECHA DE PUBLICACIÓN</th>
                           </tr>
                        </thead>
                        <tbody class="list" id="usuarios-table-body">
                           <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                              <td class="name align-middle pe-5 ps-3">
                                 <p class="mb-0 text-body-emphasis fw-bold">Plan compartido</p>
                                 <div class="d-flex td-actions">
                                    <a href="#profile-offcanvas" data-bs-toggle="offcanvas">Ver</a>
                                    <span class="mx-2">|</span>
                                    <a href="{{url('app/admin/configuracion/planes/editar')}}">Editar</a>
                                    <span class="mx-2">|</span>
                                    <a href="javascript:void(0);" class="btn-delete">Eliminar</a>
                                 </div>
                              </td>
                              <td class="estatus align-middle">
                                 <span class="badge badge-phoenix fs-10 badge-phoenix-success">Activo</span>
                              </td>
                              <td class="actualizacion align-middle">
                                 <p class="mb-0">30/05/2025 | 12:25 am</p>
                              </td>
                              <td class="publicacion align-middle ps-3">
                                 <p class="mb-0">30/05/2025</p>
                              </td>
                           </tr>
                           <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                              <td class="name align-middle pe-5 ps-3">
                                 <p class="mb-0 text-body-emphasis fw-bold">Vitrina 1</p>
                                 <div class="d-flex td-actions">
                                    <a href="#profile-offcanvas" data-bs-toggle="offcanvas">Ver</a>
                                    <span class="mx-2">|</span>
                                    <a href="{{url('app/admin/configuracion/planes/editar')}}">Editar</a>
                                    <span class="mx-2">|</span>
                                    <a href="javascript:void(0);" class="btn-delete">Eliminar</a>
                                 </div>
                              </td>
                              <td class="estatus align-middle">
                                 <span class="badge badge-phoenix fs-10 badge-phoenix-success">Activo</span>
                              </td>
                              <td class="actualizacion align-middle">
                                 <p class="mb-0">30/05/2025 | 12:25 am</p>
                              </td>
                              <td class="publicacion align-middle ps-3">
                                 <p class="mb-0">30/05/2025</p>
                              </td>
                           </tr>
                           <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                              <td class="name align-middle pe-5 ps-3">
                                 <p class="mb-0 text-body-emphasis fw-bold">Vitrina grande</p>
                                 <div class="d-flex td-actions">
                                    <a href="#profile-offcanvas" data-bs-toggle="offcanvas">Ver</a>
                                    <span class="mx-2">|</span>
                                    <a href="{{url('app/admin/configuracion/planes/editar')}}">Editar</a>
                                    <span class="mx-2">|</span>
                                    <a href="javascript:void(0);" class="btn-delete">Eliminar</a>
                                 </div>
                              </td>
                              <td class="estatus align-middle">
                                 <span class="badge badge-phoenix fs-10 badge-phoenix-success">Activo</span>
                              </td>
                              <td class="actualizacion align-middle">
                                 <p class="mb-0">30/05/2025 | 12:25 am</p>
                              </td>
                              <td class="publicacion align-middle ps-3">
                                 <p class="mb-0">30/05/2025</p>
                              </td>
                           </tr>
                           <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                              <td class="name align-middle pe-5 ps-3">
                                 <p class="mb-0 text-body-emphasis fw-bold">Marca VIP</p>
                                 <div class="d-flex td-actions">
                                    <a href="#profile-offcanvas" data-bs-toggle="offcanvas">Ver</a>
                                    <span class="mx-2">|</span>
                                    <a href="{{url('app/admin/configuracion/planes/editar')}}">Editar</a>
                                    <span class="mx-2">|</span>
                                    <a href="javascript:void(0);" class="btn-delete">Eliminar</a>
                                 </div>
                              </td>
                              <td class="estatus align-middle">
                                 <span class="badge badge-phoenix fs-10 badge-phoenix-success">Activo</span>
                              </td>
                              <td class="actualizacion align-middle">
                                 <p class="mb-0">30/05/2025 | 12:25 am</p>
                              </td>
                              <td class="publicacion align-middle ps-3">
                                 <p class="mb-0">30/05/2025</p>
                              </td>
                           </tr>
                           <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                              <td class="name align-middle pe-5 ps-3">
                                 <p class="mb-0 text-body-emphasis fw-bold">Marca preferencial</p>
                                 <div class="d-flex td-actions">
                                    <a href="#profile-offcanvas" data-bs-toggle="offcanvas">Ver</a>
                                    <span class="mx-2">|</span>
                                    <a href="{{url('app/admin/configuracion/planes/editar')}}">Editar</a>
                                    <span class="mx-2">|</span>
                                    <a href="javascript:void(0);" class="btn-delete">Eliminar</a>
                                 </div>
                              </td>
                              <td class="estatus align-middle">
                                 <span class="badge badge-phoenix fs-10 badge-phoenix-success">Activo</span>
                              </td>
                              <td class="actualizacion align-middle">
                                 <p class="mb-0">30/05/2025 | 12:25 am</p>
                              </td>
                              <td class="publicacion align-middle ps-3">
                                 <p class="mb-0">30/05/2025</p>
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

   </main>

   @include('layout.administrador.assets')

   <!-- <script>
      $(function() {
         $('#addCategoryModal').modal('show')
      });
   </script> -->

</body>

</html>