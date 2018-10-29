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
   	-moz-box-shadow:inset 0px 1px 0px 0px #caefab;
   	-webkit-box-shadow:inset 0px 1px 0px 0px #caefab;
   	box-shadow:inset 0px 1px 0px 0px #caefab;
   	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #77d42a), color-stop(1, #5cb811));
   	background:-moz-linear-gradient(top, #77d42a 5%, #5cb811 100%);
   	background:-webkit-linear-gradient(top, #77d42a 5%, #5cb811 100%);
   	background:-o-linear-gradient(top, #77d42a 5%, #5cb811 100%);
   	background:-ms-linear-gradient(top, #77d42a 5%, #5cb811 100%);
   	background:linear-gradient(to bottom, #77d42a 5%, #5cb811 100%);
   	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#77d42a', endColorstr='#5cb811',GradientType=0);
   	background-color:#77d42a;
   	-moz-border-radius:6px;
   	-webkit-border-radius:6px;
   	border-radius:6px;
   	border:1px solid #268a16;
   	display:inline-block;
   	cursor:pointer;
   	color:#306108;
   	font-family:Arial;
   	font-size:15px;
   	font-weight:bold;
   	padding:6px 24px;
   	text-decoration:none;
   	text-shadow:0px 1px 0px #aade7c;
   }
   .agregar:hover {
   	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #5cb811), color-stop(1, #77d42a));
   	background:-moz-linear-gradient(top, #5cb811 5%, #77d42a 100%);
   	background:-webkit-linear-gradient(top, #5cb811 5%, #77d42a 100%);
   	background:-o-linear-gradient(top, #5cb811 5%, #77d42a 100%);
   	background:-ms-linear-gradient(top, #5cb811 5%, #77d42a 100%);
   	background:linear-gradient(to bottom, #5cb811 5%, #77d42a 100%);
   	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#5cb811', endColorstr='#77d42a',GradientType=0);
   	background-color:#5cb811;
   }
   .agregar:active {
   	position:relative;
   	top:1px;
   }


   a.agregar:hover {
     color: white;
     text-decoration:none;
   }
   .user{ border-color:#00ffcc;
     box-shadow: -3px 5px 7px 0px rgba(42,42,42,.90);
     border-radius:12px;
     border-width:2px;
     border-style:hidden;
     font-size:19px;
     padding:11px;
     font-weight:normal;  }
   	.user:focus { outline:none; }

    .pass{ border-color:#00ffcc;
      box-shadow: -3px 5px 7px 0px rgba(42,42,42,.90);
      border-radius:12px;
      border-width:2px;
      border-style:hidden;
      font-size:19px;
      padding:11px;
      font-weight:normal;  }
    	.pass:focus { outline:none; }

      .pass2{ border-color:#00ffcc;
        box-shadow: -3px 5px 7px 0px rgba(42,42,42,.90);
        border-radius:12px;
        border-width:2px;
        border-style:hidden;
        font-size:19px;
        padding:11px;
        font-weight:normal;  }
      	.pass2:focus { outline:none; }

        .nombre{ border-color:#00ffcc;
          box-shadow: -3px 5px 7px 0px rgba(42,42,42,.90);
          border-radius:12px;
          border-width:2px;
          border-style:hidden;
          font-size:19px;
          padding:11px;
          font-weight:normal;  }
        	.nombre:focus { outline:none; }
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
     		 <li class="active"><a href="../clientes/clientes.php">Clientes</a></li>
     		 <li><a href="../reclutadores/reclutadores.php">Reclutadores</a></li>
     	 </ul>
      </div>
     </nav>

   <script>

    function registrarse(){
      user= document.getElementById("user").value;
      pass= document.getElementById("pass").value;
      pass2= document.getElementById("pass2").value;
      nombre= document.getElementById("nombre").value;

      //checar campos vacias
      if(user=="" || pass=="" || pass2=="" || nombre==""){
          $("#resultado").html("<span style='font-weight:bold;color:red;'>Debes llenar todos los campos.</span>");
      }else{
        //Comparar contraseñas
      if(pass!=pass2){
        $("#resultado").html("<span style='font-weight:bold;color:red;'>Las contraseñas no coinciden.</span>");
      }else{

      $.ajax({
            type:'POST',
            url: 'registrado.php',
            data: {
              user:user,
              pass:pass,
              nombre:nombre},
            success:function(data){
              if(data==0){
                //alert("Registro exitoso");
                $("#resultado").html("<span style='font-weight:bold;color:black;'>Registrado exitosamente.</span>");
                setTimeout("location.href='clientes.php'", 1000);
              }else if(data==1){
                $("#resultado").html("<span style='font-weight:bold;color:red;'>El nombre de usuario ya existe.</span>");
                //alert("El nombre de usuario ya existe");
              }

            },
            error:function(data){
             //registro fallido
             alert("Registro fallido");
            }
          });

    }
  }
}





   </script>

<div align='center'>
   <div id="resultado"></div>
   <br>
   <p><h3>Usuario:</h3></p>
   <input name="user" type="text" id="user" class="user" placeholder="Escribe tu usuario" /></p>
   <p><h3>Contraseña:</h3></p>
   <input name="pass" type="text" id="pass" class="pass" placeholder="Escribe tu Contraseña" /></p>
   <p><h3>Repetir Contraseña:</h3></p>
   <input name="pass2" type="text" id="pass2" class="pass2" placeholder="Repite tu Contraseña" /></p>
   <p><h3>Nombre:</h3></p>
   <input name="nombre" type="text" id="nombre" class="nombre" placeholder="Escribe el nombre" /></p>
   <br>
   <br>
   <a onclick="registrarse();" class="Agregar">Agregar</a>
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
