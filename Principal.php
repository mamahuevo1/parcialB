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
    <link rel="stylesheet" href="Funciones/css/botones.css">
    <link rel="stylesheet" href="Librerias/bootstrap-4.4.1-dist/css/bootstrap.min.css">

    <!--Js-->
    <script type="text/javascript" src="Librerias/Jquery-3.5.0/jquery-3.5.0.js"></script>
    <script type="text/javascript" src="Librerias/SweetAlert/dist/sweetalert2.all.min.js"></script>
    <script type="text/javascript" src="Funciones/Js/Sesion.js"></script>
    <script type="text/javascript" src="Funciones/Js/Estudiante.js"></script>
    <script type="text/javascript" src="Librerias\bootstrap-4.4.1-dist\js\bootstrap.min.js"></script>


    <title>Incio</title>
    <style>
        .upload-btn-wrapper {
            position: relative;
            left: 55%;
            bottom: 5vh;
            overflow: hidden;
            display: inline-block;
        }

        .upload-btn-wrapper input[type=file] {
            font-size: 100px;
            position: absolute;
            left: 0;
            top: 0;
            opacity: 0;
        }

        #boton-standar-rw {
            transition: all 0.3s ease 0s;
            color: #000;
            background-color: rgb(122, 218, 188, .5);
            width: 95%;
            height: 95%;
            border-radius: 160px;
            margin: auto;
        }

        .Btn1 {
            color: #000;
            background-color: rgb(85, 189, 156);
            width: 100%;
            padding: 3%;
            border: 0 none;
            text-align: left;
            transition: .5s;
        }

        .Btn1:hover {
            background-color: rgb(122, 218, 188);
        }

        h6 {
            color: black;
        }

        .perfil {
            width: 40%;
            height: 40%;
            border-radius: 160px;
            border: 2px solid black;
            display: block;
            margin-top: 1%;
            margin: auto;
            margin-bottom: 1%;
        }

        .grid-container {
            display: grid;
            grid-template-columns: 0.8fr 1.2fr 1fr 1fr;
            grid-template-rows: 0.5fr 1.5fr 7fr;
            gap: 0px 0px;
            grid-template-areas:
                "Menu Barra Barra Barra"
                "Menu Contenido Contenido Contenido"
                "Menu Contenido Contenido Contenido";
        }

        .Barra {
            grid-area: Barra;
            padding: 10px;
            background-color: rgb(85, 189, 156);
            border: 1px solid black;
        }

        .Contenido {
            grid-area: Contenido;
            border: 1px solid black;
        }

        .Menu {
            grid-area: Menu;
            background-color: rgb(85, 189, 156);
            border: 1px solid black;
        }
    </style>
</head>

<body onload="return user()" style="font-family: 'Josefin Sans', sans-serif;">
    <div class="grid-container">

        <div class="Menu">
            <div style="background-color: rgb(122, 218, 188);" class="titulo">
                <h4 class="text-center" style="padding: 2%;">Perfil Licenciado</h4>
            </div>

            <div style="padding: 1%;" class="container" id="Estudiante">
            </div>
            <div class="container">
                <hr color="black" size="20">
                <button style="color: #000;" onclick="return Alumno()" class="Btn1" type="submit"><i class="fas fa-user-graduate"></i>&nbsp;Alumnos</button><br>
                <button style="color: #000;" onclick="return Matricula()" class="Btn1" type="submit"><i class="fas fa-book"></i>&nbsp;Matricula En Linea</button><br>
                <button style="color: #000;" onclick="return Liquidacion()" class="Btn1" type="submit"><i class="fas fa-money-check-alt"></i>&nbsp;Liquidacion</button><br>
                <button style="color: #000;" onclick="return Notas()" class="Btn1" type="submit"><i class="fas fa-clipboard"></i>&nbsp;Notas Actuales</button><br>
            </div>
        </div>
        <div style="padding: 5%;" class="Contenido">
            <div class="container" id="bienvenida">
                <h1 class="text-center">Bienvenido</h1>
                <img style="display:block;margin:auto;" src="publicas/Imagenes/Icono.png" width="300px" height="300px" alt="Logo De La Institucion" title="Logo">
                <h1 class="text-center">Universidad Industrial De Colombia</h1>
            </div>
            <div style="display: none;" id="Alumnos">
                <div class="container">
                    <h2 class="text-center">Estudiantes Registrados</h2>
                </div>
                <div style="margin-top: 5%;" class="container">
                    <div class="form-row">
                        <div class="col"><button style="background-color:rgb(85, 188, 160)" data-toggle="modal" data-target="#añadir" class="btn btn">Añardir Alumno</button>
                        </div>
                        <div class="col">
                            <button style="display:inline-block;" type="submit" class="btn btn-dark">Editar Alumno</button>
                        </div>
                        <div class="col">
                            <form method="POST" id="buscar">
                                <input autocomplete="off" onkeyup="return Buscar()" class="form-control" type="number" name="Buscador" id="Buscador" placeholder="Buscador Por Cedula">
                            </form>
                        </div>
                    </div>
                </div>
                <br>
                <div style="margin-top:3%;" class="container" id="Resultado">
                    <h1 class="text-center"><i class="fas fa-exclamation-triangle"></i>&nbsp;No Hay Busqueda</h1>
                </div>'

            </div>
        </div>
        <div class="Barra">
            <img style="margin-top:-.5%" src="publicas/Imagenes/Icono.png" width="50px" height="50px" alt="Logo De La Institucion" title="Logo">
            <h4 style="display:inline-block;color: black; ">Universidad Industrial De Colombia</h4>
            <button title="Cerrar Cesion" type="submit" style="float:right;" class="btn btn-dark" onclick="return CerrarSesion()"><i class="fas fa-sign-out-alt"></i></button>
        </div>
        <main class="container">
            <div id="añadir" class="modal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title"><i class="fas fa-user-graduate"></i>&nbsp;Añadir Alumno</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" id="AñadirAlumno">
                                <div class="form-row">
                                    <div class="col">
                                        <input placeholder="Nombre" class="form-control" type="text" name="Nombre" id="Nombre">
                                    </div>
                                    <div class="col">
                                        <input placeholder="Apellido" class="form-control" type="text" name="Apellido" id="Apellido"></div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <select class="form-control" name="Carrera" id="Carrera">
                                            <option value="...">...</option>
                                            <option value="1">Ingenieria De Sistemas</option>
                                            <option value="2">Ingenieria Civil</option>
                                            <option value="3">Ingenieria Industrial</option>
                                            <option value="4">Ingenieria Electronica</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <input placeholder="Semestre" class="form-control" type="text" name="Semestre" id="Semestre">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col">
                                        <input placeholder="Fecha De Nacimiento" class="form-control" type="date" name="Fecha" id="Fecha">
                                    </div>
                                    <div class="col"><input placeholder="Cedula" class="form-control" type="text" name="Cedula" id="Cedula"></div>
                                </div>
                                <div class="form-row">
                                    <div class="col"><input placeholder="Padre" class="form-control" type="text" name="Padre" id="Padre">
                                    </div>
                                    <div class="col"><input placeholder="Madre" class="form-control" type="text" name="Madre" id="Madre">
                                    </div>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button style="background-color:  rgb(85, 188, 160);" type="button" class="btn btn">Registar</button>
                            <button type="button" class="btn btn-dark" data-dismiss="modal">Cancelar</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
</body>

</html>