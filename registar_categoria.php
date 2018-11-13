<?php include 'partes/session_start.php' ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estilos/style.css">
    <title>Registrar Categoría</title>
</head>
<body>
    <?php include 'partes/header.php' ?>
    <div style="margin: 2px 0 10px 0; border: 1px solid black;"></div>
    <?php include 'partes/menuadmin.php' ?>
    <div style="margin: 2px 0 10px 0; border: 1px solid black;"></div>
    <div style="padding:10px;text-align:center; background-image: url('http://hintergrundbild.org/wallpaper/full/1/d/7/154-full-size-4k-wallpapers-2880x1800.jpg'); color:white;">
    <form style="width:50%; margin:100px auto;padding:50px; border:1px solid white;" action="categoria_registrar.php" method="post" enctype="multipart/form-data">
    
        Titulo: <input type="text" name="titulo" required>
        <div style="height:20px;"></div>
        Imagen(solo jpg por favor): <br> <input type="file" name="img" required>
        <div style="height:20px;"></div>
        <button type="submit">Enviar</button>

    </form>
    </div>
    <?php include 'partes/footer.php' ?>
</body>
</html>