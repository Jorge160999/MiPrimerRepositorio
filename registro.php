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

    <?php if (isset($_GET["usuE"])) { ?>
        <p style="color:red">Usuario y/o correo ya registrado</p>
    <?php } ?>

    <form action="registro_procesar.php" method="post">
        <div>
    Nombres: <input type="text" name="nombres" <?php if(isset($_COOKIE["n"])){ ?> value= <?php echo $_COOKIE["n"] ?> <?php } ?> required>
        </div>
        <div>
            Apellidos: <input type="text" name="apellidos" <?php if(isset($_COOKIE["a"])){ ?> value= <?php echo $_COOKIE["a"] ?> <?php } ?> required>
        </div>

        <div>
            Sexo: <input type="radio" name="sexo" value="0" 
            <?php if(isset($_COOKIE["s"])){ if($_COOKIE["s"]==0){ ?> 
            CHECKED 
            <?php } } ?> >Masculino 

            <input type="radio" name="sexo" value="1" 
            <?php if(isset($_COOKIE["s"])){ if($_COOKIE["s"]==1) { ?>
            CHECKED 
            <?php } } ?> >Femenino
            
        </div>

        <div>
            Fecha de Nacimiento: <input type="date" name="fecha_nac" <?php if(isset($_COOKIE["nc"])){ ?> value= <?php echo $_COOKIE["nc"] ?> focused <?php } ?> required>
        </div>

        <div>
            Nombre de usuario: <input type="text" name="usuario" <?php if(isset($_COOKIE["u"])){ ?> value= <?php echo $_COOKIE["u"] ?> <?php } ?> required>
            
        </div>
        
        <div>
            Correo: <input type="email" name="correo" <?php if(isset($_COOKIE["c"])){ ?> value= <?php echo $_COOKIE["c"] ?> <?php } ?> required> 
        </div>
        <div>
            Contraseña: <input type="password" name="pass" required>
        </div>    
        <button type="submit">Registrarse</button>
    </form>

    <?php include 'partes/footer.php' ?>
</body>
</html>