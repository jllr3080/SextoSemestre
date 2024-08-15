<?php
//TODO: Clase de destinos
require_once('../config/conexion.php');
class Destinos
{
    //TODO: Implementar los metodos de la clase

    public function todos() //select * from destinos
    {
        $con = new ClaseConectar();
        $con = $con->ProcedimientoParaConectar();
        $cadena = "SELECT * FROM `destinos`";
        $datos = mysqli_query($con, $cadena);
        $con->close();
        return $datos;
    }

    public function uno($destino_id) //select * from destinos where id = $id
    {
        $con = new ClaseConectar();
        $con = $con->ProcedimientoParaConectar();
        $cadena = "SELECT * FROM destinos  WHERE destino_id=".$destino_id;
        $datos = mysqli_query($con, $cadena);
        $con->close();
        return $datos;
    }

    
    public function insertar($nombre, $pais, $descripcion, $costo) //insert into destinos (nombre,pais,descripcion,costo) values ($nombre, $pais, $descripcion,$costo)
    {
        try {
            $con = new ClaseConectar();
            $con = $con->ProcedimientoParaConectar();
            $cadena = "INSERT INTO `destinos` ( `nombre`, `pais`, `descripcion`, `costo`) VALUES ('$nombre','$pais','$descripcion','$costo')";
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
    public function actualizar($destino_id, $nombre, $pais, $descripcion, $costo) //update destinos set nombre = $nombre, direccion = $direccion, telefono = $telefono where id = $id
    {
        try {
            $con = new ClaseConectar();
            $con = $con->ProcedimientoParaConectar();
            $cadena = "UPDATE `destinos` SET `nombre`='$nombre',`pais`='$pais',`descripcion`='$descripcion',`costo`='$costo' WHERE `destino_id` = $destino_id";
            if (mysqli_query($con, $cadena)) {
                return $destino_id;
            } else {
                return $con->error;
            }
        } catch (Exception $th) {
            return $th->getMessage();
        } finally {
            $con->close();
        }
    }
    public function eliminar($destino_id) //delete from destinos where id = $id
    {
        try {
            $con = new ClaseConectar();
            $con = $con->ProcedimientoParaConectar();
            $cadena = "DELETE FROM `destinos` WHERE `destino_id`= $destino_id";
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