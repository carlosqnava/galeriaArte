<?php 
class Artista
{
    private $pdo;

    private $idobj;
    private $nomArt;
    private $fechNacArt;
    private $titulo;
    private $epocArt;
    private $fechDefArt;
    private $estArt;
    private $paisArt;

    public function __CONSTRUCT(){
        $this->pdo = BaseDeDatos::Conectar();
    }

   public function getidobj()
    {
        return $this->idobj;
    }

    public function setidobj($idobj)
    {
        $this->idobj = $idobj;
        return $this;
    }

    public function getnomArt()
    {
       return $this->nomArt;
    }

        public function setnomArt($nomArt)
    {
        $this->nomArt = $nomArt;
        return $this;
    }

    public function getfechNacArt()
    {
        return $this->fechNacArt;
    }

     public function setfechNacArt($fechNacArt)
    {
        $this->fechNacArt = $fechNacArt;
        return $this;
    }

    public function gettitulo()
    {
        return $this->titulo;
    }

     public function settitulo($titulo)
    {
        $this->titulo = $titulo;
        return $this;
    }

    public function getepocArt()
    {
        return $this->epocArt;
    }

     public function setepocArt($epocArt)
    {
        $this->epocArt = $epocArt;
        return $this;
    }

    public function getfechDefArt()
    {
        return $this->fechDefArt;
    }

     public function setfechDefArt($fechDefArt)
    {
        $this->fechDefArt = $fechDefArt;
        return $this;
    }

    public function getestArt()
    {
        return $this->estArt;
    }

     public function setestArt($estArt)
    {
        $this->estArt = $estArt;
        return $this;
    }


    public function getpaisArt()
    {
        return $this->paisArt;
    }

     public function setpaisArt($paisArt)
    {
        $this->paisArt = $paisArt;
        return $this;
    }


    public function getArtista(){
        try {
            $sql = "SELECT * FROM artista";
            $consulta = $this->pdo->prepare($sql);
            $consulta->execute();
            
            return $consulta->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    
    public function Eliminar($idobj){
        try {
            $sql = "DELETE from artista where idobj = ?";
            $this->pdo->prepare($sql)
                 ->execute(array($idobj));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function getArtistaById($id){
        try {
            $sql = "SELECT * FROM artista WHERE idobj=$id";
            $consulta = $this->pdo->prepare($sql);
            $consulta->execute();

            return $consulta->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}

?>