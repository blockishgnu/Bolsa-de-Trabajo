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
</style>

				<section class="content">
					<div class="box">
						<div class="box-header">
							<h3 class="box-title">Consulta de Vacantes</h3>
						</div>
						
						<div class="box-body table-responsive">
							<table id="tabla_reclutadores" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th style="text-align: center !important;"></th>
										<th style="text-align: center !important;">Vacante</th>
										
										<th style="text-align: center !important;">Cliente</th>
										<th style="text-align: center !important;">Reclutador</th>
										<th style="text-align: center !important;">Estatus</th>
										<th style="text-align: center !important;">Fecha</th>
										<th style="text-align: center !important;">Postulados</th>
										<th style="text-align: center !important;">Visto</th>
										<th style="text-align: center !important;">Opcioness</th>
									</tr>
								</thead>
								<tbody>
								</tbody>
							</table>
						</div>
					</div>
					
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
					<!-- dialogo confirmar cambio de estatus  -->
					<div id="cambio_Status" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						<div class="modal-dialog" role="document">
							<?= form_open('sab/vacante/cambiarEstatus', array('method' => 'post', 'id' => 'form_estatus_vacante', 'name' => 'form_estatus_vacante')); ?>
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
										<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> NO</button>
										<button type="button" class="btn btn-default" onclick="form_estatus_vacante.submit()"><i class="fa fa-check"></i> SI</button>
									</div>
								</div>
							<?= form_close(); ?>
						</div>
					</div>
					<!-- /dialogo confirmar cambio de estatus -->
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
		"sAjaxSource": "<?= base_url().$this->config->item('url_buscar_vacantes'); ?>",
		"sServerMethod": "POST"
	});
	
	/*Cambio de estatus de la vacante */

	function cambiarStatus (id,status){
		
		$('#cambio_Status').modal({
			show: true
		});
		
		$("#estatusAnt").html(status);
		$("#estatusAct").html($('#'+id).val());
		$("#estatusActual").val('');
		$("#estatusActual").val($('#'+id).val());
		$("#idVacante").val(id);
	}

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
			url:"<?=base_url().$this->config->item('url_buscar_can_vacantes');?>",
			data: {id: id},
			type: 'POST',
			dataType: 'html', 
		}).done(function(data){
			
			console.log(data);
			$("#tabla_candidatos").html(data);
			
		});
		
	}
</script>