<?php

$usuario = "root";
$pass = "";
$servidor = "localhost";
$bd = "basagent_bas";


//$conexion = mysqli_connect( $servidor, $usuario, $pass ) or die ("No se ha podido conectar al servidor de Base de datos");
//$db = mysqli_select_db( $conexion, $bd ) or die ( "No se ha podido conectar a la base de datos" );
$con = mysqli_connect($servidor,$usuario,$pass,$bd) or die ("Error en la conexion");
$con->query("SET NAMES 'utf8'");

 ?>
