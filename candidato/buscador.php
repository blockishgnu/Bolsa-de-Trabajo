<?php
include("../connect.php");

$idcategoria=$_POST['idcategoria'];
$idcategoria_detalle=$_POST['idcategoria_detalle'];

echo "
<table id='vacantes' class='table table-striped table-row-border' style='width:100%' align='left'>
<thead>
  <tr>
    <th></th>
    <th></th>
    <th></th>
  </tr>
</thead>
<tbody>
";




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
  <th>
  ";
  if($row['foto']==null){
    echo "<img class='logo' src='../public/sab/img/portafolio.png' alt='Image'  style='' >
   &nbsp;&nbsp;";
 }else{
  ?>
  <img class='logo' src='data:image/png;base64,<?php echo base64_encode($row['foto']); ?>' alt='Image'  style='' >
 &nbsp;&nbsp;
 <?php
}
  echo "
  </th>
  <th><h3 align='center'>".$row['nombre']."</h3></th>
  <th><a align='center' href='ver_vacante.php?idvacante=".$row['idvacante']."' class='ver_vacante'>Ver Vacante</a></th>
  </tr>
  ";
}
if(mysqli_num_rows($result)==0){
  echo "
  <th></th>
  <th><h2 align='center'>No existen vacantes de la busqueda seleccionada</h2></th>
  <th></th>";
}

echo "
</tbody>
</table>
";

 ?>
 <script>
 $(document).ready( function () {
     $('#vacantes').DataTable();
 } );
 </script>
