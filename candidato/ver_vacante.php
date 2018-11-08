<?php

session_start();
include("../connect.php");

//error_reporting(E_ALL ^ E_NOTICE);


if(isset($_SESSION['usuario'])){

    $usuario= $_SESSION['usuario'];
    $tipo= $_SESSION['tipo'];
		$idvacante=$_GET['idvacante'];




   $resultf=mysqli_query($con,"SELECT 'foto' FROM `sab_vacantes` WHERE `estatus` = 'ACTIVA'");
	 $idclien='';
	 $nclie='';
	 $uclie='';

  // echo"<img src='../public/sab/img/adm.jpg'  class='user-image' alt='User Image'>";
   //echo"<img src="" class="img-circle" alt="User Image">"

    //echo "Has iniciado sesion";
    echo "<br>Bienvenido: <b>".$usuario."</b>";
    echo "<br><img src='../public/sab/img/adm.jpg' class='img-circle' alt='User Image' width='50px;'>";
    $result = mysqli_query($con,"SELECT * FROM `sab_vacantes` WHERE `estatus` = 'ACTIVA'");
    $total_vacantes=mysqli_num_rows($result);

    $result1 = mysqli_query($con,"SELECT * FROM `sab_postulaciones`");
    $total_postulaciones=mysqli_num_rows($result1);

    $result3 = mysqli_query($con,"SELECT * FROM `sab_candidatos`");
    $total_candidatos=mysqli_num_rows($result3);

		$result4 = mysqli_query($con,"SELECT * FROM `sab_vacantes` WHERE idvacante=".$idvacante." ");
		//$categorias=mysqli_num_rows($result4);
		//$row = mysqli_fetch_array ($result4);
		while ($row = mysqli_fetch_array ($result4)){
			$idclien =$row['idcliente'];
			$nclie =$row['nombre_cliente'];
			$uclie =$row['ubicacion_cliente'];

}
   $nomclie='';
	 $desclie='';
	 $calle='';
	 $nuex='';
	 $colonia='';
	 $municipio='';
	 $estado='';

$result2 = mysqli_query($con,"SELECT * FROM `sab_clientes` WHERE idcliente=".$idclien."");
while($row=mysqli_fetch_array($result2)){
	$nomclie=$row['nombre'];
	$desclie=$row['descripcion'];
	$calle=$row['calle'];
	$nuex=$row['numero_exterior'];
	$colonia=$row['colonia'];
	$municipio=$row['municipio'];
	$estado=$row['estado'];

}

   $result5 = mysqli_query($con,"SELECT * FROM `sab_candidatos`");

      while ($row = mysqli_fetch_array ($result5)) {

  }



}else{
    header("Location: ../../login.php");
    exit;
}

