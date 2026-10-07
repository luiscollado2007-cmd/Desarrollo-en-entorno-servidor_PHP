<?php
$texto = "reconocer";

$textoInvertido = strrev($texto);

if($texto == $textoInvertido){
    echo "Es un palíndromo";
}else{
    echo "No es un palíndromo";
}

