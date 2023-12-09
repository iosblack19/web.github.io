<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Contacto</title>
</head>
<body>

    <h1>Contacto</h1>
    <p>Nos pueden encontrar en el siguiente numero:</p>
    <p>telefono: 555555555555</p>
    <p>o</p>
    <p>llenar el siguiente formulario</p>
<br><br>
    <form action="enviar_correo.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required>
<br><br>
        <label for="correo">Correo electrónico:</label>
        <input type="email" name="correo" required>
<br><br>
        <label for="mensaje">Mensaje:</label>
        <textarea name="mensaje" rows="10" cols="50" required></textarea>
<br><br>
        <input type="submit" value="Enviar">
    </form>

</body>
</html>
