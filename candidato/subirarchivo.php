<?php
include("../connect.php");
session_start();
$target_path = "cv/";
$formato='';
$size='';


if (($_FILES['archivo_usuario']['name'] == !NULL) && ($_FILES['archivo_usuario']['size'] <= 5000000)){
if (($_FILES["archivo_usuario"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document")
            || ($_FILES['archivo_usuario']['type'] == "application/pdf")){
              if(($_FILES['archivo_usuario']['type'] == "application/pdf")){
                $_FILES['archivo_usuario']['name']=$_SESSION['usuario']."-".time().".pdf";
                  $formato = 'PDF';
                  $target_path = $target_path . basename( $_FILES['archivo_usuario']['name']);
              }else if(($_FILES["archivo_usuario"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document")){
                 $formato = 'WORD';
                 $_FILES['archivo_usuario']['name']=$_SESSION['usuario']."-".time().".docx";
                 $target_path = $target_path . basename( $_FILES['archivo_usuario']['name']);
              }

              $nombre = $_FILES['archivo_usuario']['name'];
              $size = round($_FILES['archivo_usuario']['size']/1024,2);
              $fecha = date("Y")."-".date("m")."-".date("d");
              $username= $_SESSION['usuario'];
              $status='';

if(move_uploaded_file($_FILES['archivo_usuario']['tmp_name'], $target_path)) {


      $result=mysqli_query($con,"SELECT * FROM sab_cv WHERE username = '".$username."'");
      while($row=mysqli_fetch_array($result)){
        if($row['formato']==$formato){
          $idcv=$row['idcv'];
        $sql="UPDATE sab_cv SET nombre='".$nombre."',size='".$size." KB',fecha='".$fecha."' WHERE idcv='".$idcv."'";
        if(mysqli_query($con,$sql)){
          ob_start();
          header('refresh: 1; url=actualizar_perfil.php');
          echo "<h1 align='center'>----Actualizado correctamente----</h1>";
          echo "<h3 align='center'>Redireccionando....</h3>";
          ob_end_flush();

          //header("location:actualizar_perfil.php");

          unlink('cv/'.$row['nombre']);
          $status='a';
        }else{
          ob_start();
          header('refresh: 1; url=actualizar_perfil.php');
          echo "<h1 align='center'>----Error al actualizar----</h1>";
          echo "<h3 align='center'>Redireccionando....</h3>";
          ob_end_flush();
             }
        }
   }

if($status!='a'){
  $sql="INSERT INTO sab_cv (nombre,formato,size,fecha,username) VALUES ('".$nombre."','".$formato."','".$size." KB','".$fecha."','".$username."')";

   if(mysqli_query($con,$sql)){

     ob_start();
     header('refresh: 1; url=actualizar_perfil.php');
     echo "<h1 align='center'>----El archivo  ha sido subido----</h1>";
     echo "<h3 align='center'>Redireccionando....</h3>";
     ob_end_flush();
   }else{
     ob_start();
     header('refresh: 1; url=actualizar_perfil.php');
     echo "<h1 align='center'>----No se pudo registrar----</h1>";
     echo "<h3 align='center'>Redireccionando....</h3>";
     ob_end_flush();

   }
}
} else{

ob_start();
header('refresh: 1; url=actualizar_perfil.php');
echo "<h1 align='center'>----Ha ocurrido un error, trate de nuevo!----</h1>";
echo "<h3 align='center'>Redireccionando....</h3>";
ob_end_flush();
}
}else{

ob_start();
header('refresh: 1; url=actualizar_perfil.php');
echo "<h1 align='center'>----Formato de archivo no soportado!----</h1>";
echo "<h3 align='center'>Redireccionando....</h3>";
ob_end_flush();
}

}

 ?>
