<?php
#entrada
$titulo=$_POST["titulo"];
$imagen=addslashes(file_get_contents($_FILES['img']['tmp_name']));


#proceso
$db = new PDO('mysql:host=localhost;dbname=tipc_phones; charset=utf8mb4', 'root', '');
$stmt = $db->query("INSERT INTO categorias(titulo, imagen) VALUES('$titulo', '$imagen') ");

#header
header("location: categoria_satisfactorio.php");


?>




