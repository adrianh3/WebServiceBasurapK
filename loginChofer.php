<?php

  $Usuario =$_POST['Usuario'];
  $Contrasena = $_POST['Contrasena'];

    include("conexion.php");

    $consulta = "SELECT * FROM EquipoRT WHERE UsuarioRT = '$Usuario' AND ContraRT = '$Contrasena'";

    $dato = mysqli_query($conexion, $consulta) or die("Algo ha ido mal en la consulta a la base de datos");

        while($datos = mysqli_fetch_array($dato)){
          $UsuariC = $datos['UsuarioRT'];
          $ContraC = $datos['ContraRT'];
          $IDEquipo = $datos['IDEquipoRT'];
        }

    if($UsuariC == $Usuario && $Contrasena == $ContraC){
       $response = array();
       $response["success"] = true;
       $response["IDEquipoRT"] =$IDEquipo;

       echo json_encode($response);

    }else{
			 $response = array();
       $response["success"] = false;
       echo json_encode($response);

			}


		mysqli_close($conexion);


 ?>
