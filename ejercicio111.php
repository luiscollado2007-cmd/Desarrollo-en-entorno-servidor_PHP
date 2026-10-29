<?php
if (isset($_POST["idioma"])) {
    $idioma = $_POST["idioma"];
    setcookie("idioma", $idioma, time() + 86400);
} elseif (isset($_COOKIE["idioma"])) {
    $idioma = $_COOKIE["idioma"];
} else {
    $idioma = "";
}
?>

<form method="post">
    <label>Introduce tu idioma:</label>
    <input type="text" name="idioma" required>
    <button type="submit">Guardar</button>
</form>

<?php
if ($idioma != "") {
    echo "<p>Idioma seleccionado: " . htmlspecialchars($idioma) . "</p>";
}