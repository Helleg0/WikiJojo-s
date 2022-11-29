<?php

session_start();

if(!isset($_SESSION['user'])){
    header("Location: iniciar-sesion.php");
}

//session_destroy();