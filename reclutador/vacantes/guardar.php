<?php
include('../connect.php');

$idcliente=$_POST['idcliente'];
$nombre_cliente=$_POST['nombre_cliente'];
$ubicacion_cliente=$_POST['ubicacion_cliente'];
$nombre=$_POST['nombre'];
$idcategoria=$_POST['idcategoria'];
$idcategoria_detalle=$_POST['idcategoria_detalle'];
$descripcion_tareas=$_POST['descripcion_tareas'];
$jornada_laboral=$_POST['jornada_laboral'];
$horario_laboral=$_POST['horario_laboral'];
$tipo_contrato=$_POST['tipo_contrato'];
$salario=$_POST['salario'];
$a_convenir=$_POST['a_convenir'];
$fecha_contratacion=date("Y-m-d", strtotime($_POST['fecha_contratacion']));
$cantidad_vacantes=$_POST['cantidad_vacantes'];
$experiencia=$_POST['experiencia'];
$edad_minima=$_POST['edad_minima'];
$edad_maxima=$_POST['edad_maxima'];
$estudios_minimos=$_POST['estudios_minimos'];
$idioma=$_POST['idioma'];
$licencia_conducir=$_POST['licencia_conducir'];
$disponibilidad_viajar=$_POST['disponibilidad_viajar'];
$disponibilidad_residencia=$_POST['disponibilidad_residencia'];
$personas_discapacidad=$_POST['personas_discapacidad'];
$postulados=0;
$visto=0;
$estatus='ACTIVA';
$fecha=date("Y")."-".date("m")."-".date("d");
$hora=date("H").":".date("i").":".date("s");
$idhabilidades=$_POST['idhabilidades'];
$idReclutador=$_POST['idReclutador'];
$fecha_limite=date("Y-m-d", strtotime($_POST['fecha_limite']));

$idcategoria2=$_POST['idcategoria2'];
$idcategoria_detalle2=$_POST['idcategoria_detalle2'];
$idcategoria3=$_POST['idcategoria3'];
$idcategoria_detalle3=$_POST['idcategoria_detalle3'];

$sql="INSERT INTO sab_vacantes
(idcliente,
nombre_cliente,
ubicacion_cliente,
nombre,
idcategoria,
idcategoria_detalle,
descripcion_tareas,
jornada_laboral,
horario_laboral,
tipo_contrato,
salario,
a_convenir,
fecha_contratacion,
cantidad_vacantes,
experiencia,
edad_minima,
edad_maxima,
estudios_minimos,
idioma,
licencia_conducir,
disponibilidad_viajar,
disponibilidad_residencia,
personas_discapacidad,
postulados,
visto,
estatus,
fecha,
hora,
idhabilidades,
idReclutador,
fecha_limite,

idcategoria2,
idcategoria_detalle2,
idcategoria3,
idcategoria_detalle3)
VALUES ('".$idcliente."',
   '".$nombre_cliente."',
   '".$ubicacion_cliente."',
   '".$nombre."',
   '".$idcategoria."',
   '".$idcategoria_detalle."',
   '".$descripcion_tareas."',
   '".$jornada_laboral."',
   '".$horario_laboral."',
   '".$tipo_contrato."',
   '".$salario."',
   '".$a_convenir."',
   '".$fecha_contratacion."',
   '".$cantidad_vacantes."',
   '".$experiencia."',
   '".$edad_minima."',
   '".$edad_maxima."',
   '".$estudios_minimos."',
   '".$idioma."',
   '".$licencia_conducir."',
   '".$disponibilidad_viajar."',
   '".$disponibilidad_residencia."',
   '".$personas_discapacidad."',
   '".$postulados."',
   '".$visto."',
   '".$estatus."',
   '".$fecha."',
   '".$hora."',
   '".$idhabilidades."',
   '".$idReclutador."',
   '".$fecha_limite."',

   '".$idcategoria2."',
   '".$idcategoria_detalle2."',
   '".$idcategoria3."',
   '".$idcategoria_detalle3."')";

   if(mysqli_query($con,$sql)){
echo 0;

   }else{
     echo"Error: Could not able to execute $sql.". mysqli_error($con);
   }

 ?>
