<?php


if(isset($_POST)){
	require_once "../../model/conexion2.php";

        if(!isset($_SESSION)){
		session_start();
	}
         
	$idExhibicion= isset($_POST['idExhibicion'])? mysqli_real_escape_string($db, $_POST['idExhibicion']) : false;
        $nombreExhibicion= isset($_POST['nombreExhibicion'])? mysqli_real_escape_string($db, $_POST['nombreExhibicion']) : false;
        $fComienzo= isset($_POST['fComienzo'])? mysqli_real_escape_string($db, $_POST['fComienzo']) : false;
        $fFin= isset($_POST['fFin'])? mysqli_real_escape_string($db, $_POST['fFin']) : false;
        
	// Validación
	$errores = array();
	
	
        
	if(count($errores) == 0){

                // INSERTAR USUARIO EN LA TABLA USUARIOS DE LA BBDD
		$sql = "INSERT INTO exhibicion VALUES('$idExhibicion', '$nombreExhibicion','$fComienzo','$fFin');";
		$guardar = mysqli_query($db, $sql); 
                
                //var_dump(mysqli_error($db));
                header("Location: ../../INDEX.PHP?c=Exhibicion&a=FormAgregar");
	
	}else{
            
	}
	
}

