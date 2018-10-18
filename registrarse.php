<?php
session_start();
$_SESSION['comprobar']='true';
if(isset($_SESSION['usuario'])){

 header("Location: index.php");

}

/*
function registrar(){
echo "Registrado";
$user=$_POST["usuario"];
echo "user: ".$user;
}
*/

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
        <meta charset="utf-8">
     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


     <link rel="shortcut icon" href="public/sab/img/favicon.ico">
     <link rel="stylesheet" href="css/boilerplate.css">
     <link rel="stylesheet" href="css/page.css">
     <link rel="stylesheet" href="public/sab/css/select2.min.css">

     <link rel="stylesheet" href="public/sab/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
     <!-- Ionicons -->
     <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
     <!-- Select2 -->
     <link rel="stylesheet" href="public/sab/css/select2.min.css">
     <!-- Theme style -->
     <link rel="stylesheet" href="public/sab/css/AdminLTE.min.css">
     <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
     <link rel="stylesheet" href="public/sab/css/_all-skins.min.css">
     <link rel="stylesheet" href="public/sab/css/all.css">
     <!-- iCheck -->
     <link rel="stylesheet" href="public/sab/css/flat/blue.css">

     <!-- jvectormap -->
     <link rel="stylesheet" href="public/sab/css/jquery-jvectormap-1.2.2.css">
     <!-- Date Picker -->
     <link rel="stylesheet" href="public/sab/css/datepicker3.css">
     <!-- Daterange picker -->
     <link rel="stylesheet" href="public/sab/css/daterangepicker-bs3.css">
     <!-- bootstrap wysihtml5 - text editor -->
     <link rel="stylesheet" href="public/sab/css/bootstrap3-wysihtml5.min.css">
     <!-- DataTables -->
       <link rel="stylesheet" href="public/sab/css/dataTables.bootstrap.css">
       <!-- iCheck -->
     <link rel="stylesheet" href="public/sab/css/square/blue.css">

     <link rel="stylesheet" href="css/jquery.gritter.css">


     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <script src="public/sab/js/jQuery-2.1.4.min.js"></script>
     <!-- jQuery UI 1.11.4 -->
     <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
     <script src="public/sab/js/select2.full.min.js"></script>
     <!-- InputMask -->
     <script src="public/sab/js/jquery.inputmask.js"></script>
     <script src="public/sab/js/jquery.inputmask.date.extensions.js"></script>
     <script src="public/sab/js/jquery.inputmask.extensions.js"></script>

     <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  	<script src="js/jquery.gritter.js"></script>

    <title>Registrarse</title>

  </head>
  <style>
  body{
  background-image: url("greenback.png");
  background-repeat: no-repeat, repeat;
  background-size: auto;
}

.volver{
   color: black;
   font-size: 20px;
   display: inline-block;
   margin-left: -50px;

}
.volver:hover{
  color:black;
  text-decoration:none;
}
.volver:visited{
  color:black;
  text-decoration:none;
}
  </style>
  <body>

     <div align="center">

    <form class="form-register" style="background-color:white; border-radius:20px; margin-left:10%; margin-right:10%; margin:8%;"role="form">


       <div class="box box-primary">

         <div class="box-header with-border">
           <div align='left' style="margin-left:12%;">
           <a class='volver' align='left' href='login.php'><img src="public/sab/img/volver.png" style="width:50px;"></img><b>REGRESAR</b></a>
         </div>

           &nbsp;
         </div>
         <div id="resultado"></div>
       <div class='col-md-4'>
         <div id="div_nombre" class="form-group">
       <p><label for="usuario">Usuario:</label></p>
       <input name="user" type="text" id="user" class="form-control" placeholder="Escribe tu usuario" /></p>
     </div>
     </div>
     <div class='col-md-4'>
       <div id="div_nombre" class="form-group">
       <p><label for="pass">Contraseña:</label></p>
       <input name="pass" type="text" id="pass" class="form-control" placeholder="Escribe tu Contraseña" /></p>
     </div>
     </div>
     <div class='col-md-4'>
       <div id="div_nombre" class="form-group">
       <p><label for="pass2">Repetir Contraseña:</label></p>
       <input name="pass2" type="text" id="pass2" class="form-control" placeholder="Repite tu Contraseña" /></p>
     </div>
   </div>
   <div class='col-md-4'>
     <div id="div_nombre" class="form-group">
       <p><label for="Nombre">Nombre(s):</label></p>
       <input name="nombre" type="text" id="nombre" class="form-control" placeholder="Escribe tu Nombre(s)" /></p>
     </div>
   </div>
   <div class='col-md-4'>
     <div id="div_nombre" class="form-group">
       <p><label for="apellidop">Apellido Paterno:</label></p>
       <input name="apellidop" type="text" id="apellidop" class="form-control" placeholder="Escribe tu Apellido Paterno" /></p>
