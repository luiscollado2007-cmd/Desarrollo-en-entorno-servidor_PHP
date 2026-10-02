<?php
//Forma 1
$numeros = [1,2,1,3,5,4,4,7];

$resultado = array_unique($numeros);

print_r($resultado);

//Forma 2
foreach($numeros as $i=> $num){
    foreach($numeros as $j => $num2){
        if(($i!=$j) && ($num==$num2)){
            $numeros[$j]=null;   
        }
    }
}

foreach($numeros as $num){
    if($num != null){
        echo $num;
    }
}
    