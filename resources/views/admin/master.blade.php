@include('admin.partials.header')


  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        @include('admin.partials.sidebar')
        
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
            @include('admin.partials.navbar')
          

          <!-- Content wrapper -->
          <div class="content-wrapper">
          @yield('content')

            @include('admin.partials.footer')
           

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->


    @include('admin.partials.scripts')
   
  </body>
</html>
