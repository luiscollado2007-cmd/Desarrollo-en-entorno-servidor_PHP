<?php

if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["ciudad"])) {
    echo "Has seleccionado la ciudad de " . $_GET["ciudad"];
}
?>

<form method="get">
    <label>Ciudad:</label>
    <input type="text" name="ciudad">
    <button type="submit">Enviar</button>
</form>