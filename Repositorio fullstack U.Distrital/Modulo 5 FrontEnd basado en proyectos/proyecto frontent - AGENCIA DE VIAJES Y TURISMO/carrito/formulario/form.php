<?php
// Recuperar los datos enviados desde el formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$locacion = $_POST['locacion'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

// Aquí puedes realizar las acciones necesarias con los datos, como enviar un correo electrónico o guardar en una base de datos

// Por ejemplo, puedes enviar un correo electrónico utilizando la función mail()
$to = 'tucorreo@example.com';
$subject = 'Nuevo mensaje de contacto';
$message = "Nombre: $nombre\nEmail: $email\nTeléfono: $telefono\nLocación: $locacion\nAsunto: $asunto\nMensaje: $mensaje";
$headers = "From: $email";

if (mail($to, $subject, $message, $headers)) {
  // El correo se envió exitosamente
  echo 'Correo enviado correctamente.';
} else {
  // Ocurrió un error al enviar el correo
  echo 'Error al enviar el correo.';
}
?>
