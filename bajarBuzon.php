<?php

include('function2.php');


if ($resultset = getSQLResultSet("SELECT BNombre,BTelefono,FechaBuzon,BMensaje FROM `Buzon` ORDER BY FechaBuzon DESC")) {

    	while ($row = $resultset->fetch_array(MYSQLI_NUM)) {
    	echo json_encode($row);

    	}

   }

?>
