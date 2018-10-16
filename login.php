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

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Temas-->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- se vincula al hoja de estilo para definir el aspecto del formulario de login-->
     <link rel="stylesheet" type="text/css" href="login.css">
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
      <div class = "Contenedor">

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
         <form class = "form-signin" role = "form" action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method = "post">
            <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
            <div class="input-group input-group-lg">
				  <span class="input-group-addon" class="form-control" id="sizing-addon1"><i class="glyphicon glyphicon-envelope"></i></span>
            <input type = "text" class = "form-control" name = "username" placeholder = "Usuario" aria-describedby="sizing-addon1" required autofocus>
            </div>
           </br>
           <div class="input-group input-group-lg">
             <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-lock"></i></span>
            <input type = "password" class = "form-control" name = "password" placeholder = "Contraseña" aria-describedby="sizing-addon1" required>
          </div>
            <button class = "btn btn-lg btn-primary btn-block" type = "submit" name = "login">Login</button>
         </form>

         Limpiar variable de <a href = "logout.php" tite = "Logout">Session.
           <br>
        <a href = "registrarse.php" tite = "Registrarse">Registrarse.

      </div>

   </body>
   <!-- vinculando a libreria Jquery-->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <!-- Libreria java scritp de bootstrap -->
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</html>
