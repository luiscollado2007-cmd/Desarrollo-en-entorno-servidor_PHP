<?php
$lista = ["rojo", "verde", "azul"];

echo $lista[0]. "<br>";

$lista[5]= "gris";
echo $lista[5]. "<br>";

print_r($lista). "<br>";// imprime todo el array.

echo "El tamaño es: " . count($lista) ."<br>";

//forma de recorrer un array indexado o un array asociativo.
foreach ($lista as $i => $color) {
    echo $i. "-" .$color ."<br>";
}