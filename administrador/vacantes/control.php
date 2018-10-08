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
							<h3 class="box-title">Relación de vacantes y reclutadores</h3>
						</div>
						
						<div class="box-body table-responsive">
							<table id="tabla_reclutadores" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th style="text-align: center !important;"></th>
										<th style="text-align: center !important;">Vacante</th>
										<th style="text-align: center !important;">Empresa</th>
										<th style="text-align: center !important;">Reclutador</th>
										<th style="text-align: center !important;">Creado</th>
										<th style="text-align: center !important;">Actualización</th>
										<th style="text-align: center !important;">Fecha Limite</th>
										<th style="text-align: center !important;">Días Hábiles</th>
										<th style="text-align: center !important;">Fecha Cierre</th>
										<th style="text-align: center !important;">Estatus</th>					
									</tr>
								</thead>
								<tbody>
								</tbody>
							</table>
						</div>
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
            "search": "Buscar:",
            "paginate": {
	            "first": "Inicio",
	            "last" : "Final",
	            "previous" : "Anterior",
	            "next"  : "Siguiente"
            }
        },
        "aoColumns": [
			{ "sWidth": "3%", "bSortable": false, "sClass": "dt_center" },
			{ "sWidth": "25%", "bSortable": true, "sClass": "dt_left" },
			{ "sWidth": "25%", "bSortable": false, "sClass": "dt_left" },
			{ "sWidth": "12%", "bSortable": false, "sClass": "dt_center" },
			{ "sWidth": "7%", "bSortable": false, "sClass": "dt_center" },
			{ "sWidth": "9%", "bSortable": false, "sClass": "dt_center" },
			{ "sWidth": "8%", "bSortable": false, "sClass": "dt_center" },
			{ "sWidth": "5%", "bSortable": false, "sClass": "dt_center" },
			{ "sWidth": "15%", "bSortable": false, "sClass": "dt_center" },
			{ "sWidth": "10%", "bSortable": false, "sClass": "dt_center" },	
		],
		"bServerSide": true,
		"sAjaxSource": "<?= base_url().$this->config->item('url_buscar_control_vacante'); ?>",
		"sServerMethod": "POST"
	});

	
</script>