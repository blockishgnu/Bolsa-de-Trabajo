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
        <div id="menu" class="clearfix">
        </div>
        <div id="HEADER" class="clearfix">
          <?php
          $res=mysqli_query($con,"SELECT * FROM sab_candidatos WHERE username='".$usuario."'");
          while ($rowl=mysqli_fetch_array($res)) {
      echo "
      <div>
      <br>
      <h3 style=' margin-left: 30px; margin-top:-10px;'>Bienvenido: <b>".$usuario."</b></h3>
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
              <table id="vacantes">
                <tr>
                  <th>Hola</th>
                </tr>
              </table>
            </div>
        </div>
    </div>

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
    type: "POST",
    url:"buscador.php",
    data:{idcategoria:idcategoria, idcategoria_detalle:idcategoria_detalle},
    succes: function(data){
      $("#vacantes").html(data);
    }


  });
}


</script>
