<!DOCTYPE html>
<html>
     <head>
         <meta charset="utf-8">
         <title>Registro</title>
         <link rel="stylesheet" href="assets/css/EstiloInicio.css">
         <link rel="stylesheet" href="assets/css/EstiloMenu.css">

         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <nav>
        <a id="aEDIT" href="index.php" class = "amenu">Inicio</a>
        <a id="aEDIT" href="registrarP.php" class = "amenu">Registrar</a>
        <a id="aEDIT" href="estadisticas.php" class = "amenu">Estadísticas</a>
        <a id="aEDIT" href="eventos.php" class = "amenu">eventos</a>
        <div class="animation start-registro"></div>
     </nav>

     <body style="background-image: url('assets/img/5594016.jpg');">
      
         <div class="position-absolute top-50 start-50 translate-middle card border-light mb-3 shadow p-3 bg-body rounded-3">
            <form action="#" method="POST" name="form-registro-personaje">
               
               <div class="form-floating mb-3">
                  <input type="text" class="form-control" name="nombres" id="nombres" placeholder="Nombres" required>
                  <label for="nombres">Nombre Personaje</label>
                  <p id="errorNombres2" class="errorCampos">Solo se aceptan letras.</p>
              </div>

              <div class="form-floating mb-3">
               <textarea class="form-control" id="descripcion" name = "descripcion" rows="3" required></textarea>
               <label for="descripcion" class="form-label">Descripción</label>
             </div>

            <div class=" mb-3">
               <label for="file" class="form-label">Subir Imagen del Personaje</label>
               <input class="form-control" type="file" id="file" name ="file" accept="image/jpeg,image/jpg,image/png" required>
               <p id="errorFile" class="errorCampos">La extensión no es compatible.</p>
               <p id="errorFile2" class="errorCampos">El tamaño excede el esperado (1MB).</p>
               <p id="errorFile3" class="errorCampos">Tiene que subir un archivo.</p>
             </div>
             <br>
             <div class="d-grid gap-0 col-11 mx-auto">
               <button class="btn btn-dark btn-lg btn-block " type="button" onclick="validarCamposRegistroP();" >Registrar</button>
               </div>
               <div class="dropdown">
 
</div>
            </form>
            
         </div>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.4/dist/sweetalert2.all.min.js"></script>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="assets/js/validaciones.js"></script>
     </body>

</html>