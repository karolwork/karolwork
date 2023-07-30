<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $nombre = $_POST["nombre"];
  $email = $_POST["email"];
  $mensaje = $_POST["mensaje"];

  // Configurar la dirección de correo a la que se enviará el mensaje
  $destinatario = "pixgraft@gmail.com";
  $asunto = "Nuevo mensaje de contacto desde el sitio web";

  $cuerpoMensaje = "Nombre: $nombre\n";
  $cuerpoMensaje .= "Email: $email\n";
  $cuerpoMensaje .= "Mensaje:\n$mensaje\n";

  // Enviar el mensaje utilizando la función mail()
  if (mail($destinatario, $asunto, $cuerpoMensaje)) {
    // Redirigir a una página de éxito si el correo se envió correctamente
    header("Location: contacto_exito.html");
    exit;
  } else {
    // Redirigir a una página de error si hubo un problema al enviar el correo
    header("Location: contacto_error.html");
    exit;
  }
}
?>