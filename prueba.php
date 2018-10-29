<?php


$fecha=date("Y")."-".date("m")."-".date("d");
echo $fecha;
echo "<br>";
$hora=date("H").":".date("i").":".date("s");
echo $hora."<br>";

$fecha = new DateTime("1994-06-07");


$cumpleanos = $fecha;
$hoy = new DateTime();
$annos = $hoy->diff($cumpleanos);
$edad = $annos->y;
echo "Edad: ".$edad;





 ?>
