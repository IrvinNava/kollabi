@php
$title = 'Plan compartido';
@endphp

@include('layout.administrador.header')

<body data-page="mi-profile-page">

   <main class="main" id="top">

      @include('layout.administrador.sidebar')
      @include('layout.administrador.topbar')

      <div class="content">

         <nav class="mb-3" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
               <li class="breadcrumb-item fw-semibold"><a href="{{url('app/admin/dashboard')}}"><img src="{{ asset('admin/img/brand/kollabi_icon.svg') }}" class="ms-1 mb-1" alt="Kollabi" width="18" /></a></li>
               <li class="breadcrumb-item fw-normal active">Mi perfil</li>
               <li class="breadcrumb-item fw-normal active">Elizabeth Hernández</li>
            </ol>
         </nav>

         <div class="mb-9">

            <div class="row g-3 flex-between-end mb-5">
               <div class="col-auto">
                  <h2 class="mb-2">Mi perfil</h2>
               </div>
               <div class="col-auto"></div>
            </div>

            <div class="row gx-4">

               <div class="col-md-8 offset-md-2">

                  <div class="card">
                     <div class="card-body">

                        <form class="">
                           <h5 class="mb-3">Mi información</h5>
                           <div class="row g-3">
                              <div class="col-md-4">
                              </div>
                              <div class="col-md-8">
                                 <div class="row g-2">
                                    <div class="col-12">
                                       <label class="form-label" for="userInput">Usuario</label>
                                       <input class="form-control form-control-sm" id="userInputEdit" type="text" value="cyberelizabeth@gmail.com" disabled />
                                    </div>
                                    <div class="col-12">
                                       <label class="form-label" for="nameInputEdit">Nombre(s)</label>
                                       <input class="form-control form-control-sm" id="nameInputEdit" type="text" value="Elizabeth" />
                                    </div>
                                    <div class="col-md-6">
                                       <label class="form-label" for="firstLastNameInputEdit">Primer apellido</label>
                                       <input class="form-control form-control-sm" id="firstLastNameInputEdit" type="text" value="Hernández" />
                                    </div>
                                    <div class="col-md-6">
                                       <label class="form-label" for="secondLastNameInputEdit">Segundo apellido</label>
                                       <input class="form-control form-control-sm" id="secondLastNameInputEdit" type="text" value="Morales" />
                                    </div>
                                    <div class="col-md-8">
                                       <label class="form-label" for="emailInputEdit">Correo electrónico </label>
                                       <input class="form-control form-control-sm" id="emailInputEdit" type="text" value="cyberelizabeth@gmail.com" />
                                    </div>
                                    <div class="col-md-4">
                                       <label class="form-label" for="phoneInputEdit">WhatsApp</label>
                                       <input class="form-control form-control-sm" id="phoneInputEdit" type="text" placeholder="10 digitos" value="2414209137" />
                                    </div>
                                 </div>
                              </div>
                              <hr class="my-4">
                              <h5 class="mt-0">Dirección</h5>
                              <div class="col-md-12">
                                 <label class="form-label" for="streetInputEdit">Calle / Avenida</label>
                                 <input class="form-control form-control-sm" id="streetInputEdit" type="text" value="Xicohotencatl" />
                              </div>
                              <div class="col-md-6">
                                 <label class="form-label" for="coloniaInputEdit">Colonia</label>
                                 <input class="form-control form-control-sm" id="coloniaInputEdit" type="text" />
                              </div>
                              <div class="col-md-3">
                                 <label class="form-label" for="cpInputEdit">Código postal</label>
                                 <input class="form-control form-control-sm" id="cpInputEdit" type="text" />
                              </div>
                              <div class="col-md-3">
                                 <label class="form-label" for="numberInputEdit">Número</label>
                                 <input class="form-control form-control-sm text-center" id="numberInputEdit" type="text" placeholder="#" />
                              </div>
                              <div class="col-md-6">
                                 <label class="form-label" for="stateSelectEdit">Estado</label>
                                 <select class="form-select form-control-sm" name="stateSelect" id="stateSelectEdit"></select>
                              </div>
                              <div class="col-md-6">
                                 <label class="form-label" for="citySelectEdit">Ciudad</label>
                                 <select class="form-select" name="citySelect" id="citySelectEdit"></select>
                              </div>
                              <hr class="mt-4 mb-4">
                              <h5 class="mt-0">Cambiar contraseña</h5>
                              <div class="col-md-4">
                                 <label class="form-label" for="passInput">Contraseña actual</label>
                                 <input class="form-control form-control-sm" id="passInputEdit" type="password" />
                              </div>
                              <div class="col-md-4">
                                 <label class="form-label" for="passInput">Nueva contraseña</label>
                                 <input class="form-control form-control-sm" id="passInputEdit" type="password" />
                              </div>
                              <div class="col-md-4">
                                 <label class="form-label" for="passInput">Confirma tu contraseña</label>
                                 <input class="form-control form-control-sm" id="passInputEdit" type="password" />
                              </div>
                           </div>
                        </form>
                     </div>
                     <div class="card-footer py-3 px-4 bg-bod d-flex justify-content-end align-items-center">
                        <button class="btn btn-primary mb-2 mb-sm-0" type="submit" id="updatePlan">Actualizar</button>
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