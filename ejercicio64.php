
<form action="ejercicio64.php" method="get">
    <label for="nombre">Nota:</label>
    <input type="number" name="nombre" id="nombre"><br>

    <input type="submit" value="Enviar">
</form>

<?php
if ($_REQUEST["REQUEST METHOD"] == "POST") {    
    $nota = $_POST["nombre"];
} else {
    $nota = $_GET["nombre"];
}
function esAprobado($nota) {
    if ($nota >= 5) {
        echo "Aprobado";
    } else {
        echo "Suspenso";
    }
}
?>