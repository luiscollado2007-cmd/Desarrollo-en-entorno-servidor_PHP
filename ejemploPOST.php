<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = $_POST["nombre"];
    $edad = $_POST["edad"];

    echo $nombre . " tiene " . $edad . " años.";
}
?>

<form method="post">
    <label>Nombre:</label>
    <input type="text" name="nombre">

    <label>Edad:</label>
    <input type="number" name="edad">

    <button type="submit">Enviar</button>
</form>