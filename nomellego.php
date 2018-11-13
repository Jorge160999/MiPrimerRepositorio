<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>nomellegoelcorreo</title>
    <link rel="stylesheet" href="estilos/style.css">
</head>
<body>
    <?php include 'partes/header.php' ?>
    <?php $valor=$_GET["unv"]; $usu=$_GET["usu"]; ?>

    <?php if (isset($_GET["error"])){ ?>
    <p style="color:red">Correo incorrecto</p>
    <?php } ?>

    <form action="nomellego_procesar.php" method="post">
            <input type="hidden" name="idUsuario" value=<?php echo $valor ?>>
            <input type="hidden" name="nameUsuario" value=<?php echo $usu ?>>
            Mi correo: <input type="email" name="correo" required>
            <button type="submit">Volver a enviar</button>
    </form>

    

    <?php include 'partes/footer.php' ?>
</body>
</html>