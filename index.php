<?php require("backend/sesion.php");?>
<?php require("backend/cargarImgUser.php");?>


<!DOCTYPE html>
<html>
        <head>
            <meta charset="utf-8">
            <title>Wiki Jojo's</title>
            <link rel="stylesheet" href="assets/css/EstiloMenu.css">
            <link rel="stylesheet" href="assets/css/EstiloTarjeta.css">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
            
        </head>
     
        <nav>
            <a id="aEDIT" href="index.php" class = "amenu">Inicio</a>
            <a id="aEDIT" href="registrarP.php" class = "amenu">Registrar</a>
            <a id="aEDIT" href="estadisticas.php" class = "amenu">Estadísticas</a>
            <a id="aEDIT" href="eventos.php" class = "amenu">eventos</a>
            <div class="animation start-inicio"></div>
        </nav>

        <body  style="background-image: url('assets/img/fondoJJ');">
            <!-- Bienvenida usuario -->
            <div id="infoUser">
                <img class= "imgUser" src=<?php echo $ruta?> alt="ImagenUser">
                <h3 class ="classh4">Bienvenid@</h3>
                <label class= "classLabel"><?php echo $_SESSION['user']?></label>
                <div class = "containExit" >
                    <span class = "imgExit"><img src="assets/img/exit.png" alt="Exit Img" onclick = "location = 'iniciar-sesion.php' " ></span>
                </div>
            </div>
            <!-- Fin Bienvenida Usuario -->
        
            <!-- Tarjetas de personajes -->
            <div class="containerI" id = tarjetas></div>
            <!-- Fin Tarjetas de personajes -->
            
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.4/dist/sweetalert2.all.min.js"></script>
            <script src= "assets/js/Personajes.js"></script>
            <script src="assets/js/votos.js"></script>
        </body>

</html>

