<?php
if ($_REQUEST["REQUEST METHOD"] == "POST") {
    $sumaNumeros = $_POST["numeros"];
} else {
    $sumaNumeros = $_GET["numeros"];
}
?>

<form action="ejercicio86.php" method="get">
    <label for="numeros">Números (separados por comas):</label>
    <input type="text" name="numeros" id="numeros"><br>
    <input type="submit" value="Calcular Suma">
</form>