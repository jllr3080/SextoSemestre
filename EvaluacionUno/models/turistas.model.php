<?php
//TODO: Clase de destinos
require_once('../config/conexion.php');
class Turistas
{
    //TODO: Implementar los metodos de la clase

    public function todos() //select * from turistas
    {
        $con = new ClaseConectar();
        $con = $con->ProcedimientoParaConectar();
        $cadena = "SELECT * FROM `turistas`";
        $datos = mysqli_query($con, $cadena);
        $con->close();
        return $datos;
    }

    public function uno($turista_id) //select * from destinos where id = $id
    {
        
        $con = new ClaseConectar();
        $con = $con->ProcedimientoParaConectar();
        $cadena = "SELECT * FROM turistas WHERE turista_id=".$turista_id;
        $datos = mysqli_query($con, $cadena);
        $con->close();
        return $datos;
    
        
    }

    
    public function insertar($nombre, $apellido, $email, $telefono) //insert into destinos (nombre,pais,descripcion,costo) values ($nombre, $pais, $descripcion,$costo)
    {
        try {
            $con = new ClaseConectar();
            $con = $con->ProcedimientoParaConectar();
            $cadena = "INSERT INTO `turistas` ( `nombre`, `apellido`, `email`, `telefono`) VALUES ('$nombre','$apellido','$email','$telefono')";
            if (mysqli_query($con, $cadena)) {
                return $con->insert_id;
            } else {
                return $con->error;
            }
        } catch (Exception $th) {
            return $th->getMessage();
        } finally {
            $con->close();
        }
    }
    public function actualizar($turista_id,$nombre, $apellido, $email, $telefono) //update destinos set nombre = $nombre, direccion = $direccion, telefono = $telefono where id = $id
    {
        try {
            $con = new ClaseConectar();
            $con = $con->ProcedimientoParaConectar();
            $cadena = "UPDATE `turistas` SET `nombre`='$nombre',`apellido`='$apellido',`email`='$email',`telefono`='$telefono' WHERE `turista_id` = $turista_id";
            if (mysqli_query($con, $cadena)) {
                return $turista_id;
            } else {
                return $con->error;
            }
        } catch (Exception $th) {
            return $th->getMessage();
        } finally {
            $con->close();
        }
    }
    public function eliminar($turista_id) //delete from destinos where id = $id
    {
        try {
            $con = new ClaseConectar();
            $con = $con->ProcedimientoParaConectar();
            $cadena = "DELETE FROM `turistas` WHERE `turista_id`= $turista_id";
            // echo $cadena;
            if (mysqli_query($con, $cadena)) {
                return 1;
            } else {
                return $con->error;
            }
        } catch (Exception $th) {
            return $th->getMessage();
        } finally {
            $con->close();
        }
    }
}
?>