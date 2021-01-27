<?php

  $Usuario =$_POST['Usuario'];
  $Contra = $_POST['Contrasena'];

  $clave2=md5($Contra);


    include("conexion.php");

    $consulta11 = "SELECT * FROM Encargado WHERE UsuarioE = '$Usuario' AND ContraE = '$clave2'";

    $dato = mysqli_query($conexion, $consulta11) or die("Algo ha ido mal en la consulta11 a la base de datos");

        while($datos = mysqli_fetch_array($dato)){
          $UsuariC = $datos['UsuarioE'];
          $ContraC = $datos['ContraE'];
          $IDEncargado = $datos['IDEncargado'];

        }

    if($UsuariC == $Usuario && $clave2 == $ContraC){
       $response = array();

       $response["success"] = true;
       $response["IDEncargado"] = $IDEncargado;



       echo json_encode($response);
    }else{
			 $response = array();
       $response["success"] = false;
       echo json_encode($response);

			}


		mysqli_close($conexion);


 ?>
