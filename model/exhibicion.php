<?php 
class Exhibicion
{
    private $pdo;

    private $idExhib;    
    private $nomExhib;    
    private $fechComienzo;    
    private $fechaFin; 

    public function __CONSTRUCT(){
        $this->pdo = BaseDeDatos::Conectar();
    }

   public function getidExhib()
    {
        return $this->idExhib;
    }

    public function setidExhib($idExhib)
    {
        $this->idExhib = $idExhib;
        return $this;
    }

    public function getnomExhib()
    {
        return $this->nomExhib;
    }

    public function setnomExhib($nomExhib)
    {
        $this->nomExhib = $nomExhib;
        return $this;
    }

    public function getfechComienzo()
    {
        return $this->fechComienzo;
    }

    public function setfechComienzo($fechComienzo)
    {
        $this->fechComienzo = $fechComienzo;
        return $this;
    }

    public function getfechaFin()
    {
        return $this->fechaFin;
    }

    public function setfechaFin($fechaFin)
    {
        $this->fechaFin = $fechaFin;
        return $this;
    }



    public function getExhibicion(){
        try {
            $sql = "SELECT * FROM exhibicion";
            $consulta = $this->pdo->prepare($sql);
            $consulta->execute();

            return $consulta->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    
    public function Eliminar($idExhib){
        try {
            $sql = "DELETE from exhibicion where idExhib = ?";
            $this->pdo->prepare($sql)
                 ->execute(array($idExhib));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}

?>