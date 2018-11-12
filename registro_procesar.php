<?php
include 'partes/bd.php';
#--entrada--
$n=$_POST["nombres"];
$a=$_POST["apellidos"];
$sexo=$_POST["sexo"];
$nac=$_POST["fecha_nac"];
$usuario=$_POST["usuario"];
$c=$_POST["correo"];
$pass=$_POST["pass"];

#--procesar--
$pass = sha1($pass);
$db = new PDO("mysql:host=localhost;dbname=tipc_phones; charset=utf8mb4", 'root', '');
$stcomp=$db->query("SELECT * FROM usuarios WHERE Usuario='$usuario' OR Correo='$c'");
$l=$stcomp->fetchAll();


#Si el nombre de usuario y/o correo aun no esta creado: 
if (count($l)==0){
    $stmt = $db->query("INSERT INTO usuarios(Nombres, Apellidos, Sexo, Fecha_Nac, Usuario, Correo, Password) VALUES ('$n', '$a', $sexo, '$nac', '$usuario', '$c', '$pass')");
    
    

    #insertar en la tabla de confirmaciones para cada cuenta creada
    $st=$db->query("SELECT * FROM usuarios WHERE UsuariosID= (SELECT MAX(UsuariosID) FROM usuarios)");
    $object=$st->fetchObject();
    $id=($object->UsuariosID);
    $int = random_int(100000000, 999999999);
    $sha=sha1($int);
    $stmt2=$db->query("INSERT INTO confirmaciones VALUES ('$id', '$sha')");

    #crear el mensaje a enviar
    $asunto="Activación de cuenta TIPC PHONES";
    $cabecera="FROM: tipcphones16@gmail.com";
    $mensaje="De: El grupo de Tipc Phones \r\n";
    $mensaje.="Para: $n \r\n";
    $mensaje.="Por favor ingrese a su cuenta en Log in y escriba este código para activar su cuenta: \r\n";
    $mensaje.="$sha";
    
    
    
    #--salida--
    if(mail($c, $asunto, $mensaje, $cabecera)){
        header("Location: registro_confirmacion.php");
    }else{
        
        header("Location: correo_confirmacion.php?cc=1&p=1");
    }
    
}
#Si ya existe el nombre de usuario y/o correo en la base de datos se redirige con una variable por get

else{
    #--salida--
    #Crear cookies para mantener la informacion en los inputs del formulario
    setcookie("u", $usuario, time()+30);
    setcookie("n", $n, time()+30);
    setcookie("a", $a, time()+30);
    setcookie("s", $sexo, time()+30);
    setcookie("nc", $nac, time()+30);
    setcookie("c", $c, time()+30);
    #redirigir a registro con la variable usuE por get para saber que  ya existe el usuario
    header("Location: registro.php?usuE=1");
}







?>