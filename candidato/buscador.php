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
echo "
<tr>
<th>Vacante:".$row['nombre']."</th>
</tr>
";
}
 ?>
