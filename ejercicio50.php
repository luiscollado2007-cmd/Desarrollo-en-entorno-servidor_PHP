<?php
$cadenaTexto = "Hola, me llamo Juan y tengo 25 años.";

$numVocales = 0;
if(str_contains($cadenaTexto,"a")){
    $numVocales++;
}
if(str_contains($cadenaTexto,"e")){
    $numVocales++;
}
if(str_contains($cadenaTexto,"i")){
    $numVocales++;
}
if(str_contains($cadenaTexto,"o")){
    $numVocales++;
}

if(str_contains($cadenaTexto,"u")){
    $numVocales++;
}

echo "Tiene " . $numVocales . " vocales.";