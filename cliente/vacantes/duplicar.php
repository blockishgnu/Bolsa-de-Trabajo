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
					<?= form_open('sab/vacante/guardar', array('method' => 'post', 'id' => 'form_nueva_vacante', 'name' => 'form_nueva_vacante','enctype'=>"multipart/form-data")); ?>
						<div class="box box-success">
							<div class="box-header with-border">
								<h3 class="box-title">Datos de la Empresa</h3>
							</div>
							
							<div class="box-body">
								<div class="row">
									<div class="col-md-6">
										<div id="div_idcliente" class="form-group">
											<label>Empresa</label>
											<select id="idcliente" name="vacante[idcliente]" class="form-control select2" style="width: 100%;" tabindex="1">
												<option value="00" selected>Seleccione una Empresa</option>
												<?php
													foreach ($clientes as $cliente) {
														
															echo '<option value="'.$cliente->idcliente.'">'.$cliente->nombre.'</option>';
														
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
				                      			<input id="nombre_cliente2" name="vacante[nombre_cliente][nc]" type="radio" class="flat-red" value="NO"> NO
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
				                      			<input id="ubicacion_cliente2" name="vacante[ubicacion_cliente][uc]" type="radio" class="flat-red" value="NO"> NO
				                    		</label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- -->
						<div class="box box-success">
							<div class="box-header with-border">
								<h3 class="box-title">Foto Vacante</h3>
							</div>
							
							<div class="box-body"  style="background-color: #CCDBD2; opacity: 0.5	">
								<div class="row">
									
									<div class="col-md-4" >
										<div class="form-group">
											<input type="file" name="logo" class="file" id='file' accept="image/*">
										    <div class="input-group col-xs-12">
										      <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
										      <input type="text" class="form-control input-lg" disabled placeholder="Subir Imagen">
										      <span class="input-group-btn">
										       <button class="browse btn btn-success input-lg" type="button"><i class="glyphicon glyphicon-search"></i> Foto </button>
										      </span>
										   
										    </div>
										
											<!--<input type="file" class="filestyle" data-buttonBefore="true" data-classButton="btn btn-primary">-->
										</div>
									</div>	
									<div class="col-md-2 ">
										<div class="grow">
											 <output class="" id='list'> 
											 
											 </output>
										</div>
									</div>	
									
									
								</div>

							</div>
						</div>
						<!--   fin foto /Reclutador-->
						<div class="box box-succes">
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
													foreach ($reclutadores as $reclutador) {
														echo '<option value="'.$reclutador->username.'">'.$reclutador->nombre.' '.$reclutador->apellido_paterno.' '.$reclutador->apellido_materno.'</option>';
													}
												?>
											</select>
											<label id="label_idReclutador"></label>
										</div>		
									</div>								
								</div>
							</div>
						</div>
						<!--fin Recluatdor -->

						<div class="box box-success">
							<div class="box-header with-border">
								<h3 class="box-title">Datos Generales</h3>
							</div>
							
							<div class="box-body">
								<div class="row">
									<div class="col-md-12">
										<div id="div_nombre" class="form-group">
											<label>Nombre</label>
											<input id="nombre" name="vacante[nombre]" type="text" class="form-control" style="text-transform: uppercase !important;" onchange="this.value=this.value.toUpperCase();" maxlength="200" autocomplete="off" value="<?= $vacante->nombre; ?>" tabindex="2">
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
													foreach ($categorias as $categoria) {
														if ($vacante->idcategoria == $categoria->idcategoria) {
															echo '<option value="'.$categoria->idcategoria.'" selected>'.$categoria->descripcion.'</option>';
														}
														else {
															echo '<option value="'.$categoria->idcategoria.'">'.$categoria->descripcion.'</option>';
														}
													}
												?>
											</select>
											<label id="label_idcategoria"></label>
										</div>
									</div>
									
									<div class="col-md-6">
										<div id="div_idcategoria_detalle" class="form-group">
											<label>Subcategoría</label>
											<select id="idcategoria_detalle" name="vacante[idcategoria_detalle]" class="form-control" style="width: 100%;" tabindex="4" disabled >
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
													foreach ($categorias as $categoria) {
														if ($vacante->idcategoria2 == $categoria->idcategoria) {
															echo '<option value="'.$categoria->idcategoria.'" selected>'.$categoria->descripcion.'</option>';
														}
														else {
															echo '<option value="'.$categoria->idcategoria.'">'.$categoria->descripcion.'</option>';
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
										<select id="idcategoria_detalle2" name="vacante[idcategoria_detalle2]" class="form-control" style="width: 100%;" tabindex="4" disabled >
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
													foreach ($categorias as $categoria) {
														if ($vacante->idcategoria3 == $categoria->idcategoria) {
															echo '<option value="'.$categoria->idcategoria.'" selected>'.$categoria->descripcion.'</option>';
														}
														else {
															echo '<option value="'.$categoria->idcategoria.'">'.$categoria->descripcion.'</option>';
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
											<select id="idcategoria_detalle3" name="vacante[idcategoria_detalle3]" class="form-control" style="width: 100%;" tabindex="4" disabled>
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
											<textarea id="descripcion_tareas" name="vacante[descripcion_tareas]" class="form-control" style="text-transform: uppercase !important;" onchange="this.value=this.value.toUpperCase();" rows="5" tabindex="5"><?= $vacante->descripcion_tareas; ?></textarea>
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
											<input id="horario_laboral" name="vacante[horario_laboral]" type="text" class="form-control" style="text-transform: uppercase !important;" onchange="this.value=this.value.toUpperCase();" maxlength="45" placeholder="9:00 AM - 6:00 PM" value="<?= $vacante->horario_laboral; ?>" autocomplete="off" tabindex="7">
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
												<input id="salario" name="vacante[salario]" type="text" class="form-control" style="text-transform: uppercase !important; height: 35.5px !important;" onchange="this.value=this.value.toUpperCase();" maxlength="200" autocomplete="off" value="<?= $vacante->salario; ?>" tabindex="9">
												<span class="input-group-addon">
													<input id="a_convenir" name="vacante[a_convenir]" type="checkbox" value="SI" class="flat-red">&nbsp;&nbsp;&nbsp;Mostrar "A Convenir"
												</span>
											</div>
											<label id="label_salario"></label>
										</div>
									</div>
									
									<div class="col-md-4">
										<div id="div_fecha_contratacion" class="form-group">
											<label>Fecha de Contratación</label>
											<input id="fecha_contratacion" name="vacante[fecha_contratacion]" type="text" class="form-control" autocomplete="off" tabindex="10" value="<?= date('d-m-Y', strtotime($vacante->fecha_contratacion)); ?>" data-inputmask="'alias': 'dd-mm-yyyy'" data-mask>
											<label id="label_fecha_contratacion"></label>
										</div>
									</div>
									
									<div class="col-md-4">
										<div id="div_cantidad_vacantes" class="form-group">
											<label>Cantidad de Vacantes</label>
											<input id="cantidad_vacantes" name="vacante[cantidad_vacantes]" type="text" class="form-control" style="text-transform: uppercase !important;" onchange="this.value=this.value.toUpperCase();" maxlength="200" onkeypress="return soloNumeros(event)" value="<?= $vacante->cantidad_vacantes; ?>" autocomplete="off" tabindex="11">
											<label id="label_cantidad_vacantes"></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="box box-success">
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
											<input id="edad_minima" name="vacante[edad_minima]" type="text" class="form-control" style="text-transform: uppercase !important;" onchange="this.value=this.value.toUpperCase();" maxlength="200" onkeypress="return soloNumeros(event)" value="<?= $vacante->edad_minima; ?>" autocomplete="off" tabindex="13">
											<label id="label_edad_minima"></label>
										</div>
									</div>
									
									<div class="col-md-4">
										<div id="div_edad_maxima" class="form-group">
											<label>Edad Máxima</label>
											<input id="edad_maxima" name="vacante[edad_maxima]" type="text" class="form-control" style="text-transform: uppercase !important;" onchange="this.value=this.value.toUpperCase();" maxlength="200" onkeypress="return soloNumeros(event)" value="<?= $vacante->edad_maxima; ?>" autocomplete="off" tabindex="14">
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
				                      			<input id="licencia_conducir2" name="vacante[licencia_conducir][lc]" type="radio" class="flat-red" value="NO"> NO
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
				                      			<input id="disponibilidad_viajar2" name="vacante[disponibilidad_viajar][dv]" type="radio" class="flat-red" value="NO"> NO
				                    		</label>
										</div>
									</div>
									
									<div class="col-md-3 " align="center">
										<div class="form-group">
											<label>Disponibilidad para Cambiar de Residencia</label><br>
											<label>
				                      			<input id="disponibilidad_residencia1" name="vacante[disponibilidad_residencia][dcr]" type="radio" class="flat-red" value="SI"> SI
				                    		</label> 
				                    		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				                    		<label>
				                      			<input id="disponibilidad_residencia2" name="vacante[disponibilidad_residencia][dcr]" type="radio" class="flat-red" value="NO"> NO
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
				                      			<input id="personas_discapacidad2" name="vacante[personas_discapacidad][pd]" type="radio" class="flat-red" value="NO"> NO
				                    		</label>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="box box-success">
							<div class="box-header with-border">
								<h3 class="box-title">Conocimientos Informáticos</h3>
							</div>
							
							<div class="box-body">
								<div class="row">
									<div class="col-md-5">
										<label>Nuevo</label>
										<div class="btn-group" style="width: 100%; margin-bottom: 10px;">
											<ul id="color-chooser" class="fc-color-picker">
												<li><a class="text-aqua" href="#"><i class="fa fa-square"></i></a></li>
												<li><a class="text-blue" href="#"><i class="fa fa-square"></i></a></li>
												<li><a class="text-light-blue" href="#"><i class="fa fa-square"></i></a></li>
												<li><a class="text-teal" href="#"><i class="fa fa-square"></i></a></li>
												<li><a class="text-yellow" href="#"><i class="fa fa-square"></i></a></li>
												<li><a class="text-orange" href="#"><i class="fa fa-square"></i></a></li>
												<li><a class="text-green" href="#"><i class="fa fa-square"></i></a></li>
												<li><a class="text-lime" href="#"><i class="fa fa-square"></i></a></li>
												<li><a class="text-red" href="#"><i class="fa fa-square"></i></a></li>
												<li><a class="text-purple" href="#"><i class="fa fa-square"></i></a></li>
												<li><a class="text-fuchsia" href="#"><i class="fa fa-square"></i></a></li>
												<li><a class="text-muted" href="#"><i class="fa fa-square"></i></a></li>
												<li><a class="text-navy" href="#"><i class="fa fa-square"></i></a></li>
											</ul>
										</div>
										<div class="input-group">
											<input id="new-event" type="text" class="form-control" placeholder="Conocimiento" style="text-transform: uppercase !important;" onchange="this.value=this.value.toUpperCase();" tabindex="17">
											<div class="input-group-btn">
												<button id="add-new-event" type="button" class="btn btn-success btn-flat"><i class="fa fa-plus"></i> Agregar</button>
											</div>
										</div>
									</div>
									
									<div class="col-md-7">
										<div class="form-group">
											<label>Lista</label>
											<div id="external-events">
											</div>
										</div>
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
							<?php foreach($habilidades as $habilidad){  ?>
							<div class="col-md-3">				
								<div class="checkbox">
									<input class="flat-red" type="checkbox" value="<?=$habilidad->idhabilidad?>" name="vacante[idhabilidades][]" id="<?=$habilidad->idhabilidad?>"/>  
									<?php echo $habilidad->descripcion; ?> 
								</div>
							</div>
							<?php }?>
						</div>
						
					</div>
					<div class="box-footer" align="right">
						<button type="button" class="btn btn-success" onclick="validar()" tabindex="18"><i class="fa fa-save"></i> &nbsp;Duplicar</button>
					</div>
									
				</div>
					<?= form_close(); ?>
				</section>
 
<script type="text/javascript">

	$(document).on('click', '.browse', function(){
	
	  $('#list').html('');
	  var file = $(this).parent().parent().parent().find('.file');
	  file.trigger('click');
	  
	});
	
	$(document).on('change', '.file', function(){
	  $(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));	  
	});
	
	function archivo(evt) {
      var files = evt.target.files; // FileList object   
              
      // Obtenemos la imagen del campo "file".
      for (var i = 0, f; f = files[i]; i++) {
        //Solo admitimos imágenes.
        if (!f.type.match('image.*')) {
            continue;
        }

        var reader = new FileReader();
        
        reader.onload = (function(theFile) {
            return function(e) {
            // Insertamos la imagen
           document.getElementById("list").innerHTML = ['<img class="thumb" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');
            };
        })(f);
        reader.readAsDataURL(f);
       }
	  };
      
      document.getElementById('file').addEventListener('change', archivo, false);
 
   
	<?php 
		if(count($vacante->idhabilidades) != 0){				
			$habilidades = explode(',',$vacante->idhabilidades);	
			for($i=0 ; $i < count($habilidades) ; $i++){ 
	?>
	document.getElementById('<?php echo $habilidades[$i]?>').checked = true;
	<?php  }	
		}
	?>
	 
	<?php
		if ($vacante->nombre_cliente == "SI") {
	?>
		document.getElementById('nombre_cliente1').checked = true;
	<?php
		}
		else if ($vacante->nombre_cliente == "NO") {
	?>
		document.getElementById('nombre_cliente2').checked = true;
	<?php
		}
	?>
	
	<?php
		if ($vacante->ubicacion_cliente == "SI") {
	?>
		document.getElementById('ubicacion_cliente1').checked = true;
	<?php
		}
		else if ($vacante->ubicacion_cliente == "NO") {
	?>
		document.getElementById('ubicacion_cliente2').checked = true;
	<?php
		}
	?>
	
	<?php
		if ($vacante->a_convenir == "SI") {
	?>
		document.getElementById('a_convenir').checked = true;
	<?php
		}
	?>
	
	<?php
		if ($vacante->licencia_conducir == "SI") {
	?>
		document.getElementById('licencia_conducir1').checked = true;
	<?php
		}
		else if ($vacante->licencia_conducir == "NO") {
	?>
		document.getElementById('licencia_conducir2').checked = true;
	<?php
		}
	?>

	<?php
		if ($vacante->disponibilidad_viajar == "SI") {
	?>
		document.getElementById('disponibilidad_viajar1').checked = true;
	<?php
		}
		else if ($vacante->disponibilidad_viajar == "NO") {
	?>
		document.getElementById('disponibilidad_viajar2').checked = true;
	<?php
		}
	?>

	<?php
		if ($vacante->disponibilidad_residencia == "SI") {
	?>
		document.getElementById('disponibilidad_residencia1').checked = true;
	<?php
		}
		else if ($vacante->disponibilidad_residencia == "NO") {
	?>
		document.getElementById('disponibilidad_residencia2').checked = true;
	<?php
		}
	?>

	<?php
		if ($vacante->personas_discapacidad == "SI") {
	?>
		document.getElementById('personas_discapacidad1').checked = true;
	<?php
		}
		else if ($vacante->personas_discapacidad == "NO") {
	?>
		document.getElementById('personas_discapacidad2').checked = true;
	<?php
		}
	?>

	<?php
		if ($vacante->idcategoria != null || $vacante->idcategoria != '') {
	?>
		$.ajax({
			type: "post",
			data: { categoria : '<?= $vacante->idcategoria; ?>' },
			async: true,
			url: "<?= base_url().$this->config->item('url_listar_subcategorias_empleos'); ?>",
			cache: false,
			beforeSend: function(cargando) {
			},
			success: function(b) {
					if($("#idcategoria").val() != '00'){
					
					$("#idcategoria_detalle").empty().removeAttr("disabled").append(b);
				
				
					<?php
					if ( ($vacante->idcategoria_detalle != null || $vacante->idcategoria_detalle != '') && $vacante->idcategoria_detalle != 0) {
					?>
						$("#idcategoria_detalle").val("<?= $vacante->idcategoria_detalle; ?>");
					
					<?php	
					}
					?>
				}
			}
		});
	<?php
		}
	?>
	<?php
		if ($vacante->idcategoria2 != null || $vacante->idcategoria2 != '') {
	?>
		$.ajax({
			type: "post",
			data: { categoria : '<?= $vacante->idcategoria2; ?>' },
			async: true,
			url: "<?= base_url().$this->config->item('url_listar_subcategorias_empleos'); ?>",
			cache: false,
			beforeSend: function(cargando) {
			},
			success: function(b) {
					if($("#idcategoria2").val() != '00'){
					
					$("#idcategoria_detalle2").empty().removeAttr("disabled").append(b);
				
				
					<?php
					if ( ($vacante->idcategoria_detalle2 != null || $vacante->idcategoria_detalle2 != '') && $vacante->idcategoria_detalle2 != 0) {
					?>
						$("#idcategoria_detalle2").val("<?= $vacante->idcategoria_detalle2; ?>");
					//	$("#idcategoria_detalle3").select4("val", "<?= $vacante->idcategoria_detalle2; ?>");
					<?php	
					}
					?>
				}
			}
		});
	<?php
		}
	?>
	<?php
		if ($vacante->idcategoria3 != null || $vacante->idcategoria3!= '') {
	?>
		$.ajax({
			type: "post",
			data: { categoria : '<?= $vacante->idcategoria3; ?>' },
			async: true,
			url: "<?= base_url().$this->config->item('url_listar_subcategorias_empleos'); ?>",
			cache: false,
			beforeSend: function(cargando) {
			},
			success: function(b) {
				if($("#idcategoria3").val() != '00'){
					
					$("#idcategoria_detalle3").empty().removeAttr("disabled").append(b);
				
				
					<?php
					if ( ($vacante->idcategoria_detalle3 != null || $vacante->idcategoria_detalle3 != '') && $vacante->idcategoria_detalle3 != 0) {
					?>
						$("#idcategoria_detalle3").val("<?= $vacante->idcategoria_detalle3; ?>");
					//	$("#idcategoria_detalle3").select4("val", "<?= $vacante->idcategoria_detalle3; ?>");
					<?php	
					}
					?>
				}
			}
		});
	<?php
		}
	?>
	
	//Initialize Select2 Elements
	$(".select2").select2();
	
	
	// Funcion para establecer un formato definido de fecha
	$("#datemask").inputmask("dd-mm-yyyy", {"placeholder": "dd-mm-yy"});
	$("[data-mask]").inputmask();
				
	// Funcion para dar estilo a los input tipo radio
	$('input[type="radio"].flat-red').iCheck({
		checkboxClass: 'icheckbox_flat-blue',
		radioClass: 'iradio_flat-green'
	});

	$('input').iCheck({
		checkboxClass: 'icheckbox_square-blue',
		radioClass: 'iradio_square-green',
		increaseArea: '20%'
	});
	$('input[type="checkbox"].flat-red').iCheck({
		checkboxClass: 'icheckbox_flat-green',
		radioClass: 'iradio_flat-green'
	});
			
	// Funcion que permite escribir solo numeros en el input
	function soloNumeros(evt) {
		var charCode = (evt.which) ? evt.which : event.keyCode;		
		if (charCode != 46 && charCode > 31 && (charCode < 48 || charCode > 57))
			return false;
		return true;
	};

	$("#jornada_laboral").select2("val", "<?= $vacante->jornada_laboral; ?>");
	$("#tipo_contrato").select2("val", "<?= $vacante->tipo_contrato; ?>");
	$("#experiencia").select2("val", "<?= $vacante->experiencia; ?>");
	$("#estudios_minimos").select2("val", "<?= $vacante->estudios_minimos; ?>");
	$("#idioma").select2("val", "<?= $vacante->idioma; ?>");

	function carga_subcat(numberCategoria) {
		if(numberCategoria == '2'){
			categoria = $("#idcategoria2").val();
			$("#idcategoria_detalle2").empty().removeAttr("disabled");
		}else if(numberCategoria == '3'){
			categoria = $("#idcategoria3").val();
			$("#idcategoria_detalle3").empty().removeAttr("disabled");
		}else{
			categoria = $("#idcategoria").val();
			$("#idcategoria_detalle").empty().removeAttr("disabled");
		}
		

		$.ajax({
			type: "post",
			data: { categoria : categoria },
			async: true,
			url: "<?= base_url().$this->config->item('url_listar_subcategorias_empleos'); ?>",
			cache: false,
			beforeSend: function(cargando) {
			},
			success: function(b) {
				if(numberCategoria == '2'){
					$("#idcategoria_detalle2").empty().removeAttr("disabled").append(b);
					$("#idcategoria_detalle2").select3("val", "00");
				}else if(numberCategoria == '3'){
					$("#idcategoria_detalle3").empty().removeAttr("disabled").append(b);
					$("#idcategoria_detalle3").select4("val", "00");	
				}else{
					$("#idcategoria_detalle").empty().removeAttr("disabled").append(b);
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
	<?php
		$conocimientos = $vacante->conocimientos;
		$conocimiento = explode(",", $conocimientos);
		$total_conocimientos = count($conocimiento);
		
		for ($i = 0; $i < $total_conocimientos; $i++) {
	?>
			no++;
			var event = $("<div id='conocimiento"+ no +"' />");
			event.css({"background-color": currColor, "border-color": currColor, "color": "#fff"}).addClass("alert external-event");
			event.html('<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><input id="conocimiento"' + no + '" name="conocimiento[]" type="hidden" value="' + '<?= $conocimiento[$i]; ?>' + '">' + '<?= $conocimiento[$i]; ?>');
			$('#external-events').prepend(event);
			$("#new-event").val("");
	<?php
		}
	?>
	
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

		if ($("#idcliente").val() != '00' && $("#idReclutador").val() != '00' && ($("#nombre").val() != '' || $("#nombre").val() != null) && $("#idcategoria").val() != '00' && $("#idcategoria_detalle").val() != '00' && ($("#descripcion_tareas").val() != '' || $("#descripcion_tareas").val() != null) && $("#jornada_laboral").val() != 'Selecciona' && ($("#horario_laboral").val() != '' || $("#horario_laboral").val() != null) && $("#tipo_contrato").val() != 'Selecciona' && ($("#salario").val() != '' || $("#salario").val() != null) && ($("#fecha_contratacion").val() != '' || $("#fecha_contratacion").val() != null) && ($("#cantidad_vacantes").val() != '' || $("#cantidad_vacantes").val() != null) && ($("#edad_minima").val() != '' || $("#edad_minima").val() != null) && ($("#edad_maxima").val() != '' || $("#edad_minima").val() != null) && $("#estudios_minimos").val() != 'Selecciona') {
			form_nueva_vacante.submit();
		}
	};
</script>