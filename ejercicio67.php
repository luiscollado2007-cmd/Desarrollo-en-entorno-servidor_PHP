<form method="get">
    <label for="fecha">Fecha:</label>
    <input type="date" name="fecha" id="fecha">
    <input type="submit" value="Enviar">
</form>

<?php
if ($_REQUEST["REQUEST METHOD"] == "POST") {
    $fecha = $_POST["fecha"];
} else {
    $fecha = $_GET["fecha"];
}

function devolverFecha($fecha) {
    $fecha = explode("de", $fecha);
}
?>