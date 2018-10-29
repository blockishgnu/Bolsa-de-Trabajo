<?php
session_start();
include("../connect.php");

if(isset($_SESSION['usuario'])){

  $usuario=$_SESSION['usuario'];

  echo "
  <div style='background-color: #82f435; -webkit-box-shadow: inset 2px 35px 46px 0px rgba(0,0,0,0.75); -moz-box-shadow: inset 2px 35px 46px 0px rgba(0,0,0,0.75); box-shadow: inset 2px 35px 46px 0px rgba(0,0,0,0.75);'>
  <br>
  <img src='../../public/sab/img/adm.jpg' class='img-circle' alt='User Image' width='40px;' style='border:2px solid black; display:inline-block;  margin-left: 60px;' >
  <h4 style=' margin-left: 30px; color:white; display:inline-block; '>Bienvenido: <b>".$usuario."</b></h4>
  <a href = '../../logout.php' title = 'Cerrar Sesión'><img src='../../public/sab/img/logout.png' width='40px;' style=' margin-right: 30px;' align='right'></a>
  <br>
  <br>
  </div>
  ";

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

      <link rel="stylesheet" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>
      <script src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>


      <script src="../../css/datatables.min.js"></script>
      <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

   <?= ((isset($js))? $js : ''); ?>

   </head>
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



 .modalDialog {
   position: fixed;
   font-family: Arial, Helvetica, sans-serif;
   top: 0;
   right: 0;
   bottom: 0;
   left: 0;
   background: rgba(0,0,0,0.8);
   z-index: 99999;
   opacity:0;
   -webkit-transition: opacity 400ms ease-in;
   -moz-transition: opacity 400ms ease-in;
   transition: opacity 400ms ease-in;
   pointer-events: none;
 }
 .modalDialog:target {
   opacity:1;
   pointer-events: auto;
 }
 .modalDialog > div {
   width: 400px;
   position: relative;
   margin: 10% auto;
   padding: 5px 20px 13px 20px;
   border-radius: 10px;
   background: #fff;
   background: -moz-linear-gradient(#fff, #999);
   background: -webkit-linear-gradient(#fff, #999);
   background: -o-linear-gradient(#fff, #999);
   -webkit-transition: opacity 400ms ease-in;
 -moz-transition: opacity 400ms ease-in;
 transition: opacity 400ms ease-in;
 }
 .close {
   background: #606061;
   color: #FFFFFF;
   line-height: 25px;
   position: absolute;
   right: -12px;
   text-align: center;
   top: -10px;
   width: 24px;
   text-decoration: none;
   font-weight: bold;
   -webkit-border-radius: 12px;
   -moz-border-radius: 12px;
   border-radius: 12px;
   -moz-box-shadow: 1px 1px 3px #000;
   -webkit-box-shadow: 1px 1px 3px #000;
   box-shadow: 1px 1px 3px #000;
 }
 .close:hover { background: #00d9ff; }


 .agregar {
 -moz-box-shadow: 3px 4px 0px 0px #3dc21b;
 -webkit-box-shadow: 3px 4px 0px 0px #3dc21b;
 box-shadow: 3px 4px 0px 0px #3dc21b;
 background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #44c767), color-stop(1, #5cbf2a));
 background:-moz-linear-gradient(top, #44c767 5%, #5cbf2a 100%);
 background:-webkit-linear-gradient(top, #44c767 5%, #5cbf2a 100%);
 background:-o-linear-gradient(top, #44c767 5%, #5cbf2a 100%);
 background:-ms-linear-gradient(top, #44c767 5%, #5cbf2a 100%);
 background:linear-gradient(to bottom, #44c767 5%, #5cbf2a 100%);
 filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#44c767', endColorstr='#5cbf2a',GradientType=0);
 background-color:#44c767;
 -moz-border-radius:5px;
 -webkit-border-radius:5px;
 border-radius:5px;
 border:1px solid #18ab29;
 display:inline-block;
 cursor:pointer;
 color:#ffffff;
 font-family:Arial;
 font-size:17px;
 font-weight:bold;
 padding:12px 44px;
 text-decoration:none;
 text-shadow:0px 1px 0px #2f6627;
 }
 .agregar:hover {
 background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #5cbf2a), color-stop(1, #44c767));
 background:-moz-linear-gradient(top, #5cbf2a 5%, #44c767 100%);
 background:-webkit-linear-gradient(top, #5cbf2a 5%, #44c767 100%);
 background:-o-linear-gradient(top, #5cbf2a 5%, #44c767 100%);
 background:-ms-linear-gradient(top, #5cbf2a 5%, #44c767 100%);
 background:linear-gradient(to bottom, #5cbf2a 5%, #44c767 100%);
 filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#5cbf2a', endColorstr='#44c767',GradientType=0);
 background-color:#5cbf2a;

 }
 .agregar:active {
 position:relative;
 top:1px;
 }

 a.agregar:hover {
   color: white;
   text-decoration:none;
 }

 </style>

   <nav class="navbar navbar-inverse">
    <div class="container-fluid">
   	 <div class="navbar-header">
   		 <a class="navbar-brand" href="../administrador.php">SAB | Servicios</a>
   	 </div>
   	 <ul class="nav navbar-nav">
   		 <li><a href="../administrador.php">Home</a></li>
   		 <li><a href="../vacantes/vacantes.php">Vacantes</a></li>
   		 <li><a href="../candidatos/consulta.php">Candidatos</a></li>
   		 <li><a href="../clientes/clientes.php">Clientes</a></li>
   		 <li class="active"><a href="../reclutadores/reclutadores.php">Reclutadores</a></li>
   	 </ul>
    </div>
   </nav>

 <script>

 $(document).ready( function () {
     $('#tabla_reclutadores').DataTable();
 } );


 function confirmareliminar(username,nombre){
   window.location.href = "#eliminarModal";

   $("#info_cliente_eli").empty();
   $("#info_cliente_eli").append(nombre);
   $("#username_eli").val('');
   $("#username_eli").val(username);
 }

 function eliminar(){
   $.ajax({
         type:'POST',
         url: 'eliminar.php',
         data: {username:$('#username_eli').val()},
         success:function(data){

       window.location.href="reclutadores.php";

              },
              error:function(data){
               //registro fallido
               alert("Registro fallido");
              }
            });

 }

 </script>


 <section class="content">
   <a href="nuevo.php" class="agregar">Agregar Reclutador</a>
   <br>
   <br>
   <div class="box">
     <div class="box-header">
       <h3 class="box-title">Reclutadores</h3>
     </div>

     <div class="box-body table-responsive">
       <table id="tabla_reclutadores" class="table table-bordered table-striped">
         <thead>
           <tr>
             <th style="text-align: center !important;"></th>
             <th style="text-align: center !important;">Imagen</th>
             <th style="text-align: center !important;">Nombre</th>
             <th style="text-align: center !important;">Apellido</th>
             <th style="text-align: center !important;">Usuario</th>
             <th style="text-align: center !important;">Telefono</th>
             <th style="text-align: center !important;">Correo</th>
             <th style="text-align: center !important;">Opciones</th>
           </tr>
         </thead>
         <tbody>
           <?php
             $result = mysqli_query($con,"SELECT * FROM `sab_reclutadores`");
             while ($row = mysqli_fetch_array ($result)) {
               echo "
               <tr>
               <th><i class='fa fa-id-card'></i></th>
               ";
               ?>
               <th>
               <img src="data:image/png;base64,<?php echo base64_encode($row['foto']); ?>" alt="titulo foto"  width='150'  />
               <?php
               echo "
          <form enctype='multipart/form-data' action='imagen.php?idvacante=".$row['idreclutador']."' method='POST'>
         <p><b>Actualizar Foto:</b><br /><input name='foto' type='file' accept='image/*' />
         <p><input type='submit' value='Guardar' />
         <input type='hidden' value='1' name='enviado' />
        </form>
               </th>
               <th>".$row['nombre']."</th>
               <th>".$row['apellido_paterno']."</th>
               <th>".$row['username']."</th>
               <th>".$row['telefono_oficina']."</th>
               <th>".$row['email']."</th>
               <th>
               <!--Editar-->
               <a class='btn btn-social-icon btn-primary btn-xs'
               title='Editar Vacante'
                href='editar.php?idreclutador=".$row['idreclutador']."'>
                <i class='fa fa-pencil'></i></a>
                ";?>
                <!--Eliminar-->
                <a class='btn btn-social-icon btn-danger btn-xs'
                title='Eliminar Vacante'
                 onclick='confirmareliminar("<?=$row['username']?>","<?=$row['nombre']?>");'>
                 <i class='fa fa-trash'></i></a>

                </th>
               </tr>
       <?php
         }
            ?>
         </tbody>
       </table>
     </div>
   </div>

   <!--Modal Confirmar eliminar -->
     <div id="eliminarModal" class="modalDialog" role="document">
         <div class="modal-content">
           <div class="modal-header" style="background-color:#f56954 !important">
             <h3 class="modal-title" id="myModalLabel"><i class="fa fa-warning"></i> Alerta SABServicios</h3>
           </div>
           <div class="modal-body" align="center">
             <h4>¿Realmente deseas Eliminar el cliente?</h4>
             <h5 id="info_cliente_eli"></h5>
             <input id="username_eli" name="username_eli" type="hidden">
           </div>
           <div class="modal-footer" style="background-color:#d2d6de !important">
             <a type="button" href="#close" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> NO</a>
             <button type="button" class="btn btn-primary" onclick="eliminar();"><i class="fa fa-check"></i> SI</button>
           </div>
         </div>
     </div>
   </div>
   <div>

   	<br>
   	<br>
   	<br>
   	<br>
   </div>


   <footer class="main-footer" style="">
         <div class="pull-right hidden-xs">
           <b>Powered by <a href="http://www.hellodigital.mx/">Hello Digital S. de R.L. de C.V.</a></b>
         </div>
         <strong>&copy; Copyright <?= date('Y'); ?> SAB Servicios Profesionales S.A. de C.V.</strong>
       </footer>
