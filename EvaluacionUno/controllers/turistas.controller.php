<?php
//error_reporting(0);
require_once("../models/turistas.model.php");
$turistas = new Turistas();

switch ($_GET["op"]) {
    case "todos":
        $datos = $turistas->todos();
        while ($row = mysqli_fetch_assoc($datos)) { ///muchos registros 
            $todos[] = $row;
        }
        echo json_encode($todos);
        break;
    case "uno":
        $turista_id = $_POST["turista_id"];
        $datos = $turistas->uno($turista_id);
        $res = mysqli_fetch_assoc($datos);
        echo json_encode($res);
        break;
    case "insertar":

        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $email = $_POST["email"];
        $telefono = $_POST["telefono"];
        $datos = $turistas->insertar($nombre,$apellido,$email,$telefono);
        echo json_encode($datos);
        break;
    case "actualizar":
        $turista_id = $_POST["turista_id"];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $email = $_POST["email"];
        $telefono = $_POST["telefono"];
        $datos = $turistas->actualizar($turista_id,$nombre,$apellido,$email,$telefono);
        echo json_encode($datos);
        break;
    case "eliminar":
        $turista_id = $_POST["turista_id"];
        $datos = $turistas->eliminar($turista_id);
        echo json_encode($datos);
        break;
}
?>