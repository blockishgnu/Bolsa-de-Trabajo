<?php
include("../connect.php");

if (isset($_GET['idcv'])) {


$idcv = $_GET['idcv'];
$result=mysqli_query($con,"SELECT * FROM sab_cv WHERE idcv='".$idcv."'");
while($row=mysqli_fetch_array($result)){
  $file=$row['nombre'];
header("Content-disposition: attachment; filename=$file");
header("Content-type: application/octet-stream");
readfile("../../candidato/cv/".$file);
}
}

?>
