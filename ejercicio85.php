<?php
if ($_REQUEST["REQUEST METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $edad = $_POST["edad"];
} else {
    $nombre = $_GET["nombre"];
    $edad = $_GET["edad"];
}
?>

<form action="ejercicio85.php" method="get">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre"><br>

    <label for="edad">Edad:</label>
    <input type="number" name="edad" id="edad"><br>

    <input type="submit" value="Enviar">
</form>
