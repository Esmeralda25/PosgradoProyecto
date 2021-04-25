<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Estudiante</title>
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" 
    crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <style>
        
        .containerback{
            width: 85%;
            max-width: 850px;
            margin: 0 auto;
            
        }
        .fondo{
                background: #ecececb4;
                background-image: url('../../img/fondo.jpg');
                font-family: Georgia, 'Times New Roman', Times, serif;
                color: #333;
                margin: 0;
                font-size: 2;
                line-height: 1.4rem;
            }
        .main{
            padding-top: 60px;
        }

        p{
            margin-bottom: 1rem; <!-- Margen en cada linea de parrafo -->
        }
        .header {
                background: #133894;
                color: #fff;
                box-shadow: 0 0 20px #000;
                padding: 25px 0; 
                position: fixed;
                font-size: 35px;
                left: 0;
                top: 0;
                width: 100%;
                right: 0;
            }
        .header a{
            color: #fff;
            text-decoration: none;
            margin-left: 25px;
        }
        .aheader{
                font-size: 20px;
            }
        .logo-nav-container{
            display:flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo{
            letter-spacing: 1px;
            font-size: 30px;
        }
        .navigation ul{
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .navigation ul li{
            display: inline-block;
        }

        .navigation ul li a{
            display: block;
            padding: 0.5 rem 1rem;
            margin: 4px;
            margin-right: 20px;
            transition: all 0.2s linear;
            border-radius: 5px;
            -moz-transition: all .9s ease;

        }

        .navigation ul li a:hover{
            background: rgba(224, 221, 221, 0.404);
        }
        .detailimg1{
            background: rgb(15, 15, 136); 
            width: 250px;
            height: 250px;
            margin-right: 100px;
        }
        .detailimg2{
            background: rgb(72, 163, 248); 
            width: 250px;
            height: 250px;
        }
        .detailimg3{
            background: rgb(15, 15, 136); 
            width: 250px;
            height: 250px;
        }
        .detailimg4{
            background: rgb(72, 163, 248); 
            width: 250px;
            height: 250px;
        }
        .detailimg5{
            background: rgb(15, 15, 136); 
            width: 250px;
            height: 250px;
        }


        .lista{
            padding: 0px;
            margin-top: 15px;
        }
       

        .containerlistArt{
            float: left;
        }
        .containerlistADD{
            float:left;
            margin-top: 15px;
            
        }

        .tamañoboton{
            width: 60px;
            height: 30px;
        }
        .social-bar{
                position: fixed;
                right: 0;
                top: 35%;
                font-size: 1.5rem;
                display: flex;
                flex-direction:column;
                align-items: flex-end;
                z-index: 100;
            }

            .icon{
                color: #fff;
                text-decoration: none; 
                padding: 20px;
                margin: 1px;
                display: flex;
                transition: all .5s;

            }
            .icon-facebook{
                background: #133894;
            }
            .icon-instagram{
                background: #3f729b;
            }
            .icon-google{
                background: #3cba54;
            }
            .icon-mail{
                background: #db3236;

            }
            .icon:first-child{
                border-radius: 1rem 0 0 0;
            }
            .icon:last-child{
                border-radius: 0 0 1rem;
            }
            .icon:hover{
                padding-right: 3rem;
                border-radius: 1rem 0 0 1rem;
                box-shadow: 0 0 .5rem rgb(0, 0, 0, 0.42);
            }

           



    </style>

</head>

<body class="fondo">
    <header class="header">
        <div class="logo-nav-container">
            <a href="#" class="logo">Estudiante | Proyecto</a>
            <nav class="navigation">
                <ul>
                    <li><a class="aheader" href="{{url('/')}}">Inicio</a></li>
                    <li><a class="aheader" href="#">Contacto</a></li>
                    <li><a class="aheader" href="#">PaginaOficial</a></li>
                </ul>   
            </nav>
        </div>
    </header>

    <div class="social-bar">
            
        <a href="http://www.facebook.com" target="_blank" class="icon icon-facebook"></a>
        <a href="http://www.twitter.com" target="_blank" class="icon icon-instagram"></a>
        <a href="http://www.googleplus.com" target="_blank" class="icon icon-google"></a>
        <a href="mailto:contacto@falconmasters.com" class="icon icon-mail"></a>
    
</div>
        

    <div class="main container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-7 mt-5">
                
                <div class="card">
                    <form action="" method="POST">
                        <div class="card-header text-center font-weight-bolder">Proyecto de Posgrado</div>
    
                        <div class="card-body">
                            <div class="row form-group">
                                <label for="" class="col-2">Título</label>
                                <input type="text" name="nombre" class="form-control col-md-9">
                            </div>
    
                            <div class="row form-group">
                                <label for="" class="col-5">Hipótesis</label>
                                <input type="text" name="nombre" class="form-control col-md-9">
    
                            </div>

                            <div class="row form-group">
                                <label for="" class="col-5">Objetivo General</label>
                                <input type="text" name="nombre" class="form-control col-md-9">
    
                            </div>

                            <div class="row form-group">
                                <label for="" class="col-5">Objetivo Especifico</label>
                                <input type="text" name="nombre" class="form-control col-md-9">
    
                            </div>
                
                           </div>
                        <div class="container">
                            <table class="col-12" style="100%">
                                <thead>
                                    <tr>
                                        <th scope="row">
                                            <div class=" navbar-collapse navbar-ex1-collapse">
                                                <ul class="nav navbar-nav">
                                                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Articulos JCR sometidos<b class="caret"></b></a>
                                                        <ul class="dropdown-menu">
                                                            <li><a href="#"></a>Articulos JCR aceptados</li>
                                                            <li><a href="#"></a>Modelo de utilidad o patente</li>
                                                            <li><a href="#"></a>Conferencias nacionales</li>
                                                            <li><a href="#"></a>Conferencias internacionales</li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </th>
                                        <th scope="row">
                                            <div class="containerlistADD container">
                                                <button class="tamañoboton">+</button>
                                            </div>
                                        </th>
                                            
                                    </tr>
                                </thead>
                             </table>
                             <div>
                                <h2 style="width: 100%; text-align:center; background:rgba(0, 0, 0, 0.603); padding:0 0; color:white;margin-top:15px">Compromisos</h2>
                             </div>
                            <table class="table">
                                <thead class="thead-dark">
                                  <tr>
                                    <th scope="col">Articulos JCR sometidos</th>
                                    <th scope="col" style="padding-left:100px"><input type="text" name="nombre" class="form-control"></th>
                                    
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">Conferencias nacionales</th>
                                    <td scope="col" style="padding-left:100px"><input type="text" name="nombre" class="form-control"></td> 
                                  </tr>
                                </tbody>
                            </table>
                            <div>
                            <!-- espacio entre contenido-->
                            </div>
                            <table class="col-12" style="100%">
                                <thead>
                                    <tr>
                                        <th scope="row">
                                                <ul class="nav navbar-nav">
                                                    
                                                    <input type="text" name="nombre" class="form-control">
                                                </ul>
                                        </th>
                                        <th scope="row">
                                            <div class="containerlistADD container">
                                                <button class="tamañoboton">+</button>
                                            </div>
                                        </th>
                                            
                                    </tr>
                                </thead>
                             </table>
                             <div>
                                <h2 style="width: 100%; text-align:center; background:rgba(0, 0, 0, 0.603); padding:0 0; color:white;margin-top:15px">Compromisos</h2>
                             </div>
                            <table class="table">
                                <thead class="thead-dark">
                                  <tr>
                                    <th scope="col">Busqueda de informacion</th>
                                    <th scope="col" style="padding-left:100px"><input type="text" name="nombre" class="form-control"></th>
                                    
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">Creacion de la herramienta</th>
                                    <td scope="col" style="padding-left:100px"><input type="text" name="nombre" class="form-control"></td> 
                                  </tr>
                                  <tr>
                                    <th scope="row">Difucion del trabajoj</th>
                                    <td scope="col" style="padding-left:100px"><input type="text" name="nombre" class="form-control"></td> 
                                  </tr>
                                </tbody>
                            </table>

                            <div>
                                  <button><a href="{{url('')}}">Someter/Modificar</a></button>
                            </div>
                              

                        </div>
                    </form>
                </div>
                
            </div>
        </div>
        
    
    </div>  
      
@section('scripts')
<script>
    $(document).ready(function() {
    $('.menu li:has(ul)').click(function(e) {
        e.preventDefault();
        if($(this).hasClass('activado')){

        }else{
            $('.menu li ul').slideUp();
            $('.menu li').removeClass('activado');
            $(this).addClass('activado');
            $(this).children('ul').slideDown();
        }
    });
});
</script>
    
@endsection
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    
    <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="{{asset('resources/js/main.js') }}"></script>
    <script src="assets/js/bootstrap.js"></script>

   
</body>

</html>