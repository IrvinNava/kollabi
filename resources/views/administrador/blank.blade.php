@php
$title = 'Marcas pendientes';
@endphp

@include('layout.administrador.header')

<body>

   <main class="main" id="top">

      @include('layout.administrador.sidebar')
      @include('layout.administrador.topbar')

      <div class="content px-0 pt-navbar">


         @include('layout.administrador.footer')
      </div>

   </main>

   @include('layout.administrador.assets')

   <!-- <script>
      $(function() {
         $('#detailModal').modal('show')
      });
   </script> -->

</body>

</html>