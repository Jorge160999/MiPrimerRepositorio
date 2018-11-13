<?php include 'partes/session_start.php' ?>
<?php 
$db = new PDO('mysql:host=localhost;dbname=tipc_phones; charset=utf8mb4', 'root', '');
$stmt = $db->query("SELECT * FROM categorias");
$categorias = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estilos/style.css">
    <link rel="stylesheet" href="estilos/stylecat.css">
    <title>Categorías</title>
</head>
<body>
    <?php include 'partes/header.php' ?>
    <h1 style="background-color: wheat; margin:0; padding:15px; border: 2px solid black;">Selecciona una de nuestras categorías</h1>
    <main >

        <?php foreach ($categorias as $cat){ ?>

        <div id="hijo" style="height:500px;background-image: url('https://cdn.wallpapersafari.com/80/87/pF2XnL.jpg');">
            <p style="text-align:center"><?php echo $cat["titulo"] ?></p>
            <p style="text-align:center"><a href="celularesCat.php?ce=<?php echo $cat["categoriaID"] ?>"><img src="data:image/jpg;base64,<?php echo base64_encode($cat["imagen"]);?>" height="300px" width="450px"></a></p>  
        </div>

        <?php } ?>
    
    </main>
    <?php include 'partes/footer.php' ?>
</body>
</html>