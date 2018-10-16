<?php
session_start();
include("../connect.php");

if(isset($_SESSION['usuario'])){

$usuario=$_SESSION['usuario'];

	echo "
	<div style='background-color: #b3ffb3;'>
	<br>
	<h3 style=' margin-left: 30px; margin-top:-10px;'>Bienvenido: <b>".$usuario."</b></h3>
	<br><img src='../../public/sab/img/adm.jpg' class='img-circle' alt='User Image' width='70px;' style='border:4px solid black;  margin-left: 60px;' >
	<a href = '../../logout.php' tite = 'Logout'><img src='../../public/sab/img/logout.png' width='60px;' style=' margin-right: 30px;' align='right'></a>
	<br>
	<br>
	</div>
	";


}else{
		header("Location: ../../login.php");
		exit;
}

 ?>




  <html lang="en">
 <head>
   <title>SAB |Servicios</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="shortcut icon" href="../../public/sab/img/favicon.ico">

   <link rel="stylesheet" href="../../public/sab/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
   <!-- Ionicons -->
   <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
   <!-- Select2 -->
   <link rel="stylesheet" href="../../public/sab/css/select2.min.css">
   <!-- Theme style -->
   <link rel="stylesheet" href="../../public/sab/css/AdminLTE.min.css">
   <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
   <link rel="stylesheet" href="../../public/sab/css/_all-skins.min.css">
   <link rel="stylesheet" href="../../public/sab/css/all.css">
   <!-- iCheck -->
   <link rel="stylesheet" href="../../public/sab/css/flat/blue.css">

   <!-- jvectormap -->
   <link rel="stylesheet" href="../../public/sab/css/jquery-jvectormap-1.2.2.css">
   <!-- Date Picker -->
   <link rel="stylesheet" href="../../public/sab/css/datepicker3.css">
   <!-- Daterange picker -->
   <link rel="stylesheet" href="../../public/sab/css/daterangepicker-bs3.css">
   <!-- bootstrap wysihtml5 - text editor -->
   <link rel="stylesheet" href="../../public/sab/css/bootstrap3-wysihtml5.min.css">
   <!-- DataTables -->
     <link rel="stylesheet" href="../../public/sab/css/dataTables.bootstrap.css">
     <!-- iCheck -->
   <link rel="stylesheet" href="../../public/sab/css/square/blue.css">

	 <link rel="stylesheet" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>
	 <link rel="stylesheet"href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"/>
	 <link rel="stylesheet" href="../../css/datatables.min.css"/>

   <?= ((isset($css))? $css : ''); ?>

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script rel="stylesheet" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script rel="stylesheet" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


   <!-- jQuery 2.1.4 -->
 		<script src="../../public/sab/js/jQuery-2.1.4.min.js"></script>
 		<!-- jQuery UI 1.11.4 -->
 		<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
 		<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
 		<script type="text/javascript">
 			$.widget.bridge('uibutton', $.ui.button);
 		</script>
 		<!-- Bootstrap 3.3.5 -->
 		<script src="../../public/sab/js/bootstrap.min.js"></script>

 		<!-- Sparkline -->
 		<script src="../../public/sab/js/jquery.sparkline.min.js"></script>
 		<!-- jvectormap -->
 		<script src="../../public/sab/js/jquery-jvectormap-1.2.2.min.js"></script>
 		<script src="../../public/sab/js/jquery-jvectormap-world-mill-en.js"></script>
 		<!-- jQuery Knob Chart -->
 		<script src="../../public/sab/js/jquery.knob.js"></script>
 		<!-- daterangepicker -->
 		<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
 		<script src="../../public/sab/js/daterangepicker.js"></script>
 		<!-- datepicker -->
 		<script src="../../public/sab/js/bootstrap-datepicker.js"></script>
 		<!-- Bootstrap WYSIHTML5 -->
 		<script src="../../public/sab/js/bootstrap3-wysihtml5.all.min.js"></script>
 		<!-- Slimscroll -->
 		<script src="../../public/sab/js/jquery.slimscroll.min.js"></script>
 		<!-- FastClick -->
 		<script src="../../public/sab/js/fastclick.min.js"></script>
 		<!-- AdminLTE App -->
 		<script src="../../public/sab/js/app.min.js"></script>

 		<!-- AdminLTE for demo purposes -->
 		<script src="../../public/sab/js/demo.js"></script>
 		<!-- ChartJS 1.0.1 -->
 		<script src="../../public/sab/js/Chart.min.js"></script>
 		<!-- iCheck -->
 		<script src="../../public/sab/js/icheck.min.js"></script>
 		<!-- InputMask -->
 		<script src="../../public/sab/js/jquery.inputmask.js"></script>
 		<script src="../../public/sab/js/jquery.inputmask.date.extensions.js"></script>
 		<script src="../../public/sab/js/jquery.inputmask.extensions.js"></script>
 		<!-- Select2 -->
 		<script src="../../public/sab/js/select2.full.min.js"></script>
 		<!-- DataTables -->
     	<script src="../../public/sab/js/jquery.dataTables.min.js"></script>
     	<script src="../../public/sab/js/dataTables.bootstrap.min.js"></script>

     	<!-- Notify.js -->
 		<script src="../../public/sab/js/notify.js"></script>
 		<script src="../../public/sab/js/notify.min.js"></script>






	<link rel="stylesheet" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>
  <script src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>


	    <script src="../../css/datatables.min.js"></script>
	    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>


 <?= ((isset($js))? $js : ''); ?>

 </head>

