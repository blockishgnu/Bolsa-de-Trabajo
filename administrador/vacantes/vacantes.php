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
    <br><img src='../../public/sab/img/adm.jpg' class='img-circle' alt='User Image' width='70px;' style='border:4px solid black;  margin-left: 60px;' >
    <a href = '../../logout.php' tite = 'Logout'><img src='../../public/sab/img/logout.png' width='60px;' style=' margin-right: 30px;' align='right'></a>
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

    $result4 = mysqli_query($con,"SELECT `idcategoria` FROM `sab_vacantes`");
    //$categorias=mysqli_num_rows($result4);
    $categorias = mysqli_fetch_array ($result4);

   $result5 = mysqli_query($con,"SELECT * FROM `sab_candidatos`");

      while ($row = mysqli_fetch_array ($result5)) {

  }



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
  <!-- Morris chart -->
  <link rel="stylesheet" href="../../public/sab/css/morris.css">
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

  <?= ((isset($css))? $css : ''); ?>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


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
   <!-- Morris.js charts -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
   <script src="../../public/sab/js/morris.min.js"></script>
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
   <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
   <script src="../../public/sab/js/dashboard.js"></script>
   <script src="../../public/sab/js/dashboard2.js"></script>
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
<?= ((isset($js))? $js : ''); ?>

</head>
<body>
<nav class="navbar navbar-inverse">
 <div class="container-fluid">
   <div class="navbar-header">
     <a class="navbar-brand" href="../administrador.php">SAB | Servicios</a>
   </div>
   <ul class="nav navbar-nav">
     <li><a href="../administrador.php">Home</a></li>
     <li class="active"><a href="../vacantes/vacantes.php">Vacantes</a></li>
     <li><a href="../candidatos/consulta.php">Candidatos</a></li>
     <li><a href="../clientes/clientes.php">Clientes</a></li>
     <li><a href="../reclutadores/reclutadores.php">Reclutadores</a></li>

   </ul>
 </div>
</nav>

 <div class="container">

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

</style>
<script>
/*Cambio de estatus de la vacante */

function cambiarStatus(id,status){

  //$('#cambio_Status').modal({
    window.location.href = "#cambio_Status";
    //show: true
  //});

  $("#estatusAnt").html(status);
  $("#estatusAct").html($('#'+id).val());
  $("#estatusActual").val('');
  $("#estatusActual").val($('#'+id).val());
  $("#idVacante").val(id);
}

function actualizarstatus(){
  $.ajax({
        type:'POST',
        url: 'cambiarstatus.php',
        data: {idvacante:$('#idVacante').val(),estatus:$('#estatusActual').val()},
        success:function(data){

      window.location.href="vacantes.php";

             },
             error:function(data){
              //registro fallido
              alert("Registro fallido");
             }
           });

}

function confirmareliminar(idvacante,nombre){
  window.location.href = "#eliminarModal";

  $("#info_vacante_eli").empty();
  $("#info_vacante_eli").append(nombre);
  $("#idvacante_eli").val('');
  $("#idvacante_eli").val(idvacante);
}

function eliminar(){
  $.ajax({
        type:'POST',
        url: 'eliminar.php',
        data: {idvacante:$('#idvacante_eli').val()},
        success:function(data){

      window.location.href="vacantes.php";

             },
             error:function(data){
              //registro fallido
              alert("Registro fallido");
             }
           });

}
function mostrarcandidatos(idvacante){

   window.location.href="#candidatoModal";

  $.ajax({
        type:'POST',
        url: 'buscarcandidatos.php',
        data: {idvacante:idvacante},
        success:function(data){
     $("#tabla_candidatos").html(data);
             },
             error:function(data){
              //registro fallido
              alert("Registro fallido");
             }
           });
}


