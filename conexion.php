<?php
$hostaname='localhost';
$database='BasurapK';
$username='softapk';
$password='1';


$conexion = new mysqli($hostaname,$username,$password,$database);
if ($conexion->connect_errno) {
  echo "Lo sentimos no esta conectado a la bdd";
}
?>
