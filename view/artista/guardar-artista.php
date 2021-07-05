<?php


if(isset($_POST)){
	require_once "../../model/conexion2.php";

        if(!isset($_SESSION)){
		session_start();
	}
         
	$idartista= isset($_POST['idartista'])? mysqli_real_escape_string($db, $_POST['idartista']) : false;
	$nombreartista= isset($_POST['nombreartista'])? mysqli_real_escape_string($db, $_POST['nombreartista']) : false;
	$fnaartista= isset($_POST['fnaartista'])? mysqli_real_escape_string($db, $_POST['fnaartista']) : false;
	$fdeartista= isset($_POST['fdeartista'])? mysqli_real_escape_string($db, $_POST['fdeartista']) : false;
	$epocaartista= isset($_POST['epocaartista'])? mysqli_real_escape_string($db, $_POST['epocaartista']) : false;
	$estiloartista= isset($_POST['estiloartista'])? mysqli_real_escape_string($db, $_POST['estiloartista']) : false;
	$paisartista= isset($_POST['paisartista'])? mysqli_real_escape_string($db, $_POST['paisartista']) : false;
	$accion= isset($_POST['accion'])? mysqli_real_escape_string($db, $_POST['accion']) : false;
        
	

        
	// Validación
	$errores = array();
	
	
        
	if(count($errores) == 0){

                // INSERTAR USUARIO EN LA TABLA USUARIOS DE LA BBDD
		// print_r($accion);die;
		
		if ($accion == 'Modificar') {
			$sql = "UPDATE artista SET  nomArt = '$nombreartista', fechNacArt = '$fnaartista', epocArt = '$epocaartista', fechDefArt= '$fdeartista', estArt = '$estiloartista', paisArt = '$paisartista' WHERE idobj='$idartista';";
			$guardar = mysqli_query($db, $sql);
		}else{
			$sql = "INSERT INTO artista (idobj, nomArt, fechNacArt, epocArt, fechDefArt,estArt, paisArt) VALUES('$idartista', '$nombreartista', '$fnaartista', '$epocaartista', '$fdeartista', '$estiloartista', '$paisartista');";
			$guardar = mysqli_query($db, $sql);
			// print_r($guardar);die;
			
		}
		
		

		$fecha = date('d-m-y h:i:s');

		
		/*Insertar historial en la bitácora 
		cuando se tenga un login y datos de $_SESSION se suitituirían los campos de usuario y host
		*/
		$sqlBitacora = "INSERT INTO bitacora (operacion, usuario, host, modificado, tabla) VALUES('$accion', 'Luis Segovia', 'localhost','$fecha' ,'artista');";
		// print_r($sqlBitacora);die;
		$guardarBitacora = mysqli_query($db, $sqlBitacora);
                
		header("Location: ../../INDEX.PHP?c=Artista&a=FormAgregar");
	
	}else{
            
	}
	
}

