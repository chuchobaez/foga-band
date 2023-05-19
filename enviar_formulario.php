<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = $_POST["nombre"];
  $email = $_POST["email"];
  $mensaje = $_POST["mensaje"];

  // Configuración del correo electrónico
  $destinatario = "carlosbaez472@gmail.com";
  $asunto = "Nuevo mensaje de formulario";

  // Cuerpo del correo
  $contenido = "Nombre: $nombre\n";
  $contenido .= "Email: $email\n";
  $contenido .= "Mensaje: $mensaje\n";

  // Envío del correo electrónico
  mail($destinatario, $asunto, $contenido);

  // Redirección después de enviar el formulario
  header("Location: gracias.html");
}
?>
