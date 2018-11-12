<?php
include 'partes/session_start.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sugerencias</title>
    <link rel="stylesheet" href="estilos/style.css">
</head>

<body>
    
    <?php include 'partes/header.php' ?>

    <main>
        <h1>Formulario de contacto</h1>

        <form action="sugerencias_procesar.php" method="post">
            <div>
                <label for="">Nombre:</label>
                <input type="text" name="nombre"
                
                <?php if (isset($_COOKIE["nombre"])) { ?>
                        value="<?php echo $_COOKIE["nombre"] ?>"
                <?php } ?>
                required        
                >
            </div>
            <div>
                <label for="">Correo:</label>
                <input type="email" name="correo" 

                <?php if (isset($_COOKIE["correo"])) { ?>
                        value="<?php echo $_COOKIE["correo"] ?>"
                <?php } ?>
                required
                >
            </div>
            <div>
                <label for="">Asunto:</label>
                <input type="text" name="asunto" required>
            </div>
            <div>
                <label for="">mensaje:</label>
                <textarea name="mensaje" cols="30" rows="10" required></textarea>
            </div>
            <button type="submit">Enviar</button>
        </form>
        
    </main>

    <?php include 'partes/footer.php' ?>    
</body>
</html>