<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrarse</title>
    <link rel="stylesheet" href="estilos/style.css">
</head>
<body>
    <?php include 'partes/header.php' ?>
    <h1>Registrese aquí</h1>

    <form action="registro_procesar.php" method="post">
        <div>
            Nombres: <input type="text" name="nombres" required>
        </div>
        <div>
            Apellidos: <input type="text" name="apellidos" required>
        </div>

        <div>
            Sexo: <input type="radio" name="sexo" value="0">Masculino <input type="radio" name="sexo" value="1">Femenino
        </div>

        <div>
            Fecha de Nacimiento: <input type="date" name="fecha_nac" required>
        </div>

        <div>
            Nombre de usuario: <input type="text" name="usuario" required>
        </div>
        
        <div>
            Correo: <input type="email" name="correo" required> 
        </div>
        <div>
            Contraseña: <input type="password" name="pass" required>
        </div>    
        <button type="submit">Registrarse</button>
    </form>

    <?php include 'partes/footer.php' ?>
</body>
</html>