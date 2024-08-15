<?php
//TODO: Clase de destinos
require_once('../config/conexion.php');
class Reservas
{
    //TODO: Implementar los metodos de la clase

    public function todos() //select * from destinos
    {
        $con = new ClaseConectar();
        $con = $con->ProcedimientoParaConectar();
        $cadena = "SELECT * FROM `reservas`";
        $datos = mysqli_query($con, $cadena);
        $con->close();
        return $datos;
    }

    public function uno($reserva_id) //select * from destinos where id = $id
    {
        $con = new ClaseConectar();
        $con = $con->ProcedimientoParaConectar();
        $cadena = "SELECT * FROM reservas  WHERE reserva_id=".$reserva_id;
        $datos = mysqli_query($con, $cadena);
        $con->close();
        return $datos;
    }

    
    public function insertar($fecha_reserva, $fecha_inicio, $fecha_fin, $agente,$destinos_destino_id,$turistas_turista_id) //insert into destinos (nombre,pais,descripcion,costo) values ($nombre, $pais, $descripcion,$costo)
    {
        try {
            $con = new ClaseConectar();
            $con = $con->ProcedimientoParaConectar();
            $cadena = "INSERT INTO `reservas` ( `fecha_reserva`, `fecha_inicio`, `fecha_fin`, `agente`, `destinos_destino_id`, `turistas_turista_id`) VALUES ('$fecha_reserva','$fecha_inicio','$fecha_fin','$agente','$destinos_destino_id','$turistas_turista_id')";
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
    public function actualizar($reserva_id,$fecha_reserva, $fecha_inicio, $fecha_fin, $agente,$destinos_destino_id,$turistas_turista_id) //update destinos set nombre = $nombre, direccion = $direccion, telefono = $telefono where id = $id
    {
        try {
            $con = new ClaseConectar();
            $con = $con->ProcedimientoParaConectar();
            $cadena = "UPDATE `reservas` SET `fecha_reserva`='$fecha_reserva',`fecha_inicio`='$fecha_inicio',`fecha_fin`='$fecha_fin',`agente`='$agente',`destinos_destino_id`='$destinos_destino_id',`turistas_turista_id`='$turistas_turista_id' WHERE `reserva_id` = $reserva_id";
            if (mysqli_query($con, $cadena)) {
                return $reserva_id;
            } else {
                return $con->error;
            }
        } catch (Exception $th) {
            return $th->getMessage();
        } finally {
            $con->close();
        }
    }
    public function eliminar($reserva_id) //delete from destinos where id = $id
    {
        try {
            $con = new ClaseConectar();
            $con = $con->ProcedimientoParaConectar();
            $cadena = "DELETE FROM `reservas` WHERE `reserva_id`= $reserva_id";
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