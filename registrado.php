<?php

session_start();

include("connect.php");
//datos para insertar tabla Usuario
$user = $_POST["user"];
$pass = md5($_POST['pass']);
$tipo = 'CANDIDATO';
$estatus = 'ACTIVO';
$fecha_registro=date("Y")."-".date("m")."-".date("d");

//datos para insertar tabla candidato
$nombre = $_POST['nombre'];
$appellido_p = $_POST['apellidop'];
$appellido_m = $_POST['apellidom'];
$sexo = $_POST['sexo'];
$fecha = $_POST['fecha'];
$correo = $_POST['correo'];
$celular = $_POST['celular'];
$telefono = $_POST['telefono'];

$cumpleanos =  new DateTime($fecha);
$hoy = new DateTime();
$annos = $hoy->diff($cumpleanos);
$edad = $annos->y;
//echo "user: ".$user;
//comprobar si es mayor de edad
if($edad>18){

//comprobar si existe el usuario
$sqlc = mysqli_query($con,"SELECT * FROM sab_usuarios WHERE username='".$user."'") or die(mysqli_error($con));

$contar = mysqli_num_rows($sqlc);

if($contar == 0){

//comprobar si el correo ya esta registrado
  $sqle = mysqli_query($con,"SELECT * FROM sab_candidatos WHERE email='".$correo."'") or die(mysqli_error($con));

  $contem = mysqli_num_rows($sqle);

  if($contem==0){

  //insertar usuario
  $sql = "INSERT INTO sab_usuarios (username, password, tipo, estatus)
  VALUES ('".$user."', '".$pass."', '".$tipo."', '".$estatus."')";

  if(mysqli_query($con, $sql)){

      //insertar informacion del candidato
      $sql2= "INSERT INTO sab_candidatos (nombre, apellido_paterno, apellido_materno, sexo, fecha_nacimiento, email, telefono_celular, telefono_casa, registro, username)
      VALUES ('".$nombre."', '".$appellido_p."', '".$appellido_m."', '".$sexo."', '".$fecha."', '".$correo."', '".$celular."', '".$telefono."','".$fecha_registro."', '".$user."')";

        if(mysqli_query($con,$sql2)){

          //echo "<span style='font-weight:bold;color:black;'>Usuario registrado exitosamente.</span>";

          echo 3;

        }else{
          echo"Error: Could not able to execute $ql.". mysqli_error($link);
        }

  } else{
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
  }

}else{

        //echo "<span style='font-weight:bold;color:red;'>Este correo ya esta registrado.</span>";
        echo 2;

}

}else{
    //echo "<span style='font-weight:bold;color:red;'>El nombre de usuario ya existe.</span>";
    echo 1;


}
}else{
  echo 4;
}



 ?>
