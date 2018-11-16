<?php

session_start();
include("../connect.php");

//error_reporting(E_ALL ^ E_NOTICE);


if(isset($_SESSION['usuario'])){
    $usuario= $_SESSION['usuario'];
    $tipo= $_SESSION['tipo'];
   $resultf=mysqli_query($con,"SELECT 'foto' FROM `sab_vacantes` WHERE `estatus` = 'ACTIVA'");
    $res=mysqli_query($con,"SELECT * FROM sab_reclutadores WHERE username='".$usuario."'");
   while ($rowl=mysqli_fetch_array($res)) {
  $idbusqueda=$rowl['idreclutador'];

  echo "
  <div style='background-color: #82f435; -webkit-box-shadow: inset 2px 35px 46px 0px rgba(0,0,0,0.75); -moz-box-shadow: inset 2px 35px 46px 0px rgba(0,0,0,0.75); box-shadow: inset 2px 35px 46px 0px rgba(0,0,0,0.75);'>
  <br>
  ";
  ?>
  <br><img src='data:image/png;base64,<?php echo base64_encode($rowl['logo']); ?>' class='img-circle' alt='User Image' width='50px;' style='border:4px solid black; display:inline-block; margin-left: 60px;' >
  <?php
   echo "
   <h4 style='display:inline-block; color:white; margin-left: 30px;'>Bienvenido: <b>".$usuario."</b></h4>
  <a href = '../../logout.php' tite = 'Logout'><img src='../../public/sab/img/logout.png' width='40px;' style=' display:inline-block;margin-right: 30px;' align='right'></a>
  <br>
  <br>
  </div>
  ";
}

    $result4 = mysqli_query($con,"SELECT `idcategoria` FROM `sab_vacantes`");
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

  <link rel="stylesheet" href="../../css/jquery.gritter.css">

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
  <script src="../../js/jquery.gritter.js"></script>
 <?= ((isset($js))? $js : ''); ?>

 </head>
 <body>
   <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="../reclutador.php">SAB | Servicios</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="../reclutador.php">Home</a></li>
        <li class="active"><a href="../vacantes/vacantes.php">Vacantes</a></li>
        <li><a href="../candidatos/consulta.php">Candidatos</a></li>
        <li><a href="../actualizar/actualizar.php">Actualizar Perfil</a></li>

      </ul>
    </div>
   </nav>



 <div class="container">



<style>
	textarea {
	    resize: none;
	}
	.file {
	  visibility: hidden;
	  position: absolute;
	}
	.thumb{
     height: 70%;
     width: 70%;
     border: none;
     border-radius: 10px;
     #margin: 10px 5px 0 0;
     -webkit-transition: width 2s, height 2s;
     transition: width 2s , height 2s;

	 }
	 .thumb:hover
	{
		width: 100%;
		height: 100%;
	}


</style>

				<section class="content">

						<div class="box box-primary">
							<div class="box-header with-border">
								<h3 class="box-title">Datos de la Empresa</h3>
							</div>

							<div class="box-body">
								<div class="row">
									<div class="col-md-6">
										<div id="div_idcliente" class="form-group">
											<label>Empresa</label>
											<select id="idcliente" name="vacante[idcliente]" class="form-control select2" style="width: 100%;" tabindex="1">

												<?php
												  $result= mysqli_query($con,"SELECT * FROM sab_clientes");
													while ($row = mysqli_fetch_array ($result)) {
														echo '<option value="'.$row['idcliente'].'" selected>'.$row['nombre'].'</option>';

										  }
												?>
											</select>
											<label id="label_idcliente" for="idcliente"></label>
										</div>
									</div>

									<div class="col-md-3" align="center">
										<div class="form-group">
											<label>Compartir Nombre</label><br>
											<label>
				                      			<input id="nombre_cliente1" name="vacante[nombre_cliente][nc]" type="radio" class="flat-red" value="SI"> SI
				                    		</label>
				                    		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				                    		<label>
				                      			<input id="nombre_cliente2" name="vacante[nombre_cliente][nc]" type="radio" class="flat-red" value="NO" checked> NO
				                    		</label>
										</div>
									</div>

									<div class="col-md-3" align="center">
										<div class="form-group">
											<label>Compartir Ubicación</label><br>
											<label>
				                      			<input id="ubicacion_cliente1" name="vacante[ubicacion_cliente][uc]" type="radio" class="flat-red" value="SI"> SI
				                    		</label>
				                    		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				                    		<label>
				                      			<input id="ubicacion_cliente2" name="vacante[ubicacion_cliente][uc]" type="radio" class="flat-red" value="NO" checked> NO
				                    		</label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- -->

						<!--   fin foto /Reclutador-->
						<div class="box box-primary">
							<div class="box-header with-border">
								<h3 class="box-title">Asignación de un ejecutivo de Reclutamiento </h3>
							</div>

							<div class="box-body">
								<div class="row">

									<div class="col-md-6" >
										<div id="div_idReclutador" class="form-group">
											<label>Ejecutivo de reclutamiento </label>
											<select id="idReclutador" name="vacante[idReclutador]" class="form-control select2" style="width: 100%;" tabindex="3">
												<option value="00" selected>Seleccione un Ejectivo</option>
												<?php
												$result1 = mysqli_query($con,"SELECT * FROM sab_reclutadores WHERE  idReclutador='".$idbusqueda."'");
												while ($rowre = mysqli_fetch_array ($result1)){
														echo '<option value="'.$rowre['idreclutador'].'">'.$rowre['nombre'].' '.$rowre['apellido_paterno'].' '.$rowre['apellido_materno'].'</option>';
													}
												?>
											</select>
											<label id="label_idReclutador"></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--fin Reclutador -->
						<div class="box box-primary">
							<div class="box-header with-border">
								<h3 class="box-title">Datos Generales</h3>
							</div>

							<div class="box-body">
								<div class="row">
									<div class="col-md-12">
										<div id="div_nombre" class="form-group">
											<label>Nombre</label>
											<input id="nombre" name="vacante[nombre]" type="text" class="form-control" style="text-transform: uppercase !important;" onchange="this.value=this.value.toUpperCase();" maxlength="200" autocomplete="off" tabindex="2">
											<label id="label_nombre"></label>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-6">
										<div id="div_idcategoria" class="form-group">
											<label>Categoría</label>
											<select id="idcategoria" name="vacante[idcategoria]" class="form-control select2" style="width: 100%;" onchange="carga_subcat('1');" tabindex="3">
												<option value="00" selected>Seleccione una Categoría</option>
												<?php
												$resc= mysqli_query($con,"SELECT * FROM sab_empleos_categorias");
 											   while ($rowc = mysqli_fetch_array ($resc)) {
														echo '<option value="'.$rowc['idcategoria'].'">'.$rowc['descripcion'].'</option>';
													}
												?>
											</select>
											<label id="label_idcategoria"></label>
										</div>
									</div>
									<div class="col-md-6">
										<div id="div_idcategoria_detalle" class="form-group">
											<label>Subcategoría</label>
											<select id="idcategoria_detalle" name="vacante[idcategoria_detalle]" class="form-control select2" style="width: 100%;" tabindex="4" disabled>
												<option value="00" selected>Seleccione una Subcategoría</option>
											</select>
											<label id="label_idcategoria_detalle"></label>
										</div>
									</div>
								</div>
								<!-- categoria y subcategoria 2 -->
								<div class="row">
									<div class="col-md-6">
										<div id="div_idcategoria2" class="form-group">
											<label>Categoría</label>
											<select id="idcategoria2" name="vacante[idcategoria2]" class="form-control select3" style="width: 100%;" onchange="carga_subcat('2');" tabindex="3">
												<option value="00" selected>Seleccione una Categoría</option>
												<?php
												$resc2= mysqli_query($con,"SELECT * FROM sab_empleos_categorias");
													while ($rowc2 = mysqli_fetch_array ($resc2)) {
														if ($vacante->idcategoria2 == $rowc2['idcategoria']) {

															echo '<option value="'.$rowc2['idcategoria'].'" selected>'.$rowc2['descripcion'].'</option>';
														}
														else {
															echo '<option value="'.$rowc2['idcategoria'].'">'.$rowc2['descripcion'].'</option>';
														}
													}
												?>
											</select>
											<label id="label_idcategoria2"></label>
										</div>
									</div>

									<div class="col-md-6">
										<div id="div_idcategoria_detalle2" class="form-group">
											<label>Subcategoría</label>
											<select id="idcategoria_detalle2" name="vacante[idcategoria_detalle2]" class="form-control select3" style="width: 100%;" tabindex="4" disabled>
												<option value="00" selected>Seleccione una Subcategoría</option>
											</select>
											<label id="label_idcategoria_detalle2"></label>
										</div>
									</div>
								</div>
								<!-- categoria y subcategoria 3 -->
								<div class="row">
									<div class="col-md-6">
										<div id="div_idcategoria3" class="form-group">
											<label>Categoría</label>
											<select id="idcategoria3" name="vacante[idcategoria3]" class="form-control select4" style="width: 100%;" onchange="carga_subcat('3');" tabindex="3">
												<option value="00" selected>Seleccione una Categoría</option>
												<?php
												$resc3= mysqli_query($con,"SELECT * FROM sab_empleos_categorias");
													while ($rowc3 = mysqli_fetch_array ($resc3)) {
														if ($vacante->idcategoria2 == $rowc3['idcategoria']) {

															echo '<option value="'.$rowc3['idcategoria'].'" selected>'.$rowc3['descripcion'].'</option>';
														}
														else {
															echo '<option value="'.$rowc3['idcategoria'].'">'.$rowc3['descripcion'].'</option>';
														}
													}
												?>
											</select>
											<label id="label_idcategoria3"></label>
										</div>
									</div>

									<div class="col-md-6">
										<div id="div_idcategoria_detalle3" class="form-group">
											<label>Subcategoría</label>
											<select id="idcategoria_detalle3" name="vacante[idcategoria_detalle3]" class="form-control select4" style="width: 100%;" tabindex="4" disabled>
												<option value="00" selected>Seleccione una Subcategoría</option>
											</select>
											<label id="label_idcategoria_detalle3"></label>
										</div>
									</div>
								</div>
								<!-- fin categoriay subcategoria--->

								<div class="row">
									<div class="col-md-12">
										<div id="div_descripcion_tareas" class="form-group">
											<label>Descripción de Tareas</label>
											<textarea id="descripcion_tareas" name="vacante[descripcion_tareas]" class="form-control" style="text-transform: uppercase !important;" onchange="this.value=this.value.toUpperCase();" rows="5" tabindex="5"></textarea>
											<label id="label_descripcion_tareas"></label>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-4">
										<div id="div_jornada_laboral" class="form-group">
											<label>Jornada Laboral</label>
											<select id="jornada_laboral" name="vacante[jornada_laboral]" class="form-control select2" style="width: 100%;" tabindex="6">
												<option value="Selecciona" selected>Selecciona</option>
												<option value="Tiempo Completo">Tiempo Completo</option>
												<option value="Medio Tiempo">Medio Tiempo</option>
												<option value="Por Horas">Por Horas</option>
												<option value="Beca / Prácticas">Beca / Prácticas</option>
												<option value="Desde Casa">Desde Casa</option>
											</select>
											<label id="label_jornada_laboral"></label>
										</div>
									</div>

									<div class="col-md-4">
										<div id="div_horario_laboral" class="form-group">
											<label>Horario Laboral</label>
											<input id="horario_laboral" name="vacante[horario_laboral]" type="text" class="form-control" style="text-transform: uppercase !important;" onchange="this.value=this.value.toUpperCase();" maxlength="45" placeholder="9:00 AM - 6:00 PM" autocomplete="off" tabindex="7">
											<label id="label_horario_laboral"></label>
										</div>
									</div>

									<div class="col-md-4">
										<div id="div_tipo_contrato" class="form-group">
											<label>Tipo de Contrato</label>
											<select id="tipo_contrato" name="vacante[tipo_contrato]" class="form-control select2" style="width: 100%;" tabindex="8">
												<option value="Selecciona" selected>Selecciona</option>
												<option value="Contrato para Obra o Tiempo Determinado">Contrato para Obra o Tiempo Determinado</option>
												<option value="Contrato por Temporada">Contrato por Temporada</option>
												<option value="Contrato por Tiempo Indeterminado">Contrato por Tiempo Indeterminado</option>
												<option value="Otro Tipo de Contrato">Otro Tipo de Contrato</option>
											</select>
											<label id="label_tipo_contrato"></label>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-4">
										<div id="div_salario" class="form-group">
											<label>Salario</label>
											<div class="input-group">
												<input id="salario" name="vacante[salario]" type="text" class="form-control" style="text-transform: uppercase !important; height: 35.5px !important;" onchange="this.value=this.value.toUpperCase();" maxlength="200" autocomplete="off" tabindex="9">
												<span class="input-group-addon">
													<input id="a_convenir" name="vacante[a_convenir]" type="checkbox" value="SI">&nbsp;&nbsp;&nbsp;Mostrar "A Convenir"
												</span>
											</div>
											<label id="label_salario"></label>
										</div>
									</div>

									<div class="col-md-4">
										<div id="div_fecha_contratacion" class="form-group">
											<label>Fecha de Contratación</label>
											<input id="fecha_contratacion" name="vacante[fecha_contratacion]" type="text" class="form-control" autocomplete="off" tabindex="10" data-inputmask="'alias': 'dd-mm-yyyy'" data-mask>
											<label id="label_fecha_contratacion"></label>
										</div>
									</div>

									<div class="col-md-4">
										<div id="div_fecha_limite" class="form-group">
											<label>Fecha límite</label>
											<input id="fecha_limite" name="vacante[fecha_limite]" type="text" class="form-control" autocomplete="off" tabindex="11" data-inputmask="'alias': 'dd-mm-yyyy'" data-mask>
											<label id="label_fecha_limite"></label>
										</div>
									</div>

									<div class="col-md-4">
										<div id="div_cantidad_vacantes" class="form-group">
											<label>Cantidad de Vacantes</label>
											<input id="cantidad_vacantes" name="vacante[cantidad_vacantes]" type="text" class="form-control" style="text-transform: uppercase !important;" onchange="this.value=this.value.toUpperCase();" maxlength="200" onkeypress="return soloNumeros(event)" autocomplete="off" tabindex="11">
											<label id="label_cantidad_vacantes"></label>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="box box-primary">
							<div class="box-header with-border">
								<h3 class="box-title">Requerimientos</h3>
							</div>

							<div class="box-body">
								<div class="row">
									<div class="col-md-4">
										<div id="div_experiencia" class="form-group">
											<label>Años de Experiencia</label>
											<select id="experiencia" name="vacante[experiencia]" class="form-control select2" style="width: 100%;" tabindex="12">
												<option value="Sin Experiencia" selected>Sin Experiencia</option>
												<option value="Menos de 1 año">Menos de 1 año</option>
												<option value="1 año">1 año</option>
												<option value="2 años">2 años</option>
												<option value="3 años">3 años</option>
												<option value="4 años">4 años</option>
												<option value="5 años">5 años</option>
												<option value="6 años">6 años</option>
												<option value="7 años">7 años</option>
												<option value="8 años">8 años</option>
												<option value="9 años">9 años</option>
												<option value="10 años">10 años</option>
												<option value="11 años">11 años</option>
												<option value="12 años">12 años</option>
												<option value="13 años">13 años</option>
												<option value="14 años">14 años</option>
												<option value="15 años">15 años</option>
												<option value="16 años">16 años</option>
												<option value="17 años">17 años</option>
												<option value="18 años">18 años</option>
												<option value="19 años">19 años</option>
												<option value="20 años">20 años</option>
												<option value="21 años">21 años</option>
												<option value="22 años">22 años</option>
												<option value="23 años">23 años</option>
												<option value="24 años">24 años</option>
												<option value="25 años">25 años</option>
												<option value="26 años">26 años</option>
												<option value="27 años">27 años</option>
												<option value="28 años">28 años</option>
												<option value="29 años">29 años</option>
												<option value="30 años">30 años</option>
											</select>
											<label id="label_experiencia"></label>
										</div>
									</div>

									<div class="col-md-4">
										<div id="div_edad_minima" class="form-group">
											<label>Edad Mínima</label>
											<input id="edad_minima" name="vacante[edad_minima]" type="text" class="form-control" style="text-transform: uppercase !important;" onchange="this.value=this.value.toUpperCase();" maxlength="200" onkeypress="return soloNumeros(event)" autocomplete="off" tabindex="13">
											<label id="label_edad_minima"></label>
										</div>
									</div>

									<div class="col-md-4">
										<div id="div_edad_maxima" class="form-group">
											<label>Edad Máxima</label>
											<input id="edad_maxima" name="vacante[edad_maxima]" type="text" class="form-control" style="text-transform: uppercase !important;" onchange="this.value=this.value.toUpperCase();" maxlength="200" onkeypress="return soloNumeros(event)" autocomplete="off" tabindex="14">
											<label id="label_edad_maxima"></label>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-8">
										<div id="div_estudios_minimos" class="form-group">
											<label>Estudios Mínimos</label>
											<select id="estudios_minimos" name="vacante[estudios_minimos]" class="form-control select2" style="width: 100%;" tabindex="15">
												<option value="Selecciona" selected>Selecciona</option>
												<option value="Educación Primaria">Educación Primaria</option>
												<option value="Educación Secundaria">Educación Secundaria</option>
												<option value="Educación Media Superior - Bachillerato General">Educación Media Superior - Bachillerato General</option>
												<option value="Educación Media Superior - Educación Profesional T">Educación Media Superior - Educación Profesional T</option>
												<option value="Educación Media Superior - Bachillerato Tecnológico">Educación Media Superior - Bachillerato Tecnológico</option>
												<option value="Educación Superior - Licenciatura">Educación Superior - Licenciatura</option>
												<option value="Educación Superior - Especialidad">Educación Superior - Especialidad</option>
												<option value="Educación Superior - Maestría">Educación Superior - Maestría</option>
												<option value="Educación Superior - Doctorado">Educación Superior - Doctorado</option>
											</select>
											<label id="label_estudios_minimos"></label>
										</div>
									</div>

									<div class="col-md-4">
										<div id="div_idioma" class="form-group">
											<label>Idioma Inglés</label>
											<select id="idioma" name="vacante[idioma]" class="form-control select2" style="width: 100%;" tabindex="16">
												<option value="No Requerido" selected>No Requerido</option>
												<option value="Muy Básico">Muy Básico</option>
												<option value="Básico">Básico</option>
												<option value="Intermedio">Intermedio</option>
												<option value="Avanzado">Avanzado</option>
											</select>
											<label id="label_idioma"></label>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-3" align="center">
										<div class="form-group">
											<label>Licencia de Conducir</label><br>
											<label>
				                      			<input id="licencia_conducir1" name="vacante[licencia_conducir][lc]" type="radio" class="flat-red" value="SI"> SI
				                    		</label>
				                    		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				                    		<label>
				                      			<input id="licencia_conducir2" name="vacante[licencia_conducir][lc]" type="radio" class="flat-red" value="NO" checked> NO
				                    		</label>
										</div>
									</div>

									<div class="col-md-3" align="center">
										<div class="form-group">
											<label>Disponibilidad para Viajar</label><br>
											<label>
				                      			<input id="disponibilidad_viajar1" name="vacante[disponibilidad_viajar][dv]" type="radio" class="flat-red" value="SI"> SI
				                    		</label>
				                    		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				                    		<label>
				                      			<input id="disponibilidad_viajar2" name="vacante[disponibilidad_viajar][dv]" type="radio" class="flat-red" value="NO" checked> NO
				                    		</label>
										</div>
									</div>

									<div class="col-md-3" align="center">
										<div class="form-group">
											<label>Disponibilidad para Cambiar de Residencia</label><br>
											<label>
				                      			<input id="disponibilidad_residencia1" name="vacante[disponibilidad_residencia][dcr]" type="radio" class="flat-red" value="SI"> SI
				                    		</label>
				                    		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				                    		<label>
				                      			<input id="disponibilidad_residencia2" name="vacante[disponibilidad_residencia][dcr]" type="radio" class="flat-red" value="NO" checked> NO
				                    		</label>
										</div>
									</div>

									<div class="col-md-3" align="center">
										<div class="form-group">
											<label>Personas con Discapacidad</label><br>
											<label>
				                      			<input id="personas_discapacidad1" name="vacante[personas_discapacidad][pd]" type="radio" class="flat-red" value="SI"> SI
				                    		</label>
				                    		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				                    		<label>
				                      			<input id="personas_discapacidad2" name="vacante[personas_discapacidad][pd]" type="radio" class="flat-red" value="NO" checked> NO
				                    		</label>
										</div>
									</div>
								</div>
							</div>
						</div>



									<div class="col-md-7">

									</div>
								</div>
							</div>
					</div>
          <div class="box box-success">

            <div class="box-header with-border">
              <h3 class="box-title">Habilidades</h3>
            </div>

            <div class="box-body">
              <div class="row">


					<?php

						$result = mysqli_query($con,"SELECT * FROM sab_habilidades");

					 while($row = mysqli_fetch_array ($result)){  ?>
					<div class="col-md-3">
						<div class="checkbox">
							<input type="checkbox" value="<?=$row['idhabilidad']?>" name="vacante[idhabilidades][]" id="<?=$row['idhabilidad']?>"/>
							<?php echo $row['descripcion']; ?>
						</div>
					</div>
					<?php }?>
				</div>

			</div>
			<div class="box-footer" align="right">
					<button type="button" class="btn btn-primary" onclick="validar()" tabindex="18"><i class="fa fa-save"></i> &nbsp;Guardar</button>
			</div>

		</div>



				</section>

<script type="text/javascript">

	//Initialize Select2 Elements
	$(".select2").select2();

	// Funcion para establecer un formato definido de fecha
	$("#datemask").inputmask("dd-mm-yyyy", {"placeholder": "dd-mm-yy"});
	$("[data-mask]").inputmask();

	// Funcion para dar estilo a los input tipo radio
	$('input[type="radio"].flat-red').iCheck({
		checkboxClass: 'icheckbox_flat-blue',
		radioClass: 'iradio_flat-blue'
	});

	$('input').iCheck({
		checkboxClass: 'icheckbox_square-blue',
		radioClass: 'iradio_square-blue',
		increaseArea: '20%'
	});

	// Funcion que permite escribir solo numeros en el input
	function soloNumeros(evt) {
		var charCode = (evt.which) ? evt.which : event.keyCode;
		if (charCode != 46 && charCode > 31 && (charCode < 48 || charCode > 57))
			return false;
		return true;
	};

	function carga_subcat(numberCategoria) {

		if(numberCategoria == '2'){
			categoria = $("#idcategoria2").val();

		}else if(numberCategoria == '3'){
			categoria = $("#idcategoria3").val();

		}else{
			categoria = $("#idcategoria").val();
		}

		$.ajax({
			type: "post",
			data: { categoria : categoria },
			async: true,
			url: "subcategoria.php",
			cache: false,
			beforeSend: function(cargando) {
			},
			success: function(data) {

				if(numberCategoria == '2'){
					$("#idcategoria_detalle2").empty().removeAttr("disabled").append(data);
					$("#idcategoria_detalle2").select3("val", "00");
				}else if(numberCategoria == '3'){
					$("#idcategoria_detalle3").empty().removeAttr("disabled").append(data);
					$("#idcategoria_detalle3").select4("val", "00");
				}else{
					$("#idcategoria_detalle").empty().removeAttr("disabled").append(data);
					$("#idcategoria_detalle").select2("val", "00");
				}
			}
		});
	}

	var currColor = "#3c8dbc";
	var colorChooser = $("#color-chooser-btn");
	$("#color-chooser > li > a").click(function (e) {
		e.preventDefault();
		currColor = $(this).css("color");
		$('#add-new-event').css({"background-color": currColor, "border-color": currColor});
	});

	no = 0;
	$("#add-new-event").click(function (e) {
		e.preventDefault();
		var val = $("#new-event").val();
		if (val.length == 0) {
			return;
		}

		no++;
		var event = $("<div id='conocimiento"+ no +"' />");
		event.css({"background-color": currColor, "border-color": currColor, "color": "#fff"}).addClass("alert external-event");
		event.html('<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><input id="conocimiento"' + no + '" name="conocimiento[]" type="hidden" value="' + val + '">' + val);
		$('#external-events').prepend(event);
		$("#new-event").val("");
	});

	function validar() {



		if ($("#idcliente").val() == '00') {
			$("#div_idcliente").removeClass("form-group");
			$("#div_idcliente").addClass("form-group has-error");
			$("#label_idcliente").empty().append('El campo Empresa es requerido.');
		}
		else {
			$("#div_idcliente").removeClass("form-group has-error");
			$("#div_idcliente").addClass("form-group");
			$("#label_idcliente").empty();
		}

		if ($("#nombre").val() == '' || $("#nombre").val() == null) {
			$("#div_nombre").removeClass("form-group");
			$("#div_nombre").addClass("form-group has-error");
			$("#label_nombre").empty().append('El campo Nombre es requerido.');
		}
		else {
			$("#div_nombre").removeClass("form-group has-error");
			$("#div_nombre").addClass("form-group");
			$("#label_nombre").empty();
		}

		if ($("#idcategoria").val() == '00') {
			$("#div_idcategoria").removeClass("form-group");
			$("#div_idcategoria").addClass("form-group has-error");
			$("#label_idcategoria").empty().append('El campo Categoría es requerido.');
		}
		else {
			$("#div_idcategoria").removeClass("form-group has-error");
			$("#div_idcategoria").addClass("form-group");
			$("#label_idcategoria").empty();
		}

		if ($("#idcategoria_detalle").val() == '00') {
			$("#div_idcategoria_detalle").removeClass("form-group");
			$("#div_idcategoria_detalle").addClass("form-group has-error");
			$("#label_idcategoria_detalle").empty().append('El campo Subcategoría es requerido.');
		}
		else {
			$("#div_idcategoria_detalle").removeClass("form-group has-error");
			$("#div_idcategoria_detalle").addClass("form-group");
			$("#label_idcategoria_detalle").empty();
		}

		if ($("#descripcion_tareas").val() == '' || $("#descripcion_tareas").val() == null) {
			$("#div_descripcion_tareas").removeClass("form-group");
			$("#div_descripcion_tareas").addClass("form-group has-error");
			$("#label_descripcion_tareas").empty().append('El campo Descripción de Tareas es requerido.');
		}
		else {
			$("#div_descripcion_tareas").removeClass("form-group has-error");
			$("#div_idcategoria_detalle").addClass("form-group");
			$("#label_descripcion_tareas").empty();
		}

		if ($("#jornada_laboral").val() == 'Selecciona') {
			$("#div_jornada_laboral").removeClass("form-group");
			$("#div_jornada_laboral").addClass("form-group has-error");
			$("#label_jornada_laboral").empty().append('El campo Jornada Laboral es requerido.');
		}
		else {
			$("#div_jornada_laboral").removeClass("form-group has-error");
			$("#div_jornada_laboral").addClass("form-group");
			$("#label_jornada_laboral").empty();
		}

		if ($("#horario_laboral").val() == '' || $("#horario_laboral").val() == null) {
			$("#div_horario_laboral").removeClass("form-group");
			$("#div_horario_laboral").addClass("form-group has-error");
			$("#label_horario_laboral").empty().append('El campo Horario Laboral es requerido.');
		}
		else {
			$("#div_horario_laboral").removeClass("form-group has-error");
			$("#div_horario_laboral").addClass("form-group");
			$("#label_horario_laboral").empty();
		}

		if ($("#tipo_contrato").val() == 'Selecciona') {
			$("#div_tipo_contrato").removeClass("form-group");
			$("#div_tipo_contrato").addClass("form-group has-error");
			$("#label_tipo_contrato").empty().append('El campo Tipo de Contrato es requerido.');
		}
		else {
			$("#div_tipo_contrato").removeClass("form-group has-error");
			$("#div_tipo_contrato").addClass("form-group");
			$("#label_tipo_contrato").empty();
		}

		if ($("#salario").val() == '' || $("#salario").val() == null) {
			$("#div_salario").removeClass("form-group");
			$("#div_salario").addClass("form-group has-error");
			$("#label_salario").empty().append('El campo Salario es requerido.');
		}
		else {
			$("#div_salario").removeClass("form-group has-error");
			$("#div_salario").addClass("form-group");
			$("#label_salario").empty();
		}

		if ($("#fecha_contratacion").val() == '' || $("#fecha_contratacion").val() == null) {
			$("#div_fecha_contratacion").removeClass("form-group");
			$("#div_fecha_contratacion").addClass("form-group has-error");
			$("#label_fecha_contratacion").empty().append('El campo Fecha de Contratación es requerido.');
		}
		else {
			$("#div_fecha_contratacion").removeClass("form-group has-error");
			$("#div_fecha_contratacion").addClass("form-group");
			$("#label_fecha_contratacion").empty();
		}

		if ($("#fecha_limite").val() == '' || $("#fecha_limite").val() == null) {
			$("#div_fecha_limite").removeClass("form-group");
			$("#div_fecha_limite").addClass("form-group has-error");
			$("#label_fecha_limite").empty().append('El campo Fecha limite es requerido.');
		}
		else {
			$("#div_fecha_limite").removeClass("form-group has-error");
			$("#div_fecha_limite").addClass("form-group");
			$("#label_fecha_limite").empty();
		}

		if ($("#cantidad_vacantes").val() == '' || $("#cantidad_vacantes").val() == null) {
			$("#div_cantidad_vacantes").removeClass("form-group");
			$("#div_cantidad_vacantes").addClass("form-group has-error");
			$("#label_cantidad_vacantes").empty().append('El campo Cantidad de Vacantes es requerido.');
		}
		else {
			$("#div_cantidad_vacantes").removeClass("form-group has-error");
			$("#div_cantidad_vacantes").addClass("form-group");
			$("#label_cantidad_vacantes").empty();
		}

		if ($("#edad_minima").val() == '' || $("#edad_minima").val() == null) {
			$("#div_edad_minima").removeClass("form-group");
			$("#div_edad_minima").addClass("form-group has-error");
			$("#label_edad_minima").empty().append('El campo Edad Mínima es requerido.');
		}
		else {
			$("#div_edad_minima").removeClass("form-group has-error");
			$("#div_edad_minima").addClass("form-group");
			$("#label_edad_minima").empty();
		}

		if ($("#edad_maxima").val() == '' || $("#edad_minima").val() == null) {
			$("#div_edad_maxima").removeClass("form-group");
			$("#div_edad_maxima").addClass("form-group has-error");
			$("#label_edad_maxima").empty().append('El campo Edad Máxima es requerido.');
		}
		else {
			$("#div_edad_maxima").removeClass("form-group has-error");
			$("#div_edad_maxima").addClass("form-group");
			$("#label_edad_maxima").empty();
		}

		if ($("#estudios_minimos").val() == 'Selecciona') {
			$("#div_estudios_minimos").removeClass("form-group");
			$("#div_estudios_minimos").addClass("form-group has-error");
			$("#label_estudios_minimos").empty().append('El campo Estudios Mínimos es requerido.');
		}
		else {
			$("#div_estudios_minimos").removeClass("form-group has-error");
			$("#div_estudios_minimos").addClass("form-group");
			$("#label_estudios_minimos").empty();
		}

		if ($("#idReclutador").val() == '00') {
		$("#div_idReclutador").removeClass("form-group");
		$("#div_idReclutador").addClass("form-group has-error");
		$("#label_idReclutador").empty().append('El campo Empresa es requerido.');
	}
	else {
		$("#div_idReclutador").removeClass("form-group has-error");
		$("#div_idReclutador").addClass("form-group");
		$("#label_idReclutador").empty();
	}

	if ($("#idcliente").val() != '00' &&$("#idReclutador").val() != '00' && ($("#nombre").val() != ''
	|| $("#nombre").val() != null) && $("#idcategoria").val() != '00' && $("#idcategoria_detalle").val() != '00' && ($("#descripcion_tareas").val() != ''
	|| $("#descripcion_tareas").val() != null) && $("#jornada_laboral").val() != 'Selecciona' && ($("#horario_laboral").val() != ''
	|| $("#horario_laboral").val() != null) && $("#tipo_contrato").val() != 'Selecciona' && ($("#salario").val() != ''
	|| $("#salario").val() != null) && ($("#fecha_contratacion").val() != ''
	|| $("#fecha_contratacion").val() != null) && ($("#fecha_limite").val() != ''
	|| $("#fecha_limite").val() != null) && ($("#cantidad_vacantes").val() != ''
	|| $("#cantidad_vacantes").val() != null) && ($("#edad_minima").val() != ''
	|| $("#edad_minima").val() != null) && ($("#edad_maxima").val() != ''
	|| $("#edad_minima").val() != null) && $("#estudios_minimos").val() != 'Selecciona') {

var convenir;
var checkBox = document.getElementById("a_convenir");
if( checkBox.checked == true ) {
    convenir='SI';
}else{
  convenir = 'NO';
}

var checkboxes = document.getElementsByName('vacante[idhabilidades][]');
var listahabilidades = null;
for (var i=0, n=checkboxes.length;i<n;i++) {
    if (checkboxes[i].checked) {
      if(listahabilidades==null){
        listahabilidades = checkboxes[i].value;
      }else{
        listahabilidades += ","+checkboxes[i].value;
      }
    }
}
		$.ajax({
          type:'POST',
          url: 'guardar.php',
          data: {idcliente:$('#idcliente').val(),
            nombre_cliente:$('input[name="vacante[nombre_cliente][nc]"]:checked').val(),
            ubicacion_cliente:$('input[name="vacante[ubicacion_cliente][uc]"]:checked').val(),
						nombre:$("#nombre").val(),
						idcategoria:$("#idcategoria").val(),
						idcategoria_detalle:$("#idcategoria_detalle").val(),
						descripcion_tareas:$("#descripcion_tareas").val(),
						jornada_laboral:$("#jornada_laboral").val(),
						horario_laboral:$("#horario_laboral").val(),
						tipo_contrato:$("#tipo_contrato").val(),
						salario:$("#salario").val(),
            a_convenir:convenir,
						fecha_contratacion:$("#fecha_contratacion").val(),
            cantidad_vacantes:$("#cantidad_vacantes").val(),
            experiencia:$("#experiencia").val(),
            edad_minima:$("#edad_minima").val(),
            edad_maxima:$("#edad_maxima").val(),
            estudios_minimos:$("#estudios_minimos").val(),
            idioma:$("#idioma").val(),
            licencia_conducir:$('input[name="vacante[licencia_conducir][lc]"]:checked').val(),
            disponibilidad_viajar:$('input[name="vacante[disponibilidad_viajar][dv]"]:checked').val(),
            disponibilidad_residencia:$('input[name="vacante[disponibilidad_residencia][dcr]"]:checked').val(),
            personas_discapacidad:$('input[name="vacante[personas_discapacidad][pd]"]:checked').val(),
            idhabilidades:listahabilidades,
            idReclutador:$("#idReclutador").val(),
            fecha_limite:$("#fecha_limite").val(),
            foto:$("#file").val(),
            idcategoria2:$("#idcategoria2").val(),
						idcategoria_detalle2:$("#idcategoria_detalle2").val(),
            idcategoria3:$("#idcategoria3").val(),
						idcategoria_detalle3:$("#idcategoria_detalle3").val()

          },
          success:function(data){
              if(data==0){
                $.gritter.add({
                 title: 'EXITO!',
                 text: 'Registrado correctamente'
               });
                window.setTimeout("window.location.href='vacantes.php'", 1000);
              }
					},
					error:function(data){
					 //registro fallido
           $.gritter.add({
            title: 'ERROR!',
            text: 'Registro fallido'
          });
					}
				});
		}
	};
</script>
<footer class="main-footer">
      <div class="pull-right hidden-xs">
        <b>Powered by <a href="http://www.hellodigital.mx/">Hello Digital S. de R.L. de C.V.</a></b>
      </div>
      <strong>&copy; Copyright <?= date('Y'); ?> SAB Servicios Profesionales S.A. de C.V.</strong>
    </footer>
