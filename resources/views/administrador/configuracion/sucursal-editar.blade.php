@php
$title = 'Perpetua Zócalo';
@endphp

@include('layout.administrador.header')

<body data-page="profile-page">

   <main class="main" id="top">

      @include('layout.administrador.sidebar')
      @include('layout.administrador.topbar')


      <div class="content px-0 pt-navbar">
         <div class="row g-0">

            <!-- Menú -->
            <div class="col-12 col-lg-3 px-0 border-end-xl border-top-sm d-none d-lg-block">
               <div class="bg-body-highlight dark__bg-gray-1100 h-100">
                  <div class="py-4 px-5 py-lg-5" style="height: 90vh;">
                     <div class="sticky-top" style="top: 96px;">
                        <div class="d-flex flex-between-center">
                           <h5 class="mb-2">Configuración</h5>
                           <button class="btn p-0 fs-8 d-lg-none" data-phoenix-dismiss="offcanvas"><span class="fa-solid fa-xmark" data-fa-transform="up-3"></span></button>
                        </div>

                        <div>
                           <a href="{{url('admin/configuracion/perfil-del-negocio')}}" class="d-flex align-items-center link-submenu py-2">
                              <i class="mb-1 me-2" data-feather="home" style="height: 15px; width: 15px;"></i>
                              <div class="lh-sm">
                                 <p class="mb-0 fs-9 fw-bold">General</p>
                                 <small>Define los datos públicos.</small>
                              </div>
                           </a>
                           <a href="{{url('admin/configuracion/apariencia')}}" class="d-flex align-items-center link-submenu py-2">
                              <i class="mb-1 me-2" data-feather="pen-tool" style="height: 15px; width: 15px;"></i>
                              <div class="lh-sm">
                                 <p class="mb-0 fs-9 fw-bold">Apriencia</p>
                                 <small>Personaliza tus colores y estilo.</small>
                              </div>
                           </a>
                           <a href="{{url('admin/configuracion/sucursales')}}" class="d-flex align-items-center link-submenu active py-2">
                              <i class="mb-1 me-2" data-feather="map-pin" style="height: 15px; width: 15px;"></i>
                              <div class="lh-sm">
                                 <p class="mb-0 fs-9 fw-bold">Sucursales</p>
                                 <small>Administra direcciones y horarios.</small>
                              </div>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <!-- Content -->
            <div class="col-12 col-lg-9 px-0 bg-body">
               <div class="px-4 px-lg-5 py-5">

                  <nav class="mb-3" aria-label="breadcrumb">
                     <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item fw-semibold"><a href="{{url('admin/dashboard')}}"><img src="{{ asset('admin/img/brand/kollabi_icon.svg') }}" class="ms-1 mb-1" alt="Kollabi" width="18" /></a></li>
                        <li class="breadcrumb-item fw-semibold"><a href="{{url('admin/configuracion/perfil-del-negocio')}}">Perfil del negocio</a></li>
                        <li class="breadcrumb-item fw-semibold"><a href="{{url('admin/configuracion/sucursales')}}">Sucursales</a></li>
                        <li class="breadcrumb-item fw-normal active">Perpetua Zócalo</li>
                     </ol>
                  </nav>

                  <div class="d-flex flex-row flex-between-center">
                     <div class="d-flex">
                        <div class="d-flex justify-content-center align-items-center me-3">
                           <div class="bg-body-secondary rounded-3 py-2 px-2">
                              <i class="fas fa-store text-body-quaternary text-opacity-75 fa-lg"></i>
                           </div>
                        </div>
                        <h2 class="mb-0 lh-base">Perpetua Zócalo</h2>
                     </div>
                     <button class="btn btn-phoenix-secondary btn-square d-lg-none" data-phoenix-toggle="offcanvas" data-phoenix-target="#fileManagerSideBar"><span class="fa-solid fa-bars"></span></button>
                  </div>

                  <div class="row mt-5">

                     <div class="col-md-12">

                        <form class="row g-3">
                           <div class="col-md-7">
                              <label class="form-label" for="inputEmail4">Nombre de la sucursal</label>
                              <div class="form-icon-container">
                                 <input class="form-control ps-6" id="branchNameEdit" name="branchNameEdit" type="text" value="Perpetua Zócalo">
                                 <span class="form-icon" data-feather="tag" style="height: 15px; width: 15px;"></span>
                              </div>
                           </div>
                           <div class="col-md-5">
                              <div class="d-flex align-items-center justify-content-between">
                                 <label class="form-label" for="inputZip">Coordenadas</label>
                                 <div>
                                    <a href="" class="dropdown-toggl" data-bs-toggle="dropdown" aria-expanded="false"><small>¿Cómo obtengo mis coordenadas?</small></a>
                                    <ul class="dropdown-menu py-4 px-2 shadow-lg bg-primary-subtle" style="max-width: 325px;">
                                       <ol>
                                          <li><b>Abre</b> <a href="https://www.google.com/maps" target="_blank">Google Maps</a> en una nueva pestaña.</li>
                                          <li><b>Busca y ubica</b> tu dirección exacta en el mapa.</li>
                                          <li><b>Haz clic derecho</b> sobre el punto donde se encuentra tu negocio o local.</li>
                                          <li>En el menú que aparece, verás las coordenadas en la parte superior (ejemplo: <i>19.316953, -98.238233</i>).</li>
                                          <li><b>Haz clic</b> sobre esas coordenadas para copiarlas automáticamente.</li>
                                          <li>Vuelve aquí y <b>pégalas</b> en el campo correspondiente.</li>
                                       </ol>
                                    </ul>
                                 </div>
                              </div>
                              <div class="form-icon-container">
                                 <input class="form-control ps-6" id="branchCoordinatesEdit" name="branchCoordinatesEdit" type="text" value="19.401615279952182, -98.05641062094281">
                                 <span class="form-icon" data-feather="map-pin" style="height: 15px; width: 15px;"></span>
                              </div>

                           </div>
                           <div class="col-md-5">
                              <label class="form-label" for="branchAddressEdit">Calle / Avenida</label>
                              <input class="form-control" id="branchAddressEdit" name="branchAddressEdit" type="text" value="Av Independencia">
                           </div>
                           <div class="col-6 col-md-2">
                              <label class="form-label" for="branchIntNumEdit">Num. Interior</label>
                              <input class="form-control" id="branchIntNumEdit" name="branchIntNumEdit" type="text" value="">
                           </div>
                           <div class="col-6 col-md-2">
                              <label class="form-label" for="branchExtNumEdit">Num. Exterior</label>
                              <input class="form-control" id="branchExtNumEdit" name="branchExtNumEdit" type="text" value="13B">
                           </div>
                           <div class="col-md-3">
                              <label class="form-label" for="branchColonyEdit">Colonia</label>
                              <input class="form-control" id="branchColonyEdit" name="branchColonyEdit" type="text" value="Centro">
                           </div>
                           <div class="col-6 col-md-4">
                              <label class="form-label" for="branchCityEdit">Ciudad</label>
                              <input class="form-control" id="branchCityEdit" name="branchCityEdit" type="text" value="Tlaxcala de Xicohténcatl">
                           </div>
                           <div class="col-6 col-md-3">
                              <label class="form-label" for="branchStateEdit">Estado</label>
                              <input class="form-control" id="branchStateEdit" name="branchStateEdit" type="text" value="Tlaxcala">
                           </div>
                           <div class="col-4 col-md-2">
                              <label class="form-label" for="branchZipEdit">Código postal</label>
                              <input class="form-control" id="branchZipEdit" name="branchZipEdit" type="text" value="90000">
                           </div>
                           <hr class="mt-4 mb-2">
                           <div class="col-12">
                              <h4>Horarios</h4>
                           </div>
                           <div>
                              <div class="row g-0 align-items-start">
                                 <div class="col-4 col-md-4 g-2 g-md-4 m-0">
                                    <div class="row align-otems-center">
                                       <div class="col-3">
                                          <div class="col-1"><input type="checkbox" class="form-check-input" checked></div>
                                       </div>
                                       <div class="col-9">
                                          <div class="col-3">Lunes</div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-12 col-md-6">
                                    <div class="row justify-content-center align-items-center g-1">
                                       <div class="col-4">
                                          <select class="form-select">
                                             <option value="" selected>09:00</option>
                                          </select>
                                       </div>
                                       <div class="col-1 text-center">
                                          <span>a</span>
                                       </div>
                                       <div class="col-4">
                                          <select class="form-select">
                                             <option value="">14:00</option>
                                          </select>
                                       </div>
                                       <div class="col">
                                          <a data-list="mondayHoursList" href="javascript:void(0);" class="btn btn-light btn-sm ms-2 add-hours-btn"><span class="" data-feather="plus-circle" style="height: 15px; width: 15px;"></span></a>
                                       </div>
                                       <div id="mondayHoursList" class="hours-list">
                                          <div class="row justify-content-center align-items-center g-1 hours-item mb-1">
                                             <div class="col-4"> <select class="form-select">
                                                   <option value="" selected>15:00</option>
                                                </select> </div>
                                             <div class="col-1 text-center"> <span>a</span> </div>
                                             <div class="col-4"> <select class="form-select">
                                                   <option value="">18:00</option>
                                                </select> </div>
                                             <div class="col"> <a href="javascript:void(0);" class="btn btn-sm btn-danger ms-2 remove-hours"><i class="fas fa-trash"></i></a> </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>

                              <hr class="my-1">

                              <div class="row g-0 align-items-start">
                                 <div class="col-4 col-md-4 g-2 g-md-4 m-0">
                                    <div class="row align-otems-center">
                                       <div class="col-3">
                                          <div class="col-1"><input type="checkbox" class="form-check-input" checked></div>
                                       </div>
                                       <div class="col-9">
                                          <div class="col-3">Martes</div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-12 col-md-6">
                                    <div class="row justify-content-center align-items-center g-1">
                                       <div class="col-4">
                                          <select class="form-select">
                                             <option value="" selected>09:00</option>
                                          </select>
                                       </div>
                                       <div class="col-1 text-center">
                                          <span>a</span>
                                       </div>
                                       <div class="col-4">
                                          <select class="form-select">
                                             <option value="">18:00</option>
                                          </select>
                                       </div>
                                       <div class="col">
                                          <a data-list="tuesdayHoursList" href="javascript:void(0);" class="btn btn-light btn-sm ms-2 add-hours-btn"><span class="" data-feather="plus-circle" style="height: 15px; width: 15px;"></span></a>
                                       </div>
                                       <div id="tuesdayHoursList">
                                       </div>
                                    </div>
                                 </div>
                              </div>

                              <hr class="my-1">

                              <div class="row g-0 align-items-start">
                                 <div class="col-4 col-md-4 g-2 g-md-4 m-0">
                                    <div class="row align-otems-center">
                                       <div class="col-3">
                                          <div class="col-1"><input type="checkbox" class="form-check-input" checked></div>
                                       </div>
                                       <div class="col-9">
                                          <div class="col-3">Miercoles</div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-12 col-md-6">
                                    <div class="row justify-content-center align-items-center g-1">
                                       <div class="col-4">
                                          <select class="form-select">
                                             <option value="" selected>09:00</option>
                                          </select>
                                       </div>
                                       <div class="col-1 text-center">
                                          <span>a</span>
                                       </div>
                                       <div class="col-4">
                                          <select class="form-select">
                                             <option value="">18:00</option>
                                          </select>
                                       </div>
                                       <div class="col">
                                          <a data-list="wednesdayHoursList" href="javascript:void(0);" class="btn btn-light btn-sm ms-2 add-hours-btn"><span class="" data-feather="plus-circle" style="height: 15px; width: 15px;"></span></a>
                                       </div>
                                       <div id="wednesdayHoursList">
                                       </div>
                                    </div>
                                 </div>
                              </div>

                              <hr class="my-1">

                              <div class="row g-0 align-items-start">
                                 <div class="col-4 col-md-4 g-2 g-md-4 m-0">
                                    <div class="row align-otems-center">
                                       <div class="col-3">
                                          <div class="col-1"><input type="checkbox" class="form-check-input" checked></div>
                                       </div>
                                       <div class="col-9">
                                          <div class="col-3">Jueves</div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-12 col-md-6">
                                    <div class="row justify-content-center align-items-center g-1">
                                       <div class="col-4">
                                          <select class="form-select">
                                             <option value="" selected>09:00</option>
                                          </select>
                                       </div>
                                       <div class="col-1 text-center">
                                          <span>a</span>
                                       </div>
                                       <div class="col-4">
                                          <select class="form-select">
                                             <option value="">18:00</option>
                                          </select>
                                       </div>
                                       <div class="col">
                                          <a data-list="thursdayHoursList" href="javascript:void(0);" class="btn btn-light btn-sm ms-2 add-hours-btn"><span class="" data-feather="plus-circle" style="height: 15px; width: 15px;"></span></a>
                                       </div>
                                       <div id="thursdayHoursList">
                                       </div>
                                    </div>
                                 </div>
                              </div>

                              <hr class="my-1">

                              <div class="row g-0 align-items-start">
                                 <div class="col-4 col-md-4 g-2 g-md-4 m-0">
                                    <div class="row align-otems-center">
                                       <div class="col-3">
                                          <div class="col-1"><input type="checkbox" class="form-check-input" checked></div>
                                       </div>
                                       <div class="col-9">
                                          <div class="col-3">Viernes</div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-12 col-md-6">
                                    <div class="row justify-content-center align-items-center g-1">
                                       <div class="col-4">
                                          <select class="form-select">
                                             <option value="" selected>09:00</option>
                                          </select>
                                       </div>
                                       <div class="col-1 text-center">
                                          <span>a</span>
                                       </div>
                                       <div class="col-4">
                                          <select class="form-select">
                                             <option value="">18:00</option>
                                          </select>
                                       </div>
                                       <div class="col">
                                          <a data-list="fridayHoursList" href="javascript:void(0);" class="btn btn-light btn-sm ms-2 add-hours-btn"><span class="" data-feather="plus-circle" style="height: 15px; width: 15px;"></span></a>
                                       </div>
                                       <div id="fridayHoursList">
                                       </div>
                                    </div>
                                 </div>
                              </div>

                              <hr class="my-1">

                              <div class="row g-0 align-items-start">
                                 <div class="col-4 col-md-4 g-2 g-md-4 m-0">
                                    <div class="row align-otems-center">
                                       <div class="col-3">
                                          <div class="col-1"><input type="checkbox" class="form-check-input" checked></div>
                                       </div>
                                       <div class="col-9">
                                          <div class="col-3">Sábado</div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-12 col-md-6">
                                    <div class="row justify-content-center align-items-center g-1">
                                       <div class="col-4">
                                          <select class="form-select">
                                             <option value="" selected>09:00</option>
                                          </select>
                                       </div>
                                       <div class="col-1 text-center">
                                          <span>a</span>
                                       </div>
                                       <div class="col-4">
                                          <select class="form-select">
                                             <option value="">18:00</option>
                                          </select>
                                       </div>
                                       <div class="col">
                                          <a data-list="saturdayHoursList" href="javascript:void(0);" class="btn btn-light btn-sm ms-2 add-hours-btn"><span class="" data-feather="plus-circle" style="height: 15px; width: 15px;"></span></a>
                                       </div>
                                       <div id="saturdayHoursList">
                                       </div>
                                    </div>
                                 </div>
                              </div>

                              <hr class="my-1">

                              <div class="row g-0 align-items-start">
                                 <div class="col-4 col-md-4 g-2 g-md-4 m-0">
                                    <div class="row align-otems-center">
                                       <div class="col-3">
                                          <div class="col-1"><input type="checkbox" class="form-check-input"></div>
                                       </div>
                                       <div class="col-9">
                                          <div class="col-3">Domingo</div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-12 col-md-6">
                                    <div class="row justify-content-center align-items-center g-1">
                                       <div class="col-4">
                                          <select class="form-select">
                                             <option value="" selected>00:00</option>
                                          </select>
                                       </div>
                                       <div class="col-1 text-center">
                                          <span>a</span>
                                       </div>
                                       <div class="col-4">
                                          <select class="form-select">
                                             <option value="">00:00</option>
                                          </select>
                                       </div>
                                       <div class="col">
                                          <a data-list="sundayHoursList" href="javascript:void(0);" class="btn btn-light btn-sm ms-2 add-hours-btn"><span class="" data-feather="plus-circle" style="height: 15px; width: 15px;"></span></a>
                                       </div>
                                       <div id="sundayHoursList">
                                       </div>
                                    </div>
                                 </div>
                              </div>

                           </div>

                           <div class="col-12 text-end">
                              <button class="btn btn-primary" type="submit" id="updateBranchBtn">Actualizar información</button>
                           </div>
                        </form>
                     </div>

                  </div>
               </div>
            </div>



         </div>
         @include('layout.administrador.footer')
      </div>

   </main>

   @include('layout.administrador.assets')

   <script src="https://cdn.jsdelivr.net/npm/readmore-js@2.2.1/readmore.min.js"></script>

   <!-- Selects -->
   <link href="{{ asset('admin/vendors/choices/choices.min.css') }}" rel="stylesheet">
   <script src="{{ asset('admin/vendors/choices/choices.min.js') }}"></script>

   <link href="{{ asset('admin/vendors/flatpickr/flatpickr.min.css') }}" rel="stylesheet">
   <script src="{{ asset('admin/vendors/flatpickr/flatpickr.min.js') }}"></script>

   <script src="{{ asset('admin/js/marcas/brand-profile.js') }}"></script>

   <script>
      $(".add-hours-btn").click(function() {
         let list = $(this).data("list");
         $("#" + list).append('<div class="row justify-content-center align-items-center g-1 hours-item mb-1"> <div class="col-4"> <select class="form-select"><option value="" selected>09:00</option></select> </div> <div class="col-1 text-center"> <span>a</span> </div> <div class="col-4"> <select class="form-select"><option value="">18:00</option></select> </div> <div class="col"> <a href="javascript:void(0);" class="btn btn-sm btn-danger ms-2 remove-hours"><i class="fas fa-trash"></i></a> </div> </div>');
      });

      var body = $("body");
      body.on("click", ".remove-hours", function() {
         $(this).parents(".hours-item").remove();
      });
   </script>

</body>

</html>