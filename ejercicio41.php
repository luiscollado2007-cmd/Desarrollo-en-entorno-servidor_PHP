<?php
$productos =[33,45,67,21];

$productoMayor="";
$productoMenor= "";
$media=0;
foreach ($productos as $producto) {
    $media+=$producto;
}
echo $media/count($productos). "<br>";

for ($i= 0; $i< count($productos); $i++) {
    if ($productos[$i] >= 45 && $productos[$i] <= 70) {
        $productoMayor = $productos[$i];
    }else if ($productos[$i] >= 20 && $productos[$i] <= 40) {
        $productoMenor = $productos[$i];
    }
}

echo $productoMayor."<br>".$productoMenor. "<br>";