</script>

				<section class="content">
          <a href="nueva.php" class="agregar">Agregar Vacante</a>
          <br>
          <br>
					<div class="box">
						<div class="box-header">
							<h3 class="box-title">Consulta de Vacantes</h3>
						</div>

						<div class="box-body table-responsive">
							<table id="tabla_reclutadores" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th style="text-align: center !important;"></th>
                    <th style="text-align: center !important;">Imagen</th>
										<th style="text-align: center !important;">Vacante</th>
										<th style="text-align: center !important;">Cliente</th>
										<th style="text-align: center !important;">Reclutador</th>
										<th style="text-align: center !important;">Estatus</th>
										<th style="text-align: center !important;">Fecha</th>
										<th style="text-align: center !important;">Postulados</th>
										<th style="text-align: center !important;">Visto</th>
										<th style="text-align: center !important;">Opciones</th>
									</tr>
								</thead>
								<tbody>
                  <?php
                    $result = mysqli_query($con,"SELECT * FROM `sab_vacantes`");
                    while ($row = mysqli_fetch_array ($result)) {
                      $rest = mysqli_query($con," SELECT nombre FROM sab_clientes WHERE idcliente=".$row['idcliente']."");
                      $row2 = mysqli_fetch_array($rest);
                      $rest1 = mysqli_query($con," SELECT nombre FROM sab_reclutadores WHERE idreclutador=".$row['idReclutador']."");
                      $row3 = mysqli_fetch_array($rest1);
                      echo "
                      <tr>
                      <th><i class='fa fa-briefcase'></i></th>
                      ";
                      ?>
                      <th>
                      <img src="data:image/png;base64,<?php echo base64_encode($row['foto']); ?>" alt="titulo foto"  width='150'  />
                      <?php
                      echo "
                 <form enctype='multipart/form-data' action='imagen.php?idvacante=".$row['idvacante']."' method='POST'>
                <p><b>Actualizar Foto:</b><br /><input name='foto' type='file' accept='image/*' />
                <p><input type='submit' value='Guardar' />
                <input type='hidden' value='1' name='enviado' />
               </form>
                      </th>
                      <th><a href='ver_vacante.php?idvacante=".$row['idvacante']."' >".$row['nombre']."</a></th>
                      <th>".$row2['nombre']."</th>
                      <th>".$row3['nombre']."</th>
                      <th>";
                      ?>
                      <select id="<?= $row['idvacante'] ?>" onchange='cambiarStatus("<?= $row['idvacante'] ?>","<?= $row['estatus'] ?>");'>
                       <?php
                       if($row['estatus']!='CUBIERTA'){
                       echo "<option value='CUBIERTA'>CUBIERTA</option>";
                       }
                       if($row['estatus']!='CANCELADA'){
                       echo "<option value='CANCELADA'>CANCELADA</option>";
                       }
                       if($row['estatus']!='ACTIVA'){
                       echo "<option value='ACTIVA'>ACTIVA</option>";
                       }
                       echo"
                       <option value='".$row['estatus']."' selected>".$row['estatus']."</option>
                     </select>
                      </th>
                      <th>".$row['fecha']."</th>
                      <th>".$row['postulados']."</th>
                      <th>".$row['visto']."</th>
                      <th>
                      <!--Editar-->
                      <a class='btn btn-social-icon btn-primary btn-xs'
                      title='Editar Vacante'
                       href='editar.php?idvacante=".$row['idvacante']."'>
                       <i class='fa fa-pencil'></i></a>
                       ";?>
                       <!--Eliminar-->
                       <a class='btn btn-social-icon btn-danger btn-xs'
                       title='Eliminar Vacante'
                        onclick='confirmareliminar("<?=$row['idvacante']?>","<?=$row['nombre']?>");'>
                        <i class='fa fa-trash'></i></a>
                        <!--Ver candidatos-->
                        <a class='btn btn-social-icon btn-default btn-xs'
                        style='background:#2E9CB0'
                        title='Ver candidatos'
                        onclick='mostrarcandidatos("<?= $row['idvacante'] ?>");'>
                        <i style='color:#fff ' class='fa fa-user'></i></a>

                       </th>
                      </tr>
              <?php
                }
                   ?>
								</tbody>
							</table>
						</div>
					</div>
       <!--Modal cambiar estatus -->
          <div id="cambio_Status" class="modalDialog">
          		<a href="#close" title="Close" class="close">X</a>
              <div class="modal-content">
                <div class="modal-header" style="background-color:#67CAC7 !important">
                  <h3 class="modal-title" id="myModalLabel"><i class="fa fa-check"></i> SABServicios</h3>
                </div>
                <div class="modal-body" align="center">
                  <h4>¿ Deseas cambiar el estatus de la Vacante?</h4>
                    <h5 id="estatusAnt"></h5>
                   a <h5 id="estatusAct"></h5>
                  <input id="estatusActual" name="estatusActual" type="hidden">
                  <input id="idVacante" name="idVacante" type="hidden">
                </div>
                <div class="modal-footer" style="background-color:#d2d6de !important">
                  <a type="button" href="#close" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> NO</a>
                  <button type="button" class="btn btn-default" onclick="actualizarstatus();"><i class="fa fa-check"></i> SI</button>
                </div>
              </div>
          	</div>
          </div>
           <!--Modal Confirmar eliminar -->
 						<div id="eliminarModal" class="modalDialog" role="document">
 								<div class="modal-content">
 									<div class="modal-header" style="background-color:#f56954 !important">
 										<h3 class="modal-title" id="myModalLabel"><i class="fa fa-warning"></i> Alerta SABServicios</h3>
 									</div>
 									<div class="modal-body" align="center">
 										<h4>¿Realmente deseas Eliminar la Vacante?</h4>
 										<h5 id="info_vacante_eli"></h5>
 										<input id="idvacante_eli" name="idvacante_eli" type="hidden">
 									</div>
 									<div class="modal-footer" style="background-color:#d2d6de !important">
 										<a type="button" href="#close" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> NO</a>
 										<button type="button" class="btn btn-primary" onclick="eliminar();"><i class="fa fa-check"></i> SI</button>
 									</div>
 								</div>
 						</div>
 					</div>
          <!-- candidato -->
						<div id="candidatoModal" class="modalDialog" role="document">
              	<a href="#close" title="Close" class="close">X</a>
 								<div class="modal-content">
									<div class="modal-header" style="background-color:#2E9CB0 !important">
										<h3 class="modal-title" id="myModalLabel"><i class="fa fa-check"></i> SABServicios</h3>
									</div>
									<div class="modal-body" align="center">
										<h4> C A N D I D A T O S </h4>
										<div class="box-body table-responsive">
											<table id="tabla_candidatos" class="table table-bordered table-striped">
											</table>
										</div>
									</div>
									<div class="modal-footer" style="background-color:#d2d6de !important">
                    <a type="button" href="#close" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> Cerrar</a>
									</div>
								</div>
						</div>

					<!-- candidato-->


					<div id="activarModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						<div class="modal-dialog" role="document">
							<?= form_open('sab/cliente/activar', array('method' => 'post', 'id' => 'form_activar_cliente', 'name' => 'form_activar_cliente')); ?>
								<div class="modal-content">
									<div class="modal-header" style="background-color:#00a65a !important">
										<h3 class="modal-title" id="myModalLabel"><i class="fa fa-warning"></i> Alerta SABServicios</h3>
									</div>
									<div class="modal-body" align="center">
										<h4>¿Realmente deseas Activar al Cliente?</h4>
										<h5 id="info_usuario_act"></h5>
										<input id="username_act" name="username_act" type="hidden">
									</div>
									<div class="modal-footer" style="background-color:#d2d6de !important">
										<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> NO</button>
										<button type="button" class="btn btn-primary" onclick="form_activar_cliente.submit()"><i class="fa fa-check"></i> SI</button>
									</div>
								</div>
							<?= form_close(); ?>
						</div>
					</div>


					<div id="desactivarModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						<div class="modal-dialog" role="document">
							<?= form_open('sab/cliente/desactivar', array('method' => 'post', 'id' => 'form_desactivar_cliente', 'name' => 'form_desactivar_cliente')); ?>
								<div class="modal-content">
									<div class="modal-header" style="background-color:#f39c12 !important">
										<h3 class="modal-title" id="myModalLabel"><i class="fa fa-warning"></i> Alerta SABServicios</h3>
									</div>
									<div class="modal-body" align="center">
										<h4>¿Realmente deseas Desactivar al Cliente?</h4>
										<h5 id="info_usuario"></h5>
										<input id="username" name="username" type="hidden">
									</div>
									<div class="modal-footer" style="background-color:#d2d6de !important">
										<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> NO</button>
										<button type="button" class="btn btn-primary" onclick="form_desactivar_cliente.submit()"><i class="fa fa-check"></i> SI</button>
									</div>
								</div>
							<?= form_close(); ?>
						</div>
					</div>

					<div id="eliminarModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						<div class="modal-dialog" role="document">
							<?= form_open('sab/vacante/eliminar', array('method' => 'post', 'id' => 'form_eliminar_vacante', 'name' => 'form_eliminar_vacante')); ?>
								<div class="modal-content">
									<div class="modal-header" style="background-color:#f56954 !important">
										<h3 class="modal-title" id="myModalLabel"><i class="fa fa-warning"></i> Alerta SABServicios</h3>
									</div>
									<div class="modal-body" align="center">
										<h4>¿Realmente deseas Eliminar la Vacante?</h4>
										<h5 id="info_vacante_eli"></h5>
										<input id="idvacante_eli" name="idvacante_eli" type="hidden">
									</div>
									<div class="modal-footer" style="background-color:#d2d6de !important">
										<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> NO</button>
										<button type="button" class="btn btn-primary" onclick="form_eliminar_vacante.submit()"><i class="fa fa-check"></i> SI</button>
									</div>
								</div>
							<?= form_close(); ?>
						</div>
					</div>

					<!-- duplicar -->
					<div id="duplicarModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						<div class="modal-dialog" role="document">
							<?= form_open('sab/vacante/duplicar', array('method' => 'post', 'id' => 'form_duplicar_vacante', 'name' => 'form_duplicar_vacante')); ?>
								<div class="modal-content">
									<div class="modal-header" style="background-color:#F0BA4F !important">
										<h3 class="modal-title" id="myModalLabel"><i class="fa fa-check"></i> SABServicios</h3>
									</div>
									<div class="modal-body" align="center">
										<h4>¿ Deseas duplicar la Vacante?</h4>
										<h5 id="info_vacante_duplicar"></h5>
										<input id="idvacante_duplicar" name="idvacante_duplicar" type="hidden">
									</div>
									<div class="modal-footer" style="background-color:#d2d6de !important">
										<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> NO</button>
										<button type="button" class="btn btn-warning" onclick="form_duplicar_vacante.submit()"><i class="fa fa-check"></i> SI</button>
									</div>
								</div>
							<?= form_close(); ?>
						</div>
					</div>

					<!-- candidato -->
					<div id="candidatoModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						<div class="modal-dialog" role="document">

								<div class="modal-content">
									<div class="modal-header" style="background-color:#2E9CB0 !important">
										<h3 class="modal-title" id="myModalLabel"><i class="fa fa-check"></i> SABServicios</h3>
									</div>
									<div class="modal-body" align="center">
										<h4> C A N D I D A T O S </h4>

										<div class="box-body table-responsive">
											<table id="tabla_candidatos" class="table table-bordered table-striped">

											</table>
										</div>

									</div>
									<div class="modal-footer" style="background-color:#d2d6de !important">
									</div>
								</div>

						</div>
					</div>

					<!-- candidato-->

				</section>

