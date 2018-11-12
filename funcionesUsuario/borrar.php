<?php
#entrada
$id=$_POST["id"];
$celularID=$_POST["celularID"];

#proceso
$db = new PDO('mysql:host=localhost;dbname=tipc_phones; charset=utf8mb4', 'root', '');
$stmt = $db->query("DELETE FROM comentarios WHERE comentarioID='$id' " );

#header
header("location: celular.php?ce=$celularID");


?>