<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

    <!--Js-->
    <script type="text/javascript" src="Funciones/Js/crearUsuarios.js"></script>
    <script type="text/javascript" src="Librerias/Jquery-3.5.0/jquery-3.5.0.js"></script>
    <script type="text/javascript" src="Librerias/SweetAlert/dist/sweetalert2.all.min.js"></script>

    <title>Registro</title>
</head>

<body style="font-family: 'Josefin Sans', sans-serif;">
    <div class="contenedor">
        <div class="container">
            <div class="container">
                <h1 class="text-center">Formulario De Registro</h1>
            </div><br>

            <div class="container">

                <form id="Formulario" method="POST">

                    <div class="row justify-content-center">

                        <div class="col-ms-10">

                            <div class="form-row">
                                <!-- Nombre -->
                                <div class="col">
                                    <i class="fas fa-user-alt" style="color:black"></i>
                                    <label for="Nombre" title="Campo Oblicatorio" titulo="Campo Obligatorio">Nombre *</label>
                                    <input autocomplete="off" class="form-control" type="text" autofocus name="Nombre" id="Nombre" require Placeholder='Nombre'>
                                </div>

                                <!-- Apellido -->
                                <div class="col">
                                    <i class="fas fa-user-alt" style="color:black"></i>
                                    <label class="mr-sm-2" for="Apellido" title="Campo Oblicatorio">Apellido *</label>
                                    <input autocomplete="off" class=" form-control" type="text" name="Apellido" id="Apellido" require Placeholder='Apellido'>
                                </div>
                            </div><br>

                            <div class="form-row">
                                <!-- Correo -->
                                <div class="col">
                                    <i class="fas fa-envelope" style="color:black"></i>
                                    <label class="mr-sm-2" for="Correo" title="Campo Oblicatorio">Correo *</label>
                                    <input autocomplete="off" class="form-control" type="email" name="Correo" id="Correo" require Placeholder='Correo Electronico'>
                                </div>

                                <!-- Cedula -->
                                <div class="col">
                                    <i class="fas fa-users" style="color:black"></i>
                                    <label class="mr-sm-2" for="Cedula" title="Campo Oblicatorio">Cedula *</label>
                                    <input autocomplete="off" class="form-control" type="number" name="Cedula" id="Cedula" require Placeholder='Cedula'>
                                </div>
                            </div><br>

                            <div class="form-row">
                                <!-- Contraseña -->
                                <div class="col">
                                    <i class="fas fa-lock" style="color:black"></i>
                                    <label class="mr-sm-2" for="Contraseña" title="Campo Oblicatorio">Contraseña *</label>
                                    <input autocomplete="off" class="form-control" type="password" name="Contraseña" id="Contraseña" require Placeholder='Cotraseña'>
                                </div>

                                <!-- Repetir Contraseña -->
                                <div class="col">
                                    <i class="fas fa-lock" style="color:black"></i>
                                    <label class="mr-sm-2" for="Rcontraseña" title="Campo Oblicatorio">Repetir Contraseña *</label>
                                    <input autocomplete="off" class="form-control" type="password" name="Rcontraseña" id="Rcontraseña" require Placeholder='Repetir Contraseña'>
                                </div>
                            </div><br>

                            <div class="form-row">
                                <div class="col">
                                    <center>
                                        <button onclick="return crearUsuarios()" style="margin-bottom:10%; background-color: rgb(85, 188, 160);" type="submit" id="Enviar" class="btn btn"><i class="fas fa-paper-plane" style="color: black;"></i>&nbsp;Registrar Datos</button>
                                    </center>
                                </div>
                            </div><br>
                        </div>

                    </div>
                </form>
            </div>
        </div>
        <div class="Final">
            <h6 class="text-center">¿Tienes Una Cuenta?</h6>
            <center><a href="Login.php" class="registro">Iniciar Sesion</a></center>
        </div>
    </div>
</body>

</html>

<!-- Creador: Mateo Fonseca -->