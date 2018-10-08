<?php

session_start();
include("../connect.php");
//error_reporting(E_ALL ^ E_NOTICE);


if(isset($_SESSION['usuario'])){

    $usuario= $_SESSION['usuario'];
    $tipo= $_SESSION['tipo'];
    //echo "Has iniciado sesion";
    echo "<br>Has iniciado sesion como:".$usuario."";
    echo "<br>tipo de usuario:".$tipo."";

}else{
    header("Location: ../login.php");
    exit;
}

echo "<br>Limpiar variable de <a href = '../logout.php' tite = 'Logout'>Session.";

 ?>


 




 <footer class="main-footer">
       <div class="pull-right hidden-xs">
         <b>Powered by <a href="http://www.hellodigital.mx/">Hello Digital S. de R.L. de C.V.</a></b>
       </div>
       <strong>&copy; Copyright <?= date('Y'); ?> SAB Servicios Profesionales S.A. de C.V.</strong>
     </footer>
