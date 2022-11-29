<?php
require "conexion.php";

if(isset($_POST['nombres'], $_POST['email'], $_POST['password']) and 
!empty($_POST['nombres']) and !empty($_POST['email']) and !empty($_POST['password'])){
    $nombres = $_POST['nombres'];
    $email = $_POST['email'];
    $pass = sha1($_POST['password']);
    $icon = "user.png";

    $con = new Conexion();
    $pdo = $con->conectar();

    $validacion = "SELECT email,nombres FROM usuario WHERE email= '".$email."'"."AND nombres='".$nombres."'";
    $resultado = mysqli_query($pdo, $validacion);
    $estancia = mysqli_num_rows($resultado);
    if($estancia){
        $respuesta['msg']="El email ya esta en uso";
       
    }else{
        $sql = "INSERT INTO usuario(nombres, email, pass,imagen) VALUES ('$nombres', '$email', '$pass','$icon')";

    if(mysqli_query($pdo, $sql)){
        $respuesta['ok']= true;
        $respuesta['status']= 200;
        $respuesta['msg']="Usuario registrado";


    }else{
        $respuesta['msg']= "Problemas al registrar el usuario";

    }
    $con->desconectar($pdo);
    }
    
} else {
    $respuesta['msg']= "Debe diligenciar todos los campos";

}

echo json_encode($respuesta);