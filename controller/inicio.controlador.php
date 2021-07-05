<?php 
class InicioControlador
{
    /*private $modelo;

    public function __CONSTRUCT(){
        $this->modelo = new Producto();
    }
    */
    public function Inicio(){
        //$BD = BaseDeDatos::Conectar();
    
        require_once "View/header.php";
        //Que cargue el encabezado de la pagina de la vista header.php
        require_once "View/Inicio/principal.php";
        //echo "Este es el controlador de Inicio";
        require_once "View/footer.php";
        //Que cargue el footer
    }
    /*
    public function Salir(){
        session_destroy();
        header("location:?c=usuarios");
    } */
}
?>