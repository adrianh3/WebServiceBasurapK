<?php

include('functions.php');


if ($resultset = getSQLResultSet("SELECT NFecha , NMensajes FROM `Noticias` ORDER BY NFecha DESC")) {

    	while ($row = $resultset->fetch_array(MYSQLI_NUM)) {
    	echo json_encode($row);

    	}

   }

?>
