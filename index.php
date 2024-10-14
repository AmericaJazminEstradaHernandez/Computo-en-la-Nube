<!DOCTYPE html>
<html>
<head>
    <title>Bienvenida</title>
</head>
<body>

<?php
    if (isset($_POST['nombre'])) {
        $nombre = htmlspecialchars($_POST['nombre']);
        echo "<h1>¡Bienvenido, $nombre!</h1>";
    } else {
?>
        <form method="post" action="">
            <label for="nombre">Ingresa tu nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
            <input type="submit" value="Enviar">
        </form>
<?php
    }
?>

</body>
</html>
