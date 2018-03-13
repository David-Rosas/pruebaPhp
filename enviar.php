<?php
//este es un controlador de envio de mensajes de contacto
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mesnaje'];
$msj = "Usted recibio un mensaje de ".$nombre."con el email ".$email." y el mensaje es <br>".$mensaje:
email("deivixrock@gmail.com", "Mensajes desde el sitio Web", $msj);


?>