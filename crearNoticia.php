<?php

include 'conexion.php';

$Fecha=$_POST['Fecha'];
$Noticia=$_POST['Noticia'];
$Encargado=$_POST['Encargado'];



$consultaN="INSERT INTO Noticias (NFecha,NMensajes,IDEncargado)
          VALUES ('".$Fecha."','".$Noticia."','".$Encargado."')";


mysqli_query($conexion,$consultaN) or die (mysqli_error());
mysqli_close($conexion);

?>
