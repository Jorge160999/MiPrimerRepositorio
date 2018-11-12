<?php
#entrada
$id=$_POST["id"];
$celularID=$_POST["celularID"];
$comentario=$_POST["comentario"];


// #proceso
// $db = new PDO('mysql:host=localhost;dbname=tipc_phones; charset=utf8mb4', 'root', '');
// $stmt = $db->query("UPDATE comentarios SET comentario='$comentario', fecha=SYSDATE() WHERE comentarioID='$id' " );

// #header
// header("location: celular.php?ce=$celularID");


?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estilos/style.css">
    <title>Editar Comentario</title>
</head>
<body>
    <?php include 'partes/header.php' ?>
    <form action="editar.php" method="post">
        <input type="hidden" name="id" value=<?php echo $id ?>>
        <input type="hidden" name="celularID" value=<?php echo $celularID ?>>
        <textarea name="comentario" cols="50" rows="30" ><?php echo $comentario ?></textarea>
        <button type="submit">Editar comentario</button>
    </form>
    <?php include 'partes/footer.php' ?>
</body>
</html>