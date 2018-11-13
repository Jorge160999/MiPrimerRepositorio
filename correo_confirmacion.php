<?php include 'partes/session_start.php' ?>
<!DOCTYPE html>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estilos/style.css">
    <title>Correo-confirmacion</title>
</head>
<body>
    <?php include 'partes/header.php' ?>
    
    <?php if (isset($_GET["cc"])){ ?>
    <h1><?php if(($_GET["cc"])==2){ echo 'Ya le volvimos a enviar el correo de confirmación, revise su correo'; }else{ echo 'Gracias por enviarnos sus sugerencias! Pronto las atenderemos y/o responderemos, a seguir disfrutando de la tecnología!';} ?></h1>
    <?php }else{ if(isset($_GET["cce"])){ ?> 
    <h1>Hubo un error al enviar <?php if(isset($_GET["p"])){ echo 'el correo de confirmación, intente ingresar y envíelo nuevamente'; }else{ echo 'su sugerencia';} ?></h1>
    <?php } } ?>
    

    <?php include 'partes/footer.php' ?>
</body>
</html>