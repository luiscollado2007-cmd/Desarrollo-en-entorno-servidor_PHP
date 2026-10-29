<?php

if (isset($_POST["nombre"])) {
    $nombre = $_POST["nombre"];
    // 1. Solicita guardar una cookie durante una hora.
    // pares clave - valor
    // setcookie() debe ejecutarse antes de enviar HTM
    setcookie("nombre", $nombre, time() + 3600);
} elseif (isset($_COOKIE["nombre"])) {//2.Comprueba si se ha recibido esa cookie y su valor no es null.
    //3. Lee el valor de la cookie recibida.
    // $_COOKIE disponible en la siguiente petición del navegador
    $nombre = $_COOKIE["nombre"];
} else {
    $nombre = "";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejemplo de cookies</title>
</head>
<body>

<h1>Mantenimiento de estado con cookies</h1>

<form method="post">
    <label>Introduce tu nombre:</label>
    <input type="text" name="nombre" required>
    <button type="submit">Guardar</button>
</form>

<?php
// evitar que un nombre introducido contenga HTML ejecutable.
// lo toma como texto, no interpreta etiquetas HTML
if ($nombre != "") {
    echo "<p>Hola, " . htmlspecialchars($nombre) . "</p>";
}
?>

</body>
</html>