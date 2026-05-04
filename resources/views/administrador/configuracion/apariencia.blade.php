@php
$title = 'Apariencia';
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
                           <a href="{{url('admin/configuracion/apariencia')}}" class="d-flex align-items-center link-submenu py-2 active">
                              <i class="mb-1 me-2" data-feather="pen-tool" style="height: 15px; width: 15px;"></i>
                              <div class="lh-sm">
                                 <p class="mb-0 fs-9 fw-bold">Apariencia</p>
                                 <small>Personaliza tus colores y estilo.</small>
                              </div>
                           </a>
                           <a href="{{url('admin/configuracion/sucursales')}}" class="d-flex align-items-center link-submenu py-2">
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
                        <li class="breadcrumb-item fw-semibold"><a href="{{url('admin/configuracion/perfil-del-negocio')}}" class="text-primary">Perfil del negocio</a></li>
                        <li class="breadcrumb-item fw-normal active">Apariencia</li>
                     </ol>
                  </nav>

                  <div class="d-flex flex-row flex-between-center mb-4">
                     <h2 class="mb-0">Apariencia</h2>
                     <button class="btn btn-phoenix-secondary btn-square d-lg-none" data-phoenix-toggle="offcanvas" data-phoenix-target="#fileManagerSideBar"><span class="fa-solid fa-bars"></span></button>
                  </div>

                  <div class="row">
                     <div class="col-md-10">
                        <form>

                           <div>

                              <h4 class="mb-2">Logo de tu espacio</h4>
                              <p class="fs-9 mb-3">Haz que tu espacio se sienta realmente tuyo con el logo de tu marca. Y para garantizar que tu identidad luzca bien en toda la plataforma, deberás seguir algunas recomendaciones.</p>

                              <div class="row g-">
                                 <div class="col-md-7">
                                    <div class="dropzone dropzone-multiple p-0" id="dropzone" data-dropzone="data-dropzone" data-options='{"url":"valid/url","maxFiles":1,"dictDefaultMessage":"Selecciona o suelta un archivo aquí.","targetImg":"#logoPreview"}'>
                                       <div class="fallback">
                                          <input type="file" name="file" />
                                       </div>
                                       <div class="dz-message" data-dz-message="data-dz-message">
                                          <div class="dz-message-text"><img class="me-2" src="{{ asset('admin/img/icons/cloud-upload.svg') }}" width="25" alt="" />Arrastra tu archivo aquí.</div>
                                       </div>
                                       <div class="dz-preview dz-preview-multiple m-0 d-flex flex-column">
                                          <div class="d-flex pb-3 border-bottom border-translucent media px-2">
                                             <div class="border p-2 rounded-2 me-2"><img class="rounded-2 dz-image" src="{{ asset('admin/img/icons/file.png') }}" alt="..." data-dz-thumbnail="data-dz-thumbnail" /></div>
                                             <div class="flex-1 d-flex flex-between-center">
                                                <div>
                                                   <h6 data-dz-name="data-dz-name"></h6>
                                                   <div class="d-flex align-items-center">
                                                      <p class="mb-0 fs-9 text-body-quaternary lh-1" data-dz-size="data-dz-size"></p>
                                                      <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress=""></span></div>
                                                   </div><span class="fs-10 text-danger" data-dz-errormessage="data-dz-errormessage"></span>
                                                </div>
                                                <div class="dropdown">
                                                   <button class="btn btn-link text-body-quaternary btn-sm dropdown-toggle btn-reveal dropdown-caret-none" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h"></span></button>
                                                   <div class="dropdown-menu dropdown-menu-end border border-translucent py-2"><a class="dropdown-item" href="#!" data-dz-remove="data-dz-remove">Remove File</a></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-5 border-star">
                                    <h5 class="mb-3">Recomendaciones para tu archivo:</h5>
                                    <ul class="fs-9 ps-3">
                                       <li><b>Formato horizontal</b> (Relación de aspecto 3:1)</li>
                                       <li>Formato PNG o SVG con <b>fondo transparente</b></li>
                                       <li>Peso máximo: 1 MB</li>
                                       <li>Evita imágenes pixeladas o con bordes borrosos</li>
                                    </ul>
                                 </div>
                              </div>

                           </div>

                           <hr class="mt-4 mb-4">

                           <h4 class="mb-2">Color principal de tu espacio</h4>
                           <p class="fs-9 mb-">Elige el color que represente tu marca. Este color se aplicará como el principal en toda tu interfaz: botones, enlaces, elementos destacados y más.</p>

                           <div class="row g-7">

                              <div class="col-md-7">

                                 <div class="border border-translucent bg-gray-100 p-3 rounded d-flex align-items-start">
                                    <div class="bg-gray-200 p-2 me-3 rounded-2">
                                       <span class="" data-feather="info" style="height: 20px; width: 20px;"></span>
                                    </div>
                                    <p class="fs-9 mb-0">Haz clic en el cuadro para elegir tu color. Confirma con el botón <b>Aceptar</b> y, por último, <b>guarda</b> los cambios para aplicarlos en toda tu interfaz.</p>
                                 </div>

                                 <div class="row g-3 align-items-end mt-2">
                                    <div class="col-2">
                                       <div id="color-picker" class="border"></div>
                                    </div>
                                    <div class="col-md-4">
                                       <label class="form-label" for="hexInput">Color HEX:</label>
                                       <input type="text" class="form-control" id="hexInput" placeholder="#000000">
                                    </div>
                                    <div class="col-md-6">
                                       <label class="form-label" for="rgbInput">Color RGB:</label>
                                       <input type="text" class="form-control" id="rgbInput" placeholder="rgb(0,0,0)">
                                    </div>
                                 </div>

                              </div>
                              <div class="col-md-5 border-start">
                                 <h5 class="mb-3">Tips para elegir tu color:</h5>
                                 <ul class="fs-9 ps-3">
                                    <li>Usa el color principal de tu logotipo o identidad visual.</li>
                                    <li>Asegúrate de que tenga <b>buen contraste</b> con textos blancos.</li>
                                    <li><b>Evita</b> tonos demasiado claros o fluorescentes para botones.</li>
                                 </ul>
                              </div>
                           </div>

                           <hr class="mt-4 mb-3">

                           <div class="col-12 text-end">
                              <button class="btn btn-primary" type="submit" id="saveBtn">Guardar</button>
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



   <!-- One of the following themes -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/themes/classic.min.css" /> <!-- 'classic' theme -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/themes/monolith.min.css" /> <!-- 'monolith' theme -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/themes/nano.min.css" /> <!-- 'nano' theme -->

   <!-- Modern or es5 bundle -->
   <script src="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/pickr.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/pickr.es5.min.js"></script>


   <link href="{{ asset('admin/vendors/prism/prism-okaidia.css') }}" rel="stylesheet">
   <script src="{{ asset('admin/vendors/dropzone/dropzone-min.js') }}"></script>
   <script src="{{ asset('admin/vendors/prism/prism.js') }}"></script>

   <script src="{{ asset('admin/js/configuracion/appearance.js') }}"></script>
   <script src="{{ asset('admin/js/configuracion/logo-dropzone.js') }}"></script>

</body>

</html>