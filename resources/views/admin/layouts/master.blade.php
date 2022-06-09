<!DOCTYPE html>
<html lang="en">
    @include('admin.layouts.head')
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
{{-- <div class="wrapper"> --}}

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

 
  @include('admin.layouts.header');
 
  <!-- Sidebar -->
  @include('admin.layouts.sidebar');
  <!-- Content Wrapper. Contains page content -->
  
    <!-- /.content-header -->

    <!-- Main content -->
    @yield('content')
    <!-- /.content -->
  {{-- </div> --}}
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  @include('admin.layouts.footer')
</div>
<!-- ./wrapper -->

@include('admin.layouts.script')
</body>
</html>
