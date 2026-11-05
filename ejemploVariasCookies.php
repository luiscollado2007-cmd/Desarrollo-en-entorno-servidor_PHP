<?php
$mensaje = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $dni = $_POST['dni'];
    $nombre = $_POST['nombre'];

    // Usamos el DNI como parte del nombre de la cookie.
    if ($dni === '' || $nombre === '') {
        $mensaje = 'Introduce un DNI válido y el nombre de la persona.';
    } else {
        setcookie('persona_' . $dni, $nombre, time() + 3600);
        $mensaje = 'Persona guardada en su propia cookie durante una hora.';
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Guardar una persona</h1>

    <form method="post" action="">
        <label for="dni">DNI:</label>
        <input type="text" id="dni" name="dni" required>

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <button type="submit">Guardar</button>
    </form>

    <p><?= htmlspecialchars($mensaje) ?></p>

    <h2>Personas guardadas en este navegador</h2>
    <ul>
        <?php
        $hayPersonas = false;
        foreach ($_COOKIE as $nombreCookie => $valorCookie) {
            if (strpos($nombreCookie, 'persona_') === 0) { //si "persona_" esta al principio es 0
                $hayPersonas = true;
                $dniGuardado = substr($nombreCookie, strlen('persona_'));
                echo '<li>DNI: ' . htmlspecialchars($dniGuardado);
                echo ' — Nombre: ' . htmlspecialchars($valorCookie) . '</li>';
            }
        }
        if (!$hayPersonas) {
            echo '<li>Aún no hay personas guardadas.</li>';
        }
        ?>
    </ul>
</body>
</html>
