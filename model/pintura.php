<?php 
class Pintura
{
    private $pdo;

    private $idobj;
    private $tipoPint;    
    private $estilPint;   
    private $materialPint; 

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

    public function gettipoPint()
    {
        return $this->tipoPint;
    }

    public function settipoPint($tipoPint)
    {
        $this->tipoPint = $tipoPint;
        return $this;
    }

    public function getestilPint()
    {
        return $this->estilPint;
    }

    public function setestilPint($estilPint)
    {
        $this->estilPint = $estilPint;
        return $this;
    }

    public function getmaterialPint()
    {
        return $this->materialPint;
    }

    public function setmaterialPint($materialPint)
    {
        $this->materialPint = $materialPint;
        return $this;
    }



    public function getPintura(){
        try {
            $sql = "SELECT * FROM pintura";
            $consulta = $this->pdo->prepare($sql);
            $consulta->execute();

            return $consulta->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    
    public function Eliminar($idobj){
        try {
            $sql = "DELETE from pintura where idobj = ?";
            $this->pdo->prepare($sql)
                 ->execute(array($idobj));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}

?>