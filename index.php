<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fuente De Google -->
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&display=swap" rel="stylesheet">

    <!-- Icono -->
    <link rel="icon" type="image/ico" href="Publicas/Imagenes/favicon.ico" />

    <!--Css-->
    <link rel="stylesheet" href="Librerias/bootstrap-4.4.1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="Librerias/fontawesome-5.13.0/css/all.css">
    <link rel="stylesheet" href="Librerias/Sweetalert/dist/sweetalert2.min.css">

    <!--Js-->
    <script type="text/javascript" src="Librerias/Jquery-3.5.0/jquery-3.5.0.js"></script>
    <script type="text/javascript" src="Librerias/SweetAlert/dist/sweetalert2.all.min.js"></script>

    <style>
        .contenedor {
            display: grid;
            grid-template: 100px fr 100px / 400px 1fr;
            grid-template-areas: "header header"
                "contenido contenido"
            ;
            grid-gap: 20px;
        }

        .header {
            grid-area: header;
            height: 10vh;
            padding: 10px;
            background-color: rgb(255, 255, 255);

        }

        .contenido {
            grid-area: contenido;
            height: 85vh;
            margin-left: 0.2%;
            margin-right: 0.2%;
            background-color: rgb(122, 218, 188);
        }

        .item {
            color: #000;
            padding: 1%;
            color: white;
            border-radius: 3px;
        }

        #menu ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        #menu ul a {
            display: block;
            color: black;
            text-decoration: none;
            font-weight: 400;
            font-size: 15px;
            padding: 10px;
            letter-spacing: 1px;
            transition: all;
        }

        #menu ul li {
            position: relative;
            float: left;
            margin: 0;
            padding: 0;
            transition: 1s;
        }

        #menu ul ul {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            padding: 0;
        }

        #menu ul ul li {
            float: none;
            width: 175px
        }

        #menu ul ul a {
            line-height: 130%;
            padding: 10px 15px;
        }

        #menu ul li:hover>ul {
            display: block;
            
        }
    </style>

    <title>Universidad De Politecnica De Colombia</title>
</head>

<body style="background-color: rgb(122, 218, 188);font-family: 'Josefin Sans', sans-serif;">

    <section class="contenedor">
        <div class="item header">
            <img style="margin-top:-.5%" src="publicas/Imagenes/Icono.png" width="50px" height="50px" alt="Logo De La Institucion" title="Logo">
            <h4 style="display:inline-block;color: black; ">Universidad Industrial De Colombia</h4>
            <a style="float:right;" class="btn btn-dark" href="Login.php">Iniciar Sesion</a>
            <a style="float:right;" class="btn btn" href="registro.php">Registrarse</a>
            <nav style="float:right" id="menu">
                <ul>
                    <li><a class="bnt bnt" href="#">Contacto</a>
                        <ul>
                            <li><a style="background-color: #fff;" class="bnt bnt-dark" href="https://www.facebook.com/"><i class="fab fa-facebook-square"></i>&nbsp;Facebook</a></li>
                            <li><a style="background-color: #fff;" class="bnt bnt-dark" href="https://twitter.com/"><i class="fab fa-twitter-square"></i>&nbsp;twitter</a></li>
                            <li><a style="border-radius: 0px 0px 10px 10px;background-color: #fff;" class="bnt bnt-dark" href="https://www.instagram.com/"><i class="fab fa-instagram-square"></i>&nbsp;instagram</a></li>
                        </ul>
                    </li>
            </nav>
            <nav style="float:right" id="menu">
                <ul>
                    <li><a class="bnt bnt" href="#">Ingenierias</a>
                        <ul>
                            <li><a style="background-color: #fff;" class="bnt bnt-dark" href="View/Ingenieria.php">Ingenieria De Sistemas</a></li>
                            <li><a style="background-color: #fff;" class="bnt bnt-dark" href="View/Humanas.php">Ingenieria De Electronica</a></li>
                            <li><a style="background-color: #fff;" class="bnt bnt-dark" href="View/Administrativas.php">Ingenieria De Civil</a></li>
                            <li><a style="border-radius: 0px 0px 5px 5px;background-color: #fff;" class="bnt bnt-dark" href="View/Administrativas.php">Ingenieria De Industrial</a></li>
                        </ul>
                    </li>
            </nav>
            <hr color="black" size="20">
        </div>
        <div class="item contenido"></div>

    </section>

</body>

</html>