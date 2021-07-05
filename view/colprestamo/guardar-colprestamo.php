<?php


if(isset($_POST)){
	require_once "../../model/conexion2.php";

        if(!isset($_SESSION)){
		session_start();
	}
         
	$IdColPrestamo= isset($_POST['IdColPrestamo'])? mysqli_real_escape_string($db, $_POST['IdColPrestamo']) : false;
        $Informacion= isset($_POST['Informacion'])? mysqli_real_escape_string($db, $_POST['Informacion']) : false;
        $FPrestamo= isset($_POST['FPrestamo'])? mysqli_real_escape_string($db, $_POST['FPrestamo']) : false;
        $Fdevolucion= isset($_POST['Fdevolucion'])? mysqli_real_escape_string($db, $_POST['Fdevolucion']) : false;
            
	// Validación
	$errores = array();
	
	
        
	if(count($errores) == 0){

                // INSERTAR USUARIO EN LA TABLA USUARIOS DE LA BBDD
		$sql = "INSERT INTO colprestamo VALUES('$IdColPrestamo', '$Informacion','$FPrestamo','$Fdevolucion');";
		$guardar = mysqli_query($db, $sql); 
                
                //var_dump(mysqli_error($db));
                header("Location: ../../INDEX.PHP?c=colprestamo&a=FormAgregar");
	
	}else{
            
	}
	
}

