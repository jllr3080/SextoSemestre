<?php

/*
Instrucciones:

1. Instalación de PHP:



  - Verifica que PHP esté correctamente instalado creando un archivo llamado `info.php` que utilice la función `phpinfo();`. Muestra la captura de pantalla del resultado.



2. Script Básico en PHP:

  - Crea un archivo PHP llamado `tarea.php`.

  - Dentro de este archivo, realiza las siguientes tareas:



  a. Declaración de Variables:

  - Define al menos cinco variables de diferentes tipos de datos (integer, float, string, boolean, array).

  - Asigna valores a estas variables.



  b. Operaciones Aritméticas:

  - Realiza al menos dos operaciones aritméticas con las variables numéricas que has creado. Muestra el resultado usando la función `echo`.



  c. Manipulación de Cadenas:

  - Crea una variable de tipo cadena y realiza las siguientes acciones:

   - Concatenación de dos cadenas.

   - Obtén la longitud de la cadena.



  d. Uso de Condicionales:

  - Crea una estructura de control condicional que verifique el valor de una variable booleana y muestre un mensaje diferente según sea `true` o `false`.



 e. Creación de un Array:

  - Define un arreglo con al menos cinco elementos.

  - Muestra un elemento específico del arreglo utilizando su índice.



3. Entrega:

- Usted debe subir el proyecto a github o gitlab y adjuntar el enlace



¡Buena suerte!

 */


 // Funcion para calcular operaciones aritmeticas
 function Operacion($variable1,$variable2,$operacion)
 {
    $resultado =0;
    if($operacion=="Sumar")
        $resultado=$variable1+$variable2;
    else if($operacion=="Multiplicar");
    $resultado=$variable1*$variable2;
    return $resultado;
 }
// EJEMPLO DE  VARIABLES 
$nombre="Jorge";
$apellido="López";
$concatenar = $nombre . $apellido;
$edad=25;
$precio=19.99;
$iva=15;
$es_Valido=true;
$arreglo = array(
    1    => "a",
    "1"  => "b",
    1.5  => "c",
    true => "d",
);

echo  "Declaración de variables: <br>";
echo ($nombre);
echo ("<br>");
echo ($edad);
echo ("<br>");
echo ($precio);
echo ("<br>");
echo ($iva);
echo ("<br>");
echo ($es_Valido);
echo ("<br>");
//echo ($arreglo);
echo ("<br>");


echo  "Operaciones Aritmeticas: <br>";
echo  "El resultado Multiplicar: <br>";
echo Operacion($precio,$iva,"Multiplicar");
echo  "<br> El resultado Sumar: <br>";
echo Operacion($precio,$iva,"Sumar");

echo("<br>");
echo ($concatenar);
echo("<br>");
echo strlen($nombre); 


echo("<br>");
$es_valido = false; // Puedes cambiar este valor a false para probar la otra condición

if ($es_valido) {
    echo "La condición es verdadera. ¡Acceso concedido!";
} else {
    echo "La condición es falsa. Acceso denegado.";
}

echo("<br>");
$colores = array("Rojo", "Azul", "Verde", "Amarillo", "Naranja");

// Mostrar un elemento específico del arreglo utilizando su índice
// Por ejemplo, mostrar el tercer elemento (índice 2)
echo "El tercer color en el arreglo es: " . $colores[2]; // Imprimirá: Verde
?>