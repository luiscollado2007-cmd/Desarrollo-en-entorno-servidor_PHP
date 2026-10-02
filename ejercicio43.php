<?php
// 1. Definimos el array de nombres
$nombres = ["Ana", "Carlos", "Ibrahim", "Juan", "Sofía"];

// 2. Definimos el nombre que queremos buscar
$nombreBuscar = "Luis";

// 3. Realizamos la búsqueda
$posicion = array_search($nombreBuscar, $nombres);

// 4. Mostramos el resultado (usamos === porque la posición puede ser 0)
if ($posicion !== false) {
    echo "El nombre ". $nombreBuscar. " existe y está en la posición: ".  $posicion. "<br>";
}else {
    echo "El nombre ". $nombreBuscar. " no existe en el array<br>";
}

//Forma 2
$encontrado=false;
foreach ($nombres as $i =>$nombre) {
    if ($nombre == $nombreBuscar) {
        echo $i. "-". $nombreBuscar;
        $encontrado=true;
    }
}

if (!$encontrado) {
    echo "NO encontrado";
}