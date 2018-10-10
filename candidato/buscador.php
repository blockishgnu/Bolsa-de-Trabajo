<?php
include("../connect.php");

$idcategoria=$_POST['idcategoria'];
$idcategoria_detalle=$_POST['idcategoria_detalle'];

if($idcategoria=='00'){
  $sql="SELECT * FROM sab_vacantes";
}else if($idcategoria_detalle=='' || $idcategoria_detalle=='00'){
  $sql="SELECT * FROM sab_vacantes WHERE idcategoria='".$idcategoria."'";
}else{
  $sql="SELECT * FROM sab_vacantes WHERE idcategoria_detalle='".$idcategoria_detalle."'";
}

$result= mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result)){
  echo "<tr>
  <th>
  ";
  ?>
  <img class='logo' src='data:image/png;base64,<?php echo base64_encode($row['foto']); ?>' alt='Image' width='100px;' style='' >
  &nbsp;&nbsp;
 <?php
  echo "
  </th>
  <th><h3 align='center'>&nbsp;".$row['nombre']."&nbsp;</h3></th>
  <th><a href='ver_vacante.php?idvacante=".$row['idvacante']."' class='ver_vacante'>Ver Vacante</a></th>
   <tr>
   <th><hr style=' height: 12px; border: 0; box-shadow: inset 0 12px 12px -12px rgba(0, 0, 0, 0.5);'></th>
   <th><hr style=' height: 12px; border: 0; box-shadow: inset 0 12px 12px -12px rgba(0, 0, 0, 0.5);'></th>
   <th><hr style=' height: 12px; border: 0; box-shadow: inset 0 12px 12px -12px rgba(0, 0, 0, 0.5);'></th>
   <tr>
  </tr>
  ";
  //header('Location: candidato.php');
}
 ?>
