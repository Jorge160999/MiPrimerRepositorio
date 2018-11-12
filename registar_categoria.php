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

    <form action="categoria_registrar.php" method="post" enctype="multipart/form-data">
    
        Titulo: <input type="text" name="titulo" required>

        Imagen(solo jpg por favor): <input type="file" name="img" required>

        <button type="submit">Enviar</button>

    </form>

    <?php include 'partes/footer.php' ?>
</body>
</html>