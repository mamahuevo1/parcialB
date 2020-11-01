<?php
require 'Conexion.php';
class borrar_controller
{
    public static function borrar()
    {
        try {

            $Conexion = new Conexion();
            $ConexionDb = $Conexion->conectar();

            $sql = 'DELETE From datos_estudiante WHERE id = :id';
            $query = $ConexionDb->prepare($sql);
            $query->bindParam(':id', $_POST['id']);

            $query->execute();

            echo "Se Ha Borrado Con Exito.";
        } catch (Exception $e) {

            echo 'error: ' . $e;
        }
    }
}
borrar_controller::borrar();

#Creador: Mateo Fonseca
