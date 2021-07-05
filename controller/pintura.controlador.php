<?php 
require_once('model/pintura.php');
class PinturaControlador
{
    private $modelo;

    public function __CONSTRUCT(){
        $this->modelo = new Pintura();
    }
    
    public function Inicio(){
        $BD = BaseDeDatos::Conectar();
    
        require_once "View/header.php";
        //Que cargue el encabezado de la pagina de la vista header.php
        require_once "View/pintura/index.php";
        //echo "Este es el controlador de Inicio";
        require_once "View/footer.php";
        //Que cargue el footer
    }
       public function FormAgregar(){
            //$BD = BasedeDatos::Conectar();
            //$idobj = $_SESSION['id'];
            $titulo = "Agregar";
            //si se pasa un id modificar producto, sino agregar un producto
            $Pin = new Pintura();
            if(isset($_GET['id'])){
                $Pin = $this->modelo->ObtenerId($_GET['id'],$idobj);
                $titulo = "Modificar";
            }
            require_once "view/header.php";
            require_once "view/pintura/agregar.php";
            require_once "view/footer.php";
        }

        public function Guardar(){
            $idobj = $_SESSION['id'];

            $Pin = new Pintura();
            $Pin->settipoPint($_POST['TipoPintura']);
            $Pin->setestilPint($_POST['EstiloPintura']);
            $Pin->setmaterialPint($_POST['MaterialPintura']);
            $Pin->setidobj($_POST['IdPintura']);

            $Pin->getidobj() > 0?
            $this->modelo->Actualizar($Pin, $idobj):
            $this->modelo->Insertar($Pin, $idobj);
    
            header("location:?c=pintura");
        }

       public function Eliminar(){
            $this->modelo->Eliminar($_GET['id']);
            //var_dump($idobj);
            header('location:?c=pintura');
        }


    public function Salir(){
        session_destroy();
        header("location:?c=usuarios");
    } 
}
?>