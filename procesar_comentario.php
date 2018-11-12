<?php 
    #entrada
    session_start();
    $usu=$_SESSION["usuario"];
    $comentario=$_POST["comentario"];
    $ce=$_POST["celularID"];

    #proceso
    $db = new PDO('mysql:host=localhost;dbname=tipc_phones; charset=utf8mb4', 'root', '');
    $stmt=$db->query("INSERT INTO comentarios(usuario, celularID, comentario, fecha) VALUES('$usu', '$ce', '$comentario', SYSDATE()");

    #salida
    header("Location: celular.php?ce=$ce");
?>