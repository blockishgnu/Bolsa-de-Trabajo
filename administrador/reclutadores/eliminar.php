<?php
include("../connect.php");

$username=$_POST['username'];

$sql="DELETE FROM sab_usuarios WHERE username='".$username."'";

if(mysqli_query($con,$sql)){
  //echo "Eliminado correctamente";
  

}else{
  echo"Error: Could not able to execute $sql.". mysqli_error($con);
}


 ?>
