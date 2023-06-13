<?php
// Verificar si se enviaron datos por el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los valores enviados por el formulario
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $cedula = $_POST["cedula"];
    $telefono = $_POST["telefono"];
    $correo = $_POST["correo"];

    // Puedes realizar acciones adicionales aquí, como almacenar los datos en una base de datos
    // Por ejemplo, podrías utilizar la extensión mysqli para conectarte a una base de datos MySQL y ejecutar una consulta INSERT

    // Mostrar un mensaje de éxito
    echo "¡Registro exitoso!";
}
?>
