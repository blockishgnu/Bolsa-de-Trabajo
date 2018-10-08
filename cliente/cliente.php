<?php

session_start();
include("../connect.php");

//error_reporting(E_ALL ^ E_NOTICE);


if(isset($_SESSION['usuario'])){

    $usuario= $_SESSION['usuario'];
    $tipo= $_SESSION['tipo'];
    $res=mysqli_query($con,"SELECT * FROM sab_clientes WHERE username='".$usuario."'");
    while ($rowl=mysqli_fetch_array($res)) {
echo "
<div style='background-color: #b3ffb3;'>
<br>
<h3 style=' margin-left: 30px; margin-top:-10px;'>Bienvenido: <b>".$usuario."</b></h3>
";
?>
<br><img src='data:image/png;base64,<?php echo base64_encode($rowl['logo']); ?>' class='img-circle' alt='User Image' width='70px;' style='border:4px solid black;  margin-left: 60px;' >
<?php
 echo "
<a href = '../logout.php' tite = 'Logout'><img src='../public/sab/img/logout.png' width='60px;' style=' margin-right: 30px;' align='right'></a>
<br>
<br>
</div>
";
}
}else{
    header("Location: ../login.php");
    exit;
}
 ?>
  <html lang="en">
 <head>
   <title>SAB |Servicios</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="shortcut icon" href="../public/sab/img/favicon.ico">
   <link rel="stylesheet" href="../public/sab/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
   <!-- Ionicons -->
   <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
   <!-- Select2 -->
   <link rel="stylesheet" href="../public/sab/css/select2.min.css">
   <!-- Theme style -->
   <link rel="stylesheet" href="../public/sab/css/AdminLTE.min.css">
   <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
   <link rel="stylesheet" href="../public/sab/css/_all-skins.min.css">
   <link rel="stylesheet" href="../public/sab/css/all.css">
   <!-- iCheck -->
   <link rel="stylesheet" href="../public/sab/css/flat/blue.css">
   <!-- Morris chart -->
   <link rel="stylesheet" href="../public/sab/css/morris.css">
   <!-- jvectormap -->
   <link rel="stylesheet" href="../public/sab/css/jquery-jvectormap-1.2.2.css">
   <!-- Date Picker -->
   <link rel="stylesheet" href="../public/sab/css/datepicker3.css">
   <!-- Daterange picker -->
   <link rel="stylesheet" href="../public/sab/css/daterangepicker-bs3.css">
   <!-- bootstrap wysihtml5 - text editor -->
   <link rel="stylesheet" href="../public/sab/css/bootstrap3-wysihtml5.min.css">
   <!-- DataTables -->
     <link rel="stylesheet" href="../public/sab/css/dataTables.bootstrap.css">
     <!-- iCheck -->
   <link rel="stylesheet" href="../public/sab/css/square/blue.css">

   <?= ((isset($css))? $css : ''); ?>

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

   <!-- jQuery 2.1.4 -->
 		<script src="../public/sab/js/jQuery-2.1.4.min.js"></script>
 		<!-- jQuery UI 1.11.4 -->
 		<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
 		<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
 		<script type="text/javascript">
 			$.widget.bridge('uibutton', $.ui.button);
 		</script>
 		<!-- Bootstrap 3.3.5 -->
 		<script src="../public/sab/js/bootstrap.min.js"></script>
 		<!-- Morris.js charts -->
 		<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
 		<script src="../public/sab/js/morris.min.js"></script>

 		<!-- Sparkline -->
 		<script src="../public/sab/js/jquery.sparkline.min.js"></script>
 		<!-- jvectormap -->
 		<script src="../public/sab/js/jquery-jvectormap-1.2.2.min.js"></script>
 		<script src="../public/sab/js/jquery-jvectormap-world-mill-en.js"></script>
 		<!-- jQuery Knob Chart -->
 		<script src="../public/sab/js/jquery.knob.js"></script>
 		<!-- daterangepicker -->
 		<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
 		<script src="../public/sab/js/daterangepicker.js"></script>
 		<!-- datepicker -->
 		<script src="../public/sab/js/bootstrap-datepicker.js"></script>
 		<!-- Bootstrap WYSIHTML5 -->
 		<script src="../public/sab/js/bootstrap3-wysihtml5.all.min.js"></script>
 		<!-- Slimscroll -->
 		<script src="../public/sab/js/jquery.slimscroll.min.js"></script>
 		<!-- FastClick -->
 		<script src="../public/sab/js/fastclick.min.js"></script>
 		<!-- AdminLTE App -->
 		<script src="../public/sab/js/app.min.js"></script>
 		<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
 		<script src="../public/sab/js/dashboard.js"></script>
 		<script src="../public/sab/js/dashboard2.js"></script>
 		<!-- AdminLTE for demo purposes -->
 		<script src="../public/sab/js/demo.js"></script>
 		<!-- ChartJS 1.0.1 -->
 		<script src="../public/sab/js/Chart.min.js"></script>
 		<!-- iCheck -->
 		<script src="../public/sab/js/icheck.min.js"></script>
 		<!-- InputMask -->
 		<script src="../public/sab/js/jquery.inputmask.js"></script>
 		<script src="../public/sab/js/jquery.inputmask.date.extensions.js"></script>
 		<script src="../public/sab/js/jquery.inputmask.extensions.js"></script>
 		<!-- Select2 -->
 		<script src="../public/sab/js/select2.full.min.js"></script>
 		<!-- DataTables -->
     	<script src="../public/sab/js/jquery.dataTables.min.js"></script>
     	<script src="../public/sab/js/dataTables.bootstrap.min.js"></script>

     	<!-- Notify.js -->
 		<script src="../public/sab/js/notify.js"></script>
 		<script src="../public/sab/js/notify.min.js"></script>


 </head>
 <body>
   <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="cliente.php">SAB | Servicios</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="cliente.php">Home</a></li>
        <li><a href="vacantes/vacantes.php">Vacantes</a></li>
        <li><a href="candidatos/consulta.php">Candidatos</a></li>
        <li><a href="actualizar/actualizar.php">Actualizar Perfil</a></li>
        <li><a href="reclutadores/reclutadores.php">Reclutadores</a></li>

      </ul>
    </div>
  </nav>

 <div class="container">
   <style>
   .alert{
   	position: absolute;
   	display: block;
   	top:100px;
   	right: 10px;
   	width: auto;
   	height: auto;
   	opacity: 0.5;
   }
   .alert a{
   	text-decoration: none;
   }

   .card {
    	display: inline;
   }

   img {
       border-radius: 15px 15px 0 0;
   }
   img:hover {
       box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
   }

   .container-vacante {
       padding: 2px 16px;
       background-color: white;
       border-radius: 5px;
       box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
       width: 100%;
       transition: 0.3s;
   }
   .container-vacante:hover {
       box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);

   }
   </style>
