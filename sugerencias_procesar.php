<?php
# Entrada 
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$asunto = $_POST["asunto"];
$mensaje.= $_POST["mensaje"];

# Proceso
//session_start();
setcookie("nombre", $nombre, time() + 3600 * 5);
setcookie("correo", $correo, time() + 3600 * 5);
setcookie("asunto", $asunto, time() + 3600 * 5);
setcookie("mensaje", $mensaje, time() + 3600 * 5);

# Salida

$mensaje= "De: $correo \r\n";
$mensaje.= $_POST["mensaje"];

$cabecera="FROM: tipcphones16@gmail.com";
if(mail('tipcphones.sugerencias@gmail.com', $asunto, $mensaje, $cabecera)){
    header("Location: correo_confirmacion.php?cc=1");
}else{
    
    header("Location: correo_confirmacion.php?cce=1");
}





?>