<?php
//error_reporting(0);
require_once("../models/clientes.models.php");
$clientes = new Clientes();

switch ($_GET["op"]) {
    case "todos":
        $datos = $clientes->todos();
        while ($row = mysqli_fetch_assoc($datos)) { ///muchos registros 
            $todos[] = $row;
        }
        echo json_encode($todos);
        break;
    case "uno":
        $idClientes = $_POST["idClientes"];
        $datos = $clientes->uno($idClientes);
        $res = mysqli_fetch_assoc($datos);
        echo json_encode($res);
        break;
    case "insertar":
        $Nombres = $_POST["Nombres"];
        $Direccion = $_POST["Direccion"];
        $Telefono = $_POST["Telefono"];
        $Cedula = $_POST["Cedula"];
        $Correo = $_POST["Correo"];
        $datos = $clientes->insertar($Nombres,$Direccion,$Telefono,$Cedula,$Correo);
        echo json_encode($datos);
        break;
    case "actualizar":
        $idClientes = $_POST["idClientes"];
        $Nombres = $_POST["Nombres"];
        $Direccion = $_POST["Direccion"];
        $Telefono = $_POST["Telefono"];
        $Cedula = $_POST["Cedula"];
        $Correo = $_POST["Correo"];
        $datos = $clientes->actualizar($idClientes,$Nombres,$Direccion,$Telefono,$Cedula,$Correo);
        echo json_encode($datos);
        break;
    case "eliminar":
        $idClientes = $_POST["idClientes"];
        $datos = $clientes->eliminar($idClientes);
        echo json_encode($datos);
        break;
}
?>