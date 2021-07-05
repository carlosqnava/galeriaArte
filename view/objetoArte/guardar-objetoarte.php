<?php


if(isset($_POST)){
	require_once "../../model/conexion2.php";

        if(!isset($_SESSION)){
		session_start();
	}
         
	$idarte= isset($_POST['IdArte'])? mysqli_real_escape_string($db, $_POST['IdArte']) : false;
        $tituloarte= isset($_POST['TituloArte'])? mysqli_real_escape_string($db, $_POST['TituloArte']) : false;
        $desarte= isset($_POST['DesArte'])? mysqli_real_escape_string($db, $_POST['DesArte']) : false;
        
        $añoarte= isset($_POST['AñoArte'])? mysqli_real_escape_string($db, $_POST['AñoArte']) : false;
        
        
        $paisarte= isset($_POST['PaisArte'])? mysqli_real_escape_string($db, $_POST['PaisArte']) : false;
        $epocaarte= isset($_POST['EpocaArte'])? mysqli_real_escape_string($db, $_POST['EpocaArte']) : false;
		$accion= isset($_POST['accion'])? mysqli_real_escape_string($db, $_POST['accion']) : false;
		// var_dump($accion);die;

        
	// Validación
	$errores = array();
	
	if(empty($idarte)){
		$errores['titulo'] = 'El titulo no es válido';
	}
	if(empty($tituloarte)){
		$errores['titulo'] = 'El titulo no es válido';
	}
        if(empty($desarte)){
		$errores['titulo'] = 'El titulo no es válido';
	}
        
        if(empty($paisarte)){
		$errores['titulo'] = 'El titulo no es válido';
	}
        if(empty($epocaarte)){
		$errores['titulo'] = 'El titulo no es válido';
        }

        
	if(count($errores) == 0){

                // INSERTAR USUARIO EN LA TABLA USUARIOS DE LA BBDD
		if ($accion == 'Modificar') {
			$sql = "UPDATE objetoarte SET  titobj = '$tituloarte', descObj = '$desarte', anioObj = '$añoarte', paisObj= '$paisarte', epocaObj = '$epocaarte' WHERE idobj='$idarte';";
			$guardar = mysqli_query($db, $sql);
		}else{
			$sql = "INSERT INTO objetoarte VALUES('$idarte', '$tituloarte', '$desarte','$añoarte','$paisarte', '$epocaarte');";
			$guardar = mysqli_query($db, $sql);
		}
		
		

		$fecha = date('d-m-y h:i:s');

		
		/*Insertar historial en la bitácora 
		cuando se tenga un login y datos de $_SESSION se suitituirían los campos de usuario y host
		*/
		$sqlBitacora = "INSERT INTO bitacora (operacion, usuario, host, modificado, tabla) VALUES('$accion', 'Luis Segovia', 'localhost','$fecha' ,'objetoarte');";
		// print_r($sqlBitacora);die;
		$guardarBitacora = mysqli_query($db, $sqlBitacora);
		// print_r($guardarBitacora);die;
		                
		header("Location: ../../INDEX.PHP?c=ObjetoArte&a=FormAgregar");
	
	}else{
		header("Location: ../../INDEX.PHP?c=ObjetoArte&a=FormAgregar");
	}
	
}

