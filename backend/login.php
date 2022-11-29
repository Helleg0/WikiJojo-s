<?php
require ("conexion.php");
if(isset($_POST['email'], $_POST['password']) and 
 !empty($_POST['email']) and !empty($_POST['password'])){
    $email = $_POST['email'];
    $pass = sha1($_POST['password']);

    $con = new Conexion();
    $pdo = $con->conectar();

    $validacion = "SELECT nombres,email,pass FROM usuario WHERE email= '".$email."'"."AND pass='".$pass."'";
    $resultado = mysqli_query($pdo,$validacion);
    $estancia = mysqli_num_rows($resultado);
    if($estancia){
        $respuesta['ok']= true;
        $respuesta['status']= 200;
        $respuesta['msg']="Login Completado";

        

        if($resultado->num_rows>0){
            while($row = $resultado->fetch_assoc()){
                $nombre = $row['nombres'];
                }
        }
        
        session_start();
        $_SESSION['user'] = $nombre;
    }else{
        $respuesta['msg'] = "Login fallido";
    }
    $con->desconectar($pdo);
}else{
    $respuesta['msg']= "Debe diligenciar todos los campos";
}

echo json_encode($respuesta);