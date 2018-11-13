<?php 
    #entrada
    $id=$_POST["idUsuario"];
    $c=$_POST["correo"];
    $name= $_POST["nameUsuario"];
   
    #proceso
    $db = new PDO('mysql:host=localhost;dbname=tipc_phones; charset=utf8mb4', 'root', '');
    $stmt = $db->query("SELECT * FROM usuarios WHERE usuariosID= '$id' ");
    $usuarios = $stmt->fetchObject();
    $n=$usuarios->Nombres;
    #salida
    if($c == $usuarios->Correo){
        $stmt1 = $db->query("SELECT *  FROM confirmaciones WHERE usuarioID= '$id' ");
        $object = $stmt1->fetchObject();
        $sha=$object->codigo;
        

        #crear el mensaje a enviar
        $asunto="Activación de cuenta TIPC PHONES";
        $cabecera="FROM: tipcphones16@gmail.com";
        $mensaje="De: El grupo de Tipc Phones \r\n";
        $mensaje.="Para: $n \r\n";
        $mensaje.="Por favor ingrese a su cuenta en Log in y escriba este código para activar su cuenta: \r\n";
        $mensaje.="$sha";
        
        
        
        #--salida--
        if(mail($c, $asunto, $mensaje, $cabecera)){
            header("Location: correo_confirmacion.php?cc=2");
        }else{
            
            header("Location: correo_confirmacion.php?cce=1&p=1");
        }
        
    }else{
        header("Location: nomellego.php?unv=$id&usu=$name&error=1");
    }
    

?>
