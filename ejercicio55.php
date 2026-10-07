<?php
$telefono =("123456789");

if(strlen($telefono) == 9){
    $longiutdValida = false;
}else{
    $longiutdValida = true;
}
var_dump($longiutdValida);
$contieneLetra = false;
for($i = 0; $i < 9; $i++){
    if($telefono[$i] < "0" || $telefono[$i] > "9"){
        $contieneLetra = true;
    }
}

if($longiutdValida && !$contieneLetra == false){
    echo "El teléfono $telefono es válido.";
}else{
    echo "El teléfono $telefono no es válido.";
}
