<?php
include('../connect.php');

$idcliente=$_POST['idcliente'];
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$descripcion=$_POST['descripcion'];
$telefono_oficina=$_POST['telefono_oficina'];
$telefono_celular=$_POST['telefono_celular'];
$calle=$_POST['calle'];
$numero_exterior=$_POST['numero_exterior'];
$numero_interior=$_POST['numero_interior'];
$colonia=$_POST['colonia'];
$cp=$_POST['cp'];
$ciudad=$_POST['ciudad'];
$municipio=$_POST['municipio'];
$estado=$_POST['estado'];
$pais=$_POST['pais'];

$sql="UPDATE sab_clientes SET
nombre='".$nombre."',
email='".$email."',
descripcion='".$descripcion."',
telefono_oficina='".$telefono_oficina."',
telefono_celular='".$telefono_celular."',
calle='".$calle."',
numero_exterior='".$numero_exterior."',
numero_interior='".$numero_interior."',
colonia='".$colonia."',
cp='".$cp."',
ciudad='".$ciudad."',
municipio='".$municipio."',
estado='".$estado."',
pais='".$pais."'

   WHERE idcliente= '".$idcliente."' "
   ;

   if(mysqli_query($con,$sql)){
echo 0;

   }else{
     echo"Error: Could not able to execute $sql.". mysqli_error($con);
   }


 ?>
