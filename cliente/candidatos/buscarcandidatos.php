<?php
include("../connect.php");

$username=$_POST['username'];
$result= mysqli_query($con,"SELECT * FROM sab_postulaciones WHERE username='".$username."' ORDER BY fecha");
while($row=mysqli_fetch_array($result)){
  $res= mysqli_query($con,"SELECT * FROM sab_vacantes WHERE idvacante='".$row['idvacante']."'");
  while($rowv=mysqli_fetch_array($res)){
echo "
<tr>
<th> ".$rowv['nombre']." </th>
<th> ".$row['estatus']."</th>
<th> ".$row['fecha']."</th>
</tr>

";
}
}

 ?>
