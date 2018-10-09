<?php

ob_start();
session_start();
include("../connect.php");

$idcategoria=$_POST['categoria'];

$result = mysqli_query($con,"SELECT * FROM sab_empleos_categorias_detalles WHERE idcategoria=".$_POST['categoria']."");
while($row= mysqli_fetch_array($result)){
  echo '<option value="'.$row['idcategoria_detalle'].'" selected>'.$row['descripcion'].'</option>';
}

 ?>
