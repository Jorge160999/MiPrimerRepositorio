<?php
#entrada
$titulo=$_POST["titulo"];
$categoria=$_POST["categoria"];
$espec=$_POST["espec"];
$desc=$_POST["desc"];
$imagen=addslashes(file_get_contents($_FILES['img']['tmp_name']));


#proceso
$db = new PDO('mysql:host=localhost;dbname=tipc_phones; charset=utf8mb4', 'root', '');
$stmt = $db->query("SELECT * FROM categorias WHERE titulo='$categoria'");
$total=$stmt->fetchAll();

if (count($total)>0){
    $stmt1= $db->query("INSERT INTO celulares VALUES(NULL, '$categoria', '$titulo', '$imagen')");
    $st=$db->query("SELECT * FROM celulares WHERE celularID= (SELECT MAX(celularID) FROM celularID)");
    $object=$st->fetchObject();
    $id=($object->celularID);
    $stmt2=$db->query("INSERT INTO celularesInfo VALUES ('$id', '$espec', '$desc')");
    header("location: celular_satisfactorio.php");    
}else{
    header("Location: registrar_celular.php?error=1");
}





?>