<!--
<script type="text/javascript">
	$("#tabla_reclutadores").DataTable({
		"bProcessing": true,
		"sPaginationType": "full_numbers",
		"aLengthMenu": [[5, 10, 25, 50], [5, 10, 25, 50]],
		"iDisplayLength": 10,
		"aaSorting": [ [1, 'desc'] ],
		"bAutoWidth": false,
		"language": {
			"search": "Buscar: ",
            "lengthMenu": "Mostrar _MENU_ resultados por pagina",
            "zeroRecords": "No se encontraron resultados.",
            "info": "Mostrando pagina _PAGE_ de _PAGES_",
            "infoEmpty": "No hay registros disponibles",
            "infoFiltered": "",
            "paginate": {
	            "first": "Inicio",
	            "last" : "Final",
	            "previous" : "Anterior",
	            "next"  : "Siguiente"
            }
        },
        "aoColumns": [
			{ "sWidth": "3%", "bSortable": false, "sClass": "dt_center" },
			{ "sWidth": "20%", "bSortable": true, "sClass": "dt_left" },
			{ "sWidth": "25%", "bSortable": false, "sClass": "dt_left" },
			{ "sWidth": "10%", "bSortable": true, "sClass": "dt_center" },
			{ "sWidth": "10%", "bSortable": false, "sClass": "dt_center" },
			{ "sWidth": "10%", "bSortable": false, "sClass": "dt_center" },
			{ "sWidth": "10%", "bSortable": false, "sClass": "dt_center" },
			{ "sWidth": "10%", "bSortable": false, "sClass": "dt_center" },
			{ "sWidth": "12%", "bSortable": false, "sClass": "dt_center" }
		],
		"bServerSide": true,
		"sAjaxSource": "buscar_vacantes.php",
		"sServerMethod": "POST"
	});





	function activar(username,nombre) {

		$('#activarModal').modal({
			show: true
		});

		$("#info_usuario_act").empty();
		$("#info_usuario_act").append(nombre);
		$("#username_act").val('');
		$("#username_act").val(username);
	}

	function desactivar(username,nombre) {
		$('#desactivarModal').modal({
			show: true
		});

		$("#info_usuario").empty();
		$("#info_usuario").append(nombre);
		$("#username").val('');
		$("#username").val(username);
	}

	function eliminar(idvacante,nombre,cliente) {
		$('#eliminarModal').modal({
			show: true
		});

		$("#info_vacante_eli").empty();
		$("#info_vacante_eli").append(nombre + ' - ' + cliente);
		$("#idvacante_eli").val('');
		$("#idvacante_eli").val(idvacante);
	}
	function duplicar(idvacante,nombre,cliente) {
		$('#duplicarModal').modal({
			show: true
		});

		$("#info_vacante_duplicar").empty();
		$("#info_vacante_duplicar").append(nombre + ' - ' + cliente);
		$("#idvacante_duplicar").val('');
		$("#idvacante_duplicar").val(idvacante);
	}
		function ver_candidatos(id,nombre){
		console.log(id);
		$('#candidatoModal').modal({
			show: true
		});


		$.ajax({
			url:"candidatos.php",
			data: {id: id},
			type: 'POST',
			dataType: 'html',
		}).done(function(data){

			console.log(data);
			$("#tabla_candidatos").html(data);

		});

	}
</script>
-->
</div>

    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        <b>Powered by <a href="http://www.hellodigital.mx/">Hello Digital S. de R.L. de C.V.</a></b>
      </div>
      <strong>&copy; Copyright <?= date('Y'); ?> SAB Servicios Profesionales S.A. de C.V.</strong>
    </footer>
  </div>
</body>
</html>
