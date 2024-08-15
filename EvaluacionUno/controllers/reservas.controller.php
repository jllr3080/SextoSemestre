<?php
error_reporting(0);
require_once("../models/reservas.model.php");
$reservas = new Reservas();

switch ($_GET["op"]) {
    case "todos":
        $datos = $reservas->todos();
        while ($row = mysqli_fetch_assoc($datos)) { ///muchos registros 
            $todos[] = $row;
        }
        echo json_encode($todos);
        break;
    case "uno":
        $reserva_id = $_POST["reserva_id"];
        $datos = $reservas->uno($reserva_id);
        $res = mysqli_fetch_assoc($datos);
        echo json_encode($res);
        break;
    case "insertar":
        $fecha_reserva = $_POST["fecha_reserva"];
        $fecha_inicio = $_POST["fecha_inicio"];
        $fecha_fin = $_POST["fecha_fin"];
        $agente = $_POST["agente"];
        $destinos_destino_id = $_POST["destinos_destino_id"];
        $turistas_turista_id = $_POST["turistas_turista_id"];
        $datos = $reservas->insertar($fecha_reserva, $fecha_inicio, $fecha_fin, $agente,$destinos_destino_id,$turistas_turista_id);
        echo json_encode($datos);
        break;
    case "actualizar":
        $reserva_id = $_POST["reserva_id"];
        $fecha_reserva = $_POST["fecha_reserva"];
        $fecha_inicio = $_POST["fecha_inicio"];
        $fecha_fin = $_POST["fecha_fin"];
        $agente = $_POST["agente"];
        $destinos_destino_id = $_POST["destinos_destino_id"];
        $turistas_turista_id = $_POST["turistas_turista_id"];
        $datos = $reservas->actualizar($reserva_id,$fecha_reserva, $fecha_inicio, $fecha_fin, $agente,$destinos_destino_id,$turistas_turista_id);
        echo json_encode($datos);
        break;
    case "eliminar":
        $reserva_id = $_POST["reserva_id"];
        $datos = $reservas->eliminar($reserva_id);
        echo json_encode($datos);
        break;
}
?>