echo "<a href = '../../logout.php' tite = 'Logout'><img src='../../public/sab/img/logout.png' width='35px;' align='right'></a>";


 $result4 = mysqli_query($con,"SELECT * FROM `sab_vacantes` WHERE idvacante=".$idvacante." ");
 while ($row = mysqli_fetch_array ($result4)){

if($_SESSION['tipo']=='CANDIDATO'){

  $visto=$row['visto'];
  $visto++;
  $sql="UPDATE sab_vacantes SET visto='".$visto."' WHERE idvacante=".$idvacante."";
  if(mysqli_query($con,$sql)){

  }else{
    echo"Error: Could not able to execute $sql.". mysqli_error($con);
  }


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

  <link rel="stylesheet" href="../css/jquery.gritter.css">

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

   <script src="../js/jquery.gritter.js"></script>

   <!-- Global site tag (gtag.js) - Google Analytics -->
 <script async src="https://www.googletagmanager.com/gtag/js?id=UA-128389690-1"></script>

<?= ((isset($js))? $js : ''); ?>

</head>

<!-- Google Analytics script -->
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-128389690-1');
</script>

<script>

function postularse(){

 username='<?=$_SESSION['usuario']?>';
 idvacante='<?=$idvacante?>';

  $.ajax({
  type:'POST',
  url:'postulacion.php',
  data:{username:username, idvacante:idvacante},
  success:function(data){
    if(data==0){
      $.gritter.add({
       title: 'EXITO!',
       text: 'Te has postulado correctamente'
     });
    }else if(data==1){
      $.gritter.add({
       title: 'ERROR!',
       text: 'No se ha podido postular, intentelo de nuevo'
     });
    }else if(data==2){
      $.gritter.add({
       title: 'AVISO!',
       text: 'Ya te has postulado a esta vacante'
     });
    }

  }


  });
}


</script>
<br>
<br>


				<section class="content">
				<?php

					if ($nclie == 'SI' || $uclie == 'SI') {
				?>
					<div class="row">
						<div class="col-md-12">
							<div class="box box-success">
								<div class="box-header with-border">
									<?php if($row['nombre_cliente'] == 'SI') {?>
									<h3 class="box-title" style="color: #008d4c; font-weight: bold;"><?php echo $nomclie; ?></h3>
									<?php }?>
								</div>

								<?php
									if ($uclie == 'NO') {
								?>
								<div class="box-body" style="text-align: justify !important;">

									Esta ubicación no se puede mostrar
								</div>
								<?php
									}
									else if ($uclie == 'SI') {
								?>
								<div class="box-body">
									<div class="row">
										<div class="col-lg-5 col-xs-12" style="text-align: justify !important;">
                      <h3 class="box-title" style="color: #008d4c;">Descripción de la empresa</h3>
											<?php echo $desclie; ?>
										</div>

										<div class="col-lg-7 col-xs-12">
											<table style="width: 100% !important;">
												<tr>
													<td>
														<div id="map_canvas" style="height: 250px;">
                              <h3 class="box-title" style="color: #008d4c;">Dirección:</h3>
                              <?php echo "".$calle." #".$nuex." ".$municipio." ".$estado; ?>

														</div>
													</td>
												</tr>
											</table>
										</div>
									</div>
								</div>
								<?php
									}
								?>
							</div>
						</div>
					</div>
					<?php }?>
					<div class="row">
						<div class="col-lg-6 col-xs-12">
							<div class="box box-success">
								<div class="box-header with-border">
									<h3 class="box-title" style="color: #008d4c;">Descripción General</h3>
								</div>

								<div class="box-body">
									<div class="row">
										<div class="form-group">
											<label class="col-lg-3 col-xs-4">Descripción de Tareas</label>
											<div class="col-lg-9 col-xs-8">
												<?php
													echo nl2br($row['descripcion_tareas']);
										?>

											</div>
										</div>
									</div>

									<br>

									<div class="row">
										<div class="form-group">
											<label class="col-lg-3 col-xs-4">Jornada Laboral</label>
											<div class="col-lg-9 col-xs-8">
												<?php

													echo $row['jornada_laboral'];

												 ?>

											</div>
										</div>
									</div>

									<br>

									<div class="row">
										<div class="form-group">
											<label class="col-lg-3 col-xs-4">Horario Laboral</label>
											<div class="col-lg-9 col-xs-8">
												<?php

													echo $row['horario_laboral'];

												 ?>
											</div>
										</div>
									</div>

									<br>

									<div class="row">
										<div class="form-group">
											<label class="col-lg-3 col-xs-4">Tipo de Contrato</label>
											<div class="col-lg-9 col-xs-8">
												<?php

													echo $row['tipo_contrato'];

												 ?>

											</div>
										</div>
									</div>

									<br>

									<div class="row">
										<div class="form-group">
											<label class="col-lg-3 col-xs-4">Salario</label>
											<div class="col-lg-9 col-xs-8">
												<?php

												 if($row['a_convenir']=='SI'){
													 echo "A convenir";
												 }else{
 												 echo $row['salario'];
											 }

 												?>

											</div>
										</div>
									</div>

									<br>

									<div class="row">
										<div class="form-group">
											<label class="col-lg-3 col-xs-4">Fecha de Contratación</label>
											<div class="col-lg-9 col-xs-8">
												<?php
													echo date('d-m-Y', strtotime($row['fecha_contratacion']));

												 ?>

											</div>
										</div>
									</div>

									<br>

									<div class="row">
										<div class="form-group">
											<label class="col-lg-3 col-xs-4">Cantidad de Vacantes</label>
											<div class="col-lg-9 col-xs-8">

												<?php

													echo $row['cantidad_vacantes'];

												 ?>
											</div>
										</div>
									</div>

									<br>

									<div class="row">
										<div class="form-group">
											<label class="col-lg-3 col-xs-4">Ciudad</label>
											<div class="col-lg-9 col-xs-8">
												<?php
												$result5 = mysqli_query($con,"SELECT * FROM `sab_clientes` WHERE `idcliente`=".$idclien."");
												while ($row = mysqli_fetch_array($result5)){
													echo $row['ciudad'];
										}
												 ?>

											</div>
										</div>
									</div>

									<br>

									<div class="row">
										<div class="form-group">
											<label class="col-lg-3 col-xs-4">Estado</label>
											<div class="col-lg-9 col-xs-8">
												<?php
												$result5 = mysqli_query($con,"SELECT * FROM `sab_clientes` WHERE `idcliente`=".$idclien."");
												while ($row = mysqli_fetch_array($result5)){
													echo $row['estado'];

										}
												 ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
            <?php
          } ?>

						<div class="col-lg-6 col-xs-12">
							<div class="box box-success">
								<div class="box-header with-border">
									<h3 class="box-title" style="color: #008d4c;">Requerimientos</h3>
								</div>

								<div class="box-body" style="font-size: 15px !important;">
									<div class="row">
										<div class="form-group">
											<label class="col-lg-3 col-xs-4">Años de Experiencia</label>
											<div class="col-lg-9 col-xs-8">

												<?php
                        $result4 = mysqli_query($con,"SELECT * FROM `sab_vacantes` WHERE idvacante=".$idvacante." ");
                        while ($row = mysqli_fetch_array ($result4)){

													echo $row['experiencia'];

												 ?>
											</div>
										</div>
									</div>

									<br>

									<div class="row">
										<div class="form-group">
											<label class="col-lg-3 col-xs-4">Rango de Edad</label>
											<div class="col-lg-9 col-xs-8">
												<?php

													echo $row['edad_minima'].' - '.$row['edad_maxima']." años";

												 ?>
											</div>
										</div>
									</div>

									<br>

									<div class="row">
										<div class="form-group">
											<label class="col-lg-3 col-xs-4">Estudios Mínimos</label>
											<div class="col-lg-9 col-xs-8">
												<?php

													echo $row['estudios_minimos'];

												 ?>
											</div>
										</div>
									</div>

									<br>

									<div class="row">
										<div class="form-group">
											<label class="col-lg-3 col-xs-4">Inglés</label>
											<div class="col-lg-9 col-xs-8">
												<?php

													echo $row['idioma'];

												 ?>
											</div>
										</div>
									</div>

									<br>

									<div class="row">
										<div class="form-group">
											<label class="col-lg-3 col-xs-4">Lincencia de Conducir</label>
											<div class="col-lg-9 col-xs-8">
												<?php

													echo $row['licencia_conducir'];

												 ?>
											</div>
										</div>
									</div>

									<br>

									<div class="row">
										<div class="form-group">
											<label class="col-lg-3 col-xs-4">Disponiblidad para Viajar</label>
											<div class="col-lg-9 col-xs-8">
												<?php

													echo $row['disponibilidad_viajar'];

												 ?>
											</div>
										</div>
									</div>

									<br>

									<div class="row">
										<div class="form-group">
											<label class="col-lg-3 col-xs-4">Disponibilidad para cambiar de Residencia</label>
											<div class="col-lg-9 col-xs-8">
												<?php

													echo $row['disponibilidad_residencia'];

												 ?>
											</div>
										</div>
									</div>

									<br>

									<div class="row">
										<div class="form-group">
											<label class="col-lg-3 col-xs-4">Personas con Discapacidad</label>
											<div class="col-lg-9 col-xs-8">
												<?php

													echo $row['personas_discapacidad'];

												 ?>
											</div>
										</div>
									</div>

									<br>

									<div class="row">

									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">

								<input id="idvacante" name="idvacante" type="hidden" value="<?= $vacante->idvacante; ?>">
								<button type="button" class="btn btn-lg btn-success" onclick="postularse()" style="width: 100%;"><i class="fa fa-check"></i> P O S T U L A R S E</button>

						</div>
					</div>
				</section>
        <?php
      } ?>
<!--
<script type="text/javascript">
	initialize();
	gmaps_ads();
	var map = null;
	var marker = null;

	function initialize() {
	    var myLatlng = new google.maps.LatLng(20.68009, -101.35403);
	    var myOptions = {
	        zoom: 4,
	        center: myLatlng,
	        mapTypeId: google.maps.MapTypeId.ROADMAP
	    };
	    map = new google.maps.Map($("#map_canvas").get(0), myOptions);
		marker = new google.maps.Marker({ map: map });
		var address = ((('<?php $calle; ?>' != '')? '<?php $calle; ?>' + ' ' : '') + (('<?php  $nuex; ?>' != '')? '<?php $nuex; ?>' + ' ' : '') + (('<?php $colonia; ?>' != '')? '<?= $colonia; ?>' + ' ' : '') + (('<?= $municipio; ?>' != '')? '<?= $municipio; ?>' + ' ' : '') + (('<?= $estado; ?>' != '')? '<?= $estado; ?>' + ' ' : ''));
	    var geocoder = new google.maps.Geocoder();
	    geocoder.geocode({ 'address': address}, geocodeResult);
	}

	$('#search').live('click', function() {
	    var address = $('#address').val();
	    var geocoder = new google.maps.Geocoder();
	    geocoder.geocode({ 'address': address}, geocodeResult);
	});

	function geocodeResult(results, status) {
	    if (status == 'OK') {
			map.setCenter(results[0].geometry.location);
	        $('#latitude').text(results[0].geometry.location.lat());
			$('#longitude').text(results[0].geometry.location.lng());
	        map.fitBounds(results[0].geometry.viewport);
	        marker.setPosition(results[0].geometry.location);
	    } else {
	        alert("Geocoding no tuvo éxito debido a: " + status);
	    }
	}
</script>
-->
