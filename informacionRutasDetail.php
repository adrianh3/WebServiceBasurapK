<?php

include 'conexion.php';

$numeroR=$_GET['numeroR'];

$consulta="SELECT * From Ruta WHERE Numero = '$numeroR'";

$resultado = $conexion -> query($consulta);

while($fila = $resultado -> fetch_array()){
   $producto[] = array_map('utf8_encode',$fila);
}

echo json_encode($producto);
$resultado -> close();

?>
