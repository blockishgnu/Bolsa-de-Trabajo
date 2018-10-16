<?php
include("../connect.php");

session_start();

$username=$_SESSION['usuario'];
$nombre=$_POST['nombre'];
$apellido_paterno=$_POST['apellido_paterno'];
$apellido_materno=$_POST['apellido_materno'];
$estado_civil=$_POST['estado_civil'];
$fecha_nacimiento=$_POST['fecha_nacimiento'];
$email=$_POST['email'];
$telefono_celular=$_POST['telefono_celular'];
$telefono_casa=$_POST['telefono_casa'];
$calle=$_POST['calle'];
$numero_exterior=$_POST['numero_exterior'];
$numero_interior=$_POST['numero_interior'];
$colonia=$_POST['colonia'];
$cp=$_POST['cp'];
$ciudad=$_POST['ciudad'];
$municipio=$_POST['municipio'];
$estado=$_POST['estado'];
$pais=$_POST['pais'];

$sql="UPDATE sab_candidatos SET nombre='".$nombre."',
apellido_paterno='".$apellido_paterno."',
apellido_materno='".$apellido_materno."',
estado_civil='".$estado_civil."',
fecha_nacimiento='".$fecha_nacimiento."',
email='".$email."',
telefono_celular='".$telefono_celular."',
telefono_casa='".$telefono_casa."',
calle='".$calle."',
numero_exterior='".$numero_exterior."',
numero_interior='".$numero_interior."',
colonia='".$colonia."',
cp='".$cp."',
ciudad='".$ciudad."',
municipio='".$municipio."',
estado='".$estado."',
pais='".$pais."'
WHERE username='".$username."'";
if(mysqli_query($con,$sql)){
    echo 0;
}else {
  echo 1;
}

 ?>
