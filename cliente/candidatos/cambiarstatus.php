<?php
include('../connect.php');

$idcandidato=$_POST['idcandidato'];
$estatus=$_POST['estatus'];

$sql="UPDATE sab_candidatos SET estatus_busqueda='".$estatus."' WHERE idcandidato='".$idcandidato."'";

if(mysqli_query($con,$sql)){
  echo 0;

}else{
  echo 1;
}

 ?>
