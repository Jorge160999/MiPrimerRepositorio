<?php
include 'partes/bd.php';
#entrada
$n=$_POST["nombres"];
$a=$_POST["apellidos"];
$sexo=$_POST["sexo"];
$nac=$_POST["fecha_nac"];
$usuario=$_POST["usuario"];
$c=$_POST["correo"];
$pass=$_POST["pass"];

#procesar
$pass = sha1($pass);
$db = new PDO("mysql:host=localhost;dbname=tipc_phones; charset=utf8", 'root', '');
$stmt = $db->query("INSERT INTO usuarios(Nombres, Apellidos, Sexo, Fecha_Nac, Usuario, Correo, Password) VALUES ('$n', '$a', $sexo, '$nac', '$usuario', '$c', '$pass')");

#salida
header("Location: registro_confirmacion.php");

?>