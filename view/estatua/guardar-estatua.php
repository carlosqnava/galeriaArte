<?php


if(isset($_POST)){
	require_once "../../model/conexion2.php";

        if(!isset($_SESSION)){
		session_start();
	}
         
	$idEstatua= isset($_POST['idEstatua'])? mysqli_real_escape_string($db, $_POST['idEstatua']) : false;
        $materialEstatua= isset($_POST['materialEstatua'])? mysqli_real_escape_string($db, $_POST['materialEstatua']) : false;
        
            
	// Validación
	$errores = array();
	
	
        
	if(count($errores) == 0){

                // INSERTAR USUARIO EN LA TABLA USUARIOS DE LA BBDD
		$sql = "INSERT INTO estatua VALUES('$idEstatua', '$materialEstatua');";
		$guardar = mysqli_query($db, $sql); 
                
                //var_dump(mysqli_error($db));
                header("Location: ../../INDEX.PHP?c=Estatua&a=FormAgregar");
	
	}else{
            
	}
	
}

