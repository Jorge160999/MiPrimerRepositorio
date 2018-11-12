<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log in</title>
    <link rel="stylesheet" href="estilos/style.css">
</head>
<body>
    <?php include 'partes/header.php' ?>
    
    <?php if (!isset($_GET["unv"])) { ?>
    <h1>Ingrese a su cuenta aquí</h1>

    <?php if (isset($_GET["usuNE"])) { ?>
        <p style="color:red">Usuario o correo y/o contraseña incorrectos</p>
    <?php } ?>

    <form action="login_procesar.php" method="post">

        Usuario y/o correo: <input type="text" name="usuario">
        <div></div>
        Contraseña        : <input type="password" name="pass"> 

        <button type="submit">Ingresar</button>

    </form>

    <?php }else{ $valor=$_GET["unv"]; $usu=$_GET["usu"]; ?>

    <h1>Por favor ingrese aquí el código de verificación que se le envió a su email: </h1>
    <div></div>

    <?php if (isset($_GET["cvnc"])) { ?>
        <p style="color:red">El código de verificación no coincide</p>
    <?php } ?>

    <form action="validar_usuario.php" method="post">
        Código: <input type="text" name="codigo" required>
        <input type="hidden" name="idUsuario" value=<?php echo $valor ?>>
        <input type="hidden" name="nameUsuario" value=<?php echo $usu ?>>
        <button type="submit">Validar cuenta</button>
    </form>

    <a href="nomellego.php?unv=<?php echo $valor?>&usu=<?php echo $usu ?>">No me llegó el código</a> 
        
    

    <?php } ?>

    
    

    <?php include 'partes/footer.php' ?>
</body>
</html>