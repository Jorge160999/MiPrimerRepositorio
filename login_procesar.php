<?php 
#entrada
$correo=$_POST["usuario"];
$pass  = $_POST["pass"];

#proceso
$pass = sha1($pass);

$db = new PDO('mysql:host=localhost;dbname=tipc_phones; charset=utf8mb4', 'root', '');
$stmt = $db->query("SELECT * FROM usuarios WHERE ( Correo= '$correo' OR Usuario='$correo' ) AND Password = '$pass' ");
$usuarios = $stmt->fetchAll();

if (count($usuarios)== 1 ){
    #datos correctos
    
    
    foreach($usuarios as $u){
        $name=$u["Usuario"];
        $id=$u["UsuariosID"];
        if ($u["Validado"]==0){
            
            header("Location: login.php?unv=$id&usu=$name");
        }else{
            session_start();
            $_SESSION["usuario"] =$name;
            #salida  
            header("Location: index.php");
        } 
    }
    
}


else{
    #salida
    header("Location: login.php?usuNE=1");  
}


?>