<style>
	.centrado {
		text-align: center !important;
	}

	.dt_center {
		text-align: center !important;
	}

	.dt_left {
		text-align: left !important;
	}

	.dt_right {
		text-align: right !important;
	}

	.table td {
		vertical-align: middle !important;
	}
	.button{
	    display: inline-block;
	}

	  .modalDialog {
	  	position: fixed;
	  	font-family: Arial, Helvetica, sans-serif;
	  	top: 0;
	  	right: 0;
	  	bottom: 0;
	  	left: 0;
	  	background: rgba(0,0,0,0.8);
	  	z-index: 99999;
	  	opacity:0;
	  	-webkit-transition: opacity 400ms ease-in;
	  	-moz-transition: opacity 400ms ease-in;
	  	transition: opacity 400ms ease-in;
	  	pointer-events: none;
	  }
	  .modalDialog:target {
	  	opacity:1;
	  	pointer-events: auto;
	  }
	  .modalDialog > div {
	  	width: 400px;
	  	position: relative;
	  	margin: 10% auto;
	  	padding: 5px 20px 13px 20px;
	  	border-radius: 10px;
	  	background: #fff;
	  	background: -moz-linear-gradient(#fff, #999);
	  	background: -webkit-linear-gradient(#fff, #999);
	  	background: -o-linear-gradient(#fff, #999);
	    -webkit-transition: opacity 400ms ease-in;
	  -moz-transition: opacity 400ms ease-in;
	  transition: opacity 400ms ease-in;
	  }
	  .close {
	  	background: #606061;
	  	color: #FFFFFF;
	  	line-height: 25px;
	  	position: absolute;
	  	right: -12px;
	  	text-align: center;
	  	top: -10px;
	  	width: 24px;
	  	text-decoration: none;
	  	font-weight: bold;
	  	-webkit-border-radius: 12px;
	  	-moz-border-radius: 12px;
	  	border-radius: 12px;
	  	-moz-box-shadow: 1px 1px 3px #000;
	  	-webkit-box-shadow: 1px 1px 3px #000;
	  	box-shadow: 1px 1px 3px #000;
	  }
	  .close:hover { background: #00d9ff; }


	#modal-progress{
	    width: 80% !important;
	}
	.progreso{
	border-radius: 15px/50px; //15px/50px 30px
    background: #73AD21;
    margin: 10px;
    padding: 20px;
    width: 35%;
    height: 5%;
    display:inline-block;
	}

	.postulada{
		position: relative;
		-webkit-animation: postula 2s infinite;
		-webkit-animation-fill-mode: forwards;
		 animation-direction: alternate;
	}
	@keyframes postula {
	    from {left: -20px;}
	    to {left: 20px;}//200px
	}
	.finalista {
	 position: relative;
	 -webkit-animation: final 1s infinite;
	 -webkit-animation-fill-mode: forwards;
	 animation-direction: alternate;
	 //-webkit-animation: final2 2s infinite linear;
	}
	@keyframes final{
		from {top:0px; }
		to { top: -13px}
	}
	@keyframes final2{
		0% { -webkit-transform: rotate(0deg); }
		100% { -webkit-transform: rotate(360deg); }
		0% { -webkit-transform: rotate(0deg); }
		100% { -webkit-transform: rotate(-360deg); }
	}


	.visto {
	 position: relative;
	  -webkit-animation: vistaRoll 3s infinite linear;
	}
	@-webkit-keyframes vistaRoll{
		0% { -webkit-transform: rotate(0deg); }
	    100% { -webkit-transform: rotate(360deg); }
	}


	.proce{
    display:  inline-block;
    position: relative; //absolute

    background: url('http://i.imgur.com/lOBxb.png');
    -webkit-animation: barrelRoll 5s infinite linear;
	}
	.proce2{
		top: 3px;
	}

	proce:last-of-type {
	    top: 22px;
	    left: 56px;
	    -webkit-animation-name: invertBarrelRoll;
	}

	div:hover > proceso	{
	    -webkit-animation-play-state: running;
	}

	@-webkit-keyframes barrelRoll {
	    0% { -webkit-transform: rotate(0deg); }
	    100% { -webkit-transform: rotate(360deg); }
	}
	@-webkit-keyframes invertBarrelRoll {
	    0% { -webkit-transform: rotate(0deg); }
	    100% { -webkit-transform: rotate(-360deg); }
	}

	.centrado {
		text-align: center !important;
	}

	.dt_center {
		text-align: center !important;
	}

	.dt_left {
		text-align: left !important;
	}

	.dt_right {
		text-align: right !important;
	}

	.table td {
		vertical-align: middle !important;
	}



  .modalDialog {
  	position: fixed;
  	font-family: Arial, Helvetica, sans-serif;
  	top: 0;
  	right: 0;
  	bottom: 0;
  	left: 0;
  	background: rgba(0,0,0,0.8);
  	z-index: 99999;
  	opacity:0;
  	-webkit-transition: opacity 400ms ease-in;
  	-moz-transition: opacity 400ms ease-in;
  	transition: opacity 400ms ease-in;
  	pointer-events: none;
  }
  .modalDialog:target {
  	opacity:1;
  	pointer-events: auto;
  }
  .modalDialog > div {
  	width: 400px;
  	position: relative;
  	margin: 10% auto;
  	padding: 5px 20px 13px 20px;
  	border-radius: 10px;
  	background: #fff;
  	background: -moz-linear-gradient(#fff, #999);
  	background: -webkit-linear-gradient(#fff, #999);
  	background: -o-linear-gradient(#fff, #999);
    -webkit-transition: opacity 400ms ease-in;
  -moz-transition: opacity 400ms ease-in;
  transition: opacity 400ms ease-in;
  }
  .close {
  	background: #606061;
  	color: #FFFFFF;
  	line-height: 25px;
  	position: absolute;
  	right: -12px;
  	text-align: center;
  	top: -10px;
  	width: 24px;
  	text-decoration: none;
  	font-weight: bold;
  	-webkit-border-radius: 12px;
  	-moz-border-radius: 12px;
  	border-radius: 12px;
  	-moz-box-shadow: 1px 1px 3px #000;
  	-webkit-box-shadow: 1px 1px 3px #000;
  	box-shadow: 1px 1px 3px #000;
  }
  .close:hover { background: #00d9ff; }

	.agregar {
	-moz-box-shadow: 3px 4px 0px 0px #3dc21b;
	-webkit-box-shadow: 3px 4px 0px 0px #3dc21b;
	box-shadow: 3px 4px 0px 0px #3dc21b;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #44c767), color-stop(1, #5cbf2a));
	background:-moz-linear-gradient(top, #44c767 5%, #5cbf2a 100%);
	background:-webkit-linear-gradient(top, #44c767 5%, #5cbf2a 100%);
	background:-o-linear-gradient(top, #44c767 5%, #5cbf2a 100%);
	background:-ms-linear-gradient(top, #44c767 5%, #5cbf2a 100%);
	background:linear-gradient(to bottom, #44c767 5%, #5cbf2a 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#44c767', endColorstr='#5cbf2a',GradientType=0);
	background-color:#44c767;
	-moz-border-radius:5px;
	-webkit-border-radius:5px;
	border-radius:5px;
	border:1px solid #18ab29;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:17px;
	font-weight:bold;
	padding:12px 44px;
	text-decoration:none;
	text-shadow:0px 1px 0px #2f6627;
}
.agregar:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #5cbf2a), color-stop(1, #44c767));
	background:-moz-linear-gradient(top, #5cbf2a 5%, #44c767 100%);
	background:-webkit-linear-gradient(top, #5cbf2a 5%, #44c767 100%);
	background:-o-linear-gradient(top, #5cbf2a 5%, #44c767 100%);
	background:-ms-linear-gradient(top, #5cbf2a 5%, #44c767 100%);
	background:linear-gradient(to bottom, #5cbf2a 5%, #44c767 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#5cbf2a', endColorstr='#44c767',GradientType=0);
	background-color:#5cbf2a;

}
.agregar:active {
	position:relative;
	top:1px;
}

a.agregar:hover {
		color: white;
		text-decoration:none;
}


.descargar {
	-moz-box-shadow:inset 0px 1px 0px 0px #a4e271;
	-webkit-box-shadow:inset 0px 1px 0px 0px #a4e271;
	box-shadow:inset 0px 1px 0px 0px #a4e271;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #89c403), color-stop(1, #77a809));
	background:-moz-linear-gradient(top, #89c403 5%, #77a809 100%);
	background:-webkit-linear-gradient(top, #89c403 5%, #77a809 100%);
	background:-o-linear-gradient(top, #89c403 5%, #77a809 100%);
	background:-ms-linear-gradient(top, #89c403 5%, #77a809 100%);
	background:linear-gradient(to bottom, #89c403 5%, #77a809 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#89c403', endColorstr='#77a809',GradientType=0);
	background-color:#89c403;
	-moz-border-radius:6px;
	-webkit-border-radius:6px;
	border-radius:6px;
	border:1px solid #74b807;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:14px;
	font-weight:bold;
	padding:4px 24px;
	text-decoration:none;
	text-shadow:0px 1px 0px #528009;
}
.descargar:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #77a809), color-stop(1, #89c403));
	background:-moz-linear-gradient(top, #77a809 5%, #89c403 100%);
	background:-webkit-linear-gradient(top, #77a809 5%, #89c403 100%);
	background:-o-linear-gradient(top, #77a809 5%, #89c403 100%);
	background:-ms-linear-gradient(top, #77a809 5%, #89c403 100%);
	background:linear-gradient(to bottom, #77a809 5%, #89c403 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#77a809', endColorstr='#89c403',GradientType=0);
	background-color:#77a809;
}
.descargar:active {
	position:relative;
	top:1px;
}

a.descargar:hover {
		color: white;
		text-decoration:none;
}
a.visited:hover {
		color: white;
		text-decoration:none;
}


</style>
<nav class="navbar navbar-inverse">
 <div class="container-fluid">
	 <div class="navbar-header">
		 <a class="navbar-brand" href="../administrador.php">SAB | Servicios</a>
	 </div>
	 <ul class="nav navbar-nav">
		 <li ><a href="../administrador.php">Home</a></li>
		 <li><a href="../vacantes/vacantes.php">Vacantes</a></li>
		 <li class="active"><a href="../candidatos/consulta.php">Candidatos</a></li>
		 <li><a href="../clientes/clientes.php">Clientes</a></li>
		 <li><a href="../reclutadores/reclutadores.php">Reclutadores</a></li>

	 </ul>
 </div>
</nav>

<script>

$(document).ready( function () {
    $('#tabla_candidatos').DataTable();
} );


function actualizar_estatus(usuario, nombre,id ,status){
	window.location.href = "#progreso";
	user = usuario;
	$("#estatusAnt").html(status);
  $("#estatusAct").html($('#'+id).val());
  $("#estatusActual").val('');
  $("#estatusActual").val($('#'+id).val());
  $("#idcandidato").val(id);

}

function actualizarstatus(){
  $.ajax({
        type:'POST',
        url: 'cambiarstatus.php',
        data: {idcandidato:$('#idcandidato').val(),estatus:$('#estatusActual').val()},
        success:function(data){
      window.location.href="consulta.php";
             },
             error:function(data){
              //registro fallido
              alert("Registro fallido");
             }
           });
}

function actualizar(){
  $.ajax({
        type:'POST',
        url: 'status.php',
        data: {idpostulacion:$('#idpostulacion').val(),estatus:$('#estatusAnt').val()},
        success:function(data){
      //window.location.href="consulta.php";
             },
             error:function(data){
              //registro fallido
              alert("Registro fallido");
             }
           });
}

function mostrarcandidatos(username){
   window.location.href="#candidatoModal";
  $.ajax({
        type:'POST',
        url: 'buscarcandidatos.php',
        data: {username:username},
        success:function(data){
     $("#tabla_postulaciones").html(data);
             },
             error:function(data){
              //registro fallido
              alert("Registro fallido");
             }
           });
}

function mostrarcurriculum(username){
   window.location.href="#curriculumModal";
  $.ajax({
        type:'POST',
        url: 'buscarcurriculum.php',
        data: {username:username},
        success:function(data){
     $("#tabla_curriculum").html(data);
             },
             error:function(data){
              //registro fallido
              alert("Registro fallido");
             }
           });
}
</script>

				<section class="content">
					<div class="box">
						<div class="box-header">
							<h3 class="box-title">Consulta de Candidatos</h3>
						</div>
						<div class="box-body table-responsive">
							<table id="tabla_candidatos" class="table table-bordered table-striped" style="width:100%" >
								<thead>
									<tr>
										<th style="text-align: center !important;"></th>
										<th style="text-align: center !important;">Nombre</th>
										<th style="text-align: center !important;">En Búsqueda</th>
										<th style="text-align: center !important;">Categoría</th>
										<th style="text-align: center !important;">Categoría</th>
										<th style="text-align: center !important;">Categoría</th>
										<th style="text-align: center !important;">Tel. Celular</th>
										<th style="text-align: center !important;">Correo</th>
										<th style="text-align: center !important;">Sexo</th>
										<th style="text-align: center !important;">Edad</th>
										<th style="text-align: center !important;">Usuario</th>
										<th style="text-align: center !important;">Opciones</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$result = mysqli_query($con,"SELECT * FROM `sab_candidatos`");
									while ($row = mysqli_fetch_array ($result)) {
										$categoria1='';
										$categoria2='';
										$categoria3='';

										$resul = mysqli_query($con,"SELECT * FROM sab_empleos_categorias WHERE idcategoria= '".$row['idcategoria']."' ");
										while($rowc=mysqli_fetch_row($resul)){
											$categoria=$rowc[1];
										}
										$resul = mysqli_query($con,"SELECT * FROM sab_empleos_categorias WHERE idcategoria= '".$row['idcategoria2']."' ");
										while($rowc=mysqli_fetch_row($resul)){
											$categoria2=$rowc[1];
										}
										$resul = mysqli_query($con,"SELECT * FROM sab_empleos_categorias WHERE idcategoria= '".$row['idcategoria3']."' ");
										while($rowc=mysqli_fetch_row($resul)){
											$categoria3=$rowc[1];
										}
										$nacimiento = new DateTime($row['fecha_nacimiento']);
                    $hoy = new DateTime();
                    $edad = $hoy->diff($nacimiento);
										echo "
										<tr>
										<th><i class='fa fa-odnoklassniki'></i></th>
										<th>".$row['nombre']."</th>
										<th>";
										?>
	                    <select id="<?= $row['idcandidato'] ?>" onchange='actualizar_estatus("<?= $row['username'];?>","<?= $row['nombre'];?>","<?= $row['idcandidato'];?>","<?= $row['estatus_busqueda']; ?>");' >
										<?php

										if($row['estatus_busqueda']!='ACTIVO'){
											echo "<option value ='ACTIVO'>ACTIVO</option>";
										}
										if($row['estatus_busqueda']!='NO ACTIVO'){
											echo "<option value ='NO ACTIVO'>NO ACTIVO</option>";
										}
                   echo"
										<option value =".$row['estatus_busqueda']." selected>".$row['estatus_busqueda']."</option>
										</select>
									  </th>
										<th>".$categoria."</th>
										<th>".$categoria2."</th>
										<th>".$categoria3."</th>
										<th>".$row['telefono_celular']."</th>
										<th>".$row['email']."</th>
										<th>".$row['sexo']."</th>
										<th>".$edad->y."</th>
										<th>".$row['username']."</th>
										";
										?>
										<th><a class='btn btn-social-icon btn-default btn-xs'
											style='background:#2E9CB0'
										title='Ver Postulaciones'
										 onclick='mostrarcandidatos("<?=$row['username'];?>");'>
										 <i style='color:#fff ' class='fa fa-eye'></i></a>

										 <a class='btn btn-social-icon btn-default btn-xs'
 											style='background:#2E9CB0'
 										title='Ver Curriculum'
 										 onclick='mostrarcurriculum("<?=$row['username'];?>");'>
										 <i style='color:#fff' class="fa fa-file-text-o"></i></a>

									 </th>
								 </tr>
									<?php
									}
									 ?>
								</tbody>
							</table>
						</div>
					</div>

					<!-- Modal cambiarStatus -->
					<div id="progreso" class="modalDialog">
          		<a href="#close" title="Close" class="close">X</a>
              <div class="modal-content">
                <div class="modal-header" style="background-color:#67CAC7 !important">
                  <h3 class="modal-title" id="myModalLabel"><i class="fa fa-check"></i> SABServicios</h3>
                </div>
                <div class="modal-body" align="center">
                  <h4>¿ Deseas cambiar el estatus?</h4>
                   a <h5 id="estatusAct"></h5>
                  <input id="estatusActual" name="estatusActual" type="hidden">
                  <input id="idcandidato" name="idcandidato" type="hidden">
                </div>
                <div class="modal-footer" style="background-color:#d2d6de !important">
                  <a type="button" href="#close" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> NO</a>
                  <button type="button" class="btn btn-default" onclick="actualizarstatus();"><i class="fa fa-check"></i> SI</button>
                </div>
              </div>
          	</div>


					<!-- Postulaciones -->
						<div id="candidatoModal" class="modalDialog" role="document">
              	<a href="#close" title="Close" class="close">X</a>
 								<div class="modal-content">
									<div class="modal-header" style="background-color:#2E9CB0 !important">
										<h3 class="modal-title" id="myModalLabel"><i class="fa fa-check"></i> SABServicios</h3>
									</div>
									<div class="modal-body" align="center">
										<h4> P O S T U L A C I O N E S </h4>
										<div class="box-body table-responsive">
											<table id="tabla_postulaciones" class="table table-bordered table-striped">
											</table>
										</div>
									</div>
									<div class="modal-footer" style="background-color:#d2d6de !important">
                    <a type="button" href="#close" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> Cerrar</a>
									</div>
								</div>
						</div>

						<!-- Curriculum -->
							<div id="curriculumModal" class="modalDialog" role="document">
									<a href="#close" title="Close" class="close">X</a>
									<div class="modal-content">
										<div class="modal-header" style="background-color:#2E9CB0 !important">
											<h3 class="modal-title" id="myModalLabel"><i class="fa fa-check"></i> SABServicios</h3>
										</div>
										<div class="modal-body" align="center">
											<h4> C U R R I C U L U M </h4>
											<div class="box-body table-responsive">
												<table id="tabla_curriculum" class="table table-bordered table-striped">
												</table>
											</div>
										</div>
										<div class="modal-footer" style="background-color:#d2d6de !important">
											<a type="button" href="#close" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> Cerrar</a>
										</div>
									</div>
							</div>



					<div id="ver_vacnates" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						<div class="modal-dialog" role="document">
							<!--<?= form_open('sab/candidato/proceso', array('method' => 'post', 'id' => 'form_proceso', 'name' => 'form_proceso')); ?> <!--cambiar el form para cambiar el estatus de postulacion -->
							<div class="modal-header" style="background-color:#60C8BE !important; color:white"><!-- #3878B0-->
								<h3 class="modal-title" id="myModalLabel"> <label  id="nombreCandidato"></label> Mis vacantes</h3>
							</div>
							<div class="modal-body" align="center">
								<!--<div class="box-body table-responsive" id="vistaSubcategoria">    onclick="form_proceso.submit()"-->
								<div class="box-body table-responsive" id=tabla_vanc >
								</div>
							</div>
							<div class="modal-footer" style="background-color:#60C8BE !important">
								<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
							</div>
								<div class="modal-content">
								</div>
							<!--<?= form_close(); ?>-->
						</div>
					</div>

					<div id="progreso" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						<div class="modal-dialog modal-lg" role="document" >
							<!--<?= form_open('sab/candidato/proceso', array('method' => 'post', 'id' => 'form_proceso', 'name' => 'form_proceso')); ?> <!--cambiar el form para cambiar el estatus de postulacion -->
								<div class="modal-content">
									<div class="modal-header" style="background-color:#00a65a !important; color:white"><!-- #3878B0-->
										<h3 class="modal-title" id="myModalLabel"> <label  id="nombreCandidato"></label> Vamos al siguiente paso!!</h3>
									</div>
									<div class="modal-body" align="center">
										<!--<div class="box-body table-responsive" id="vistaSubcategoria">    onclick="form_proceso.submit()"-->
										<div>
										<button class="btn btn-primary btn-lg progreso" type="button" onclick="cambiar_estatus('Postulada')"><div class="postulada"><i class="fa fa-navicon"></i> </div> Postulada</button>
										<button class="btn btn-info btn-lg progreso" type="button" onclick="cambiar_estatus('CV Visto')"><div class="postulada"><i class="fa fa-tripadvisor mira"></i></div> CV Visto</button>
										</div>
										<!-- Terminar proceso -->
										<button class="btn btn-danger btn-lg progreso" type="button" onclick="cambiar_estatus('Terminado')"><div class="proceso"><i class="fa fa-thumbs-down finalista"></i></div> Terminar proceso</button>
										<div>
										<button class="btn btn-warning btn-lg progreso" type="button" onclick="cambiar_estatus('En Proceso')"><div class="proceso"><i class="fa fa-cog proce"></i><i class="fa fa-cog proce proce2"></i><i class="fa fa-cog proce"></i></div> En Proceso</button>
										<button class="btn btn-success btn-lg progreso" type="button" onclick="cambiar_estatus('Finalista')"><div class="finalista"><i class="fa fa-child finalista"></i></div> Finalista</button>
										</div>

									</div>
									<div class="modal-footer" style="background-color:#C4CBD0 !important">
										<button type="button" class="btn btn-success" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>

									</div>
								</div>
							<!--<?= form_close(); ?>-->
						</div>
					</div>
				</section>
<!--
<script type="text/javascript">

	function mostrar_vacantes(username){
		$('#ver_vacnates').modal({
			show: true,
		});


		$.ajax({
			url:"ver_vacantes.php",
			data: {username: username},
			type: 'POST',
			dataType: 'html',
		}).done(function(data){
				$('#tabla_vanc').html(data);

		});

		/*$.ajax({
			url:"proceso_candidato",
			data: {username: user, estatus: status, idvacante: idvacante,correo : correo},
			type: 'POST',
			dataType: 'json',
		}).done(function(data){
			if(data.actualizado == 1){
				location.reload();
			}else{
				alert("Error: Al actualizar");
			}
		});*/
		//$("#btn-estatus").attr('data-dismiss','modal');
	}

	var user = '';
	var idvacante = '';
	var correo = '';
	function actualizar_estatus(usuario, nombre,id ,correoCandidato){
		user = usuario;
		idvacante = id;
		$('#nombreCandidato').text(nombre);
		correo = correoCandidato;
		$('#progreso').modal({
			show: true,
		});
		 console.log("jsjs");
		 /*$('#ver_vacnates').modal({
			data-dismiss: 'modal',
		});*/


		/*$('#ver_vacnates').modal({
			show: false,
		});*/

	}


	function cambiar_estatus(status,user,idvacante,correo){
		console.log(status+user+' id '+idvacante+correo);
		$.ajax({
			url:"proceso_candidato.php",
			data: {username: user, estatus: status, idvacante: idvacante,correo : correo},
			type: 'POST',
			dataType: 'json',
		}).done(function(data){
			if(data.actualizado == 1){
				location.reload();
			}else{
				alert("Error: Al actualizar");
			}
		});
	}


</script>
-->


<footer class="main-footer">
      <div class="pull-right hidden-xs">
        <b>Powered by <a href="http://www.hellodigital.mx/">Hello Digital S. de R.L. de C.V.</a></b>
      </div>
      <strong>&copy; Copyright <?= date('Y'); ?> SAB Servicios Profesionales S.A. de C.V.</strong>
    </footer>
