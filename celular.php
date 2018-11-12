<?php include 'partes/session_start.php' ?>
<?php 
$db = new PDO('mysql:host=localhost;dbname=tipc_phones; charset=utf8mb4', 'root', '');
$celularID=$_GET["ce"];
$stmt = $db->query("SELECT * FROM celularesInfo WHERE celularID='$celularID' ");
$info = $stmt->fetchObject();
$stmt1 = $db->query("SELECT * FROM celulares WHERE celularID='$celularID' ");
$infocel = $stmt->fetchObject();
$titulo=$infocel->titulo;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estilos/style.css">
    <link rel="stylesheet" href="estilos/stylecat.css">
    <title>Celular Escogido</title>
</head>
<body>
    <?php include 'partes/header.php' ?>
    <h1>Selecciona uno de los celulares de esta categoría</h1>
    <main id="contenedor">

        <?php foreach ($celulares as $cel){ ?>

        <div id="hijo" style="width:30%">
            <p style="text-align:center"><?php echo $cel["titulo"] ?></p>
            <p style="text-align:center"><a href="celular.php?ce=<?php echo $cel["celularID"] ?>"></a><img src="data:image/jpg;base64,<?php echo base64_encode($cel["imagen"]);?>" ></p>  
        </div>

        <?php } ?>
    
    </main>
    <?php include 'partes/footer.php' ?>
</body>
</html>