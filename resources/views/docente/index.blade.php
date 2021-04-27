<!DOCTYPE html>
<!--INDEX DOCENTE-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Coordinador</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('adminlte/plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('adminlte/css/socialbar.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('/adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('adminlte/css/adminlte.min.css')}}">
    <!--LINK IMAGENES-->
    <link rel="preload" href="{{asset('adminlte/img/logotec.png')}}">
    <link rel="stylesheet" href="{{asset('adminlte/img/fondo1.jpg')}}">
    
    <style>
        html {
            background-image: {{asset('adminlte/img/fondo1.jpg')}};
        }
    </style>
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
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{url('/')}}" class="nav-link">Inicio</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contacto</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">TecNM</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- MENU DE LA IZQUIERDA -->
<aside class="main-sidebar sidebar-dark-primary">

    <!-- Sidebar MENUU-->
    <div class="sidebar">
      <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
                
                <li class="nav-item">
                    <p>Coordinador</p>
                </li>
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                    <i class="nav-icon fas fa-chevron-circle-down"></i>
                    <p>
                        Menu
                        <i class="right fas fa-angle-left"></i>
                    </p>
                    </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{url('/coordinador')}}" class="nav-link">
                    <i class="far fa-circle nav-icon text-danger"></i>
                    <p>Pagina Principal</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/addusuario')}}" class="nav-link">
                    <i class="far fa-circle nav-icon text-warning"></i>
                    <p>Agregar Usuario</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/generacion')}}" class="nav-link">
                    <i class="far fa-circle nav-icon text-info"></i>
                    <p>Agregar Generaciones</p>
                    </a>
                </li>
                <li class="nav-item">
                  <a href="{{url('/periodo')}}" class="nav-link">
                  <i class="far fa-circle nav-icon text-danger"></i>
                  <p>Agregar Periodo</p>
                  </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/rubrica')}}" class="nav-link active">
                    <i class="far fa-circle nav-icon text-secondary"></i>
                    <p>Agregar Rubrica</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/criterio')}}" class="nav-link">
                    <i class="far fa-circle nav-icon text-success"></i>
                    <p>Agregar Criterio</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/addcompromisos')}}" class="nav-link">
                    <i class="far fa-circle nav-icon text-warning"></i>
                    <p>Agregar Compromisos</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/estadistico')}}" class="nav-link">
                    <i class="far fa-circle nav-icon text-info"></i>
                    <p>Estadisticos</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{url('/asignar')}}" class="nav-link">
                    <i class="far fa-circle nav-icon text-danger"></i>
                    <p>Asignar Proyectos</p>
                    </a>
                </li>
                </ul>
            </li>

        <!--REDES SOCIALES-->
            <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="fas fa-users nav-icon "></i>
                <p>
                    Contactos
                    <i class="fas fa-angle-left right"></i>
                    <span class="badge badge-info right"></span>
                </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="https://www.tuxtla.tecnm.mx/" class="nav-link">
                        <i class="fas fa-map-marker-alt nav-icon"></i>
                        <p>ITTG</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="https://sii.tuxtla.tecnm.mx/" class="nav-link">
                        <i class="fas fa-map-marker-alt nav-icon"></i>
                        <p>SII</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.facebook.com/tecnmtuxtlagtz/?rf=220191508087468" class="nav-link">
                        <i class="fab fa-facebook-square nav-icon"></i>
                        <p>Facebook</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.instagram.com/p/BkJ8RUBBDRA/?hl=es" class="nav-link">
                            <i class="fab fa-instagram nav-icon"></i>
                            <p>Instagram</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.tuxtla.tecnm.mx/directorio-2020/" class="nav-link">
                            <i class="far fa-envelope nav-icon"></i>
                            <p>Mail</p>
                        </a>
                    </li>
                </ul>
              </li>
            </ul>
        </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

<section class="content">
    <div class="container-fluid">
        <div style="height: 50px">
        </div>  <!-- Info boxes -->
          
            
  
        <div class="row" >
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="text-align: center">
                      <h5 class="card-title font-weight-bold" style="text-align: center; font-size:30px">Agregar Rubrica</h5>
    
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                            </button>

                            <div class="btn-group">
                                <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                                    <i class="fas fa-wrench"></i>
                                </button>

                                <div class="dropdown-menu dropdown-menu-right" role="menu">
                                    <a href="#" class="dropdown-item">Action</a>
                                    <a href="#" class="dropdown-item">Another action</a>
                                    <a href="#" class="dropdown-item">Something else here</a>
                                    <a class="dropdown-divider"></a>
                                    <a href="#" class="dropdown-item">Separated link</a>
                                </div>
                            </div>
                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                        <!-- contenido de main imagenes -->
                                <div class="row">
                                        
                                   
                                    <table class="table table-light table-striped mt-4">
                                        <thead class="table table-dark table-striped mt-4">
                                            
                                            <tr>
                                                <th scope="col">Proyecto</th>
                                                <th scope="col">Estudiante</th>
                                                <th scope="col">Acciones</th>
                                            <tr>
                                        </thead>
                                        <tbody>
                                           <tr>
                                                <th scope="col"></th>
                                                <th scope="col"></th>
                                                <th scope="col">
                                                        <div class="btn-group">
                                                            <a href="{{url('/historico')}}"><buttom class="btn btn-danger">Historico</buttom></a>
                                                        </div>  
                                                        <div class="btn-group">
                                                           <a href="{{url('/evaluar')}}"><buttom class="btn btn-primary">Evaluar</buttom></a> 
                                                        </div>     
                                                </th>
                                                
                                            <tr> 
                                        </tbody>
                                    </table>     
                                        
            
                                </div>
                            </div>
                        </div>
                    </div>
            
                </div>
            </div>
        </div>
    </div>
</section>


    
          
    
        
  
 
  

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Propuesta</strong>
    Sistema para el seguimiento de proyectos de Posgrado
    <div class="float-right d-none d-sm-inline-block">
      <b>Residentes</b> 2
    </div>
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
<!-- ChartJS -->
<script src="{{asset('adminlte/plugins/chart.js/Chart.min.js')}}"></script>

<!-- AdminLTE for demo purposes -->
<script src="{{asset('adminlte/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('adminlte/js/pages/dashboard2.js')}}"></script>
</body>
</html>





