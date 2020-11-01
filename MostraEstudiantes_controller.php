<?php
require 'Conexion.php';
session_start();
class MostrarEstudiantes_controller
{
    public static function Mostrar()
    {
        try {

            $Conexion = new Conexion();
            $ConexionDb = $Conexion->conectar();
            $query = "SELECT * FROM datos_estudiante";

            $query2 = "SELECT * FROM Carreras WHERE id in (SELECT Carrera FROM datos_estudiante)";

            $busqueda = $_POST['Buscador'];

            if (isset($busqueda)) {

                $r = $busqueda;
                $query = "SELECT * FROM datos_estudiante WHERE Cedula LIKE '%" . $r . "%'";

                $query = $ConexionDb->prepare($query);
                $query->execute();
                $arrDatos = $query->fetchAll(PDO::FETCH_ASSOC);

                $query2 = $ConexionDb->prepare($query2);
                $query2->execute();
                $arrDatos2 = $query2->fetchAll(PDO::FETCH_ASSOC);


                $Filas = $query->rowCount();

                if ($Filas > 0) {
                    echo '<table  class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Nombre</th>
              <th scope="col">Apellido</th>
              <th scope="col">Nacimiento</th>
              <th scope="col">Cedula</th>
              <th scope="col">Carrera</th>
              <th scope="col">Semestre</th>
              <th scope="col">Padre</th>
              <th scope="col">Madre</th>
              <th scope="col">Borrar</th>
            </tr>
          </thead>';
                    foreach ($arrDatos as $respuesta) {
                        foreach ($arrDatos2 as $respuesta2) {
                            if ($respuesta2['id'] == $respuesta['Carrera']) {
                                echo "<tr>
                            <input type='text' name='id' id='id" . $respuesta['id'] . "' value='" . $respuesta['id'] . "' style='display: none;'>
                            <td scope='col'>" . $respuesta['Nombre'] . "</td>
                            <td scope='col'>" . $respuesta['Apellido'] . "</td>
                            <td scope='col'>" . $respuesta['FN'] . "</td>
                            <td scope='col'>" . $respuesta['Cedula'] . "</td>
                            <td scope='col'>" . $respuesta2['Carrera'] . "</td>
                            <td scope='col'>" . $respuesta['Semestre'] . "</td>
                            <td scope='col'>" . $respuesta['Nombre_Padre'] . "</td>
                            <td scope='col'>" . $respuesta['Nombre_Madre'] . "</td>
                            <td scope='col'><center><button value='" . $respuesta['id'] . "' name = 'Boton' id = 'Boton' titulo='Borrar' class='btn btn-danger' type='submit' onclick='return Borrar(this)'>Borrar</button></center>
                        </td> 
                        
                        ";
                            }
                        }
                    }
                    echo '</table>';
                } else {
                    echo "1";
                }
            }
        } catch (Exception $e) {

            echo 'error: ' . $e;
        }
    }
}
MostrarEstudiantes_controller::Mostrar();

#Creador: Mateo Fonseca