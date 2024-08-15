<?php
error_reporting(0);
require_once("../models/destinos.model.php");
$destinos = new Destinos();

switch ($_GET["op"]) {
    case "todos":
        $datos = $destinos->todos();
        while ($row = mysqli_fetch_assoc($datos)) { ///muchos registros 
            $todos[] = $row;
        }
        echo json_encode($todos);
        break;
    case "uno":
        $destino_id = $_POST["destino_id"];
        $datos = $destinos->uno($destino_id);
        $res = mysqli_fetch_assoc($datos);
        echo json_encode($res);
        break;
    case "insertar":

        $nombre = $_POST["nombre"];
        $pais = $_POST["pais"];
        $descripcion = $_POST["descripcion"];
        $costo = $_POST["costo"];
        $datos = $destinos->insertar($nombre,$pais,$descripcion,$costo);
        echo json_encode($datos);
        break;
    case "actualizar":
        $destino_id = $_POST["destino_id"];
        $nombre = $_POST["nombre"];
        $pais = $_POST["pais"];
        $descripcion = $_POST["descripcion"];
        $costo = $_POST["costo"];
        $datos = $destinos->actualizar($destino_id,$nombre,$pais,$descripcion,$costo);
        echo json_encode($datos);
        break;
    case "eliminar":
        $destino_id = $_POST["destino_id"];
        $datos = $destinos->eliminar($destino_id);
        echo json_encode($datos);
        break;
}
?>