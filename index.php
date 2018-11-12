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
    
    <?php if(isset($_SESSION["usuario"])){ if(($_SESSION["usuario"]!='admin')){ ?>

    <nav class="navmenu">

        <ol class="menu" style="width:80%; margin: 0 auto">
            

            <li style="align-self:center"><a href="index.php"><h4>FONDO</h4></a></li>

            <li style="align-self:center"><a href=""><h4>¿QUIÉNES SOMOS?</h4></a></li>

            <li style="align-self:center"><a href=""><h4>MISIÓN</h4></a></li>
            
            <li style="align-self:center"><a href=""><h4>VISIÓN</h4></a></li>  

        </ol>
    </nav>

    <?php }}else{ ?>
        <nav class="navmenu">

        <ol class="menu" style="width:80%; margin: 0 auto">
            

            <li style="align-self:center"><a href="index.php"><h4>FONDO</h4></a></li>

            <li style="align-self:center"><a href="registar_categoria.php"><h4>AÑADIR CATEGORIA</h4></a></li>

            <li style="align-self:center"><a href="registrar_celular.php"><h4>AÑADIR CELULAR</h4></a></li>
            
              

        </ol>
        </nav>

    <?php } ?>
    <div style="margin: 2px 0 0 0; border: 1px solid black;"></div>
    <img src="img1.jpg" width="100%" >

    <?php include 'partes/footer.php' ?>
</body>
</html>