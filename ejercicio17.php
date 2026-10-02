<?php
$nota=7;


if($nota>=0 && $nota<5){
    echo "suspenso";
}elseif($nota>=5 && $nota< 6){
    echo "aprobado";
}elseif($nota>=6 && $nota< 7){
    echo "bien";
}elseif($nota>=7 && $nota< 9){
    echo "notable";
}elseif($nota>=9 && $nota<=10){
    echo "sobresaliente";
}else{
    echo "La nota que has introducido no está en dentro del intervalo válido";
}
