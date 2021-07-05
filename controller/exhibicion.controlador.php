<?php 
require_once('model/exhibicion.php');
class ExhibicionControlador
{
    private $modelo;

    public function __CONSTRUCT(){
        $this->modelo = new Exhibicion();
    }
    
    public function Inicio(){
        $BD = BaseDeDatos::Conectar();
    
        require_once "View/header.php";
        //Que cargue el encabezado de la pagina de la vista header.php
        require_once "View/exhibicion/index.php";
        //echo "Este es el controlador de Inicio";
        require_once "View/footer.php";
        //Que cargue el footer
    }

      public function FormAgregar(){
            //$BD = BasedeDatos::Conectar();
            //$idExhib = $_SESSION['id'];
            $titulo = "Agregar";
            //si se pasa un id modificar producto, sino agregar un producto
            $Ex = new Exhibicion();
            if(isset($_GET['id'])){
                $Ex = $this->modelo->ObtenerId($_GET['id'],$idExhib);
                $titulo = "Modificar";
            }
            require_once "view/header.php";
            require_once "view/exhibicion/agregar.php";
            require_once "view/footer.php";
        }

        public function Guardar(){
            $idobj = $_SESSION['id'];

            $Ex = new Exhibicion();
            $Ex->setnomExhib($_POST['NombreEx']);
            $Ex->setfechComienzo($_POST['FcEx']);
            $Ex->setfechaFin($_POST['FfEx']);
            $Ex->setidExhib($_POST['IdEx']);

            $Ex->getidExhib() > 0?
            $this->modelo->Actualizar($Ex, $idExhib):
            $this->modelo->Insertar($Ex, $idExhib);
    
            header("location:?c=exhibicion");
        }

        public function Eliminar(){
            $this->modelo->Eliminar($_GET['id']);
            //var_dump($idobj);
            header('location:?c=exhibicion');
        }


    public function Salir(){
        session_destroy();
        header("location:?c=usuarios");
    } 
}
?>