<?php

session_start();
include("../connect.php");

//error_reporting(E_ALL ^ E_NOTICE);


if(isset($_SESSION['usuario'])){

    $usuario= $_SESSION['usuario'];
    $tipo= $_SESSION['tipo'];
   $resultf=mysqli_query($con,"SELECT 'foto' FROM `sab_vacantes` WHERE `estatus` = 'ACTIVA'");

  // echo"<img src='../public/sab/img/adm.jpg'  class='user-image' alt='User Image'>";
   //echo"<img src="" class="img-circle" alt="User Image">"

    //echo "Has iniciado sesion";
    echo "
    <div style='background-color: #b3ffb3;'>
    <br>
    <h3 style=' margin-left: 30px; margin-top:-10px;'>Bienvenido: <b>".$usuario."</b></h3>
    <br><img src='../public/sab/img/adm.jpg' class='img-circle' alt='User Image' width='70px;' style='border:4px solid black;  margin-left: 60px;' >
    <a href = '../logout.php' tite = 'Logout'><img src='../public/sab/img/logout.png' width='60px;' style=' margin-right: 30px;' align='right'></a>
    <br>
    <br>
    </div>
    ";
    $result = mysqli_query($con,"SELECT * FROM `sab_vacantes` WHERE `estatus` = 'ACTIVA'");
    $total_vacantes=mysqli_num_rows($result);

    $result1 = mysqli_query($con,"SELECT * FROM `sab_postulaciones`");
    $total_postulaciones=mysqli_num_rows($result1);


    $result2 = mysqli_query($con,"SELECT * FROM `sab_clientes`");
    $total_clientes=mysqli_num_rows($result2);

    $result3 = mysqli_query($con,"SELECT * FROM `sab_candidatos`");
    $total_candidatos=mysqli_num_rows($result3);

    $result4 = mysqli_query($con,"SELECT `idcategoria` FROM `sab_vacantes` WHERE `estatus` = 'ACTIVA' ");
    //$categorias=mysqli_num_rows($result4);
    $categorias = mysqli_fetch_array ($result4);

   $result5 = mysqli_query($con,"SELECT * FROM `sab_candidatos`");

      while ($row = mysqli_fetch_array ($result5)) {

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
       <a class="navbar-brand" href="administrador.php">SAB | Servicios</a>
     </div>
     <ul class="nav navbar-nav">
       <li class="active"><a href="administrador.php">Home</a></li>
       <li><a href="vacantes/vacantes.php">Vacantes</a></li>
       <li><a href="candidatos/consulta.php">Candidatos</a></li>
       <li><a href="clientes/clientes.php">Clientes</a></li>
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
  <!-- Inicio Administrador -->
  				<section class="content">
  					<div class="row">
  						<div class="col-lg-3 col-xs-6">
  							<div class="small-box bg-aqua">
  								<div class="inner">
  									<h3><?= $total_vacantes; ?></h3>
  									<p><?= (($total_vacantes == 1)? 'Vacante' : 'Vacantes'); ?></p>
  								</div>
  								<div class="icon">
  									<i class="fa fa-suitcase"></i>
  								</div>
  								<a href="#" class="small-box-footer">Mas información <i class="fa fa-arrow-circle-right"></i></a>
  							</div>
  						</div>
  						<div class="col-lg-3 col-xs-6">
  							<div class="small-box bg-red">
  								<div class="inner">
  									<h3><?= $total_postulaciones; ?></h3>
  									<p><?= (($total_postulaciones == 1)? 'Postulaciones' : 'Postulaciones');?></p>
  								</div>
  								<div class="icon">
  									<i class="fa fa-tasks"></i>
  								</div>
  								<a href="#" class="small-box-footer">Mas información <i class="fa fa-arrow-circle-right"></i></a>
  							</div>
  						</div>
  						<div class="col-lg-3 col-xs-6">
  							<div class="small-box bg-green">
  								<div class="inner">
  									<h3><?= $total_clientes; ?></h3>
  									<p><?= (($total_clientes == 1)? 'Cliente' : 'Clientes'); ?></p>
  								</div>
  								<div class="icon">
  									<i class="fa fa-cubes"></i>
  								</div>
  								<a href="#" class="small-box-footer">Mas información <i class="fa fa-arrow-circle-right"></i></a>
  							</div>
  						</div>
  						<div class="col-lg-3 col-xs-6">
  							<div class="small-box bg-yellow">
  								<div class="inner">
  									<h3><?= $total_candidatos; ?></h3>
  									<p><?= (($total_candidatos == 1)? 'Candidato' : 'Candidatos'); ?></p>
  								</div>
  								<div class="icon">
  									<i class="fa fa-users"></i>
  								</div>
  								<a href="#" class="small-box-footer">Mas información <i class="fa fa-arrow-circle-right"></i></a>
  							</div>
  						</div>
  					</div>

  					<div class="row">
  						<div class="col-md-8">
  							<div class="box box-primary">
  								<div class="box-header with-border">
  									<h3 class="box-title">Vacantes por Categorías</h3>
  								</div>

  								<div class="box-body">
  									<div class="row">
  										<div class="col-md-8 col-xs-12">
  											<div class="chart-responsive">
  												<canvas id="pieChart" style="height:250px"></canvas>
  											</div>
  										</div>

  										<div class="col-md-4 col-xs-12">
  											<ul class="chart-legend clearfix" style="font-size: 17px !important;">
  												<?php
  													while ($row = mysqli_fetch_array ($result4)) {
                              echo"id: ".$row['idcategoria'];
  														if ($row['idcategoria']==1)
  															echo '<li><i class="fa fa-circle-o text-red"></i> Administrativos</li>';
  														else if ($row['idcategoria']==2)
  															echo '<li><i class="fa fa-circle-o text-yellow"></i> Biología</li>';
  														else if ($row['idcategoria']==3)
  															echo '<li><i class="fa fa-circle-o text-aqua"></i> Comunicaciones</li>';
  														else if ($row['idcategoria']==4)
  															echo '<li><i class="fa fa-circle-o text-blue"></i> Construcción</li>';
  														else if ($row['idcategoria']==5)
  															echo '<li><i class="fa fa-circle-o text-black"></i> Contabilidad</li>';
  														else if ($row['idcategoria']==6)
  															echo '<li><i class="fa fa-circle-o text-light-blue"></i> Creatividad, Producción y Diseño Comercial</li>';
  														else if ($row['idcategoria']==7)
  															echo '<li><i class="fa fa-circle-o text-green"></i> Derecho y Leyes</li>';
  														else if ($row['idcategoria']==8)
  															echo '<li><i class="fa fa-circle-o text-gray"></i> Educación</li>';
  														else if ($row['idcategoria']==9)
  															echo '<li><i class="fa fa-circle-o text-navy"></i> Ingeniería</li>';
  														else if ($row['idcategoria']==10)
  															echo '<li><i class="fa fa-circle-o text-teal"></i> Logística, Transportación y Distribución</li>';
  														else if ($row['idcategoria']==11)
  															echo '<li><i class="fa fa-circle-o text-olive"></i> Manufactura, Producción y Operación</li>';
  														else if ($row['idcategoria']==12)
  															echo '<li><i class="fa fa-circle-o text-lime"></i> Mercadotecnia, Publicidad y Relaciones Públicas</li>';
  														else if ($row['idcategoria']==13)
  															echo '<li><i class="fa fa-circle-o text-orange"></i> Recursos Humanos</li>';
  														else if ($row['idcategoria']==14)
  															echo '<li><i class="fa fa-circle-o text-fuchsia"></i> Salud y Belleza</li>';
  														else if ($row['idcategoria']==15)
  															echo '<li><i class="fa fa-circle-o text-purple"></i> Sector Salud</li>';
  														else if ($row['idcategoria']==16)
  															echo '<li><i class="fa fa-circle-o text-maroon"></i> Seguro y Reaseguro</li>';
  														else if ($row['idcategoria']==17)
  															echo '<li><i class="fa fa-circle-o text-gold"></i> Tecnologías de la Información / Sistemas</li>';
  														else if ($row['idcategoria']==18)
  															echo '<li><i class="fa fa-circle-o text-salmon"></i> Turismo, Hospitalidad y Gastronomía</li>';
  														else if ($row['idcategoria']==19)
  															echo '<li><i class="fa fa-circle-o text-sienna"></i> Ventas</li>';
  														else if ($row['idcategoria']==20)
  															echo '<li><i class="fa fa-circle-o text-pink"></i> Veterinaria / Zoología</li>';
  													}
  												?>
  											</ul>
  										</div>
  									</div>
  								</div>
  							</div>
  						</div>

  						<div class="col-md-4">
  							<div class="box box-primary">
  								<div class="box-header with-border">
  									<h3 class="box-title">Nuevos Candidatos del Mes</h3>
  								</div>

  								<div class="box-body no-padding">
  									<ul class="users-list clearfix">
  										<?php
  											while ($row = mysqli_fetch_array ($result5)){
  												echo "<li>
  														<img src='' width='128px' height='128px'>
  														<a class='users-list-name' href='#'>".$row['nombre']."".$row['apellido_paterno']."</a>
  														<span class='users-list-date'>'.date('d-m-Y', strtotime(".$row['registro'].")).'</span>
  													</li>";
  											}
  										?>
  									</ul>
  								</div>

  								<div class="box-footer text-center">
  									<a href="#" class="uppercase">Ver Todos los Candidatos</a>
  								</div>
  							</div>
  						</div>
  					</div>
  				</section>

</div>

<footer class="main-footer">
      <div class="pull-right hidden-xs">
        <b>Powered by <a href="http://www.hellodigital.mx/">Hello Digital S. de R.L. de C.V.</a></b>
      </div>
      <strong>&copy; Copyright <?= date('Y'); ?> SAB Servicios Profesionales S.A. de C.V.</strong>
    </footer>

</body>
</html>