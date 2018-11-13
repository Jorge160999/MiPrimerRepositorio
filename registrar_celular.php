<?php include 'partes/session_start.php' ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estilos/style.css">
    <title>Registrar Celular</title>
    
</head>
<body>
    <?php include 'partes/header.php' ?>

    <div style="margin: 2px 0 10px 0; border: 1px solid black;"></div>
    <?php include 'partes/menuadmin.php' ?>
    <div style="margin: 2px 0 10px 0; border: 1px solid black;"></div>

    <?php if (isset($_GET["error"])){ ?>
    <p style="color:red">Categoría no existente</p>
    <?php } ?>
    <div style="padding:10px;text-align:center;background-image: url('https://konlinejobs.com/wp-content/uploads/2018/02/Backgrounds-Of-New-White-Wolf-Wallpaper-Widescreen-Full-Hd-Pics-Pc-On.jpg'); color:white; ">
        <form style="width:50%; margin:100px auto;padding:50px; border:1px solid black;" action="celular_registrar.php" method="post" enctype="multipart/form-data">
        
        Titulo: <input type="text" name="titulo" required>
        <div style="height:20px;"></div>

        Categoria: <input type="text" name="categoria" required>
        <div style="height:20px;"></div>

        Imagen(solo jpg por favor): <input type="file" name="img" required>
        <div style="height:20px;"></div>

        Especificaciones: 
        <div style="width:45%; margin:0 auto;">
            <table border="1" id="t">
                <tr>
                    <td ><label >DIMENSIONES FÍSICAS	</label></td>
                    <td><input type="text" name="m" required></td>
                </tr>
                <tr>
                    <td>PANTALLA</td>
                    <td><input type="text" name="a" required></td>
                </tr>
                <tr>
                    <td><label >RESOLUCIÓN</label></td>
                    <td><input type="text" name="b" required></td>
                </tr>
                <tr>
                    <td><label >PROCESADOR</label></td>
                    <td><input type="text" name="c" required></td>
                </tr>
                <tr>
                    <td><label >GPU</label></td>
                    <td><input type="text"  name="d"required></td>
                </tr>
                <tr>
                    <td><label>RAM</label></td>
                    <td><input type="text" name="e" required></td>
                </tr>
                <tr>
                    <td><label >MEMORIA</label></td>
                    <td><input type="text"  name="f" required></td>
                </tr>
                <tr>
                    <td><label >CÁMARAS TRASERAS	</label></td>
                    <td><input type="text"  name="g" required></td>
                </tr>
                <tr>
                    <td><label>CÁMARA DELANTERA	</label></td>
                    <td><input type="text" name="h" required></td>
                </tr>
                <tr>
                    <td><label >CONECTIVIDAD</label></td>
                    <td><input type="text" name="i" required></td>
                </tr>
                <tr>
                    <td><label >OTROS</label></td>
                    <td><input type="text"  name="j" required></td>
                </tr>
                <tr>
                    <td><label>BATERÍA</label></td>
                    <td><input type="text" name="k" required></td>
                </tr>
                <tr>
                    <td><label>PRECIO	</label></td>
                    <td><input type="text"  name="l" required></td>
                </tr>
               
            </table>
        </div>
        <div style="height:20px;"></div>

        Descripcion (Para saltos de linea escribir ''< br >'' pero junto): <br><textarea name="desc" cols="50" rows="10"></textarea>
        <div style="height:20px;"></div>

        <button style="" type="submit">Enviar</button>

        </form>
    </div>
    <?php include 'partes/footer.php' ?>
</body>
</html>