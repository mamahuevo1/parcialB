<?php
require 'Conexion.php';
session_start();
class  actuizarFoto_controller
{
    public static function insertar()
    {
        //instaciamiento de la clase
        $Conexion = new Conexion();
        $Conexiondb = $Conexion->conectar();
        try {

            if (!isset($_SESSION['Autentificar'])) {
                echo 'Debes Iniciar Sesion';
                exit();
            }
            $imagen = $_FILES['I']['name'];
            $tmp = ($_FILES['I']['tmp_name']);
            $guardar = 'C:\xampp\htdocs\Colegio\Publicas\Perfil/' . $imagen;
            $Url = 'Publicas/Perfil/' . $imagen;
            move_uploaded_file($tmp,  $guardar);

            $Cedula = $_SESSION['Autentificar'];
            $sql = 'UPDATE user SET Foto = :Foto WHERE Cedula = :Cedula';
            $query = $Conexiondb->prepare($sql);
            $query->bindParam(':Foto', $Url, PDO::PARAM_LOB);
            $query->bindParam(':Cedula', $Cedula);
            $query->execute();
            
            $sql1 = "SELECT * From user WHERE Cedula = :Cedula";
            $respuesta = $Conexiondb->prepare($sql1);
            $respuesta->bindParam(':Cedula', $Cedula);
            $respuesta->execute();
            $row = $respuesta->fetchAll(PDO::FETCH_ASSOC);

            foreach ($row as $respuesta) {
                echo $respuesta['Foto'];
            }
           
        } catch (PDOException $e) {
            //Reconocer un error y revertir los cambios
            echo $e;
        }
    }
}

actuizarFoto_controller::insertar();

#Creador: Mateo Fonseca