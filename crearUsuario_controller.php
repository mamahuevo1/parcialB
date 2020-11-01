<?php
require_once 'Conexion.php';

class  crearUsuario_controller
{
    public static function insertar()
    {
        //instaciamiento de la clase
        $Conexion = new Conexion();
        $Conexiondb = $Conexion->conectar();

       $foto = "Publicas/perfil/default.jpg";

        $sql0 = ("SELECT COUNT(*) FROM user WHERE Cedula = :Cedula");
        $Cedula = $Conexiondb->prepare($sql0);
        $Cedula->bindParam(':Cedula', $_POST['Cedula']);
        $Cedula->execute();

        $sql1 = ("SELECT COUNT(*) FROM user WHERE Correo = :correo");
        $correo = $Conexiondb->prepare($sql1);
        $correo->bindParam(':correo', $_POST['Correo']);
        $correo->execute();

        if ($correo->fetchColumn() > 0) {
            echo 'Ya Existe Ese Correo.';
            exit();
        } else {
            if ($Cedula->fetchColumn() > 0) {
                echo 'Ya Existe Ese Cedula.';
                exit();
            } else {

                try {

                    //Iniciar una transacción, desactivando autocommit
                    $Conexiondb->beginTransaction();

                    $query = 'INSERT INTO user (Nombre, Apellido, Correo, Cedula, Clave, Foto) VALUES (:nombre, :apellido, :correo, :Cedula, :pass, :Foto)';

                    //Ejecuta una sentencia
                    $sql = $Conexiondb->prepare($query);

                    $sql->bindParam(':nombre', $_POST['Nombre']);
                    $sql->bindParam(':apellido', $_POST['Apellido']);
                    $sql->bindParam(':correo', $_POST['Correo']);
                    $sql->bindParam(':Cedula', $_POST['Cedula']);
                    $sql->bindParam(':Foto', $foto);


                    //Encriptado de la contraseña
                    $passwordHash = md5($_POST['Contraseña']);

                    $sql->bindParam(':pass', $passwordHash);

                    //ejecucion del SQL
                    $sql->execute();

                    //Consignar los cambios
                    $Conexiondb->commit();

                    echo 'Se Ha Registrado Con Exito.';
                } catch (PDOException $e) {
                    //Reconocer un error y revertir los cambios
                    $Conexiondb->rollBack();

                    echo 'Se Presento El Siguiente Error: ' . $e;
                }
            }
        }
    }
}
crearUsuario_controller::insertar();

#Creador: Mateo Fonseca