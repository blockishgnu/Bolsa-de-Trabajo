<?php
include("../connect.php");

$idvacante=$_POST['idvacante'];
$result= mysqli_query($con,"SELECT * FROM sab_postulaciones WHERE idvacante='".$idvacante."' ORDER BY fecha");
while($row=mysqli_fetch_array($result)){
echo "
<tr>
<th> ".$row['username']." </th>
<th> ".$row['estatus']."</th>
<th> ".$row['fecha']."</th>


</tr>



";
}

 ?>
