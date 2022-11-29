<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Registrarse</title>
    <?php include_once("assets/shared/head.php") ?>
</head>
<body style="background-image: url('assets/img/1000px-World_journey.png"); background-size: 100%;">
   
    <div class="">
        <div class="position-absolute top-50 start-50 translate-middle shadow-none p-3 mb-5 bg-light rounded-3" >            
            <div class="card border-light mb-3 shadow p-3 bg-body rounded-3" style="max-width: 24rem;">
                <div class="text-center">
                <i class="fa-solid fa-child-reaching fa-4x"  style="color: #ff6219;"></i>
                </div>
                <h5 class="mt-2 text-center">!Unete a nuestra comunidad!</h5>
                <h2 class="mt-0 text-center">Crear cuenta</h2>

                <div class="card-body">
                    <form action="#" method="POST" name="form-registro">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="nombres" id="nombres" placeholder="Nombres" required>
                            <label for="nombres">Usuario</label>
                            <p id="errorNombres" class="errorCampos">El usuario ya está en uso.</p>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" required>
                            <label for="email">Email</label>
                            <p id="errorEmail" class="errorCampos">Escriba un email válido.</p>
                            <p id="errorEmail2" class="errorCampos">El email ya esta en uso, intente con otro.</p>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña" required>
                            <label for="password">Contraseña</label>
                            <p id="errorPassword1" class="errorCampos">Debe tener una minúscula, una mayúscula y un número como mínimo.</p>
                            <p id="errorPassword2" class="errorCampos">La contraseña debe tener de 8-16 caracteres.</p>
                        </div>
                   
                        <div class="d-grid gap-0 col-11 mx-auto">
                        <button class="btn btn-dark btn-lg btn-block " type="button" onclick="validarCampos();">Registrarse</button>
                        <br>
                        <p class="mb-5 pb-lg-2" style="color: #393f81;">Ya tienes una cuenta? <br> <a href="iniciar-sesion.php"
                      style="color: #393f81;">Inicia sesión aquí</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include_once("assets/shared/script.php") ?>
</body>
</html>