<?php
include("../connect.php");
echo "
<tr>
<th style='text-align: center !important;'>Vacante</th>
<th style='text-align: center !important;'>Estatus</th>
<th style='text-align: center !important;'>fecha</th>
</tr>
";
$username=$_POST['username'];
$result= mysqli_query($con,"SELECT * FROM sab_postulaciones WHERE username='".$username."' ORDER BY fecha");
while($row=mysqli_fetch_array($result)){
  $res= mysqli_query($con,"SELECT * FROM sab_vacantes WHERE idvacante='".$row['idvacante']."'");
  while($rowv=mysqli_fetch_array($res)){
    $enum=array(
      0=> 'Postulada',
      1=> 'CV Visto',
      2=> 'En Proceso',
      3=> 'Finalista',
      4=> 'Terminado',
    );
echo "
<tr>
<input id='idpostulacion' value='".$row['idpostulacion']."' name='idpostulacion' type='hidden'>
<th> ".$rowv['nombre']." </th>
<th>
  <select id='estatusAnt' onchange='actualizarstatus();'>
  ";
  for($i=0;$i<5;$i++){
  if ($row['estatus'] == $enum[$i]) {
    echo '<option value="'.$row['estatus'].'" selected>'.$row['estatus'].'</option>';
  }
  else {
    echo '<option value="'.$enum[$i].'">'.$enum[$i].'</option>';
  }
//<option value='".$row['estatus']." '> ".$row['estatus']." </option>
}
echo "
</select>
 </th>

<th> ".$row['fecha']."</th>
</tr>

";
}
}

 ?>
