<?php 
require_once('model/colpermanente.php');
class ColpermanenteControlador
{
    private $modelo;

    public function __CONSTRUCT(){
        $this->modelo = new Colpermanente();
    }
    
    public function Inicio(){
        $BD = BaseDeDatos::Conectar();
    
        require_once "View/header.php";
        //Que cargue el encabezado de la pagina de la vista header.php
        require_once "View/colpermanente/index.php";
        //echo "Este es el controlador de Inicio";
        require_once "View/footer.php";
        //Que cargue el footer

    }
   public function FormAgregar(){
            //$BD = BasedeDatos::Conectar();
            //$idobj = $_SESSION['id'];
            $titulo = "Agregar";
            //si se pasa un id modificar producto, sino agregar un producto
            $colp = new Colpermanente();
            if(isset($_GET['id'])){
                $colp = $this->modelo->ObtenerId($_GET['id'],$idobj);
                $titulo = "Modificar";
            }
            require_once "view/header.php";
            require_once "view/colpermanente/agregar.php";
            require_once "view/footer.php";
        }

        public function Guardar(){
            $ididobj = $_SESSION['id'];

            $colp = new Colpermanente();
            $colp->setfechAdq($_POST['FApermanente']);
            $colp->setestado($_POST['EstadoPermanente']);
            $colp->setidobj($_POST['Idcolpermanente']);
            
            $colp->getidobj() > 0?
            $this->modelo->Actualizar($colp, $idobj):
            $this->modelo->Insertar($colp, $idobj);
    
            header("location:?c=colpermanente");
        }

        public function Eliminar(){
            $this->modelo->Eliminar($_GET['id']);
            //var_dump($idobj);
            header('location:?c=colpermanente');
        }



    public function Salir(){
        session_destroy();
        header("location:?c=usuarios");
    } 
}

?>