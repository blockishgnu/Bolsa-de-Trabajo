<?php
include("../connect.php");

$username=$_POST['username'];

echo "
<thead>
  <tr>
  <th><b>Vacante</b></th>
  <th><b>Estatus</b></th>
  <th><b>Fecha de postulacion</b></th>
  <tr>
</thead>
<tbody>
";
$result= mysqli_query($con,"SELECT * FROM sab_postulaciones WHERE username='".$username."' ORDER BY fecha");
while($row=mysqli_fetch_array($result)){
  $res= mysqli_query($con,"SELECT * FROM sab_vacantes WHERE idvacante='".$row['idvacante']."'");
  while($rowv=mysqli_fetch_array($res)){

echo "
<tr>
<input id='idpostulacion' value='".$row['idpostulacion']."' name='idpostulacion' type='hidden'>
<th> ".$rowv['nombre']." </th>
<th>".$row['estatus']."</th>
<th> ".$row['fecha']."</th>
</tr>
";
}
}

echo "</tbody>";
 ?>
