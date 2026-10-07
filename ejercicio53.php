<?php
$frase = "Hola, ¿cómo estás?";

$caracteres= 0;
$espacios = 0;
$palabras= 0;


for($i=0; $i<strlen($frase); $i++){
    if($frase[$i] != " "){
        $caracteres++;
    }else{
        $espacios++;
    }
}

foreach(explode(" ",$frase) as $palabra){
    $palabras++;
}

echo "".$espacios." espacios<br>";

echo "".$caracteres." caracteres<br>";

echo "".$palabras." palabras";