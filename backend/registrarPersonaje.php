<?php
require "conexion.php";

if(isset($_POST['nombres'],$_POST['descripcion']) and 
!empty($_POST['nombres']) and !empty($_POST['descripcion'])){
    $nombres = $_POST['nombres'];
    $descripcion = $_POST['descripcion'];
    $img = $_FILES['file']['name'];
    $like = 0;
    $dislike = 0;
    
    $con = new Conexion();
    $pdo = $con->conectar();

    $sql = "INSERT INTO personaje(nombrePersonaje, descripcion, imagen, meGusta, noMeGusta) VALUES ('$nombres', '$descripcion', '$img', $like, $dislike)";
    if(mysqli_query($pdo,$sql)){
        $respuesta['ok']= true;
        $respuesta['status']= 200;
        $respuesta['msg']="Personaje registrado";
    }else{
        $respuesta['msg']= "Problemas al registrar el personaje";
    }
    $con->desconectar($pdo);
}else{
    $respuesta['msg']= "Debe diligenciar todos los campos";
}

echo json_encode($respuesta);