<?php 
require_once('model/bitacora.php');
class BitacoraControlador
{
    private $modelo;

    public function __CONSTRUCT(){
        $this->modelo = new Bitacora();
    }
    
    public function Inicio(){
        $BD = BaseDeDatos::Conectar();
    
        require_once "View/header.php";
        //Que cargue el encabezado de la pagina de la vista header.php
        require_once "View/bitacora/index.php";
        //echo "Este es el controlador de Inicio";
        require_once "View/footer.php";
        //Que cargue el footer
    }

    public function Insertar($datos){
        $this->modelo->add($datos);

        header("location:?c=index.php");
    }




    public function Salir(){
        session_destroy();
        header("location:?c=usuarios");
    } 
}

?>