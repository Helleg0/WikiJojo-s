
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <?php include_once("assets/shared/head.php") ?>
    </head>

    <body >

    <section class="vh-100" style="background-image: url('assets/img/fondo_login.jpg");">
      <div class="container py-5 h-80">
        <div class="row d-flex justify-content-center align-items-center h-80">
          <div class="col col-xl-10">
            <div class="card" style="border-radius: 1rem;">
              <div class="row g-0">
                <div class="col-md-6 col-lg-5 d-none d-md-block">
                  <img src="assets/img/fondo-jojo.jpg" 
                alt="Jojo login" class="img-fluid" style="border-radius: 1rem 0 0 1rem; height: 631px;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form action="#" method="POST" name="form-login">

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fa-solid fa-user-secret fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h3 fw-bold mb-0">Bienvenido a WikiJojo's</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Iniciar Sesión</h5>

                  <div class="form-floating mb-3">
                      <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" required>
                      <label for="email">Email</label>
                      <p id="errorEmail" class="errorCampos">Escriba un email válido.</p>
                      <p id="errorEmail3" class="errorCampos">El correo o la contraseña están incorrectos.</p>
                  </div>

                  <div class="form-floating mb-3">
                      <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña" required>
                      <label for="password">Contraseña</label>
                      <p id="errorPassword1" class="errorCampos">Debe tener una minúscula, una mayúscula y un número como mínimo.</p>
                      <p id="errorPassword2" class="errorCampos">La contraseña debe tener de 8-16 caracteres.</p>
                      <p id="errorPassword3" class="errorCampos">El correo o la contraseña están incorrectos.</p>
                    </div>

                  <div class="pt-1 mb-4">
                    <button class="btn btn-dark btn-lg btn-block" type="button" onclick="validarCamposLogin();">Acceder</button>
                  </div>

                  <p class="mb-5 pb-lg-2" style="color: #393f81;">¿No tienes una cuenta? <a href="registrarse.php"
                      style="color: #393f81;">Registrate aquí</a></p>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

       
        <?php include_once("assets/shared/script.php") ?>
    </body>
</html>