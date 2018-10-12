<?php
include("../connect.php");
session_start();

$target_path = "cv/";
$target_path = $target_path . basename( $_FILES['archivo_usuario']['name']);
$formato='';
$size='';


if (($_FILES['archivo_usuario']['name'] == !NULL) && ($_FILES['archivo_usuario']['size'] <= 5000000)){
if (($_FILES["archivo_usuario"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document")
            || ($_FILES['archivo_usuario']['type'] == "application/pdf")){
              if(($_FILES['archivo_usuario']['type'] == "application/pdf")){
                  $formato = 'PDF';
              }else if(($_FILES["archivo_usuario"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document")){
                 $formato='WORD';
              }

              $nombre = $_FILES['archivo_usuario']['name'];
              $size = round($_FILES['archivo_usuario']['size']/1024,2);
              $fecha = date("Y")."-".date("m")."-".date("d");
              $username= $_SESSION['usuario'];
              $status='';

              echo "fomato: ".$formato." size: ".$size."---";
if(move_uploaded_file($_FILES['archivo_usuario']['tmp_name'], $target_path)) {
   echo "El archivo ". basename( $_FILES['archivo_usuario']['name']). " ha sido subido";
      $result=mysqli_query($con,"SELECT * FROM sab_cv WHERE username = '".$username."'");

      while($row=mysqli_fetch_array($result)){
        if($row['formato']==$formato){
          $idcv=$row['idcv'];
        $sql="UPDATE sab_cv SET nombre='".$nombre."',size='".$size." KB',fecha='".$fecha."' WHERE idcv='".$idcv."'";
        if(mysqli_query($con,$sql)){
          echo "---Actualizado correctamente";
          $status='a';
        }else{
    echo "Error al actualizar";
             }
        }
   }

if($status!='a'){
  $sql="INSERT INTO sab_cv (nombre,formato,size,fecha,username) VALUES ('".$nombre."','".$formato."','".$size." KB','".$fecha."','".$username."')";

   if(mysqli_query($con,$sql)){
     echo"se pudo registrar el cv";
   }else{
     echo "No se pudo registrar";

   }
}
} else{
echo "Ha ocurrido un error, trate de nuevo!";
}
}
}

 ?>
