<?php error_reporting(0);
include("../connect.php");
$id = $_GET['idreclutador'];
if (isset($_POST['enviado'])) {
foreach($_POST AS $key => $value) { $_POST[$key] = mysql_real_escape_string($value); }
// leemos datos de la foto
$foto= $_FILES["foto"]["tmp_name"];
$nombrefoto  = $_FILES["foto"]["name"];
//este es el archivo que añadiremosal campo blob
$foto  = $_FILES['foto']['tmp_name'];
  //lo comvertimos en binario antes de guardarlo
	$foto=mysql_real_escape_string(file_get_contents($_FILES["foto"]["tmp_name"]));


$sql = "UPDATE sab_reclutadores SET foto='".$foto."' WHERE idreclutador='".$id."'" ;
mysqli_query($con,$sql) or die(mysql_error());
header('Location: actualizar.php');
}
?>
