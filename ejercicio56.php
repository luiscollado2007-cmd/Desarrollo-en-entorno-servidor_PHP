<?php
$correo = "luisitocomunica@outlook.com";

$nombreUsuario = substr($correo, 0, 15);
echo $nombreUsuario."<br>";

$dominio = substr($correo,  15);
echo $dominio;