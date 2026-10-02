<?php
$productos = ["001" => "zapatillas", "002" => "Pan", "003" => "Huevos", "004" => "Queso", "005" => "Mantequilla"];

foreach ($productos as $i => $producto) {
    echo "Producto $i:<br>";
    foreach ($productos as $clave => $valor) {
        echo "$clave:$valor";
    }
    echo "<br>";
}