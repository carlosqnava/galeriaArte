<?php 
require_once('model/colprestamo.php');
class colprestamoControlador
{
    private $modelo;

    public function __CONSTRUCT(){
        $this->modelo = new Colprestamo();
    }
    
    public function Inicio(){
        $BD = BaseDeDatos::Conectar();
    
        require_once "View/header.php";
        //Que cargue el encabezado de la pagina de la vista header.php
        require_once "View/colprestamo/index.php";
        //echo "Este es el controlador de Inicio";
        require_once "View/footer.php";
        //Que cargue el footer
    }
     public function FormAgregar(){
            //$BD = BasedeDatos::Conectar();
            //$idobj = $_SESSION['id'];
            $titulo = "Agregar";
            //si se pasa un id modificar producto, sino agregar un producto
            $colpres = new Colprestamo();
            if(isset($_GET['id'])){
                $p = $this->modelo->ObtenerId($_GET['id'],$idobj);
                $titulo = "Modificar";
            }
            require_once "view/header.php";
            require_once "view/colprestamo/agregar.php";
            require_once "view/footer.php";
        }

        public function Guardar(){
            $ididobj = $_SESSION['id'];

            $colpres = new Colprestamo();
            $colpres->setinfPrest($_POST['InfPres']);
            $colpres->setfechPet($_POST['FPrestamo']);
            $colpres->setfechDev($_POST['FDprestamo']);
            $colpres->setidobj($_POST['Idcolprestamo']);
            
            $colpres->getidobj() > 0?
            $this->modelo->Actualizar($colpres, $idobj):
            $this->modelo->Insertar($colpres, $idobj);
    
            header("location:?c=colprestamo");
        }

        public function Eliminar(){
            $this->modelo->Eliminar($_GET['id']);
            //var_dump($idobj);
            header('location:?c=colprestamo');
        }


    public function Salir(){
        session_destroy();
        header("location:?c=usuarios");
    } 
}
?>