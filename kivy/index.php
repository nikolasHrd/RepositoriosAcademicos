<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Registro</title>
</head>
<body>
    <h2>Formulario de Registro</h2>
    <form method="POST" action="procesar_formulario.php">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required><br><br>

        <label for="cedula">Número de Cédula:</label>
        <input type="text" id="cedula" name="cedula" required><br><br>

        <label for="telefono">Teléfono de Contacto:</label>
        <input type="text" id="telefono" name="telefono" required><br><br>

        <label for="correo">Correo Electrónico:</label>
        <input type="email" id="correo" name="correo" required><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>
