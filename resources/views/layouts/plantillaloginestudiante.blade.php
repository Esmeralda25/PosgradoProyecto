<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Login|Estudiante</title>
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
        body{
            font-family: Georgia, 'Times New Roman', Times, serif;
            color: #333;
            margin: 0;
            font-size: 2;
            line-height: 1.4rem;
        }
        .main{
            padding-top: 100px;
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
                font-size: 25px;
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

    </style>

</head>

<body>
    <header class="header">
        <div class="logo-nav-container">
            <a href="#" class="logo">Coordinador | MENÚ</a>
            <nav class="navigation">
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Coordinador</a></li>
                    <li><a href="#">Docente</a></li>
                    <li><a href="#">Estudiante</a></li>
                    <li><a href="#">Contacto</a></li>
                    <li><a href="#">PaginaOficial</a></li>
                </ul>   
            </nav>
        </div>
    </header>
        

<div class="main container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7 mt-5">
            
            <div class="card">
                <form action="" method="POST">
                    <div class="card-header text-center font-weight-bolder">AGREGAR USUARIO</div>

                    <div class="card-body">
                        <div class="row form-group">
                            <label for="" class="col-2">Nombre</label>
                            <input type="text" name="nombre" class="form-control col-md-9">
                        </div>

                        <div class="row form-group">
                            <label for="" class="col-2">Email</label>
                            <input type="text" name="nombre" class="form-control col-md-9">

                        </div>

                        <div class="row form-group">
                            <button type="submit" class="btn btn-success mt-3 col-md-9 offset-2">Guardar</button>

                        </div>

                    </div>
                </form>
            </div>

        </div>
    </div>

</div>  
  

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.js"></script>
</body>

</html>