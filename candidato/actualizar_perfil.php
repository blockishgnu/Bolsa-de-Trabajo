<?php
include("../connect.php");
session_start();

if(isset($_SESSION['usuario'])){
  $usuario= $_SESSION['usuario'];
  $tipo= $_SESSION['tipo'];


}

  else{
      header("Location: ../../login.php");
      exit;
  }



 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="shortcut icon" href="../public/sab/img/favicon.ico">
     <link rel="stylesheet" href="../css/boilerplate.css">
     <link rel="stylesheet" href="../css/page.css">
     <link rel="stylesheet" href="../public/sab/css/select2.min.css">

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
     <!-- Morris chart -->
     <link rel="stylesheet" href="./public/sab/css/morris.css">
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


     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <script src="../public/sab/js/jQuery-2.1.4.min.js"></script>
     <!-- jQuery UI 1.11.4 -->
     <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
     <script src="../public/sab/js/select2.full.min.js"></script>
     <!-- InputMask -->
     <script src="../public/sab/js/jquery.inputmask.js"></script>
     <script src="../public/sab/js/jquery.inputmask.date.extensions.js"></script>
     <script src="../public/sab/js/jquery.inputmask.extensions.js"></script>
   </head>
   <style>
   .alert{
   	position: absolute;
   	display: block;
   	top:100px;
   	right: 10px;
   	width: auto;
   	height: auto;
   	opacity: 0.5;
   }
   .alert a{
   	text-decoration: none;
   }

   .card {
    	display: inline;
   }

   img {
       border-radius: 15px 15px 0 0;
   }
   img:hover {
       box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
   }

   .container-vacante {
       padding: 2px 16px;
       background-color: white;
       border-radius: 5px;
       box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
       width: 100%;
       transition: 0.3s;
   }
   .container-vacante:hover {
       box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);

   }
   </style>
   <body>
     <div class="container">
     <div class="box-header with-border">
       <h2 class="box-title"><b>Actualizar Foto</b></h2>
     </div>
     <?php
     $result= mysqli_query($con,"SELECT * FROM sab_candidatos WHERE username ='".$usuario."'");
      while($row=mysqli_fetch_array($result)){
      ?>
     <img src="data:image/png;base64,<?php echo base64_encode($row['foto']); ?>" alt="titulo foto"  width='150'  />
     <form enctype='multipart/form-data' action='imagen.php?idcandidato=<?=$row['idcandidato'];?>' method='POST'>
    <p><br /><input name='foto' type='file' accept='image/*' />
    <p><input type='submit' value='Guardar' />
    <input type='hidden' value='1' name='enviado' />
    </form>
    <!-- El tipo de codificación de datos, enctype, DEBE especificarse como sigue -->
<form enctype="multipart/form-data" action="subirarchivo.php" method="POST">
    <!-- MAX_FILE_SIZE debe preceder al campo de entrada del fichero -->
    <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
    <!-- El nombre del elemento de entrada determina el nombre en el array $_FILES -->
    <h3 class="box-title"><b>Subir Curriculum</b></h3>
     <input name="archivo_usuario" type="file" />
    <input type="submit" value="Subir archivo" />
</form>
<?php

$rescv=mysqli_query($con,"SELECT * FROM sab_cv WHERE username='".$usuario."'");
while($rowcv=mysqli_fetch_array($rescv)){
 ?>
<a href="descargar.php?idcv=<?=$rowcv['idcv'];?>">Descargar CV formato: <?=$rowcv['formato'];?></a>
<br>

<?php
}
 ?>

    <div class="box box-primary">
      <div class="box-header with-border">
        <h2 class="box-title"><b>Actualizar Datos</b></h2>
      </div>

      <div class="col-md-4">
        <div id="nombre" class="form-group">
          <label>Nombre</label>
          <input id="nombre" value="<?= $row['nombre'];?>" name='nombre' type="text" class="form-control" style="text-transform: uppercase !important;" onchange="this.value=this.value.toUpperCase();" maxlength="45" placeholder="Nombre" autocomplete="off" tabindex="7">
          <label id="nombre"></label>
        </div>
      </div>

      <div class="col-md-4">
        <div id="apellidop" class="form-group">
          <label>Apellido Paterno</label>
          <input id="apellidop" value="<?= $row['apellido_paterno'];?>" name="apellidop" type="text" class="form-control" style="text-transform: uppercase !important;" onchange="this.value=this.value.toUpperCase();" maxlength="45" placeholder="Correo" autocomplete="off" tabindex="7">
          <label id="apellidop"></label>
        </div>
      </div>

      <div class="col-md-4">
        <div id="apellidom" class="form-group">
          <label>Correo</label>
          <input id="apellidom" value="<?= $row['apellido_materno'];?>" name="apellidom" type="text" class="form-control" style="text-transform: uppercase !important;" onchange="this.value=this.value.toUpperCase();" maxlength="45" placeholder="Correo" autocomplete="off" tabindex="7">
          <label id="apellidom"></label>
        </div>
      </div>

      <div class="col-md-4">
        <label>Sexo</label><br>
        <label>
              <input id="sexo1" name="sexo" type="radio" class="flat-red" value="H"> Hombre
              </label>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <label>
                  <input id="sexo2" name="sexo" type="radio" class="flat-red" value="M"> Mujer
                  </label>
      </div>

      <div class="col-md-4">
        <div id="div_fecha_nacimiento" class="form-group">
          <label>Fecha de Nacimiento</label>
          <input id="fecha_nacimiento" name="fecha_nacimiento" type="text" class="form-control" autocomplete="off" tabindex="10" value="<?= date('d-m-Y', strtotime($row['fecha_nacimiento'])); ?>" data-inputmask="'alias': 'dd-mm-yyyy'" data-mask>
          <label id="label_fecha_nacimiento"></label>
        </div>
      </div>

      <div class="col-md-4">
        <div id="div_estado_civil" class="form-group">
          <label>Estado Civil</label>
          <select class="form-control">
            <option value="" selected>Seleccione Estado Civil</option>
            <?php
            if ($row['estado_civil'] == 'Soltero (a)') {
               echo '<option value="'.$row['estado_civil'].'" selected>'.$row['estado_civil'].'</option>';
               echo '<option value="Casado (a)">Casado (a)</option>';
             }
             else if ($row['estado_civil'] == 'Casado (a)') {
                echo '<option value="'.$row['estado_civil'].'" selected>'.$row['estado_civil'].'</option>';
                echo '<option value="Soltero (a)">Soltero (a)</option>';
              }
             else{
               echo '<option value="Soltero (a)">Soltero (a)</option>';
               echo '<option value="Casado (a)">Casado (a)</option>';


             }
             ?>
          </select>
          <label id="label_estado_civil"></label>
        </div>
      </div>

      <div class="col-md-4">
        <div id="div_horario_laboral" class="form-group">
          <label>Correo</label>
          <input id="correo" value="<?= $row['email'];?>" name="vacante[horario_laboral]" type="text" class="form-control" style="text-transform: uppercase !important;" onchange="this.value=this.value.toUpperCase();" maxlength="45" placeholder="Correo" autocomplete="off" tabindex="7">
          <label id="label_horario_laboral"></label>
        </div>
      </div>


      <div class="col-md-4">
        <div id="div_celular" class="form-group">
          <label>Celular</label>
          <input id="celular" value="<?= $row['telefono_celular'];?>" name="celular" type="text" class="form-control" style="text-transform: uppercase !important;" onchange="this.value=this.value.toUpperCase();" maxlength="45" placeholder="celular" autocomplete="off" tabindex="7">
          <label id="label_celular"></label>
        </div>
      </div>

      <div class="col-md-4">
        <div id="div_Telefono" class="form-group">
          <label>Telefono</label>
          <input id="telefono" value="<?= $row['telefono_casa'];?>" name="telefono" type="text" class="form-control" style="text-transform: uppercase !important;" onchange="this.value=this.value.toUpperCase();" maxlength="45" placeholder="Telefono" autocomplete="off" tabindex="7">
          <label id="label_telefono"></label>
        </div>
      </div>

      </div>
      <div class="row">
        <div class="col-md-12">
          <div id="div_descripcion_tareas" class="form-group">
            <label id="label_descripcion_tareas"></label>
          </div>
        </div>
      </div>

      <div class="box box-primary">
        <div class="box-header with-border">
          <h2 class="box-title"><b>Dirección</b></h2>
        </div>
      </div>

      <div class="col-md-4">
        <div id="div_calle" class="form-group">
          <label>Calle</label>
          <input id="calle" value="<?= $row['calle'];?>" name="calle" type="text" class="form-control" style="text-transform: uppercase !important;" onchange="this.value=this.value.toUpperCase();" maxlength="45" placeholder="calle" autocomplete="off" tabindex="7">
          <label id="label_calle"></label>
        </div>
      </div>

      <div class="col-md-4">
        <div id="div_numero_ex" class="form-group">
          <label>Numero Exterior</label>
          <input id="numero_ex" value="<?= $row['numero_exterior'];?>" name="numero_ex" type="text" class="form-control" style="text-transform: uppercase !important;" onchange="this.value=this.value.toUpperCase();" maxlength="45" placeholder="Numero Exterior" autocomplete="off" tabindex="7">
          <label id="label_numero_ex"></label>
        </div>
      </div>

      <div class="col-md-4">
        <div id="div_numero_in" class="form-group">
          <label>Numero Interior</label>
          <input id="numero_in" value="<?= $row['numero_interior'];?>" name="numero_in" type="text" class="form-control" style="text-transform: uppercase !important;" onchange="this.value=this.value.toUpperCase();" maxlength="45" placeholder="Numero Interior" autocomplete="off" tabindex="7">
          <label id="label_numero_in"></label>
        </div>
      </div>

      <div class="col-md-4">
        <div id="div_colonia" class="form-group">
          <label>Colonia</label>
          <input id="colonia" value="<?= $row['colonia'];?>" name="colonia" type="text" class="form-control" style="text-transform: uppercase !important;" onchange="this.value=this.value.toUpperCase();" maxlength="45" placeholder="Colonia" autocomplete="off" tabindex="7">
          <label id="label_colonia"></label>
        </div>
      </div>

      <div class="col-md-4">
        <div id="div_cp" class="form-group">
          <label>Código Postal</label>
          <input id="cp" value="<?= $row['cp'];?>" name="cp" type="text" class="form-control" style="text-transform: uppercase !important;" onchange="this.value=this.value.toUpperCase();" maxlength="45" placeholder="Código Postal" autocomplete="off" tabindex="7">
          <label id="label_cp"></label>
        </div>
      </div>

      <div class="col-md-4">
        <div id="div_ciudad" class="form-group">
          <label>Ciudad</label>
          <input id="ciudad" value="<?= $row['ciudad'];?>" name="telefono" type="text" class="form-control" style="text-transform: uppercase !important;" onchange="this.value=this.value.toUpperCase();" maxlength="45" placeholder="Ciudad" autocomplete="off" tabindex="7">
          <label id="label_ciudad"></label>
        </div>
      </div>

      <div class="col-md-4">
        <div id="div_municipio" class="form-group">
          <label>Municipio</label>
          <input id="municipio" value="<?= $row['municipio'];?>" name="municipio" type="text" class="form-control" style="text-transform: uppercase !important;" onchange="this.value=this.value.toUpperCase();" maxlength="45" placeholder="Municipio" autocomplete="off" tabindex="7">
          <label id="label_municipio"></label>
        </div>
      </div>

      <div class="col-md-4">
        <div id="div_estado" class="form-group">
          <label>Estado</label>
          <input id="estado" value="<?= $row['estado'];?>" name="estado" type="text" class="form-control" style="text-transform: uppercase !important;" onchange="this.value=this.value.toUpperCase();" maxlength="45" placeholder="Estado" autocomplete="off" tabindex="7">
          <label id="label_estado"></label>
        </div>
      </div>

      <div class="col-md-4">
        <div id="div_pais" class="form-group">
          <label>País</label>
          <input id="pais" value="<?= $row['pais'];?>" name="pais" type="text" class="form-control" style="text-transform: uppercase !important;" onchange="this.value=this.value.toUpperCase();" maxlength="45" placeholder="País" autocomplete="off" tabindex="7">
          <label id="label_pais"></label>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div id="div_descripcion_tareas" class="form-group">
            <label id="label_descripcion_tareas"></label>
          </div>
        </div>
      </div>

      <div class="box box-primary">
        <div class="box-header with-border">
          <h2 class="box-title"><b>Dirección</b></h2>
        </div>
      </div>


      <div class="box-footer" align="right">
          <button type="button" class="btn btn-primary" onclick="guardar()" tabindex="18"><i class="fa fa-save"></i> &nbsp;Guardar</button>
      </div>

    </div>




<script>

$("#datemask").inputmask("dd-mm-yyyy", {"placeholder": "dd-mm-yy"});
$("[data-mask]").inputmask();

<?php
  if ($row['sexo'] == "H") {
?>
  document.getElementById('sexo1').checked = true;
<?php
  }
  else if ($row['sexo'] == "M") {
?>
  document.getElementById('sexo2').checked = true;
<?php
  }
?>

</script>
     <?php
   }
    ?>
   </body>
 </html>
