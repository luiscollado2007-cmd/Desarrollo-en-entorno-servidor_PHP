
<?php
session_start(); // Inicia o recupera la sesión

// Comprueba si se han enviado las credenciales
if (isset($_POST["login"]) && isset($_POST["password"])) {

    // El login y la contraseña deben coincidir
    if ($_POST["login"] == $_POST["password"]) {

        $_SESSION["login"] = $_POST["login"]; // Guarda el usuario

        // Inicializa o incrementa el contador de accesos
        if (isset($_SESSION["visitas"])) {
            $_SESSION["visitas"]++;
        } else {
            $_SESSION["visitas"] = 1;
        }

    } else {
        $error = "Login y contraseña incorrectos";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejemplo de sesiones</title>
</head>
<body>

<h1>Login</h1>

<form method="post">
    <label>Login:</label>
    <input type="text" name="login" required>

    <label>Contraseña:</label>
    <input type="password" name="password" required>

    <button type="submit">Entrar</button>
</form>

<?php
// Muestra el error si las credenciales no coinciden
if (isset($error)) {
    echo "<p>" . htmlspecialchars($error) . "</p>";
}

// Muestra los datos si hay un usuario en la sesión
if (isset($_SESSION["login"])) {
    echo "<p>Usuario: " . htmlspecialchars($_SESSION["login"]) . "</p>";
    echo "<p>Número de accesos: " . $_SESSION["visitas"] . "</p>";
}
?>

</body>
</html>