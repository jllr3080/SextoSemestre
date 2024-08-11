<?php
//error_reporting(0);
require_once("../models/productos.models.php");
$productos = new Productos();

switch ($_GET["op"]) {
    case "todos":
        $datos = $productos->todos();
        while ($row = mysqli_fetch_assoc($datos)) { ///muchos registros 
            $todos[] = $row;
        }
        echo json_encode($todos);
        break;
    case "uno":
        $idProductos = $_POST["idProductos"];
        $datos = $productos->uno($idProductos);
        $res = mysqli_fetch_assoc($datos);
        echo json_encode($res);
        break;
    case "insertar":
        $Codigo_Barras = $_POST["Codigo_Barras"];
        $Nombre_Producto = $_POST["Nombre_Producto"];
        $Graba_IVA = $_POST["Graba_IVA"];
        $datos = $productos->insertar($Codigo_Barras,$Nombre_Producto,$Graba_IVA);
        echo json_encode($datos);
        break;
    case "actualizar":
        $idProductos = $_POST["idProductos"];
        $Codigo_Barras = $_POST["Codigo_Barras"];
        $Nombre_Producto = $_POST["Nombre_Producto"];
        $Graba_IVA = $_POST["Graba_IVA"];
        $datos = $productos->actualizar($idProductos,$Codigo_Barras,$Nombre_Producto,$Graba_IVA);
        echo json_encode($datos);
        break;
    case "eliminar":
        $idProductos = $_POST["idProductos"];
        $datos = $productos->eliminar($idProductos);
        echo json_encode($datos);
        break;
}
?>