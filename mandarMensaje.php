<?php

include 'conexion.php';

$Nombre=$_POST['Nombre'];
$Telefono=$_POST['Telefono'];
$Email=$_POST['Email'];
$Mensaje=$_POST['Mensaje'];
$Fecha=$_POST['Fecha'];


$consulta="INSERT INTO Buzon (IdCiudadano,BNombre,BTelefono,BEmail,BMensaje,IDEncargado,FechaBuzon)
          VALUES (100,'".$Nombre."','".$Telefono."','".$Email."','".$Mensaje."',200,'".$Fecha."')";


mysqli_query($conexion,$consulta) or die (mysqli_error());
mysqli_close($conexion);

?>
