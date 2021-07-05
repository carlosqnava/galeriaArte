<?php 
require_once('model/otro.php');
class OtroControlador
{
    private $modelo;

    public function __CONSTRUCT(){
        $this->modelo = new Otro();
    }
    
    public function Inicio(){
        $BD = BaseDeDatos::Conectar();
    
        require_once "View/header.php";
        //Que cargue el encabezado de la pagina de la vista header.php
        require_once "View/otro/index.php";
        //echo "Este es el controlador de Inicio";
        require_once "View/footer.php";
        //Que cargue el footer
    }

     public function FormAgregar(){
            //$BD = BasedeDatos::Conectar();
            //$idobj = $_SESSION['id'];
            $titulo = "Agregar";
            //si se pasa un id modificar producto, sino agregar un producto
            $Otr = new Otro();
            if(isset($_GET['id'])){
                $Otr = $this->modelo->ObtenerId($_GET['id'],$idobj);
                $titulo = "Modificar";
            }
            require_once "view/header.php";
            require_once "view/otro/agregar.php";
            require_once "view/footer.php";
        }

        public function Guardar(){
            $idobj = $_SESSION['id'];

            $Otr = new Otro();
            $Otr->settipoOtro($_POST['TipoOtro']);
            $Otr->setestilOtro($_POST['EstiloOtro']);
            $Otr->setidobj($_POST['IdOtro']);

            $Otr->getidobj() > 0?
            $this->modelo->Actualizar($Otr, $idobj):
            $this->modelo->Insertar($Otr, $idobj);
    
            header("location:?c=otro");
        }

        public function Eliminar(){
            $this->modelo->Eliminar($_GET['id']);
            //var_dump($idobj);
            header('location:?c=otro');
        }

    public function Salir(){
        session_destroy();
        header("location:?c=usuarios");
    } 
}
?>