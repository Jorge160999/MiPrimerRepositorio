<?php
#entrada
$id=$_POST["id"];
$celularID=$_POST["celularID"];
$comentario=$_POST["comentario"];

#proceso
$db = new PDO('mysql:host=localhost;dbname=tipc_phones; charset=utf8mb4', 'root', '');
$stmt = $db->query("UPDATE comentarios SET comentario='$comentario', fecha=SYSDATE() WHERE comentarioID='$id' " );

#header
header("location: celular.php?ce=$celularID");


?>