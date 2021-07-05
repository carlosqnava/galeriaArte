<?php


if(isset($_POST)){
	require_once "../../model/conexion2.php";

        if(!isset($_SESSION)){
		session_start();
	}
         
	$IdOtro= isset($_POST['IdOtro'])? mysqli_real_escape_string($db, $_POST['IdOtro']) : false;
        $TipoOtro= isset($_POST['TipoOtro'])? mysqli_real_escape_string($db, $_POST['TipoOtro']) : false;
        $EstiloOtro= isset($_POST['EstiloOtro'])? mysqli_real_escape_string($db, $_POST['EstiloOtro']) : false;
        
        
	// Validación
	$errores = array();
	
	
        
	if(count($errores) == 0){

                // INSERTAR USUARIO EN LA TABLA USUARIOS DE LA BBDD
		$sql = "INSERT INTO otro VALUES('$IdOtro', '$TipoOtro','$EstiloOtro');";
		$guardar = mysqli_query($db, $sql); 
                
                //var_dump(mysqli_error($db));
                header("Location: ../../INDEX.PHP?c=Otro&a=FormAgregar");
	
	}else{
            
	}
	
}

