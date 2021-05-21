<!DOCTYPE html>
<!--INDEX DOCENTE-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Estudiante</title>

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
                    <p>Estudiante</p>
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
                    <a href="{{url('/estudiante')}}" class="nav-link active">
                    <i class="far fa-circle nav-icon text-danger"></i>
                    <p>Ingresar proyecto</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/mainestudiante2')}}" class="nav-link">
                    <i class="far fa-circle nav-icon text-warning"></i>
                    <p>Someter / Modificar</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/reportar')}}" class="nav-link">
                    <i class="far fa-circle nav-icon text-info"></i>
                    <p>Reportar Avance</p>
                    </a>
                </li>
                <li class="nav-item">
                  <a href="{{url('/compromisos')}}" class="nav-link">
                  <i class="far fa-circle nav-icon text-warning"></i>
                  <p>Compromisos</p>
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
    <!-- Main content -->
    <section class="content" style="padding-top: 10px">
      <div>
        <div class="main container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-7 mt-5">
                    
                    <div class="card">
                        <form action="/proyectos" method="POST">
                        
                            <div class="card-header text-center font-weight-bold" style="font-size: 30px">Proyecto de Posgrado</div>
                            @csrf 

                            <input type="text" name="estudiante_id" value="{{ \Session::get('usuario')->id }}">
                                <input type="text" name="nombre" value="{{ \Session::get('usuario')->nombre }}">

                                
                            <div class="card-body">
                                <div class="row form-group col-12">
                                    <label for="" class="row col-12">Título</label>
                                    <input type="text" class="row col-12" name="Titulo">
                                </div>

        
                                <div class="row form-group col-12">
                                    <label for="" class="row col-12">Hipotesis</label>
                                    <input type="text" class="row col-12" name="Hipotesis">
                                </div>

    
                                <div class="row form-group col-12">
                                    <label for="" class="row col-12">Objetivo General</label>
                                    <input type="text" class="row col-12" name="Objetivos">
                                </div>

                                <div class="row form-group col-12">
                                    <label for="" class="row col-12">Objetivos Especificos</label>
                                    <input type="text" class="row col-12" name="Objetivose">
                                </div>
                                <div class="row form-group col-12">
                                    <label for="" class="row col-12">Comite</label>
                                    <input type="text" class="row col-12" name="comite">
                                </div>

                                


                                
                                
                                
                                

                    
                               </div>
                            <div class="container">
                      
                        
                                <table class="col-12" style="100%">
                                    <thead>
                                        <tr>
                                            <th scope="row">
                                               <div class="mb-3 form-group">
                                                   
                                               <label for="sometidod" class="form-label">Articulos JRC Sometidos</label>
                                                <input class="form-control" list="lista" id="opciones" placeholder="Opciones">
                                                  <datalist id="lista">
                                                    <option value="Articulos JRC Sometidos">
                                                    <option value="Articulos JRC Aceptados o Publicados">
                                                    <option value="Modelo de Utilidad o Patente">
                                                    <option value="Conferencias Nacionales">
                                                    <option value="Conferencias Internacionales">
                                                  </datalist>
                       
                                                </div>  
                                                
                                            </th>
                                            <th scope="row">
                                                <div class="container">

                                    
                                                <button id="botonClick" for="opciones" class="btn btn-warning"><a style="color: black">Agregar</a></button>
                                                
                                                </div>
                                            </th>
                                                
                                        </tr>
                                    </thead>
                                 </table>
                                 <div>
                                    <h2 style="width: 100%; text-align:center; background:rgb(24, 23, 23); padding:0 0; color:white;margin-top:15px" class="font-weidth-bold">Compromisos</h2>
                                 </div>
                                
                                
                                 <table class="table" style="width: 100%">
                                    
                                    <tbody style="width: 100%">
                                        <tr class="col-12">
                                            <th class="col-7">
                                                Articulos JCR sometidos
                                            </th>
                                            <th class="col-5">
                                            
                                            <input type="text" readonly class="form-control" for="botonClick" value=""> 
                                                
                                            </th>
                                     
                                        </tr>
                                        <tr>
                                            <th >
                                                Conferencias Nacionales
                                            </th>
                                            <th>
                                                <input type="text" readonly class="form-control" >
                                            </th>
                                     
                                        </tr>
                                        
                                      
                                    </tbody>
                                </table>
                                <table class="table" style="width: 100%">
                                    <thead>
                                        <tr class="col-12">
                                            <th class="col-4">
                                                <input type="text" placeholder="Actividad..." name="nombre" class="form-control" style="width: 200px">
                                            </th>
                                            <th class="col-4">
                                                <input type="date" placeholder="Periodo.." name="nombre" class="form-control" style="width: 300px">
                                            </th>
                                            <th scope="row" class="col-4">
                                                <button class="btn btn-primary" style="width:37px"><i class="fas fa-plus-circle"></i></button>
                                            </th> 
                                        </tr>
                                    </thead>
                                </table>
                                <div>
                                <!-- espacio entre contenido-->
                                </div>
                                
                                 <div>
                                    <h2 style="width: 100%; text-align:center; background:rgba(0, 0, 0, 0.603); padding:0 0; color:white;margin-top:15px">Actividades</h2>
                                 </div>
                                <table class="table">
                                    <thead class="thead-dark">
                                      <tr>
                                        <th scope="col">Busqueda de informacion</th>
                                        <th scope="col" style="padding-left:100px"><input type="text" placeholder="Enero 2021 - Febrero 2021" name="nombre" class="form-control"></th>
                                        
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <th scope="row">Creacion de la herramienta</th>
                                        <td scope="col" style="padding-left:100px"><input type="text" placeholder="Marzo 2021 - Mayo 2021" name="nombre" class="form-control"></td> 
                                      </tr>
                                      <tr>
                                        <th scope="row">Difucion del trabajo</th>
                                        <td scope="col" style="padding-left:100px"><input type="text" placeholder="01 Junio 2021 - 30 Junio 2021 " name="nombre" class="form-control"></td> 
                                      </tr>
                                    </tbody>
                                </table>
    
                                <div>
                                  <button type="submit" class="btn btn-warning"><a style="color: black">Registrar</a></button>
                                </div>
                                  
    
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
            
        
        </div>  
    
        
  
 
  

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





<!--MI PLANTILLA, ARRIBA ESTA EL DASHBOARD-->
 