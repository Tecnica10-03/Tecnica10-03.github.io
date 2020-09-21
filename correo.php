<?php

$destino = "jorgeandresmarlesflorez16.708@gmail.com";
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telef = $_POST['telef'];
$mensaje = $_POST['mensaje'];
$contenido = "Nombre: ". $nombre . "\nCorreo: ". $email . "\nTelefono: ". $telef. "\nMensaje:\n". $mensaje;
if(mail($destino,"Contacto",$contenido)){
   echo "<script>alert('mensaje enviado correctamente')</script>";
}else{
   echo "<script>alert('no se pudo enviar el mensaje')</script>";

}

?>