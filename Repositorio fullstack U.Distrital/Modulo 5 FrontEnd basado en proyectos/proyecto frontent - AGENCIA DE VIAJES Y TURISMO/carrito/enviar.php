<?php

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$locacion = $_POST['locacion'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];


$to = 'nukoluks@hotmail.com';
$subject = 'Nuevo mensaje de contacto';
$message = "Nombre: $nombre\nEmail: $email\nTeléfono: $telefono\nLocación: $locacion\nAsunto: $asunto\nMensaje: $mensaje";
$headers = "From: $email";

if (mail($to, $subject, $message, $headers)) {

  echo 'Correo enviado correctamente.';
} else {

  echo 'Error al enviar el correo.';
}
?>
