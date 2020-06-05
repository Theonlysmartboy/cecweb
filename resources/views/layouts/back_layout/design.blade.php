<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="author" content="Otema Technologies">
  <title><?php echo $title?></title>
  <meta name="description" content="Christ’s Evangelistic Church,">
  <meta name="keywords" content="CEC, Church, Kakamega, Kenya, Africa, Evangeliestic, Evangelism">
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/icons/favicon/apple-touch-icon.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/icons/favicon/favicon-32x32.png')}}">
  <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('images/icons/favicon/android-chrome-192x192.png')}}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/icons/favicon/favicon-16x16.png')}}">
  <link rel="manifest" href="{{ asset('images/icons/favicon/site.webmanifest')}}">
  <link rel="mask-icon" href="{{ asset('images/icons/favicon/safari-pinned-tab.svg')}}" color="#5bbad5">
  <link rel="shortcut icon" href="{{ asset('images/icons/favicon/favicon.ico')}}">
  <meta name="msapplication-TileColor" content="#b91d47">
  <meta name="msapplication-TileImage" content="{{ asset('images/icons/favicon/mstile-144x144.png')}}">
  <meta name="msapplication-config" content="{{ asset('images/icons/favicon/browserconfig.xml')}}">
  <meta name="theme-color" content="#ffffff">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('back/plugins/fontawesome-free/css/all.min.css')}}">
   <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="{{ asset('back/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('back/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ asset('back/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('back/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('back/css/adminlte.min.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('back/plugins/summernote/summernote-bs4.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
@include('layouts.back_layout.header')
@include('layouts.back_layout.sidebar')
@yield('content')
@include('layouts.back_layout.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{ asset('back/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{ asset('back/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- SweetAlert2 -->
<script src="{{ asset('back/plugins/sweetalert2/sweetalert2.min.js')}}"></script>
<!-- DataTables -->
<script src="{{ asset('back/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('back/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ asset('back/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('back/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('back/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('back/js/adminlte.js')}}"></script>
<!-- OPTIONAL SCRIPTS -->
<script src="{{ asset('back/js/demo.js')}}"></script>
<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{ asset('back/plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
<script src="{{ asset('back/plugins/raphael/raphael.min.js')}}"></script>
<script src="{{ asset('back/plugins/jquery-mapael/jquery.mapael.min.js')}}"></script>
<script src="{{ asset('back/plugins/jquery-mapael/maps/usa_states.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{ asset('back/plugins/chart.js/Chart.min.js')}}"></script>
<!-- PAGE SCRIPTS -->
<script src="{{ asset('back/js/pages/dashboard2.js')}}"></script>
<script src="{{ asset('back/js/validate.js')}}"></script>
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
  <!-- Summernote -->
<script src="{{ asset('back/plugins/summernote/summernote-bs4.min.js')}}"></script>
<script>
  $(function () {
    // Summernote
    $('.textarea').summernote()
  })
</script>
</body>
</html>