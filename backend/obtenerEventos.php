<?php
   require_once "conexion.php";

   $con = new Conexion();
   $pdo = $con->conectar();
   
   $sql = "SELECT codEvento as id, titulo as title, descripcion as description, estado as status, color, inicio as start, fin as end FROM evento";
   $result = mysqli_query($pdo, $sql);
   $respuesta = $result->fetch_all(MYSQLI_ASSOC);
   
   if ($result->num_rows <= 0) {
       $respuesta['msg'] = "No hay eventos Registrados";
   } 


   echo json_encode($respuesta);