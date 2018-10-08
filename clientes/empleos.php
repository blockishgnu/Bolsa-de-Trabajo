<style>
	.table td {
		text-align: center;
	}
	.li {
	    
	    margin: 5px;
	}
	.span {
	    padding: 5px 5px;
	    margin: 5px;
	}
	.list-group-item{
	    padding: 20px 10px;
	}
</style>	
				<section class="content">
					<div class="box">
						<div class="box-header">
							<h3 class="box-title">Consulta de Empleos&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<?= $cliente->nombre; ?>]</h3>
						</div>
						<?foreach($vacante as $col => $datos){?>
						<div class="box-body" >
						
							<div class="panel panel-default">
							    
							  <div class="panel-heading"><label><?= $datos->nombre;?></label></div>
							  	<div class="panel-body">
								
									<div class="table-responsive">							
										<table id="tabla_reclutadores" class="table table-bordered table-striped">
										  <thead>
												<tr>
													<th style="text-align: center !important;"></th>										
													<th style="text-align: center !important;">Categoría</th>
													<th style="text-align: center !important;">Subcategoría</th>	
													<th style="text-align: center !important;">Contrato</th>								
													<th style="text-align: center !important;">Jornada Laboral</th>
													<th style="text-align: center !important;">Horario</th>											
													<th style="text-align: center !important;">Salario</th>
													<th style="text-align: center !important;">A Convenir</th>
													<th style="text-align: center !important;">Fecha Contratación</th>
													<th style="text-align: center !important;">Experiencia</th>
													<th style="text-align: center !important;">Edad</th>
													<th style="text-align: center !important;">Idioma</th>
													<th style="text-align: center !important;">Vacantes</th>
													<th style="text-align: center !important;">Postulados</th>
												</tr>
											</thead>
											<tbody>
											<tr>
												<td ><i class="fa fa-briefcase" ></i>				  </td>											
												<td><?= $datos->descripcion;						?></td>	
												<td><?= $datos->detalle; 							?></td>	
												<td><?= $datos->tipo_contrato; 						?></td>
												<td><?= $datos->jornada_laboral; 					?></td>	
												<td><?= $datos->horario_laboral; 					?></td>
												<td><?= $datos->salario; 							?></td>	
												<td><?= $datos->a_convenir; 						?></td>	
												<td><?= $datos->fecha_contratacion; 				?></td>	
												<td><?= $datos->experiencia; 						?></td>	
												<td><?= $datos->edad_minima.' - '.$datos->edad_maxima.' Años'; ?></td>	
												<td><?= $datos->idioma; 							?></td>
												<td><?= $datos->cantidad_vacantes; 					?></td>	
												<td><?= $datos->postulados; 						?></td>	
											<tr>
											</tbody>
										</table>
									</div>
										
									<div class="row">
										<div class="col-md-2">
											<div class="panel panel-default">
											  <div class="panel-heading"><label>Estudios Mínimo:</label></div>
											  <div class="panel-body"><?= $datos->estudios_minimos ?></div>
											</div>						
										</div>
										<div class="col-md-3">
											<div class="panel panel-default">
											  <div class="panel-heading"><label>Conocimientos:</label></div>
											  <div class="panel-body"><?= $datos->conocimientos ?></div>
											</div>																	
										</div>
										<div class="col-md-4">
											<div class="panel panel-default" >
											  <div class="panel-heading"><label>Habilidades:</label></div>
											  
											  <div class="panel-body" id="desc_habilidad<?=$col?>" ><?= $datos->descripcion_habilidad ?></div>
											  <script type="text/javascript">
                                                    $.ajax({
                                                    	url:"<?=base_url().$this->config->item('url_buscar_habilidad_vac');?>",
                                                    	data: {idvacante: <?=$datos->idvacante ?>},
                                                    	type: 'POST',
                                                    	dataType: 'html', 
                                                    }).done(function(data){
                                                    	$('#desc_habilidad<?=$col?>').html(data);
                                                    	console.log(data);
                                                    	
                                                    	
                                                    });
                                                    
                                                    </script>
											      
											</div>																	
										</div>
										<div class="col-md-3">
											<ul class="list-group">
											  <li class="list-group-item"><label>Licencia de conducir:  </label>
											  <span class="badge label label-primary"><?= $datos->licencia_conducir; ?></span></li>
											  <li class="list-group-item"><label>Disponibilidad para viajar:  </label>
											  <span class="badge label label-primary"><?= $datos->disponibilidad_viajar; ?></span></li> 
											  <li class="list-group-item"><label>Disponibilidad de cambia de Residencia: </label> 
											  <span class="badge label label-primary"><?= $datos->disponibilidad_residencia; ?></span><br></li>
											  <li class="list-group-item"><label>Personas con Discapacidad: </label> 
											  <span class="badge label label-primary"><?= $datos->personas_discapacidad; ?></span></li> 
											</ul>
																																					
										</div>
										
									</div>
							
								</div>
							</div>
						</div>
						<?php }  ?>
					</div>
				</section>
				
<script type="text/javascript">


</script>