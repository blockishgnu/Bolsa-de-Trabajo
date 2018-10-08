<?php

session_start();
include("../connect.php");

//error_reporting(E_ALL ^ E_NOTICE);


if(isset($_SESSION['usuario'])){

    $usuario= $_SESSION['usuario'];
    $tipo= $_SESSION['tipo'];
    //echo "Has iniciado sesion";
    echo "<br>Has iniciado sesion como:".$usuario."";
    echo "<br>tipo de usuario:".$tipo."";

}else{
    header("Location: ../login.php");
    exit;
}

echo "<br><a href = '../logout.php' tite = 'Logout'>Cerrar sesion.";

 ?>
