<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no">

    <!-- Fuente De Google -->
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&display=swap" rel="stylesheet">

    <!-- Icono -->
    <link rel="icon" type="image/ico" href="Publicas/Imagenes/favicon.ico" />

    <!--Css-->
    <link rel="stylesheet" href="Librerias/bootstrap-4.4.1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="Librerias/fontawesome-5.13.0/css/all.css">
    <link rel="stylesheet" href="Funciones/css/Sesion.css">
    <link rel="stylesheet" href="Funciones/css/botones.css">
    <link rel="stylesheet" href="Librerias/Sweetalert/dist/sweetalert2.min.css">

    <!-- js -->
    <script type="text/javascript" src="Funciones/Js/Sesion.js"></script>
    <script type="text/javascript" src="Librerias/Jquery-3.5.0/jquery-3.5.0.js"></script>
    <script type="text/javascript" src="Librerias/SweetAlert/dist/sweetalert2.all.min.js"></script>

    <title>Login</title>
</head>

<body style="font-family: 'Josefin Sans', sans-serif;">
    <div class="contenedor">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-ms-5">
                    <div class="container">
                        <center><img src="Publicas/Imagenes/icono.png" alt="Iniciar Sesion" width="100px" height="100px"></center>
                        <h1 class="text-center" style="color:black">Iniciar Sesion</h1> <br>
                    </div>

                    <form method="post" id="Formulario">
                        <i class="fas fa-users" style="color:black"></i>
                        <label class="mr-sm-2" for="Cedula" title="Campo Oblicatorio" >Cedula *</label>
                        <input autocomplete="off" class="form-control" name="Cedula" type="text" id="Cedula" placeholder="Cedula" require><br>

                        <i class="fas fa-lock" style="color:black"></i>
                        <label class="mr-sm-2" for="Contraseña" title="Campo Oblicatorio">Contraseña *</label>
                        <input autocomplete="off" class="form-control" name="password" type="password" id="password" placeholder="Contraseña" require><br>

                        <div class="row justify-content-center">
                            <button titulo="Iniciar Session" style="margin-bottom:15%; background-color: rgb(85, 188, 160);" class="btn btn" type="submit" onclick="return IniciarSesion()"><i class="fas fa-paper-plane" style="color:black"></i>&nbsp;Iniciar Sesion</button><br>
                        </div> <br>
                </div>
                </form>
            </div>
        </div>
        <div class="Final">
            <h6 class="text-center" >¿No Tienes Una Cuenta?</h6>
            <center><a href="Registro.php" style="padding:5%;" class="registro">Registrase</a></center>
        </div>
    </div>

    </div>
</body>

</html>

<!-- Creador: Mateo Fonseca -->