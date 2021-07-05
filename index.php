<?php
    require_once "model/conexion.php";
    // echo "Bienvenidos";
    // var_dump($_GET);

    if(!isset($_SESSION)){
        session_start();//crea una nueva funcion de usuario
    }

    if(!isset($_GET['c'])){
        //echo "Inicio";
        //Si no se establece controlador se establece el de inicio
        require_once("controller/inicio.controlador.php");
        $controlador = new InicioControlador();
        call_user_func(array($controlador,"Inicio"));
    }else {
        //obtener el valor del controlador
        $controlador = $_GET['c'];
        require_once "Controller/$controlador.controlador.php";

        //el primer caracter del controlador debe se mayuscula
        $controlador = ucwords($controlador)."controlador";

        $controlador = new $controlador;

        $accion = isset($_GET['a']) ? $_GET['a'] : "Inicio";

        if(isset($_GET['a'])){
            $accion = $_GET['a'];
        }else{
            $accion = "Inicio";
        }

        call_user_func(array($controlador, $accion));
        //echo $_GET['c'];
    }
?>