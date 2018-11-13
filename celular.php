<?php include 'partes/session_start.php' ?>
<?php 
$db = new PDO('mysql:host=localhost;dbname=tipc_phones; charset=utf8mb4', 'root', '');
$celularID=$_GET["ce"];
$stmt = $db->query("SELECT * FROM celularesInfo WHERE celularID='$celularID' ");
$info = $stmt->fetchObject();
$stmt1 = $db->query("SELECT * FROM celulares WHERE celularID='$celularID' ");
$infocel = $stmt1->fetchObject();
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
    <img src="data:image/jpg;base64,<?php echo base64_encode($infocel->imagen);?>" >
    <main id="informacion">
        
        
        <h3>Especificaciones: </h3>

        <div style="width:60%; margin:0 auto;">
            <h3 ><?php echo $titulo ?></h3>
            <table border="1" id="t">
                <tr>
                    <td ><label >DIMENSIONES FÍSICAS	</label></td>
                    <td><?php echo $info->m ?></td>
                </tr>
                <tr>
                    <td>PANTALLA</td>
                    <td><?php echo $info->a ?></td>
                </tr>
                <tr>
                    <td><label >RESOLUCIÓN</label></td>
                    <td><?php echo $info->b ?></td>
                </tr>
                <tr>
                    <td><label >PROCESADOR</label></td>
                    <td><?php echo $info->c ?></td>
                </tr>
                <tr>
                    <td><label >GPU</label></td>
                    <td><?php echo $info->d ?></td>
                </tr>
                <tr>
                    <td><label>RAM</label></td>
                    <td><?php echo $info->e ?></td>
                </tr>
                <tr>
                    <td><label >MEMORIA</label></td>
                    <td><?php echo $info->f ?></td>
                </tr>
                <tr>
                    <td><label >CÁMARAS TRASERAS	</label></td>
                    <td><?php echo $info->g ?></td>
                </tr>
                <tr>
                    <td><label>CÁMARA DELANTERA	</label></td>
                    <td><?php echo $info->h ?></td>
                </tr>
                <tr>
                    <td><label >CONECTIVIDAD</label></td>
                    <td><?php echo $info->i ?></td>
                </tr>
                <tr>
                    <td><label >OTROS</label></td>
                    <td><?php echo $info->j ?></td>
                </tr>
                <tr>
                    <td><label>BATERÍA</label></td>
                    <td><?php echo $info->k ?></td>
                </tr>
                <tr>
                    <td><label>PRECIO	</label></td>
                    <td><?php echo $info->l ?></td>
                </tr>
               
            </table>
        </div>
        <div style="height:20px;"></div>
                


        <h3>Descripción: </h3>
        <p><?php echo $info->descripcion ?></p>
        
        <?php if(isset($_SESSION["usuario"])){ ?>
        <h3>Comenta aquí</h3>
        <div style="text-align:center">
            <form action="procesar_comentario.php" method="post">
                
                <h4>Su comentario: </h4>
                <input type="hidden" name="celularID" value=<?php echo $celularID ?>>
                <textarea name="comentario" cols="80" rows="10"></textarea><br>
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

        <div style="border:1px solid black; width:40; margin: 10px 80px; padding:10px">

            <h5><?php echo $coment["comentario"] ?></h5>
            <h6>Publicado por <?php echo $coment["usuario"] ?> a la fecha de: <?php echo $coment["fecha"] ?></h6>

            <?php if ($_SESSION["usuario"]==$coment["usuario"]){ ?>
                <form action="borrar.php" method="post">
                    <input type="hidden" name="id" value=<?php echo $coment["comentarioID"] ?>>
                    <input type="hidden" name="celularID" value=<?php echo $celularID ?>>
                    <button type="submit">Borrar comentario</button>
                </form>
                <form action="editar_comentario.php" method="post">
                    <input type="hidden" name="id" value=<?php echo $coment["comentarioID"] ?>>
                    
                    <input type="hidden" name="celularID" value=<?php echo $celularID ?>>
                    <button type="submit">Editar comentario</button>
                </form>
            <?php } ?>
        </div>

        <?php }} ?>

        <?php } ?>
       
    
    </main>
    <?php include 'partes/footer.php' ?>
</body>
</html>