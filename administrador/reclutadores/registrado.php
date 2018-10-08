<?php
session_start();

include("../connect.php");

$user=$_POST['user'];
$pass=md5($_POST['pass']);
$nombre=$_POST['nombre'];
$tipo="RECLUTADOR";
$estatus="ACTIVO";
$fecha=date("Y")."-".date("m")."-".date("d");
$hora=date("H").":".date("i").":".date("s");
$timestap= $fecha." ".$hora;
$apellido_paterno=$_POST['apellido_paterno'];
$apellido_materno=$_POST['apellido_materno'];
$sexo=$_POST['sexo'];
//comprobar si existe el usuario
$sqlc = mysqli_query($con,"SELECT * FROM sab_usuarios WHERE username='".$user."'") or die(mysqli_error($con));
$contar = mysqli_num_rows($sqlc);

if($contar == 0){

  //insertar usuario
  $sql = "INSERT INTO sab_usuarios (username, password, tipo, estatus)
  VALUES ('".$user."', '".$pass."', '".$tipo."', '".$estatus."')";

  if(mysqli_query($con, $sql)){

    $sql2= "INSERT INTO sab_reclutadores (nombre, apellido_paterno, apellido_materno, username)
    VALUES ('".$nombre."','".$apellido_paterno."','".$apellido_materno."', '".$user."')";

      if(mysqli_query($con,$sql2)){

    echo 0;
}

  }


}else{
  echo 1;
}



 ?>
