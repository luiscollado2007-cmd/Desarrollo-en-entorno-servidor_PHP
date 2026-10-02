<?php
$notas=[7,4,3,2,6,5,9];

$numAlumnosAprobados = 0;
$numAlumnosSuspensos = 0;
for($i= 0; $i<count($notas); $i++){
    if($notas[$i]>= 0 && $notas[$i]< 5){
        $numAlumnosSuspensos++;
    }else{
        $numAlumnosAprobados++;
    }
}

echo "Hay ". $numAlumnosSuspensos. " alumnos suspensos"."<br>";
echo "Hay ". $numAlumnosAprobados. " alumnos aprobados". "<br>";