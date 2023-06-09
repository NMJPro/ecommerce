<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>


            <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="dashboard/plugins/fontawesome-free/css/all.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Tempusdominus Bootstrap 4 -->
        <link rel="stylesheet" href="dashboard/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
        <!-- iCheck -->
        <link rel="stylesheet" href="dashboard/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
        @yield('css')
        <!-- JQVMap -->
        <link rel="stylesheet" href="dashboard/plugins/jqvmap/jqvmap.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="dashboard/dist/css/adminlte.min.css">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="dashboard/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="dashboard/plugins/daterangepicker/daterangepicker.css">
        <!-- summernote -->
        <link rel="stylesheet" href="dashboard/plugins/summernote/summernote-bs4.min.css">
    </head>
    
    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">

            <!-- Preloader -->
            <div class="preloader flex-column justify-content-center align-items-center">
              <img class="animation__shake" src="dashboard/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
            </div>

            @include('dashboard.partials.header')
            @include('dashboard.partials.drawer')

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
              <!-- Content Header (Page header) -->
              <div class="content-header">
                <div class="container-fluid">
                  <div class="row mb-2">
                    <div class="col-sm-6">
                      <h1 class="m-0">@yield('title')</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                      </ol>
                    </div><!-- /.col -->
                  </div><!-- /.row -->
                </div><!-- /.container-fluid -->
              </div>
              <!-- /.content-header -->

              <!-- Main content -->
              <section class="content">
                @yield('content')
              </section>
              <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
              <strong>Copyright &copy; 2022-2023 <a href="/">LocalHost E-comerce</a>.</strong>
                Tous droits réservé.
            </footer>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
              <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
          </div>
          <!-- ./wrapper -->

      <!-- jQuery -->
      <script src="dashboard/plugins/jquery/jquery.min.js"></script>
      <!-- jQuery UI 1.11.4 -->
      <script src="dashboard/plugins/jquery-ui/jquery-ui.min.js"></script>
      <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
      <script>
        $.widget.bridge('uibutton', $.ui.button)
      </script>
      <!-- Bootstrap 4 -->
      <script src="dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

      <!-- JQVMap -->
      <script src="dashboard/plugins/jqvmap/jquery.vmap.min.js"></script>
      <script src="dashboard/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
      <!-- jQuery Knob Chart -->
      <script src="dashboard/plugins/jquery-knob/jquery.knob.min.js"></script>
      <!-- daterangepicker -->
      <script src="dashboard/plugins/moment/moment.min.js"></script>
      <script src="dashboard/plugins/daterangepicker/daterangepicker.js"></script>
      <!-- Tempusdominus Bootstrap 4 -->
      <script src="dashboard/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
      <!-- Summernote -->
      <script src="dashboard/plugins/summernote/summernote-bs4.min.js"></script>
      <!-- overlayScrollbars -->
      <script src="dashboard/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
      <!-- AdminLTE App -->
      <script src="dashboard/dist/js/adminlte.js"></script>
      <!-- AdminLTE for demo purposes -->
      <script src="dashboard/dist/js/demo.js"></script>
      @yield('js')
    </body>
</html>
