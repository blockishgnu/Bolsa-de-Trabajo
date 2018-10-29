<?php

session_start();
include("../connect.php");
//error_reporting(E_ALL ^ E_NOTICE);

if(isset($_SESSION['usuario'])){
    $usuario= $_SESSION['usuario'];
    $tipo= $_SESSION['tipo'];
    //echo "Has iniciado sesion";
        $res=mysqli_query($con,"SELECT * FROM sab_clientes WHERE username='".$usuario."'");
        while ($rowl=mysqli_fetch_array($res)) {
          $idcliente=$rowl['idcliente'];
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
}else{
    header("Location: ../../login.php");
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
<?= ((isset($js))? $js : ''); ?>

</head>
 <body>
   <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="../cliente.php">SAB | Servicios</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="../cliente.php">Home</a></li>
        <li><a href="../vacantes/vacantes.php">Vacantes</a></li>
        <li><a href="../candidatos/consulta.php">Candidatos</a></li>
        <li class="active"><a href="actualizar.php">Actualizar Perfil</a></li>
        <li><a href="../reclutadores/reclutadores.php">Reclutadores</a></li>

      </ul>
    </div>
  </nav>

 <div class="container">
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
  <div class="box-header with-border">
    <h2 class="box-title"><b>Actualizar Foto</b></h2>
  </div>
  <?php
  $result= mysqli_query($con,"SELECT * FROM sab_clientes WHERE username ='".$usuario."'");
   while($row=mysqli_fetch_array($result)){

   ?>

  <img src="data:image/png;base64,<?php echo base64_encode($row['logo']); ?>" alt="titulo foto"  width='150'  />
  <form enctype='multipart/form-data' action='imagen.php?idcliente=<?=$row['idcliente'];?>' method='POST'>
 <p><br /><input name='foto' type='file' accept='image/*' />
 <p><input type='submit' value='Guardar' />
 <input type='hidden' value='1' name='enviado' />
</form>

  <div class="box box-primary">
    <div class="box-header with-border">
      <h2 class="box-title"><b>Actualizar Datos</b></h2>
    </div>
  <div class="col-md-4">
    <div id="div_horario_laboral" class="form-group">
      <label>Nombre</label>
      <input id="nombre" value="<?= $row['nombre'];?>" name="vacante[horario_laboral]" type="text" class="form-control" style="text-transform: uppercase !important;" onchange="this.value=this.value.toUpperCase();" maxlength="45" placeholder="Nombre" autocomplete="off" tabindex="7">
      <label id="label_horario_laboral"></label>
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
    <div id="div_horario_laboral" class="form-group">
      <label>Telefono</label>
      <input id="telefono_oficina" value="<?= $row['telefono_oficina'];?>" name="vacante[horario_laboral]" type="text" class="form-control" style="text-transform: uppercase !important;" onchange="this.value=this.value.toUpperCase();" maxlength="45" placeholder="Telefono" autocomplete="off" tabindex="7">
      <label id="label_horario_laboral"></label>
    </div>
  </div>

  <div class="col-md-4">
    <div id="div_horario_laboral" class="form-group">
      <label>Celular</label>
      <input id="telefono_celular" value="<?= $row['telefono_celular'];?>" name="vacante[horario_laboral]" type="text" class="form-control" style="text-transform: uppercase !important;" onchange="this.value=this.value.toUpperCase();" maxlength="45" placeholder="Telefono" autocomplete="off" tabindex="7">
      <label id="label_horario_laboral"></label>
    </div>
  </div>

</div>

<div class="row">
  <div class="col-md-12">
    <div id="div_descripcion_tareas" class="form-group">
      <label>Descripción</label>
      <textarea id="descripcion" name="descripcion" class="form-control" style="text-transform: uppercase !important;" onchange="this.value=this.value.toUpperCase();" rows="5" tabindex="5"><?= $row['descripcion']; ?></textarea>
      <label id="label_descripcion_tareas"></label>
    </div>
  </div>
</div>
<div class="box box-primary">
  <div class="box-header with-border">
    <h2 class="box-title"><b>Dirección</b></h2>
  </div>

  <div class="col-md-4">
    <div id="div_horario_laboral" class="form-group">
      <label>Calle</label>
      <input id="calle" value="<?= $row['calle'];?>" name="vacante[horario_laboral]" type="text" class="form-control" style="text-transform: uppercase !important;" onchange="this.value=this.value.toUpperCase();" maxlength="45" placeholder="Calle" autocomplete="off" tabindex="7">
      <label id="label_horario_laboral"></label>
    </div>
  </div>

  <div class="col-md-4">
    <div id="div_horario_laboral" class="form-group">
      <label>Numero Exterior</label>
      <input id="numero_exterior" value="<?= $row['numero_exterior'];?>" name="vacante[horario_laboral]" type="text" class="form-control" style="text-transform: uppercase !important;" onchange="this.value=this.value.toUpperCase();" maxlength="45" placeholder="Numero Exterior" autocomplete="off" tabindex="7">
      <label id="label_horario_laboral"></label>
    </div>
  </div>

  <div class="col-md-4">
    <div id="div_horario_laboral" class="form-group">
      <label>Numero Interior</label>
      <input id="numero_interior" value="<?= $row['numero_interior'];?>" name="vacante[horario_laboral]" type="text" class="form-control" style="text-transform: uppercase !important;" onchange="this.value=this.value.toUpperCase();" maxlength="45" placeholder="Numero Interior" autocomplete="off" tabindex="7">
      <label id="label_horario_laboral"></label>
    </div>
  </div>
  <div class="col-md-4">
    <div id="div_horario_laboral" class="form-group">
      <label>Colonia</label>
      <input id="colonia" value="<?= $row['colonia'];?>" name="vacante[horario_laboral]" type="text" class="form-control" style="text-transform: uppercase !important;" onchange="this.value=this.value.toUpperCase();" maxlength="45" placeholder="colonia" autocomplete="off" tabindex="7">
      <label id="label_horario_laboral"></label>
    </div>
  </div>

  <div class="col-md-4">
    <div id="div_horario_laboral" class="form-group">
      <label>Codigo Postal</label>
      <input id="cp" value="<?= $row['cp'];?>" name="vacante[horario_laboral]" type="text" class="form-control" style="text-transform: uppercase !important;" onchange="this.value=this.value.toUpperCase();" maxlength="45" placeholder="cp" autocomplete="off" tabindex="7">
      <label id="label_horario_laboral"></label>
    </div>
  </div>

  <div class="col-md-4">
    <div id="div_horario_laboral" class="form-group">
      <label>Ciudad</label>
      <input id="ciudad" value="<?= $row['ciudad'];?>" name="vacante[horario_laboral]" type="text" class="form-control" style="text-transform: uppercase !important;" onchange="this.value=this.value.toUpperCase();" maxlength="45" placeholder="Ciudad" autocomplete="off" tabindex="7">
      <label id="label_horario_laboral"></label>
    </div>
  </div>

  <div class="col-md-4">
    <div id="div_horario_laboral" class="form-group">
      <label>Municipio</label>
      <label id="label_horario_laboral"></label>
      <input id="municipio" value="<?= $row['municipio'];?>" name="vacante[horario_laboral]" type="text" class="form-control" style="text-transform: uppercase !important;" onchange="this.value=this.value.toUpperCase();" maxlength="45" placeholder="Municipio" autocomplete="off" tabindex="7">
    </div>
  </div>


  <div class="col-md-4">
    <div id="div_horario_laboral" class="form-group">
      <label>Estado</label>
      <label id="label_horario_laboral"></label>
      <input id="estado" value="<?= $row['estado'];?>" name="vacante[horario_laboral]" type="text" class="form-control" style="text-transform: uppercase !important;" onchange="this.value=this.value.toUpperCase();" maxlength="45" placeholder="Estado" autocomplete="off" tabindex="7">
    </div>
  </div>

    <div class="col-md-4">
      <div id="div_horario_laboral" class="form-group">
        <label>País</label>
        <input id="pais" value="<?= $row['pais'];?>" name="vacante[horario_laboral]" type="text" class="form-control" style="text-transform: uppercase !important;" onchange="this.value=this.value.toUpperCase();" maxlength="45" placeholder="pais" autocomplete="off" tabindex="7">
        <label id="label_horario_laboral"></label>
      </div>
    </div>

</div>
<div class="box-footer" align="right">
    <button type="button" class="btn btn-primary" onclick="guardar()" tabindex="18"><i class="fa fa-save"></i> &nbsp;Guardar</button>
</div>
<div>
  <br>
  <br>
</div>
<footer class="main-footer">
      <div class="pull-right hidden-xs">
        <b>Powered by <a href="http://www.hellodigital.mx/">Hello Digital S. de R.L. de C.V.</a></b>
      </div>
      <strong>&copy; Copyright <?= date('Y'); ?> SAB Servicios Profesionales S.A. de C.V.</strong>
    </footer>
</body>
<?php

}
 ?>
 <script>

 function guardar(){
 $.ajax({
       type:'POST',
       url: 'guardar.php',
       data: {
         idcliente:"<?= $idcliente; ?>",
         nombre:$("#nombre").val(),
         email:$("#correo").val(),
         descripcion:$("#descripcion").val(),
         telefono_oficina:$("#telefono_oficina").val(),
         telefono_celular:$("#telefono_celular").val(),
         calle:$("#calle").val(),
         numero_exterior:$("#numero_exterior").val(),
         numero_interior:$("#numero_interior").val(),
         colonia:$("#colonia").val(),
         cp:$("#cp").val(),
         ciudad:$("#ciudad").val(),
         municipio:$("#municipio").val(),
         estado:$("#estado").val(),
         pais:$("#pais").val()
       },

       success:function(data){
           if(data==0){
             alert("Se ha guardado con exito");
             window.setTimeout("window.location.href='Actualizar.php'", 1000);
           }
       },
       error:function(data){
        //registro fallido
        alert("Registro fallido");
       }
     });
   }
 </script>
