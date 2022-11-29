<?php
require "conexion.php";
require_once("backend/sesion.php");


$user = $_SESSION['user'];

$con = new Conexion();
$pdo = $con->conectar();

$sql ="SELECT * FROM usuario WHERE nombres= '".$user."'";
$resultado = mysqli_query($pdo,$sql);
$ruta="";

if($resultado->num_rows>0){
    while($row = $resultado->fetch_assoc()){
    $email= $row['email'];
    }
}

$buscar = "SELECT imagen FROM usuario WHERE email= '".$email."'";
$result= mysqli_query($pdo, $buscar);

    if($result->num_rows>0){
        while($row = $result->fetch_assoc()){
        $img = $row['imagen'];
        $ruta = "assets/img/upload/".$img;
        }
        
    }else{
    echo "No se encontro la imagen";
    }
 

