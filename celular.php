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
    
    <title>Celular Escogido</title>
</head>
<body>
    <?php include 'partes/header.php' ?>
    <h1>Bienvenido! gracias por visitar la información de <?php echo $titulo ?></h1>
    <main id="informacion">
        <h3>Comenta aquí</h3>
        <div style="text-align:center">
            <form action="funcionesUsuario/procesar_comentario.php">
                
                <h4>Su comentario: </h4>
                <input type="hidden" name="celularID" value=<?php echo $celularID ?>>
                <textarea name="comentario" cols="50" rows="30"></textarea>
                <button type="submit">Enviar comentario</button>

            </form>
        </div>
        <h3 style="text-align:center">COMENTARIOS</h3>
        <?php 
        
        $stmt2 = $db->query("SELECT * FROM comentarios WHERE celularID='$celularID' ");
        $comentarios=$stmt2->fetchAll();
        if(count($comentarios)>0){
            $stmt3 = $db->query("SELECT * FROM comentarios WHERE celularID='$celularID' ORDER BY comentarioID DESC");
            $comentarios=$stmt3->fetchAll();
            foreach($comentarios as $coment){  
        ?>

        <div style="border:1px solid black; width:40; margin: 10px auto; padding:10px">
            <?php if ($_SESSION["usuario"]==$coment["usuario"]){ ?>
                <form action="funcionesUsuario/borrar.php" method="post">
                    <input type="hidden" name="id" value=<?php echo $coment["comentarioID"] ?>>
                    <input type="hidden" name="celularID" value=<?php echo $celularID ?>>
                    <button type="submit">Borrar comentario</button>
                </form>
                <form action="editar_comentario.php" method="post">
                    <input type="hidden" name="id" value=<?php echo $coment["comentarioID"] ?>>
                    <input type="hidden" name="comentario" value=<?php echo $coment["comentario"] ?>>
                    <input type="hidden" name="celularID" value=<?php echo $celularID ?>>
                    <button type="submit">Editar comentario</button>
                </form>
            <?php } ?>

            <h5><?php echo $coment["comentario"] ?></h5>
            <h6>Publicado por <?php echo $coment["usuario"] ?> a la fecha de: <?php echo $coment["fecha"] ?></h6>
        </div>

        <?php }} ?>
       
    
    </main>
    <?php include 'partes/footer.php' ?>
</body>
</html>