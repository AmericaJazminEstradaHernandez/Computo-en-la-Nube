<!DOCTYPE html>
<html>
<head>
    <title>Bienvenida</title>
</head>
<body>

<?php
    if (isset($_POST['nombre']) && isset($_POST['fecha'])) {
        $nombre = htmlspecialchars($_POST['nombre']);
        $fecha = htmlspecialchars($_POST['fecha']);
        echo "<h1>¡Bienvenido, $nombre!</h1>";
        echo "<p>Has ingresado la fecha: $fecha</p>";
    } else {
?>
        <form method="post" action="">
            <label for="nombre">Ingresa tu nombre:</label>
            <input type="text" id="nombre" name="nombre" required><br><br>

            <label for="fecha">Ingresa la fecha:</label>
            <input type="date" id="fecha" name="fecha" required><br><br>

            <input type="submit" value="Enviar">
        </form>
<?php
    }
?>

</body>
</html>

