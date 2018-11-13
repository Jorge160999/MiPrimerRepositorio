<header style=" padding:0;">
    <div style="background-color: wheat; margin: 0; padding:6px; border-bottom: 2px solid black;">
        <h1 style="float:left">BIENVENIDOS A TIC<span style="font-size:20px">p</span> PHONES!</h1>
        <div id="ingresoYotros" style="float:right; display: flex;  ">
            
            
            <?php if (!isset($_SESSION["usuario"])) { ?>
            
            <a href="login.php"><h3>Log in</h3></a><h3>|</h3>
            <a href="registro.php"><h3>Sign in</h3></a>

            <?php }else{ ?>

            <a href="cerrar_sesion.php"><h3>Cerrar Sesión para <?php echo $_SESSION["usuario"] ?></h3></a>

            <?php } ?>

        </div>
        <div class="clear"></div>
    </div>
    <?php include 'menu.php' ?>
</header>