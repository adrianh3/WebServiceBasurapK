<?php

include('functionsR.php');
include("2.php");

$Equipo=$_POST['Equipo'];

if ($resultset = getSQLResultSet("SELECT RFecha,RHoraInicio,RHoraFinal,RCamionSust,RPersonalSust,RComentario,IDEquipoRT
   FROM Recorrido  ORDER BY RFecha DESC")) {

    	while ($row = $resultset->fetch_array(MYSQLI_NUM)) {
    	echo json_encode($row);

    	}

   }

?>
