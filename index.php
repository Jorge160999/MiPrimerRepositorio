<?php include 'partes/session_start.php' ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagina principal</title>
    <link rel="stylesheet" href="estilos/style.css">
    
</head>
<body>
    <?php include 'partes/header.php' ?>
    <div style="margin: 2px 0 10px 0; border: 1px solid black;"></div>
    
    <?php if(isset($_SESSION["usuario"])){ if(($_SESSION["usuario"]=='admin')){ ?>

        <?php include 'partes/menuadmin.php' ?>
        

    <?php }}else{ ?>

        <?php include 'partes/menusuario.php' ?>
        
    <?php } ?>
    <div style="margin: 2px 0 0 0; border: 1px solid black;"></div>
    <img src="http://fscl01.fonpit.de/userfiles/6727621/image/2nd_YEAR/best_smartphones/AndroidPIT-best-smartphones-11.jpg" width="100%" >

    <?php include 'partes/footer.php' ?>
</body>
</html>