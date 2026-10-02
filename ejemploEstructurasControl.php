<?php
//ejemplo para ver si un nº es positivo o negativo
$numero=0;
if($numero>=0){
    echo "número positivo<br>";
}else{ 
    echo "número negativo";
}
// un nº es 1, 2, 3 u otro número distinto

if($numero==1){
    echo "es 1";
}elseif($numero== 2){
    echo "es 2";
}elseif($numero== 3){
    echo "es 3";
}else{
    echo "el número no es ni 1 ni 2 ni 3<br>";
}
// mismo ejemplo anterior con un switch

switch($numero){
    case 1:
        echo "es 1";
        break;
    case 2:
        echo "es 2";
        break;
    case 3:
        echo "es 3";
        break;
    default:
        echo "el número no es ni 1 ni 2 ni 3";
        break;
}

//for
for($i=0;$i<10;$i+=2){
    echo "$i<br>";
}

//while
while($numero!=10){
    echo "$numero<br>";
    $numero++;
}

//do-while
do{
    echo "$numero<br>";
    $numero++;
}while($numero != 10);

