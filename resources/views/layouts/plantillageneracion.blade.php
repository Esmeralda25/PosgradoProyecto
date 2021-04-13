<!doctype html>
<!-- PLANTILLA BASE DE 127.0.0.1:8000/generacion-->
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
            max-width: 850px;
            margin: 0 auto;
            margin-top: 100px;
            
            }
            body{
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
                background: #080c3f;
                color: #fff;
                padding: 20px 0;
                position: fixed;
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
            

    </style>
    <title>CRUD Generación</title>
  </head>
  <body>
  <header class="header">
    <div class="logo-nav-container">
        <a href="#" class="logo">Generacion | CRUD</a>
        <nav class="navigation">
            <ul>
                <li><a class="aheader" href="#">Inicio</a></li>
                <li><a class="aheader" href="#">Coordinador</a></li>
                <li><a class="aheader" href="#">Docente</a></li>
                <li><a class="aheader" href="#">Estudiante</a></li>
                <li><a class="aheader" href="#">Contacto</a></li>
                <li><a class="aheader" href="#">PaginaOficial</a></li>
            </ul>   
        </nav>
    </div>
</header>

    <div class="container">
    @yield('contenido')

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    
  </body>
</html>