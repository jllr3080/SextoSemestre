<?php

// Funcion para calcular operaciones aritmeticas
function Operacion($variable1,$variable2,$operacion)
{
   $resultado =0;

   if($operacion=="Sumar")
   {
    $resultado=$variable1 + $variable2;
   }
       
   else if($operacion=="Multiplicar")
   {
    $resultado=$variable1*$variable2;
   
   }
   else if($operacion=="Restar")
   {
    $resultado=$variable1-$variable2;
   
   }
   else if($operacion=="Dividir")
   {
    $resultado=$variable1/$variable2;
   
   }
   return $resultado;
}

 // Declaracion de variables
$nombre="Jorge";
$apellido="López";
$concatenar = $nombre . $apellido;
$edad=25;
$precio=19.99;
$iva=15;
$es_Valido=true;
$colores = array("Rojo", "Azul", "Verde", "Amarillo", "Naranja");

 ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Bienvenida</title>
    <!-- Enlace a Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container-fluid">
  <h1>Declaracion de Variables</h1>
  
  <div class="row"> 
    <div class="col-sm-3" style="background-color:white;">
    <p>Tipo String</p>
    </div>
    <div class="col-sm-3" style="background-color:white;">
      <p>Tipo Entero</p>
    </div>
    <div class="col-sm-3" style="background-color:white;">
      <p>Tipo Flotante</p>
    </div>
    <div class="col-sm-3" style="background-color:white;">
      <p>Tipo Booleano</p>
    </div>
  </div>

  <div class="row"> 
    <div class="col-sm-3" style="background-color:white;">
    <p><?php echo $nombre ?> </p>

    </div>
    <div class="col-sm-3" style="background-color:white;">
    <p><?php echo $edad ?> </p>
    </div>
    <div class="col-sm-3" style="background-color:white;">
    <p><?php echo $precio ?> </p>
    </div>
    <div class="col-sm-3" style="background-color:white;">
    <p><?php echo $es_Valido ?> </p>
    </div>
  </div>

  <h1>Opreaciones Aritméticas   </h1>

  <div class="row"> 
    <div class="col-sm-3" style="background-color:white;">
    <p>Suma</p>
    </div>
    <div class="col-sm-3" style="background-color:white;">
      <p>Multiplicación</p>
    </div>
    <div class="col-sm-3" style="background-color:white;">
      <p>Resta</p>
    </div>
    <div class="col-sm-3" style="background-color:white;">
      <p>División</p>
    </div>
  </div>

  <div class="row"> 
    <div class="col-sm-3" style="background-color:white;">
    <p><?php echo Operacion($precio,$iva,"Sumar") ?> </p>

    </div>
    <div class="col-sm-3" style="background-color:white;">
    <p><?php echo Operacion($precio,$iva,"Multiplicar") ?> </p>
    </div>
    <div class="col-sm-3" style="background-color:white;">
    <p><?php echo Operacion($precio,$iva,"Restar") ?> </p>    
    </div>
    <div class="col-sm-3" style="background-color:white;">
    <p><?php echo Operacion($precio,$iva,"Dividir") ?> </p>
    
    </div>
  </div>
<h1>Operaciones con Cadenas  </h1>

<div class="row"> 
  <div class="col-sm-3" style="background-color:white;">
  <p>Concatenar</p>
  </div>
  <div class="col-sm-3" style="background-color:white;">
    <p>Contar Caracteres</p>
  </div>
  
</div>

<div class="row"> 
  <div class="col-sm-3" style="background-color:white;">
  <p><?php echo $nombre.$apellido ?> </p>

  </div>
  <div class="col-sm-3" style="background-color:white;">
  <p><?php echo strlen($nombre) ?> </p>
</div>
  
</div>
<h1>Estructura de Control</h1>
<div class="row">

<div class="col-sm-3" style="background-color:white;">
  <p><?php if ($es_Valido) {echo "La condición es verdadera. ¡Acceso concedido!";} else {echo "La condición es falsa. Acceso denegado.";} ?> </p>

  </div>
</div>
<h1>Arreglo</h1>
<div class="container">
        <ul> 
          
        <?php    
        
            foreach($colores as $color)
            {
                echo  "<li>".$color."</li>";
                
            };


         ?>
         </ul>
      </div>

</div>
<div class="row">

  <div class="col-sm-3" style="background-color:white;">
  <p><?php echo "El tercer color en el arreglo es: " . $colores[2]; ?> </p>
  </div>
  
  
</div>

</div>

<!-- Enlace a Bootstrap JS y dependencias de Popper -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>