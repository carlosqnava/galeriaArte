<?php 
class Estatua
{
    private $pdo;

    private $idobj;
    private $materialEst;
    

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

    public function getmaterialEst()
    {
        return $this->materialEst;
    }

    public function setmaterialEst($materialEst)
    {
        $this->materialEst = $materialEst;
        return $this;
    }



    public function getEstatua(){
        try {
            $sql = "SELECT * FROM estatua";
            $consulta = $this->pdo->prepare($sql);
            $consulta->execute();

            return $consulta->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    
    public function Eliminar($idobj){
        try {
            $sql = "DELETE from estatua where idobj = ?";
            $this->pdo->prepare($sql)
                 ->execute(array($idobj));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}

?>