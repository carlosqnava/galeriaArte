<?php 
require_once('model/escultura.php');
class EsculturaControlador
{
    private $modelo;

    public function __CONSTRUCT(){
        $this->modelo = new Escultura();
    }
    
    public function Inicio(){
        $BD = BaseDeDatos::Conectar();
    
        require_once "View/header.php";
        //Que cargue el encabezado de la pagina de la vista header.php
        require_once "View/escultura/index.php";
        //echo "Este es el controlador de Inicio";
        require_once "View/footer.php";
        //Que cargue el footer
    }

     public function FormAgregar(){
            $BD = BasedeDatos::Conectar();
            //$idobj = $_SESSION['id'];
            $titulo = "Agregar";
            //si se pasa un id modificar producto, sino agregar un producto
            $Esc = new Escultura();
            if(isset($_GET['id'])){
                $Esc = $this->modelo->ObtenerId($_GET['id'],$idobjeto);
                $titulo = "Modificar";
            }
            require_once "view/header.php";
            require_once "view/escultura/agregar.php";
            require_once "view/footer.php";
        }

        public function Guardar(){
            $idobj = $_SESSION['id'];

            $Esc = new Escultura();
            $Esc->setmaterialEscul($_POST['MaterialEsc']);
            $Esc->setidobj($_POST['IdEsc']);
            $Esc->setalturaEscul($_POST['AlturaEsc']);
            $Esc->setestilEscul($_POST['EstiloEsc']);
            $Esc->setpesoEscul($_POST['PesoEsc']);



            $Esc->getidobj() > 0?
            $this->modelo->Actualizar($Esc, $idobj):
            $this->modelo->Insertar($Esc, $idobj);
    
            header("location:?c=escultura");
        }

        public function Eliminar(){
            $this->modelo->Eliminar($_GET['id']);
            //var_dump($idobj);
            header('location:?c=escultura');
        }

    public function Salir(){
        session_destroy();
        header("location:?c=usuarios");
    } 
}
?>