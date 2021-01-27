<?php

include 'conexion.php';

$Long=$_POST['longitud'];
$Lat=$_POST['latitud'];
$camion=$_POST['camion'];



$consultaN="UPDATE Posicion SET PLatitud=$Lat,PLongitud=$Long WHERE  IDCamion= $camion";


mysqli_query($conexion,$consultaN) or die (mysqli_error());
mysqli_close($conexion);

?>
