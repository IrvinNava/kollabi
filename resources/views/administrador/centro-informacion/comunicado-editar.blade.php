@php
$title = 'Reglamento general de operación del colectivo';
@endphp

@include('layout.administrador.header')

<body data-page="documents-page">

   <main class="main" id="top">

      @include('layout.administrador.sidebar')
      @include('layout.administrador.topbar')

      <div class="content">

         <nav class="mb-3" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
               <li class="breadcrumb-item fw-semibold"><a href="{{url('admin/dashboard')}}"><img src="{{ asset('admin/img/brand/kollabi_icon.svg') }}" class="ms-1 mb-1" alt="Kollabi" width="18" /></a></li>
               <li class="breadcrumb-item fw-semibold"><a href="{{url('admin/configuracion/centro-informacion')}}">Centro de infomación</a></li>
               <li class="breadcrumb-item fw-normal active">Reglamento general de operación del colectivo</li>
            </ol>
         </nav>

         <div class="mb-9">

            <div class="row g-3 flex-between-end mb-5">
               <div class="col-auto">
                  <h2 class="mb-2">Reglamento general de operación del colectivo</h2>
               </div>
               <div class="col-auto">
                  <button class="btn btn-primary mb-2 mb-sm-0" type="submit" id="updateBtn">Actualizar</button>
               </div>
            </div>

            <div class="row gx-4">

               <div class="col-md-10 offset-md-1">

                  <div class="card">
                     <div class="card-header py-3 px-4 bg-body-highlight">
                        <div class="row g-3 flex-between-center">
                           <div class="col-auto">
                              <p class="mb-0 fs-9 lh-sm"><span class="mb-1 me-1" data-feather="info" style="height: 15px; width: 15px;"></span>Actualente este contenido es visible para tus colaboradores.</p>
                           </div>
                           <div class="col-auto d-flex">

                              <div class="form-check form-switch me-3 mb-0">
                                 <label class="form-check-label" for="postStatus">Visible</label>
                                 <input class="form-check-input" id="postStatus" name="postStatus" type="checkbox" value="1" checked>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="card-body">
                        <form class="d-flex flex-column h-100">
                           <h4 class="mb-3">Título</h4>
                           <input class="form-control mb-4 fs-8" type="text" value="Reglamento general de operación del colectivo" />
                           <div class="mb-">
                              <h4 class="mb-3">Contenido o descripción</h4>
                              <div class="border rounded-3 py-4">
                                 <div id="editorjs"></div>
                              </div>
                           </div>
                        </form>
                     </div>
                     <div class="card-footer py-3 px-4 bg-bod d-flex justify-content-end">
                        <button class="btn btn-primary mb-2 mb-sm-0" type="submit" id="updateBtnFooter">Actualizar</button>
                     </div>
                  </div>


               </div>
            </div>
         </div>

         @include('layout.administrador.footer')

      </div>

   </main>

   @include('layout.administrador.assets')

   <!-- Editor.js -->
   <script src="https://cdn.jsdelivr.net/npm/@editorjs/editorjs@latest"></script>
   <script src="https://cdn.jsdelivr.net/npm/@editorjs/marker@latest"></script>
   <script src="https://cdn.jsdelivr.net/npm/@editorjs/underline@latest"></script>
   <script src="https://cdn.jsdelivr.net/npm/@sotaproject/strikethrough@latest"></script>
   <script src="https://cdn.jsdelivr.net/npm/@editorjs/header@latest"></script>
   <script src="https://cdn.jsdelivr.net/npm/@editorjs/list@latest"></script>
   <script src="https://cdn.jsdelivr.net/npm/@editorjs/paragraph@latest"></script>
   <script src="https://cdn.jsdelivr.net/npm/@editorjs/image@latest"></script>
   <script src="https://cdn.jsdelivr.net/npm/@editorjs/embed@latest"></script>
   <script src="https://cdn.jsdelivr.net/npm/@editorjs/table@latest"></script>
   <script src="https://cdn.jsdelivr.net/npm/@editorjs/quote@latest"></script>
   <script src="https://cdn.jsdelivr.net/npm/@editorjs/link@latest"></script>

   <script src="{{ asset('admin/js/edit-comunicado.js') }}"></script>

</body>

</html>