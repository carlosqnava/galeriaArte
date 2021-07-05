<?php 
require_once('model/estatua.php');
class EstatuaControlador
{
    private $modelo;

    public function __CONSTRUCT(){
        $this->modelo = new Estatua();
    }
    
    public function Inicio(){
        $BD = BaseDeDatos::Conectar();
    
        require_once "View/header.php";
        //Que cargue el encabezado de la pagina de la vista header.php
        require_once "View/estatua/index.php";
        //echo "Este es el controlador de Inicio";
        require_once "View/footer.php";
        //Que cargue el footer
    }

     public function FormAgregar(){
            $BD = BasedeDatos::Conectar();
            //$idobj = $_SESSION['id'];
            $titulo = "Agregar";
            //si se pasa un id modificar producto, sino agregar un producto
            $Est = new Estatua();
            if(isset($_GET['id'])){
                $Est = $this->modelo->ObtenerId($_GET['id'],$idobjeto);
                $titulo = "Modificar";
            }
            require_once "view/header.php";
            require_once "view/estatua/agregar.php";
            require_once "view/footer.php";
        }

        public function Guardar(){
            $idobj = $_SESSION['id'];

            $Est = new Estatua();
            $Est->setmaterialEst($_POST['MaterialEst']);
            $Est->setidobj($_POST['IdEst']);

            $Est->getidobj() > 0?
            $this->modelo->Actualizar($Est, $idobj):
            $this->modelo->Insertar($Est, $idobj);
    
            header("location:?c=estatua");
        }

        public function Eliminar(){
            $this->modelo->Eliminar($_GET['id']);
            //var_dump($idobj);
            header('location:?c=estatua');
        }

    public function Salir(){
        session_destroy();
        header("location:?c=usuarios");
    } 
}
?>