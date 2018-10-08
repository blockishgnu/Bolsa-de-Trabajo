<section class="content">
	<div class="box">
		<h3>Busqueda por:</h3>
		
	    <div class='col-md-2'>
	        <div class="form-group">
	            <label>Fecha Inicial</label>
				<input id="fecha_nacimiento" name="reclutador[fecha_nacimiento]" type="text" class="form-control" value="<?= ((validation_errors() != '')? set_value('reclutador[fecha_nacimiento]') : set_value('reclutador[fecha_nacimiento]')); ?>" autocomplete="off" tabindex="7" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask>				        
	        </div>
	    </div>
	    
	    <div class='col-md-2'>
	        <div class="form-group">
	        	<label>Fecha Final</label>
				<input id="fecha_nacimiento" name="reclutador[fecha_nacimiento]" type="text" class="form-control" value="<?= ((validation_errors() != '')? set_value('reclutador[fecha_nacimiento]') : set_value('reclutador[fecha_nacimiento]')); ?>" autocomplete="off" tabindex="7" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask>
	        </div>
	    </div>
	    
	    <div class="box-footer" align="right">
			<button type="button" class="btn btn-primary"  tabindex="22"><i class="fa fa-search"></i> &nbsp;Buscar</button>
		</div> 
	</div>
	<div class="box">
		<div class="box-header">
			<h3 class="box-title">Consulta de Candidatos</h3>
		</div>
		
		<div class="box-body table-responsive">
			<table id="tabla_candidatos" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th style="text-align: center !important;"></th>
						<th style="text-align: center !important;">Nombre</th>
						<th style="text-align: center !important;">En Búsqueda</th>
						<th style="text-align: center !important;">Categoría</th>
						<th style="text-align: center !important;">Tel. Celular</th>
						<th style="text-align: center !important;">Correo</th>
						<th style="text-align: center !important;">Sexo</th>
						<th style="text-align: center !important;">Edad</th>
					</tr>
				</thead>
				<tbody>
				</tbody>
			</table>
		</div>
	</div>
</section>
<script src="<?=base_url().$this->config->item('url_sab_js').'bootstrap-datepicker.js';?>"></script>
<script type="text/javascript">
	// Funcion para establecer un formato definido de fecha
	//onclick="form_nuevo_reclutador.submit()"
	$("#datemask").inputmask("yyyy-mm-dd", {"placeholder": "yyyy-mm-dd"});
	$("[data-mask]").inputmask();
     
</script>