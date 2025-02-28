<?php
// Empezamos con la apertura de PHP

// Definimos algunas variables
$nombre = "Usuario";

// Aquí podrías agregar tu lógica, como manejar formularios o consultar una base de datos.

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Sencilla en PHP</title>
    <link rel="stylesheet" href="style.css"> <!-- Si deseas agregar un archivo de estilos -->
</head>
<body>

    <h1>Bienvenido a nuestra página web, <?php echo $nombre; ?>!</h1>
    <p>Esta es una página sencilla creada con PHP</p>

    <form action="procesar.php" method="POST">
        <label for="nombre">Tu nombre:</label>
        <input type="text" id="nombre" name="nombre">
        <input type="submit" value="Enviar">
    </form>

</body>
</html>
