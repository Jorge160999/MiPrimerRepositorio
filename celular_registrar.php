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
    foreach($total as $t){
        $cat=$t["categoriaID"];
        $stmt1= $db->query("INSERT INTO celulares VALUES(NULL, '$cat', '$titulo', '$imagen')");
        $st=$db->query("SELECT * FROM celulares WHERE celularID= (SELECT MAX(celularID) FROM celulares)");
        $object=$st->fetchObject();
        $id=($object->celularID);
        $stmt2=$db->query("INSERT INTO celularesinfo VALUES ('$id', '$espec', '$desc')");
        header("location: celular_satisfactorio.php");
    }
        
}else{
    header("Location: registrar_celular.php?error=1");
}





?>
