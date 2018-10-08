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
							<h3 class="box-title">Consulta de Clientes</h3>
						</div>
						
						<div class="box-body table-responsive">
							<table id="tabla_reclutadores" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th style="text-align: center !important;"></th>
										<th style="text-align: center !important;">Nombre</th>
										<th style="text-align: center !important;">Tel. Oficina</th>
										<th style="text-align: center !important;">Tel. Celular</th>
										<th style="text-align: center !important;">Correo</th>
										<th style="text-align: center !important;">Usuario</th>
										<th style="text-align: center !important;">Opciones</th>
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
					
					<div id="actualizarModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						<div class="modal-dialog" role="document">
							<?= form_open('sab/cliente/actualizar', array('method' => 'post', 'id' => 'form_actualizar_cliente', 'name' => 'form_actualizar_cliente')); ?>
								<div class="modal-content">
									<div class="modal-header" style="background-color:#00c0ef !important">
										<h3 class="modal-title" id="myModalLabel"><i class="fa fa-warning"></i> Alerta SABServicios</h3>
									</div>
									<div class="modal-body" align="center">
										<div class="row">
											<h4>Cambiar Contraseña al Cliente:</h4>
											<h5 id="info_usuario_upd"></h5>
											<input id="username_upd" name="username_upd" type="hidden">
											<input id="usuario_" name="usuario_" type="hidden">
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label>Nueva Contraseña</label>
													<input id="nuevo_password" name="nuevo_password" type="text" class="form-control" maxlength="255" autocomplete="off" tabindex="1">
												</div>
											</div>
										</div>
									</div>
									<div class="modal-footer" style="background-color:#d2d6de !important">
										<button type="button" class="btn btn-danger" data-dismiss="modal" tabindex="3"><i class="fa fa-close"></i> NO</button>
										<button type="button" class="btn btn-primary" onclick="form_actualizar_cliente.submit()" tabindex="2"><i class="fa fa-check"></i> SI</button>
									</div>
								</div>
							<?= form_close(); ?>
						</div>
					</div>
					
					<div id="eliminarModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						<div class="modal-dialog" role="document">
							<?= form_open('sab/cliente/eliminar', array('method' => 'post', 'id' => 'form_eliminar_cliente', 'name' => 'form_eliminar_cliente')); ?>
								<div class="modal-content">
									<div class="modal-header" style="background-color:#f56954 !important">
										<h3 class="modal-title" id="myModalLabel"><i class="fa fa-warning"></i> Alerta SABServicios</h3>
									</div>
									<div class="modal-body" align="center">
										<h4>¿Realmente deseas Eliminar al Cliente?</h4>
										<h5 id="info_usuario_eli"></h5>
										<input id="username_eli" name="username_eli" type="hidden">
									</div>
									<div class="modal-footer" style="background-color:#d2d6de !important">
										<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> NO</button>
										<button type="button" class="btn btn-primary" onclick="form_eliminar_cliente.submit()"><i class="fa fa-check"></i> SI</button>
									</div>
								</div>
							<?= form_close(); ?>
						</div>
					</div>
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
            "lengthMenu": "Mostrar _MENU_ resultados por pagina",
            "zeroRecords": "No se encontraron resultados.",
            "info": "Mostrando pagina _PAGE_ de _PAGES_",
            "infoEmpty": "No hay registros disponibles",
            "infoFiltered": "",
            "search": "Buscar: ",
            "paginate": {
	            "first": "Inicio",
	            "last" : "Final",
	            "previous" : "Anterior",
	            "next"  : "Siguiente"
            }
        },
        "aoColumns": [
			{ "sWidth": "4%", "bSortable": false, "sClass": "dt_center" },
			{ "sWidth": "30%", "bSortable": true, "sClass": "dt_left" },
			{ "sWidth": "12.5%", "bSortable": false, "sClass": "dt_center" },
			{ "sWidth": "12.5%", "bSortable": false, "sClass": "dt_center" },
			{ "sWidth": "20%", "bSortable": false, "sClass": "dt_left" },
			{ "sWidth": "10%", "bSortable": false, "sClass": "dt_center" },
			{ "sWidth": "15%", "bSortable": false, "sClass": "dt_center" }
		],
		"bServerSide": true,
		"sAjaxSource": "<?= base_url().$this->config->item('url_buscar_clientes'); ?>",
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

	function actualizar(username,nombre,usuario) {
		$('#actualizarModal').modal({
			show: true
		});

		$("#info_usuario_upd").empty();
		$("#info_usuario_upd").append(nombre);
		$("#username_upd").val('');
		$("#username_upd").val(username);
		
		$("#usuario_").val('');
		$("#usuario_").val(usuario);
		
	
	}

	function eliminar(username,nombre) {
		$('#eliminarModal').modal({
			show: true
		});

		$("#info_usuario_eli").empty();
		$("#info_usuario_eli").append(nombre);
		$("#username_eli").val('');
		$("#username_eli").val(username);
	}
</script>