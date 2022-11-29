<?php
require_once"sesion.php";
require "conexion.php";

if(isset($_POST['id']) && !empty($_POST['id'])){
    $code = $_POST['id'];
    $user = $_SESSION['user'];

    $con = new Conexion();
    $pdo = $con->conectar();

    $sql = ("SELECT noMeGusta FROM personaje WHERE idPersonaje = '" . $code . "'");
    $result = mysqli_query($pdo, $sql);
    if ($result) {
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $dislikes = $row['noMeGusta'];
            }
            $newDislikes = $dislikes + 1;
            $sqlData = ("UPDATE personaje SET noMeGusta = " . $newDislikes . " WHERE idPersonaje = '" . $code . "'");
            mysqli_query($pdo, $sqlData);
        }
        $respuesta['msg'] = "Voto registrado";
        $respuesta['ok'] = true;
    } 
    $con->desconectar($pdo);
}else{

    $respuesta['msg'] = "No hay personaje registrado con ese id";
    $respuesta['ok'] = false;
}


echo json_encode($respuesta);

