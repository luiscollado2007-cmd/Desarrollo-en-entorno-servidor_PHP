<?php
$temperaturas =["38.5","37","35","39","37.3","36.4","32"];

$media = 0;
foreach ($temperaturas as $temperatura) {
    $media += $temperatura;
}

echo $media/7;