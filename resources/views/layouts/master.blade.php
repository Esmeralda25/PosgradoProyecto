<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TecNM</title>
    <!-- Google Font: Source Sans Pro 
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    -->
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('adminlte/plugins/fontawesome-free/css/all.min.css')}}">
<!--
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
-->    
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('/adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('adminlte/css/adminlte.css')}}">
    <!--LINK IMAGENES-->
    <link rel="preload" href="{{asset('adminlte/img/logotec.png')}}">

    <!-- jQuery -->
	<script src="{{asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('js/pdf/jspdf.debug_1.3.3.js')}}"></script>
</head>
<body class="fondo hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center" style="width: 100%">
    <img class="animation__wobble" src="{{asset('adminlte/img/logotec.png')}}" alt="AdminLTELogo" height="300" width="500">
  </div>
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item d-none d-lg-inline-block">
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <form action="{{route('entrada.salida')}}">
          @csrf
          <li class="nav-item"> 
            <a href="{{route('entrada.salida')}}" class="nav-link"> 
              <i  class="fa fa-sign-out" aria-hidden="true"><-</i>    
            </a>
          </li>    
        </form>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('inicio')}}" class="nav-link">..INICIO..</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="https://www.tuxtla.tecnm.mx/" target="_blank" class="nav-link">TecNM</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="https://sii.tuxtla.tecnm.mx/" target="_blank"  class="nav-link">SII</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('manuales')}}"  target="_blank"  class="nav-link">Manuales de Usuario</a>
      </li>
    </ul>
    <!-- header-lado derecho -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <span class="nav-link">
          
        </span>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <div class="content-wrapper" style="height: 100%; width: 100%">
    <!-- Main content AQUI VA EL CONTENIDO PRINCIPAL -->
    @if (session('message'))
      <div class="alert alert-success alert-dismissable">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
              <strong>{{Session::get('message')}}</strong> 
      </div> 
    @endif
    @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
    @endif
    <section class="content">
      <div class="container-fluid">
        <div style="height:60px">
        </div>  <!-- separacion -->  

        @yield('content')                   
      </div>
    </section>
  </div>  
  <!-- Main Footer -->
  <footer class="main-footer  col-12">
  <ul>
    <li  class="float-right d,-none d-sm-inline-block">
      <a href="https://www.facebook.com/tecnmtuxtlagtz/?rf=220191508087468" class="nav-link" role="button">
      <i class="fab fa-facebook-square nav-icon"></i>         
      </a>
    </li>
    <li  class="float-right d-none d-sm-inline-block">
      <a href="https://www.instagram.com/p/BkJ8RUBBDRA/?hl=es" class="nav-link" role="button">
        <i class="fab fa-instagram nav-icon"></i>
                
      </a>
    </li>
    <li  class="float-right d-none d-sm-inline-block">
      <a href="https://www.tuxtla.tecnm.mx/directorio-2020/" class="nav-link" role="button">
        <i class="far fa-envelope nav-icon"></i>
              
      </a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
  <strong><a href="{{route('info')}}">    
    Sistema para el seguimiento de proyectos de Posgrado
    </a></strong>
  </li>
  </ul>  
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('adminlte/js/adminlte.js')}}"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{asset('/adminlte/plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
<script src="{{asset('adminlte/plugins/raphael/raphael.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/jquery-mapael/jquery.mapael.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/jquery-mapael/maps/usa_states.min.js')}}"></script>
<!-- off line
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.4/sweetalert2.min.js"></script>
->>
<-- ChartJS -->
<script src="{{asset('adminlte/plugins/chart.js/Chart.min.js')}}"></script>

<!-- AdminLTE for demo purposes -->
<script src="{{asset('adminlte/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('adminlte/js/pages/dashboard2.js')}}"></script>
@yield("scripts_de_usuarios")

</body>
</html>
