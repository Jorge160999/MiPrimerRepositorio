<?php 
    #entrada
    $id=$_POST["idUsuario"];
    $codigo = $_POST["codigo"];
    $name= $_POST["nameUsuario"];
    #proceso
    $db = new PDO('mysql:host=localhost;dbname=tipc_phones; charset=utf8mb4', 'root', '');
    $stmt = $db->query("SELECT * FROM confirmaciones WHERE usuarioID= '$id' ");
    $usuarios = $stmt->fetchObject();
    #salida
    if($codigo == $usuarios->codigo){
        $stmt1 = $db->query("DELETE FROM confirmaciones WHERE usuarioID= '$id' ");
        $stmt1 = $db->query("UPDATE usuarios SET Validado=1 WHERE UsuariosID= '$id' ");
        session_start();
        $_SESSION["usuario"] =$name;  
        header("Location: usuario_validado.php");
    }else{
        header("Location: login.php?unv=$id&cvnc=1");
    }


?>
