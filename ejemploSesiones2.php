
<?php
session_start(); // Inicia o recupera la sesión

if (isset($_POST["login"]) && isset($_POST["password"])) {

    // Comprueba las credenciales
    if ($_POST["login"] == $_POST["password"]) {
        $login = $_POST["login"];

        // Inicializa los contadores si no existen
        if (!isset($_SESSION["visitas"])) {
            $_SESSION["visitas"] = [];
        }

        // Cuenta los accesos de este usuario
        if (isset($_SESSION["visitas"][$login])) {
            $_SESSION["visitas"][$login]++;
        } else {
            $_SESSION["visitas"][$login] = 1;
        }
        // guarda el login concreto de la sesión para más tarde
        $_SESSION["login"] = $login;

    } else {
        $error = "Login y contraseña incorrectos";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contador de accesos</title>
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
// Muestra el error
if (isset($error)) {
    echo "<p>" . htmlspecialchars($error) . "</p>";
}

// Muestra el contador del usuario identificado
if (isset($_SESSION["login"])) {
    $login = $_SESSION["login"];

    echo "<p>Usuario: " . htmlspecialchars($login) . "</p>";
    echo "<p>Accesos: " . $_SESSION["visitas"][$login] . "</p>";
}
?>

</body>
</html>