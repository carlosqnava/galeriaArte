<?php


if(isset($_POST)){
	require_once "../../model/conexion2.php";

        if(!isset($_SESSION)){
		session_start();
	}
         
	$Idcolpermanente= isset($_POST['Idcolpermanente'])? mysqli_real_escape_string($db, $_POST['Idcolpermanente']) : false;
        $FApermanente= isset($_POST['FApermanente'])? mysqli_real_escape_string($db, $_POST['FApermanente']) : false;
        $EstadoPermanente= isset($_POST['EstadoPermanente'])? mysqli_real_escape_string($db, $_POST['EstadoPermanente']) : false;
        $Ccoleccion= isset($_POST['Ccoleccion'])? mysqli_real_escape_string($db, $_POST['Ccoleccion']) : false;
            
	// Validación
	$errores = array();
	
	
        
	if(count($errores) == 0){

                // INSERTAR USUARIO EN LA TABLA USUARIOS DE LA BBDD
		$sql = "INSERT INTO colpermanente VALUES('$Idcolpermanente', '$FApermanente','$EstadoPermanente','$Ccoleccion');";
		$guardar = mysqli_query($db, $sql); 
                
                //var_dump(mysqli_error($db));
                header("Location: ../../INDEX.PHP?c=colpermanente&a=FormAgregar");
	
	}else{
            
	}
	
}

