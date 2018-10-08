<style>
	
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
					<?= form_open('sab/cliente/editar/'.$cliente->username, array('method' => 'post', 'id' => 'form_editar_cliente', 'name' => 'form_editar_cliente','enctype'=>"multipart/form-data")); ?>
					<!--  -->
						<div class="box box-success">
							<div class="box-header with-border">
								<h3 class="box-title">Logo</h3>
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
										       <button class="browse btn btn-success input-lg" type="button"><i class="glyphicon glyphicon-search"></i> Logo</button>
										      </span>
										   
										    </div>
										
											<!--<input type="file" class="filestyle" data-buttonBefore="true" data-classButton="btn btn-primary">-->
										</div>
									</div>	
									<div class="col-md-2 ">
										<div class="grow">
											 <output class="" id='list'> 
											 <?php if($cliente->logo != NULL || $cliente->logo != '' ) {?><img src="<?= base_url().$this->config->item('url_sab_img').'logo_empresas/'. $cliente->logo; ?>" id="imagen_logo" class="thumb"/> 
											 <?php }?>
											 </output>
										</div>
									</div>	
									
									
								</div>

							</div>
						</div>
						
						<!--  -->
						<div class="box box-success">
							<div class="box-header with-border">
								<h3 class="box-title">Datos Personales</h3>
							</div>
							
							<div class="box-body">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group<?= ((form_error('cliente[nombre]') != '')? ' has-error' : '' ); ?>">
											<label>Nombre</label>
											<input id="nombre" name="cliente[nombre]" type="text" class="form-control" style="text-transform: uppercase !important;" onchange="this.value=this.value.toUpperCase();" maxlength="200" value="<?= ((validation_errors() != '')? set_value('cliente[nombre]') : (($cliente != null)? $cliente->nombre : '')); ?>" autocomplete="off" tabindex="1">
											<?= '<label>'.form_error('cliente[nombre]').'</label>'; ?>
										</div>
									</div>
									
									<div class="col-md-6">
										<div class="form-group<?= ((form_error('cliente[email]') != '')? ' has-error' : '' ); ?>">
											<label>Correo</label>
											<input id="email" name="cliente[email]" type="email" class="form-control" maxlength="150" value="<?= ((validation_errors() != '')? set_value('cliente[email]') : (($cliente != null)? $cliente->email : '')); ?>" autocomplete="off" tabindex="2">
											<?= '<label>'.form_error('cliente[email]').'</label>'; ?>
										</div>
									</div>
								</div>
								
								<div class="row">
									<div class="col-md-12">
										<div class="form-group<?= ((form_error('cliente[descripcion]') != '')? ' has-error' : '' ); ?>">
											<label>Descripción</label>
											<textarea id="descripcion" name="cliente[descripcion]" class="form-control" rows="5" tabindex="3" style="text-transform: uppercase !important;" onchange="this.value=this.value.toUpperCase();"><?= ((validation_errors() != '')? set_value('cliente[descripcion]') : (($cliente != null)? $cliente->descripcion : '')); ?></textarea>
											<?= '<label>'.form_error('cliente[descripcion]').'</label>'; ?>
										</div>
									</div>
								</div>
								
								<div class="row">
									<div class="col-md-6">
										<div class="form-group<?= ((form_error('cliente[telefono_oficina]') != '')? ' has-error' : '' ); ?>">
											<label>Teléfono Oficina</label>
											<input id="telefono_oficina" name="cliente[telefono_oficina]" type="text" class="form-control" value="<?= ((validation_errors() != '')? set_value('cliente[telefono_oficina]') : (($cliente != null)? $cliente->telefono_oficina : '')); ?>" autocomplete="off" tabindex="4" data-inputmask='"mask": "(99) 9999-9999"' data-mask>
											<?= '<label>'.form_error('cliente[telefono_oficina]').'</label>'; ?>
										</div>
									</div>
									
									<div class="col-md-6">
										<div class="form-group<?= ((form_error('cliente[telefono_celular]') != '')? ' has-error' : '' ); ?>">
											<label>Teléfono Celular</label>
											<input id="telefono_celular" name="cliente[telefono_celular]" type="text" class="form-control" value="<?= ((validation_errors() != '')? set_value('cliente[telefono_celular]') : (($cliente != null)? $cliente->telefono_celular : '')); ?>" autocomplete="off" tabindex="5" data-inputmask='"mask": "(99) 9999-9999"' data-mask>
											<?= '<label>'.form_error('cliente[telefono_celular]').'</label>'; ?>
										</div>
									</div>
								</div>
								
								<div class="row">
									<div class="col-md-6">
										<div class="form-group<?= ((form_error('cliente[calle]') != '')? ' has-error' : '' ); ?>">
											<label>Calle</label>
											<input id="calle" name="cliente[calle]" type="text" class="form-control" style="text-transform: uppercase !important;" onchange="this.value=this.value.toUpperCase();" maxlength="100" value="<?= ((validation_errors() != '')? set_value('cliente[calle]') : (($cliente != null)? $cliente->calle : '')); ?>" autocomplete="off" tabindex="6">
											<?= '<label>'.form_error('cliente[calle]').'</label>'; ?>
										</div>
									</div>
									
									<div class="col-md-3">
										<div class="form-group<?= ((form_error('cliente[numero_exterior]') != '')? ' has-error' : '' ); ?>">
											<label>Número Exterior</label>
											<input id="numero_exterior" name="cliente[numero_exterior]" type="text" class="form-control" style="text-transform: uppercase !important;" onchange="this.value=this.value.toUpperCase();" maxlength="10" value="<?= ((validation_errors() != '')? set_value('cliente[numero_exterior]') : (($cliente != null)? $cliente->numero_exterior : '')); ?>" autocomplete="off" tabindex="7">
											<?= '<label>'.form_error('cliente[numero_exterior]').'</label>'; ?>
										</div>
									</div>
									
									<div class="col-md-3">
										<div class="form-group<?= ((form_error('cliente[numero_interior]') != '')? ' has-error' : '' ); ?>">
											<label>Número Interior</label>
											<input id="numero_interior" name="cliente[numero_interior]" type="text" class="form-control" style="text-transform: uppercase !important;" onchange="this.value=this.value.toUpperCase();" maxlength="10" value="<?= ((validation_errors() != '')? set_value('cliente[numero_interior]') : (($cliente != null)? $cliente->numero_interior : '')); ?>" autocomplete="off" tabindex="8">
											<?= '<label>'.form_error('cliente[numero_interior]').'</label>'; ?>
										</div>
									</div>
								</div>
								
								<div class="row">
									<div class="col-md-5">
										<div class="form-group<?= ((form_error('cliente[colonia]') != '')? ' has-error' : '' ); ?>">
											<label>Colonia</label>
											<input id="colonia" name="cliente[colonia]" type="text" class="form-control" style="text-transform: uppercase !important;" onchange="this.value=this.value.toUpperCase();" maxlength="100" value="<?= ((validation_errors() != '')? set_value('cliente[colonia]') : (($cliente != null)? $cliente->colonia : '')); ?>" autocomplete="off" tabindex="9">
											<?= '<label>'.form_error('cliente[colonia]').'</label>'; ?>
										</div>
									</div>
									
									<div class="col-md-2">
										<div class="form-group<?= ((form_error('cliente[cp]') != '')? ' has-error' : '' ); ?>">
											<label>C.P.</label>
											<input id="cp" name="cliente[cp]" type="text" class="form-control" style="text-transform: uppercase !important;" onchange="this.value=this.value.toUpperCase();" maxlength="5" value="<?= ((validation_errors() != '')? set_value('cliente[cp]') : (($cliente != null)? $cliente->cp : '')); ?>" autocomplete="off" tabindex="10">
											<?= '<label>'.form_error('cliente[cp]').'</label>'; ?>
										</div>
									</div>
									
									<div class="col-md-5">
										<div class="form-group<?= ((form_error('cliente[ciudad]') != '')? ' has-error' : '' ); ?>">
											<label>Ciudad</label>
											<input id="ciudad" name="cliente[ciudad]" type="text" class="form-control" style="text-transform: uppercase !important;" onchange="this.value=this.value.toUpperCase();" maxlength="100" value="<?= ((validation_errors() != '')? set_value('cliente[ciudad]') : (($cliente != null)? $cliente->ciudad : '')); ?>" autocomplete="off" tabindex="11">
											<?= '<label>'.form_error('cliente[ciudad]').'</label>'; ?>
										</div>
									</div>
								</div>
								
								<div class="row">
									<div class="col-md-4">
										<div class="form-group<?= ((form_error('cliente[municipio]') != '')? ' has-error' : '' ); ?>">
											<label>Municipio</label>
											<input id="municipio" name="cliente[municipio]" type="text" class="form-control" style="text-transform: uppercase !important;" onchange="this.value=this.value.toUpperCase();" maxlength="100" value="<?= ((validation_errors() != '')? set_value('cliente[municipio]') : (($cliente != null)? $cliente->municipio : '')); ?>" autocomplete="off" tabindex="12">
											<?= '<label>'.form_error('cliente[municipio]').'</label>'; ?>
										</div>
									</div>
									
									<div class="col-md-4">
										<div class="form-group<?= ((form_error('cliente[estado]') != '')? ' has-error' : '' ); ?>">
											<label>Estado</label>
											<input id="estado" name="cliente[estado]" type="text" class="form-control" style="text-transform: uppercase !important;" onchange="this.value=this.value.toUpperCase();" maxlength="100" value="<?= ((validation_errors() != '')? set_value('cliente[estado]') : (($cliente != null)? $cliente->estado : '')); ?>" autocomplete="off" tabindex="13">
											<?= '<label>'.form_error('cliente[estado]').'</label>'; ?>
										</div>
									</div>
									
									<div class="col-md-4">
										<div class="form-group<?= ((form_error('cliente[pais]') != '')? ' has-error' : '' ); ?>">
											<label>País</label>
											<input id="pais" name="cliente[pais]" type="text" class="form-control" style="text-transform: uppercase !important;" onchange="this.value=this.value.toUpperCase();" maxlength="100" value="<?= ((validation_errors() != '')? set_value('cliente[pais]') : (($cliente != null)? $cliente->pais : '')); ?>" autocomplete="off" tabindex="14">
											<?= '<label>'.form_error('cliente[pais]').'</label>'; ?>
										</div>
									</div>
								</div>
								
								<!-- contacto1-->
						<div class="box box-success">
							<div class="box-header with-border">
								<h3 class="box-title">Datos de contacto</h3>
							</div>
						
							<div class="box-body">
								<div class="row">
									
									<div class="col-md-4">
										<div class="form-group<?= ((form_error('cliente[nombre_contacto1]') != '')? ' has-error' : '' ); ?>">
										<label> Nombre: </label>
										<input id="nombre_contacto1" name="cliente[nombre_contacto1]" type="text" class="form-control" style="text-transform: uppercase !important;" onchange="this.value=this.value.toUpperCase();" maxlength="100" value="<?= ((validation_errors() != '')? set_value('cliente[nombre_contacto1]') : (($cliente != null)? $cliente->nombre_contacto1: '')); ?>" autocomplete="off" tabindex="14">
										
										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group<?= ((form_error('cliente[puesto_contacto1]') != '')? ' has-error' : '' ); ?>">
										<label> Puesto: </label>
										<input id="puesto_contacto1" name="cliente[puesto_contacto1]" type="text" class="form-control" style="text-transform: uppercase !important;" onchange="this.value=this.value.toUpperCase();" maxlength="100" value="<?= ((validation_errors() != '')? set_value('cliente[puesto_contacto1]') : (($cliente != null)? $cliente->puesto_contacto1: '')); ?>" autocomplete="off" tabindex="14">
										
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group<?= ((form_error('cliente[correo_contacto1]') != '')? ' has-error' : '' ); ?>">
											<label>Correo</label>
											<input id="correo_contacto1" name="cliente[correo_contacto1]" type="email" class="form-control" maxlength="150" value="<?= ((validation_errors() != '')? set_value('cliente[correo_contacto1]') : (($cliente != null)? $cliente->correo_contacto1: '')); ?>" autocomplete="off" tabindex="2">
											<?= '<label>'.form_error('cliente[correo_contacto1]').'</label>'; ?>
										</div>
									</div>
									
									<div class="col-md-6">
										<div class="form-group<?= ((form_error('cliente[tel_oficina_contacto1]') != '')? ' has-error' : '' ); ?>">
											<label>Teléfono Oficina</label>
											<input id="tel_oficina_contacto1" name="cliente[tel_oficina_contacto1]" type="text" class="form-control" value="<?= ((validation_errors() != '')? set_value('cliente[tel_oficina_contacto1]') : (($cliente != null)? $cliente->tel_oficina_contacto1: '')); ?>" autocomplete="off" tabindex="4" data-inputmask='"mask": "(99) 9999-9999"' data-mask>
											<?= '<label>'.form_error('cliente[tel_oficina_contacto1]').'</label>'; ?>
										</div>
									</div>
									
									<div class="col-md-6">
										<div class="form-group<?= ((form_error('cliente[tel_cel_contacto1]') != '')? ' has-error' : '' ); ?>">
											<label>Teléfono Celular</label>
											<input id="tel_cel_contacto1" name="cliente[tel_cel_contacto1]" type="text" class="form-control" value="<?= ((validation_errors() != '')? set_value('cliente[tel_cel_contacto1]') : (($cliente != null)? $cliente->tel_cel_contacto1: '')); ?>" autocomplete="off" tabindex="5" data-inputmask='"mask": "(99) 9999-9999"' data-mask>
											<?= '<label>'.form_error('cliente[tel_cel_contacto1]').'</label>'; ?>
										</div>
									</div>
									
									
								</div>
								<div class="row">
									
									<div class="col-md-4">
										<div class="form-group<?= ((form_error('cliente[nombre_contacto2]') != '')? ' has-error' : '' ); ?>">
										
										<label> Nombre: </label>
										<input id="nombre_contacto2" name="cliente[nombre_contacto2]" type="text" class="form-control" style="text-transform: uppercase !important;" onchange="this.value=this.value.toUpperCase();" maxlength="100" value="<?= ((validation_errors() != '')? set_value('cliente[nombre_contacto2]') : (($cliente != null)? $cliente->nombre_contacto2: '')); ?>" autocomplete="off" tabindex="14">
										
										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group<?= ((form_error('cliente[puesto_contacto2]') != '')? ' has-error' : '' ); ?>">
										<label> Puesto: </label>
										<input id="puesto_contacto2" name="cliente[puesto_contacto2]" type="text" class="form-control" style="text-transform: uppercase !important;" onchange="this.value=this.value.toUpperCase();" maxlength="100" value="<?= ((validation_errors() != '')? set_value('cliente[puesto_contacto2]') : (($cliente != null)? $cliente->puesto_contacto2: '')); ?>" autocomplete="off" tabindex="14">
										
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group<?= ((form_error('cliente[correo_contacto2]') != '')? ' has-error' : '' ); ?>">
											<label>Correo</label>
											<input id="correo_contacto2" name="cliente[correo_contacto2]" type="email" class="form-control" maxlength="150" value="<?= ((validation_errors() != '')? set_value('cliente[correo_contacto2]') : (($cliente != null)? $cliente->correo_contacto2: '')); ?>" autocomplete="off" tabindex="2">
											<?= '<label>'.form_error('cliente[correo_contacto2]').'</label>'; ?>
										</div>
									</div>
									
									<div class="col-md-6">
										<div class="form-group<?= ((form_error('cliente[tel_oficina_contacto2]') != '')? ' has-error' : '' ); ?>">
											<label>Teléfono Oficina</label>
											<input id="tel_oficina_contacto2" name="cliente[tel_oficina_contacto2]" type="text" class="form-control" value="<?= ((validation_errors() != '')? set_value('cliente[tel_oficina_contacto2]') : (($cliente != null)? $cliente->tel_oficina_contacto2: '')); ?>" autocomplete="off" tabindex="4" data-inputmask='"mask": "(99) 9999-9999"' data-mask>
											<?= '<label>'.form_error('cliente[tel_oficina_contacto2]').'</label>'; ?>
										</div>
									</div>
									
									<div class="col-md-6">
										<div class="form-group<?= ((form_error('cliente[tel_cel_contacto2]') != '')? ' has-error' : '' ); ?>">
											<label>Teléfono Celular</label>
											<input id="tel_cel_contacto2" name="cliente[tel_cel_contacto2]" type="text" class="form-control" value="<?= ((validation_errors() != '')? set_value('cliente[tel_cel_contacto2]') : (($cliente != null)? $cliente->tel_cel_contacto2: '')); ?>" autocomplete="off" tabindex="5" data-inputmask='"mask": "(99) 9999-9999"' data-mask>
											<?= '<label>'.form_error('cliente[tel_cel_contacto2]').'</label>'; ?>
										</div>
									</div>
								</div>
							</div>
					</div>
								<!-- fin contacto2-->								
								
							</div>
							
							<div class="box-footer" align="right">
								<button type="button" class="btn btn-success" onclick="form_editar_cliente.submit()" tabindex="15"><i class="fa fa-save"></i> &nbsp;Guardar</button>
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

	// Funcion para establecer un formato definido de fecha
	$("#datemask").inputmask("yyyy-mm-dd", {"placeholder": "yyyy-mm-dd"});
	$("[data-mask]").inputmask();
			
	// Funcion que permite escribir solo numeros en el input
	function soloNumeros(evt) {
		var charCode = (evt.which) ? evt.which : event.keyCode;		
		if (charCode != 46 && charCode > 31 && (charCode < 48 || charCode > 57))
			return false;
		return true;
	};
</script>