<?php   

if(isset($_POST["usuario"])){
    $usuario = $_POST["usuario"];
    $visitas = 1;
}elseif(isset($_COOKIE["usuario"])){
    $usuario = $_COOKIE["usuario"];
    echo "<p>Esta es tu primera visita. ";
}

?>

