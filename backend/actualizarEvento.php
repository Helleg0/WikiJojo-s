<?php

require("conexion.php");

if(isset($_POST['id'], $_POST['title'], $_POST['description']) and
    !empty($_POST['title']) and !empty($_POST['description'])){
    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $color = $_POST['color'];
    $start = $_POST['start'];
    $end = $_POST['end'];
    $status = "CREATED";

    $con = new Conexion();
    $pdo = $con->conectar();

    $sql = "UPDATE evento SET titulo = '$title', descripcion = '$description', estado='$status',
                   color = '$color', inicio = '$start', fin = '$end' WHERE codEvento = '$id'";

    $stm = mysqli_query($pdo,$sql);

    if($stm){
        $respuesta['ok'] = true;
        $respuesta['status'] = 200;
        $respuesta['msg'] = "Evento actualizado";
    }else{
        $respuesta['msg'] = "Problemas al actualizar el evento";
    }
} else {
    $respuesta['msg'] = "Debe diligenciar todos los campos del evento";
}

echo json_encode($respuesta);
