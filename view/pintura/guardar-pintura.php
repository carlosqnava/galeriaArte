<?php


if(isset($_POST)){
	require_once "../../model/conexion2.php";

        if(!isset($_SESSION)){
		session_start();
	}
         
	$idPintura= isset($_POST['idPintura'])? mysqli_real_escape_string($db, $_POST['idPintura']) : false;
        $tipoPintura= isset($_POST['tipoPintura'])? mysqli_real_escape_string($db, $_POST['tipoPintura']) : false;
        $estiloPintura= isset($_POST['estiloPintura'])? mysqli_real_escape_string($db, $_POST['estiloPintura']) : false;
        $meterialPintura= isset($_POST['meterialPintura'])? mysqli_real_escape_string($db, $_POST['meterialPintura']) : false;
        
	// Validación
	$errores = array();
	
	
        
	if(count($errores) == 0){

                // INSERTAR USUARIO EN LA TABLA USUARIOS DE LA BBDD
		$sql = "INSERT INTO pintura VALUES('$idPintura', '$tipoPintura','$estiloPintura','$meterialPintura');";
		$guardar = mysqli_query($db, $sql); 
                
                //var_dump(mysqli_error($db));
                header("Location: ../../INDEX.PHP?c=Pintura&a=FormAgregar");
	
	}else{
            
	}
	
}

