<?php
//definimos variables
/* comentario multilínea */
$nombre = "Paco";
$edad = 33;
$precio = 12.5;
$edad2=&$edad;//asignación por referencia
$edad2=50; 
$edad3=$edad2; //asignación por valor
define("CTE",200);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo PHP</title>
</head>
<body>
    <?php echo "hola $nombre es de tipo ". gettype($nombre); ?>
    <?=$edad3; ?>
    <?=CTE ?>
</body>
</html>