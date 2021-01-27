<?php

include 'conexion.php';

$consulta = "SELECT PLatitud,PLongitud From Posicion Where IDCamion = 9";

$resultado = $conexion -> query($consulta);

while ($fila=$resultado -> fetch_array()) {

$producto[]=array_map('utf8_encode',$fila);

}

echo json_encode($producto);
$resultado -> close();

?>
