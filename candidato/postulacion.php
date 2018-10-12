<?php
include("../connect.php");


$username=$_POST['username'];
$idvacante=$_POST['idvacante'];
$fecha=date("Y")."-".date("m")."-".date("d");
$hora=date("H").":".date("i").":".date("s");
$estatus='Postulada';

$resc=mysqli_query($con,"SELECT * FROM sab_postulaciones WHERE username='".$username."' AND idvacante='".$idvacante."'");
$check=mysqli_num_rows($resc);
if($check==0){
  $sql="INSERT INTO sab_postulaciones (fecha,hora,estatus,username,idvacante)
   VALUES ('".$fecha."','".$hora."','".$estatus."','".$username."','".$idvacante."') ";
   if(mysqli_query($con,$sql)){
     echo 0;
   }else{
     echo 1;
   }

}else{

  echo 2;

}



 ?>
