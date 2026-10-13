<form method="get">
    <label for="edad">Edad:</label>
    <input type="number" name="edad" id="edad">
    <input type="submit" value="Enviar">
</form>

<?php
if ($_REQUEST["REQUEST METHOD"] == "POST") {
    $edad = $_POST["edad"];
} else {
    $edad = $_GET["edad"];
}
function esMayorDeEdad($edad) {
    if ($edad >= 18) {
        echo "Persona adulta.";
    } else {
        echo "Eres menor de edad.";
    }
}