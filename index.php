<?php

session_start();

//error_reporting(E_ALL ^ E_NOTICE);
if(isset($_SESSION['usuario'])){

    $usuario= $_SESSION['usuario'];
    $tipo= $_SESSION['tipo'];
    //echo "Has iniciado sesion";
    if($tipo=='CANDIDATO'){
      header('Location: candidato/candidato.php');
    }
    else if($tipo=='ADMINISTRADOR'){
      header('Location: administrador/administrador.php');
    }
    else if($tipo=='CLIENTE'){
        header('Location: cliente/cliente.php');
      }
    else if($tipo=='RECLUTADOR'){
        header('Location: reclutador/reclutador.php');
      }
    echo "<br>Has iniciado sesion como:".$usuario."";
    echo "<br>tipo de usuario:".$tipo."";

}else{
    header("Location: login.php");
    exit;
}

echo "<br>Limpiar variable de <a href = 'logout.php' tite = 'Logout'>Session.";

 ?>
