<?php


if(isset($_POST)){
	require_once "../../model/conexion2.php";

        if(!isset($_SESSION)){
		session_start();
	}
         
	$idEscultura= isset($_POST['idEscultura'])? mysqli_real_escape_string($db, $_POST['idEscultura']) : false;
        $estiloEscultura= isset($_POST['estiloEscultura'])? mysqli_real_escape_string($db, $_POST['estiloEscultura']) : false;
        $materialEscultura= isset($_POST['materialEscultura'])? mysqli_real_escape_string($db, $_POST['materialEscultura']) : false;
        $alturaEscultura= isset($_POST['alturaEscultura'])? mysqli_real_escape_string($db, $_POST['alturaEscultura']) : false;
        $pesoEscultura= isset($_POST['pesoEscultura'])? mysqli_real_escape_string($db, $_POST['pesoEscultura']) : false;
        
            
	// Validación
	$errores = array();
	
	
        
	if(count($errores) == 0){

                // INSERTAR USUARIO EN LA TABLA USUARIOS DE LA BBDD
		$sql = "INSERT INTO escultura VALUES('$idEscultura', '$estiloEscultura','$materialEscultura','$alturaEscultura', '$pesoEscultura');";
		$guardar = mysqli_query($db, $sql); 
                
                //var_dump(mysqli_error($db));
                header("Location: ../../INDEX.PHP?c=Escultura&a=FormAgregar");
	
	}else{
            
	}
	
}

