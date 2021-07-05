<?php 
require_once('model/objetoArte.php');
require_once('model/bitacora.php');
class ObjetoArteControlador
{
    private $modelo;

    public function __CONSTRUCT(){
        $this->modelo = new ObjetoArte();
    }
    
    public function Inicio(){
        $BD = BaseDeDatos::Conectar();
    
        require_once "View/header.php";
        //Que cargue el encabezado de la pagina de la vista header.php
        require_once "View/objetoArte/index.php";
        //echo "Este es el controlador de Inicio";
        require_once "View/footer.php";
        //Que cargue el footer
    }

  
   public function FormAgregar(){
            $BD = BasedeDatos::Conectar();
            //$idobj = $_SESSION['id'];
            $titulo = "Agregar";
            //si se pasa un id modificar producto, sino agregar un producto
            $obArt = new ObjetoArte();
            if(isset($_GET['id'])){
                
                $obArt = $this->modelo->getObjetoById($_GET['id'])[0];
                // print_r($obArt-);die;
                
                $titulo = "Modificar";
                
            }
            require_once "view/header.php";
            require_once "view/objetoArte/agregar.php";
            require_once "view/footer.php";
        }

        public function Guardar(){
            $ididobj = $_SESSION['id'];

            $obArt = new ObjetoArte();
            $obArt->setidobj($_POST['IdArte']);
            $obArt->settitObj($_POST['TituloArte']);
            $obArt->setdescObj($_POST['DesArte']);
            $obArt->setanioObj($_POST['AñoArte']);
            $obArt->setpaisObj($_POST['PaisArte']);
            $obArt->setepocaObj($_POST['EpocaArte']);
            
            
            $obArt->getidobj() > 0?
            $this->modelo->Actualizar($obArt, $idobj):
            $this->modelo->Insertar($obArt, $idobj);
    
            header("location:?c=index.php");
        }

          public function Eliminar(){
            $this->modelo->Eliminar($_GET['id']);
            require_once "controller/bitacora.controlador.php";
            $bitacora = new BitacoraControlador();
            $bit = new StdClass();
            $bit->operacion='Eliminar';
            $bit->usuario='Luis Segovia';
            $bit->host='localhost';
            $bit->modificado=date('d-m-y h:i:s');
            $bit->tabla='objetoarte';
            


            $bitacora->Insertar($bit);

            //var_dump($idobj);
            header('location:?c=objetoArte');
        }

  







    public function Salir(){
        session_destroy();
        header("location:?c=usuarios");
    }
}
?>