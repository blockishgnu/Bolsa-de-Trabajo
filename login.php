<?php
   ob_start();
   session_start();
   include("connect.php");


   if(isset($_SESSION['usuario'])){

    header("Location: index.php");

   }

?>

<?
   // error_reporting(E_ALL);
   // ini_set("display_errors", 1);
?>

<html lang = "en">

   <head>
      <title>Login</title>
      <link href = "css/bootstrap.min.css" rel = "stylesheet">

      <style>
         body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #ADABAB;
         }

         .form-signin {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
            color: #017572;
         }

         .form-signin .form-signin-heading,
         .form-signin .checkbox {
            margin-bottom: 10px;
         }

         .form-signin .checkbox {
            font-weight: normal;
         }

         .form-signin .form-control {
            position: relative;
            height: auto;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 10px;
            font-size: 16px;
         }

         .form-signin .form-control:focus {
            z-index: 2;
         }

         .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
            border-color:#017572;
         }

         .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
            border-color:#017572;
         }

         h2{
            text-align: center;
            color: #017572;
         }
      </style>

   </head>

   <body>

      <h2>Iniciar Sesion</h2>
      <div class = "container form-signin">

         <?php
            $msg = '';

            if (isset($_POST['login']) && !empty($_POST['username'])
               && !empty($_POST['password'])) {

                 $encrip=md5($_POST['password']);
                 $result = mysqli_query($con,"SELECT * FROM sab_usuarios WHERE username='".$_POST['username']."' AND password='".$encrip. "'  ") or die(mysqli_error($con));

               if (mysqli_num_rows($result)>0) {

                 $row=mysqli_fetch_row($result);


                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['usuario'] = $row[0];
                  $_SESSION['tipo']=$row[2];
                  $_SESSION['estatus']=$row[3];

                  header ("Location: index.php");


                  echo 'Contraseña correcta';
               }else {
                  $msg = 'Usuario y/o contraseña incorrecta';
               }
            }
         ?>
      </div> <!-- /container -->
      
      <div class = "container">

         <form class = "form-signin" role = "form"
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']);
            ?>" method = "post">
            <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
            <input type = "text" class = "form-control"
               name = "username" placeholder = "Usuario"
               required autofocus></br>
            <input type = "password" class = "form-control"
               name = "password" placeholder = "Contraseña" required>
            <button class = "btn btn-lg btn-primary btn-block" type = "submit"
               name = "login">Login</button>
         </form>

         Limpiar variable de <a href = "logout.php" tite = "Logout">Session.
           <br>
        <a href = "registrarse.php" tite = "Registrarse">Registrarse.

      </div>

   </body>
</html>