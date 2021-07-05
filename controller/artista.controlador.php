<?php 
require_once('model/artista.php');
require_once('model/bitacora.php');

class ArtistaControlador
{
    private $modelo;

    public function __CONSTRUCT(){
        $this->modelo = new Artista();
    }
    
    public function Inicio(){
        $BD = BaseDeDatos::Conectar();
    
        require_once "View/header.php";
        //Que cargue el encabezado de la pagina de la vista header.php
        require_once "View/artista/index.php";
        //echo "Este es el controlador de Inicio";
        require_once "View/footer.php";
        //Que cargue el footer
    }
    public function FormAgregar(){
            $BD = BasedeDatos::Conectar();
            
            $titulo = "Agregar";
            //si se pasa un id modificar producto, sino agregar un producto
            $Arti = new Artista();
            if(isset($_GET['id'])){
                $Arti = $this->modelo->getArtistaById($_GET['id'])[0];
                // print_r($Arti);die;
                $titulo = "Modificar";
            }
            require_once "view/header.php";
            require_once "view/artista/agregar.php";
            require_once "view/footer.php";
    }

    public function Guardar(){
        $idobj = $_SESSION['idobj'];

        $Arti = new Artista();
        $Arti->setnomArt($_POST['nombreArtista']);
        $Arti->setfechNacArt($_POST['FNArtista']);
        $Arti->settitulo($_POST['TArtista']);
        $Arti->setepocArt($_POST['EpocaArtista']);
        $Arti->setfechDefArt($_POST['FDartista']);
        $Arti->setestArt($_POST['EstadoArtista']);
        $Arti->setpaisArt($_POST['PaisArtista']);
        $Arti->setidobj($_POST['IdArtista']);
        
        $Arti->getidobj() > 0?
        $this->modelo->Actualizar($Arti, $idobj):
        $this->modelo->Insertar($Arti, $idobj);

         header("location:?c=artista");
    }

    public function Eliminar(){
        $this->modelo->Eliminar($_GET['id']);
        //var_dump($idobj);
        require_once "controller/bitacora.controlador.php";
        $bitacora = new BitacoraControlador();
        $bit = new StdClass();
        $bit->operacion='Eliminar';
        $bit->usuario='Luis Segovia';
        $bit->host='localhost';
        $bit->modificado=date('d-m-y h:i:s');
        $bit->tabla='artista';
        


        $bitacora->Insertar($bit);
        header('location:?c=artista');
    }



    public function Salir(){
        session_destroy();
        header("location:?c=usuarios");
    } 
}

?>