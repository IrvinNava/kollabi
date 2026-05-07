@php
$title = 'Nuevo plan';
@endphp

@include('layout.administrador.header')

<body data-page="planes-page">

   <main class="main" id="top">

      @include('layout.administrador.sidebar')
      @include('layout.administrador.topbar')

      <div class="content">

         <nav class="mb-3" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
               <li class="breadcrumb-item fw-semibold"><a href="{{url('app/admin/dashboard')}}"><img src="{{ asset('admin/img/brand/kollabi_icon.svg') }}" class="ms-1 mb-1" alt="Kollabi" width="18" /></a></li>
               <li class="breadcrumb-item fw-semibold"><a href="{{url('app/admin/configuracion/planes')}}">Planes de renta</a></li>
               <li class="breadcrumb-item fw-normal active">Nuevo</li>
            </ol>
         </nav>

         <div class="mb-9">

            <div class="row g-3 flex-between-end mb-5">
               <div class="col-auto">
                  <h2 class="mb-2">Nuevo plan</h2>
               </div>
               <div class="col-auto"></div>
            </div>

            <div class="row gx-4">

               <div class="col-md-8 offset-md-2">

                  <div class="card rounded-3">
                     <div class="card-body">

                        <form class="">
                           <h5 class="mb-3">Datos del plan</h5>
                           <div class="row g-3">
                              <div class="col-lg-6">
                                 <label class="form-label" for="namePlan">Nombre del plan</label>
                                 <div class="form-icon-container">
                                    <input class="form-control ps-6" id="namePlan" name="namePlan" type="text">
                                    <span class="form-icon" data-feather="tag" style="height: 15px; width: 15px;"></span>
                                 </div>
                              </div>
                              <div class="col-lg-3">
                                 <label class="form-label" for="costInput">Costo</label>
                                 <div class="form-icon-container">
                                    <input class="form-control ps-6" id="costInput" name="costInput" type="text">
                                    <span class="form-icon" data-feather="dollar-sign" style="height: 15px; width: 15px;"></span>
                                 </div>
                              </div>
                              <div class="col-lg-3">
                                 <label class="form-label" for="facturacion">Periodo de facturación</label>
                                 <div class="form-icon-container select" id="facturacion">
                                    <select class="form-select ps-6" name="" id="">
                                       <option value="0">Elige...</option>
                                       <option value="1">Semanal</option>
                                       <option value="2">Mensual</option>
                                       <option value="3">Trimestral</option>
                                       <option value="4">Anual</option>
                                    </select>
                                    <span class="form-icon" data-feather="calendar" style="height: 15px; width: 15px;"></span>
                                 </div>
                              </div>
                              <div class="col-12">
                                 <label class="form-label" for="sucursalSelect">Sucursales a las que aplicará</label>
                                 <select class="form-select multiple-select" id="sucursalSelect" multiple="multiple" >
                                    <option>Perpetua Zócalo</option>
                                    <option>Perpetua Apizaco</option>
                                 </select>
                              </div>
                           </div>
                           <hr class="mt-5 mb-4">
                           <div>
                              <div class="d-flex justify-content-between align-items-center w-100">
                                 <h5 class="mb-0">¿Incluye comisión por venta?</h5>
                                 <div class="form-check form-switch">
                                    <label class="form-check-label" for="comisionSwitch">Incluir</label>
                                    <input class="form-check-input" id="comisionSwitch" type="checkbox" />
                                 </div>
                              </div>
                              <div class="mb-3 d-none" id="percentageContainer">
                                 <label class="form-label" for="percentageComision">Escribe el porcentaje que se aplicará a cada venta</label>
                                 <div class="form-icon-container">
                                    <input class="form-control ps-6" id="percentageComision" name="percentageComision" type="text">
                                    <span class="form-icon" data-feather="percent" style="height: 15px; width: 15px;"></span>
                                 </div>
                              </div>
                           </div>
                           <hr class="mt-4 mb-4">
                        </form>

                        <form class="d-flex flex-column h-100">
                           <h5 class="mb-3">Características de plan</h5>
                           <p class="fs-9">Agrega una por una cada característica. Esta información será visible en cualquier momentos para tus clientes aliados.</p>

                           <div class="bg-light rounded-3 p-3">
                              <div id="planFeaturesList" class="mb-">
                                 <div class="row g-2 mb-2 feature-item">
                                    <div class="col-md-11"><input class="form-control form-control-sm feature-input" type="text" placeholder="Escribe una característica aquí..."></div>
                                    <div class="col-md-1">
                                       <a href="javascript:void(0);" class="btn btn-sm btn-phoenix-secondary text-body-quaternary remove-feature"><i class="fas fa-trash"></i></a>
                                    </div>
                                 </div>
                              </div>
                              <a class="btn btn-subtle-secondary me-1 mb-1" href="javascript:void(0);" id="addFeature"><span class="fas fa-plus me-2" data-fa-transform="shrink-3"></span>Agregar característica</a>
                           </div>

                        </form>
                     </div>
                     <div class="card-footer py-3 px-4 bg-bod d-flex justify-content-end align-items-center">
                        <div class="form-check form-switch me-3 mb-0">
                           <label class="form-check-label" for="planStatus">Activo</label>
                           <input class="form-check-input" id="planStatus" name="planStatus" type="checkbox" value="1" checked>
                        </div>
                        <button class="btn btn-primary mb-2 mb-sm-0" type="submit" id="savePlan">Registrar</button>
                     </div>
                  </div>


               </div>
            </div>
         </div>

         @include('layout.administrador.footer')

      </div>

   </main>

   @include('layout.administrador.assets')

   <!-- Selects -->
   <link href="{{ asset('admin/vendors/choices/choices.min.css') }}" rel="stylesheet">
   <script src="{{ asset('admin/vendors/choices/choices.min.js') }}"></script>

   <script src="{{ asset('admin/js/configuracion/planes.js') }}"></script>

</body>

</html>