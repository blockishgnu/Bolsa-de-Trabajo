<?php

session_start();
include("../connect.php");

//error_reporting(E_ALL ^ E_NOTICE);


if(isset($_SESSION['usuario'])){

    $usuario= $_SESSION['usuario'];
    $tipo= $_SESSION['tipo'];
    //echo "Has iniciado sesion";


}else{
    header("Location: ../login.php");
    exit;
}


 ?>
 <style>
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

.ver_vacante {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #44c767), color-stop(1, #5cbf2a));
	background:-moz-linear-gradient(top, #44c767 5%, #5cbf2a 100%);
	background:-webkit-linear-gradient(top, #44c767 5%, #5cbf2a 100%);
	background:-o-linear-gradient(top, #44c767 5%, #5cbf2a 100%);
	background:-ms-linear-gradient(top, #44c767 5%, #5cbf2a 100%);
	background:linear-gradient(to bottom, #44c767 5%, #5cbf2a 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#44c767', endColorstr='#5cbf2a',GradientType=0);
	background-color:#44c767;
	-moz-border-radius:28px;
	-webkit-border-radius:28px;
	border-radius:28px;
	border:1px solid #18ab29;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:17px;
	padding:8px 18px;
	text-decoration:none;
	text-shadow:0px 1px 11px #2f6627;
}
.ver_vacante:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #5cbf2a), color-stop(1, #44c767));
	background:-moz-linear-gradient(top, #5cbf2a 5%, #44c767 100%);
	background:-webkit-linear-gradient(top, #5cbf2a 5%, #44c767 100%);
	background:-o-linear-gradient(top, #5cbf2a 5%, #44c767 100%);
	background:-ms-linear-gradient(top, #5cbf2a 5%, #44c767 100%);
	background:linear-gradient(to bottom, #5cbf2a 5%, #44c767 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#5cbf2a', endColorstr='#44c767',GradientType=0);
	background-color:#5cbf2a;
}
.ver_vacante:active {
	position:relative;
	top:1px;
}

a.ver_vacante:hover {
    color: white;
    text-decoration:none;
}
a.ver_vacante:visited {
  color: white;
  text-decoration:none;
}

.logo{

  border:2px solid #5cbf2a;
  border-radius: 10px;
  margin-left: 60px;
  -webkit-box-shadow: 10px 10px 11px 2px rgba(0,0,0,0.75);
 -moz-box-shadow: 10px 10px 11px 2px rgba(0,0,0,0.75);
  box-shadow: 10px 10px 11px 2px rgba(0,0,0,0.75);
  width:100px;
  height:100px;


}

.actualizar_perfil {
	-moz-box-shadow:inset 0px 1px 0px 0px #ffffff;
	-webkit-box-shadow:inset 0px 1px 0px 0px #ffffff;
	box-shadow:inset 0px 1px 0px 0px #ffffff;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #f9f9f9), color-stop(1, #e9e9e9));
	background:-moz-linear-gradient(top, #f9f9f9 5%, #e9e9e9 100%);
	background:-webkit-linear-gradient(top, #f9f9f9 5%, #e9e9e9 100%);
	background:-o-linear-gradient(top, #f9f9f9 5%, #e9e9e9 100%);
	background:-ms-linear-gradient(top, #f9f9f9 5%, #e9e9e9 100%);
	background:linear-gradient(to bottom, #f9f9f9 5%, #e9e9e9 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#f9f9f9', endColorstr='#e9e9e9',GradientType=0);
	background-color:#f9f9f9;
	-moz-border-radius:6px;
	-webkit-border-radius:6px;
	border-radius:6px;
	border:1px solid #dcdcdc;
	display:inline-block;
	cursor:pointer;
	color:#666666;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
	padding:4px 24px;
	text-decoration:none;
	text-shadow:0px 1px 0px #ffffff;
}
.actualizar_perfil:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #e9e9e9), color-stop(1, #f9f9f9));
	background:-moz-linear-gradient(top, #e9e9e9 5%, #f9f9f9 100%);
	background:-webkit-linear-gradient(top, #e9e9e9 5%, #f9f9f9 100%);
	background:-o-linear-gradient(top, #e9e9e9 5%, #f9f9f9 100%);
	background:-ms-linear-gradient(top, #e9e9e9 5%, #f9f9f9 100%);
	background:linear-gradient(to bottom, #e9e9e9 5%, #f9f9f9 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#e9e9e9', endColorstr='#f9f9f9',GradientType=0);
	background-color:#e9e9e9;
}
.actualizar_perfil:active {
	position:relative;
	top:1px;
}
a.actualizar_perfil:hover{
  color: black;
  text-decoration:none;
}
a.actualizar_perfil:visited{
  color: black;
  text-decoration:none;
}

 </style>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>SAB |Servicios</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../public/sab/img/favicon.ico">
    <link rel="stylesheet" href="../css/boilerplate.css">
    <link rel="stylesheet" href="../css/page.css">
    <link rel="stylesheet" href="../public/sab/css/select2.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="../public/sab/js/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <script src="../public/sab/js/select2.full.min.js"></script>
  </head>
  <body>

    <div id="primaryContainer" class="primaryContainer clearfix">
        <div id="footer" class="clearfix">
          </div>
<?php
$res=mysqli_query($con,"SELECT * FROM sab_candidatos WHERE username='".$usuario."'");
while ($rowl=mysqli_fetch_array($res)) {
?>

        <div id="menu" class="clearfix">
          <h3 style=' display: inline-block; margin-left: 30px; margin-top:10px; color:white;'>Bienvenido: <b><?=$usuario?></b></h3>
          <a href="#" class="actualizar_perfil" style="display: inline-block; margin-right:5px; margin-top: 10px; float: right;">Actualizar Perfil</a>
        </div>
        <div id="HEADER" class="clearfix">
          <?php
      echo "
      <div>
      <br>

      ";
      if($rowl['foto']==null){
        if($rowl['sexo']=='H'){
        echo "<br><img src='../public/sab/img/men.png' class='img-circle' alt='User Image' width='70px;' style='border:4px solid black;  margin-left: 60px;' >";
      }else{
        echo "<br><img src='../public/sab/img/women.png' class='img-circle' alt='User Image' width='70px;' style='border:4px solid black;  margin-left: 60px;' >";
      }
    }else{
      ?>
      <br><img src='data:image/png;base64,<?php echo base64_encode($rowl['foto']); ?>' class='img-circle' alt='User Image' width='70px;' style='border:4px solid black;  margin-left: 60px;' >
      <?php
    }
       echo "
      <a href = '../logout.php' tite = 'Logout'><img src='../public/sab/img/logout.png' width='60px;' style=' margin-right: 30px;' align='right'></a>
      <br>
      <br>
      </div>
      ";
    }
           ?>
            <div id="selec_lists" class="clearfix">
                <label id="formgroup">
                      <p id="text">
                      CATEGORIA
                      </p>
                      	<div id="div_idcategoria" class="form-group">
                      <select id="idcategoria" name="idcategoria" class="form-control select2" style="width: 100%;" onchange="carga_subcat();" tabindex="3">
                        <option value="00" selected>Seleccione una Categoría</option>
                        <?php
                        $resc= mysqli_query($con,"SELECT * FROM sab_empleos_categorias");
                         while ($rowc = mysqli_fetch_array ($resc)) {
                            echo '<option value="'.$rowc['idcategoria'].'">'.$rowc['descripcion'].'</option>';
                          }
                        ?>
                      </select>
                      <p id="text">SUBCATEGORIA</p>
                      <div id="div_idcategoria_detalle" class="form-group">
  											<select id="idcategoria_detalle" name="vacante[idcategoria_detalle]" class="form-control select2" style="width: 100%;" tabindex="4" disabled>
  												<option value="00" selected>Seleccione una Subcategoría</option>
  											</select>
  											<label id="label_idcategoria_detalle"></label>
  										</div>
                      </select>
                      <a onclick="buscar();" class="agregar" align='center'>Buscar</a>
                    </div>
                </label>

            </div>
        </div>
        <div id="Body" class="clearfix">
            <div id="vacante1" class="clearfix">
              <table id="vacantes" align='center'>
                <thead>
                  <tr>
                  </tr>
                </thead>
                <tbody>
                  <?php
                     $result=mysqli_query($con,"SELECT * FROM sab_vacantes");
                     while($row=mysqli_fetch_array($result)){
                       echo "<tr>
                       <th>
                       ";
                       ?>
                       <img class='logo' src='data:image/png;base64,<?php echo base64_encode($row['foto']); ?>' alt='Image'  style='' >
                      &nbsp;&nbsp;
                      <?php
                       echo "
                       </th>
                       <th><h3 align='center'>&nbsp;".$row['nombre']."&nbsp;</h3></th>
                       <th><a href='ver_vacante.php?idvacante=".$row['idvacante']."' class='ver_vacante'>Ver Vacante</a></th>
                        <tr>
                        <th><hr style=' height: 12px; border: 0; box-shadow: inset 0 12px 12px -12px rgba(0, 0, 0, 0.5);'></th>
                        <th><hr style=' height: 12px; border: 0; box-shadow: inset 0 12px 12px -12px rgba(0, 0, 0, 0.5);'></th>
                        <th><hr style=' height: 12px; border: 0; box-shadow: inset 0 12px 12px -12px rgba(0, 0, 0, 0.5);'></th>
                        <tr>
                       </tr>
                       ";

                     }
                   ?>

                </tbody>
              </table>
            </div>
        </div>
    </div>


    <footer class="main-footer">
          <div class="pull-right hidden-xs">
            <b>Powered by <a href="http://www.hellodigital.mx/">Hello Digital S. de R.L. de C.V.</a></b>
          </div>
          <strong>&copy; Copyright <?= date('Y'); ?> SAB Servicios Profesionales S.A. de C.V.</strong>
        </footer>
  </body>
</html>
<script>

$(".select2").select2();
function carga_subcat() {

    categoria = $("#idcategoria").val();

  $.ajax({
    type: "post",
    data: { categoria : categoria },
    async: true,
    url: "subcategoria.php",
    cache: false,
    beforeSend: function(cargando) {
    },
    success: function(data) {

        $("#idcategoria_detalle").empty().removeAttr("disabled").append(data);
        $("#idcategoria_detalle").select2("val", "00");
    }
  });
}

function buscar(){
  idcategoria=$("#idcategoria").val();
  idcategoria_detalle=$("#idcategoria_detalle").val();
  $.ajax({
        type:'POST',
        url: 'buscador.php',
        data: {idcategoria:idcategoria, idcategoria_detalle:idcategoria_detalle},
        success:function(data){
          if(data!='')
     $("#vacantes").html(data);
     else{
        $("#vacantes").html("<h2 align='center'>No vacantes de la busqueda seleccionada</h2>");
     }

             },
             error:function(data){
              //registro fallido
              alert("Registro fallido");
             }
           });
}

</script>
