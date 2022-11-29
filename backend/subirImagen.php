<?php

if(isset($_POST['file'])){
    $fileImg = $_POST['file'];
}

$nomTemporal = $_FILES['file']['tmp_name'];
$nombre = $_FILES['file']['name'];
move_uploaded_file($nomTemporal, '../assets/img/upload/'.$nombre);
$respuesta['ok']= true;
$respuesta['status']= 200;
$respuesta['msg']="Imagen Guardada";
echo json_encode($respuesta);
