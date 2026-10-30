<h1>Contador de visitas</h1>




<?php 

if(isset($_POST["reiniciar"])){
    setcookie("visitas", "", time() - 3600);
    setcookie("ult_visita", "", time() - 3600);

    header("Refresh:0");
    exit();
}


$fechaActual= time();


if(!isset($_COOKIE["visitas"])){
    $visitas=1;
    setcookie("visitas", $visitas, time() + 30*24*60*60);
    setcookie("ult_visita", $fechaActual, time() + 30*24*60*60);
    echo "Esta es tu primera visita.</p>";
}else{
    $visitas= $_COOKIE["visitas"] + 1;
    setcookie("visitas", $visitas, time() + 30*24*60*60);
    setcookie("ult_visita", $fechaActual, time() + 30*24*60*60);
    echo "Número de visitas: $visitas</p>";
    if($visitas == 5){
        echo "<p> Has visitado esta página 5 veces </p>";
    }
}

if(isset($_COOKIE["ult_visita"])) {
    $ultimaVisita = $_COOKIE["ult_visita"];
    echo "<p>Fecha y hora de tu última visita: " . date("d-m-Y H:i:s", $ultimaVisita) . "</p>";
}
?>

<form method="post">
    <input type="submit" name="reiniciar" value="Reiniciar contador">
</form>



