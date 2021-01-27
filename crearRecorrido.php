<?php

include 'conexion.php';

$Fecha=$_POST['Fecha'];
$HoraInicio=$_POST['HoraInicio'];
$HoraFinal=$_POST['HoraFinal'];
$CamionSus=$_POST['CamionSus'];
$PersonalSus=$_POST['PersonalSus'];
$Comentario=$_POST['Comentario'];
$Encargado=200;
$EquipoRT=$_POST['EquipoRT'];


$consultaN="INSERT INTO Recorrido (RFecha,RHoraInicio,RHoraFinal,RCamionSust,RPersonalSust,RComentario,IDEncargado
,IDEquipoRT) VALUES ('".$Fecha."','".$HoraInicio."','".$HoraFinal."','".$CamionSus."',
'".$PersonalSus."','".$Comentario."',200,'".$EquipoRT."')";


mysqli_query($conexion,$consultaN) or die (mysqli_error());
mysqli_close($conexion);

?>
