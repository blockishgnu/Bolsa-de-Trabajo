<?php
session_start();
include("../connect.php");
echo "Eliminando";
//$id=$_GET['idvacante'];
$idv= $_POST["idvacante"];
//echo "id: ".$idv;
$sql = "DELETE FROM `sab_vacantes` WHERE `idvacante` = ".$idv."";

if(mysqli_query($con,$sql)){
  //echo "Eliminado correctamente";
  header('Location: vacantes.php');

}else{
  echo"Error: Could not able to execute $sql.". mysqli_error($con);
}



 ?>
