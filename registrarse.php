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

 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


 <div align="center" >

<form class="form-register" role="form">

   <div id="resultado"></div>
   <p><label for="usuario">Usuario:</label></p>
   <input name="user" type="text" id="user" class="user" placeholder="Escribe tu usuario" /></p>
   <p><label for="pass">Contraseña:</label></p>
   <input name="pass" type="text" id="pass" class="pass" placeholder="Escribe tu Contraseña" /></p>
   <p><label for="pass2">Repetir Contraseña:</label></p>
   <input name="pass2" type="text" id="pass2" class="pass2" placeholder="Repite tu Contraseña" /></p>
   <p><label for="Nombre">Nombre(s):</label></p>
   <input name="nombre" type="text" id="nombre" class="nombre" placeholder="Escribe tu Nombre(s)" /></p>
   <p><label for="apellidop">Apellido Paterno:</label></p>
   <input name="apellidop" type="text" id="apellidop" class="apellidop" placeholder="Escribe tu Apellido Paterno" /></p>
   <p><label for="apellidom">Apellido Materno:</label></p>
   <input name="apellidom" type="text" id="apellidom" class="apellidom" placeholder="Escribe tu Apellido Materno" /></p>
   <p><label for="sexo">Sexo:</label></p>
   <input type="radio" name="sexo" value="H" />Masculino
   <input type="radio" name="sexo" value="M" />Femenino
   <p><label for="fecha">Fecha de Nacimiento:</label></p>
   <input type="date" id="fecha" name="fecha">
   <span id="emailOK"></span>
   <p><label for="correo">Correo:</label></p>
   <input name="correo" type="text" id="correo" class="correo" placeholder="Escribe tu e-mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required /></p>
   <p><label for="telefono">Celular:</label></p>
    <input type="tel" id="celular" name="celular"
           placeholder="123-456-7890"
           pattern="[0-9]{10}"
           required />
    <span class="validity"></span>
    <p><label for="telefono">Telefono:</label></p>
     <input type="tel" id="telefono" name="telefono"
            placeholder="123-456-7890"
            pattern="[0-9]{10}"
            required />
     <span class="validity"></span></p>


   <button class = "btn btn-lg btn-primary btn-block" type = "submit" onclick="return Registrarse();" name = "login">Registrarse</button>

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
      alert("Debes llenar todos los campos");

    }else{
      //Comparar contraseñas
    if(pass!=pass2){
      alert("Las contraseñas no coinciden");
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
      }else if(data == "2"){
        $("#resultado").html("<span style='font-weight:bold;color:red;'>Este correo ya esta registrado.</span>");
      }else if(data == "3"){
      $("#resultado").html("<span style='font-weight:bold;color:black;'>Registrado exitosamente.</span>");
      setTimeout("location.href='login.php'", 2000);
    }else{
      $("#resultado").html("<span style='font-weight:bold;color:red;'>Ocurrio un error intentelo mas tarde.</span>");
    }

            //n();
              //Registro exitoso
              //alert("Registrado exitosamente");
         },
         error:function(data){
          //registro fallido
          alert("Registro fallido");
         }
       });

  }
}
    return false;
  }

</script>