</div>
</div>
<div class='col-md-4'>
  <div id="div_nombre" class="form-group">
       <p><label for="apellidom">Apellido Materno:</label></p>
       <input name="apellidom" type="text" id="apellidom" class="form-control" placeholder="Escribe tu Apellido Materno" /></p>
</div>
</div>
<div class='col-md-4'>
  <div id="div_nombre" class="form-group">
       <p><label for="sexo">Sexo:</label></p>
       <input style="display:inline-block;"type="radio" name="sexo" value="H" />Masculino
       <input style="display:inline-block;" type="radio" name="sexo" value="M" />Femenino
     </div>
   </div>
   <div class='col-md-4'>
     <div id="div_nombre" class="form-group">
       <p><label for="fecha">Fecha de Nacimiento:</label></p>
       <input type="date" id="fecha" class="form-control" name="fecha">
     </div>
   </div>
   <div class='col-md-4'>
     <div id="div_nombre" class="form-group">
       <span id="emailOK"></span>
       <p><label for="correo">Correo:</label></p>
       <input name="correo" type="text" id="correo" class="form-control" placeholder="Escribe tu e-mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required /></p>
</div>
</div>
<div class='col-md-4'>
  <div id="div_nombre" class="form-group">
       <p><label for="telefono">Celular:</label></p>
        <input type="tel" id="celular" name="celular"
              class='form-control'
               placeholder="Celular"
               pattern="[0-9]{10}"
               required />
        <span class="validity"></span>
      </div>
    </div>
        <div class='col-md-4'>
          <div id="div_nombre" class="form-group">
        <p><label for="telefono">Telefono:</label></p>
         <input type="tel" id="telefono" name="telefono"
              class='form-control'
                placeholder="Telefono"
                pattern="[0-9]{10}"
                required />
         <span class="validity"></span></p>
       </div>
     </div>

     <button style="background:green; width: 80%; "class = "btn btn-lg btn-primary btn-block" type = "submit" onclick="return Registrarse();" name = "login">Registrarse</button>
     <br>
     <br>
       </div>


    </form>
    </div>

    <script>
      function Registrarse(){

        //var email: /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/;

      //datos registro usuario
        user= document.getElementById("user").value;
        pass= document.getElementById("pass").value;
        pass2= document.getElementById("pass2").value;
        //datos registro tabla candidato
        nombre= document.getElementById("nombre").value;
        apellidop= document.getElementById("apellidop").value;
        apellidom= document.getElementById("apellidom").value;
        sexo = $('input[name="sexo"]:checked').val();
        fecha= document.getElementById("fecha").value;
        correo= document.getElementById("correo").value;
        celular= document.getElementById("celular").value;
        telefono= document.getElementById("telefono").value;

        //checar variables vacias
        if(user=="" || pass=="" || pass2=="" || nombre=="" || apellidop ==""
        || apellidom =="" || sexo =="" || fecha =="" || correo == "" || correo == "" || celular ==""){
          //alert("Debes llenar todos los campos");
          $.gritter.add({
	         title: 'ERROR!',
	         text: 'Debes llenar todos los campos'
	       });

        }else{
          //Comparar contraseñas
        if(pass!=pass2){
          //alert("Las contraseñas no coinciden");
          $.gritter.add({
           title: 'ERROR!',
           text: 'Las Contraseñas no coinciden'
         });
        }else{
        //alert("user:"+user+" pass:"+pass+" sexo: "+sexo);

        $.ajax({
              type:'POST',
              url: 'registrado.php',
              data: {user:user,pass:pass,nombre:nombre,apellidop:apellidop,apellidom:apellidom,sexo:sexo,fecha:fecha,correo:correo,celular:celular,telefono:telefono},
              success:function(data){
                //$("#resultado").html(data);

                if(data == "1"){
             $("#resultado").html("<span style='font-weight:bold;color:red;'>El nombre de usuario ya existe.</span>");
             $.gritter.add({
              title: 'ERROR!',
              text: 'El nombre de usuario ya existe'
            });
          }else if(data == "2"){
            $("#resultado").html("<span style='font-weight:bold;color:red;'>Este correo ya esta registrado.</span>");
            $.gritter.add({
             title: 'ERROR!',
             text: 'Este correo ya esta registrado'
           });
          }else if(data == "3"){
          $("#resultado").html("<span style='font-weight:bold;color:black;'>Registrado exitosamente.</span>");
          $.gritter.add({
           title: 'EXITO!',
           text: 'Registro exitoso'
         });
          setTimeout("location.href='login.php'", 2000);
        }else{
          $("#resultado").html("<span style='font-weight:bold;color:red;'>Ocurrio un error intentelo mas tarde.</span>");
          $.gritter.add({
           title: 'ERROR!',
           text: 'Ocurrio un error'
         });
        }

                //n();
                  //Registro exitoso
                  //alert("Registrado exitosamente");
             },
             error:function(data){
              //registro fallido
              $.gritter.add({
               title: 'ERROR!',
               text: 'Registro fallido'
             });
             }
           });

      }
    }
        return false;
      }

    </script>

  </body>
</html>
