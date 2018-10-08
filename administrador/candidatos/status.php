<?php
include('../connect.php');

$idpostulacion=$_POST['idpostulacion'];
$estatus=$_POST['estatus'];

$sql="UPDATE sab_postulaciones SET estatus='".$estatus."' WHERE idpostulacion='".$idpostulacion."'";

if(mysqli_query($con,$sql)){
  echo 0;

}else{
  echo 1;
}

 ?>
