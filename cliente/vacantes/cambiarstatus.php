<?php
include('../connect.php');

$idvacante=$_POST['idvacante'];
$estatus=$_POST['estatus'];

$sql="UPDATE sab_vacantes SET estatus='".$estatus."' WHERE idvacante='".$idvacante."'";

if(mysqli_query($con,$sql)){
  echo 0;

}else{
  echo 1;
}

 ?>
