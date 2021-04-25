<!doctype html>
<!-- PLANTILLA BASE DE 127.0.0.1:8000/reportar  MAIN  de estudiante 2-->
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style>
        .container{
            width: 85%;
            max-width: 100%;
            margin: 0 auto;
            margin-top: 100px;
            
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
                padding-top: 130px;
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
            .evaluar{
                text-decoration: none;
                color:black;
            }
            .logo{
                letter-spacing: 1px;
                font-size: 35px;
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
    <title>Docente</title>
  </head>
  <body class="fondo">
  <header class="header">
    <div class="logo-nav-container">
        <a href="#" class="logo">Estudiante</a>
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
<div class="container col-12">
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
    

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    
  </body>
</html>