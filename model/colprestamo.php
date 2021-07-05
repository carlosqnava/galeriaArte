<?php 
class Colprestamo
{
    private $pdo;

    private $idobj;
    private $infPrest;    
    private $fechPet;     
    private $fechDev;

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

    public function getinfPrest()
    {
        return $this->infPrest;
    }

    public function setinfPrest($infPrest)
    {
        $this->infPrest = $infPrest;
        return $this;
    }

    public function getfechPet()
    {
        return $this->fechPet;
    }

    public function setfechPet($fechPet)
    {
        $this->fechPet = $fechPet;
        return $this;
    }

    public function getfechDev()
    {
        return $this->fechDev;
    }

    public function setfechDev($fechDev)
    {
        $this->fechDev = $fechDev;
        return $this;
    }

    

    public function getColprestamo(){
        try {
            $sql = "SELECT * FROM colprestamo";
            $consulta = $this->pdo->prepare($sql);
            $consulta->execute();

            return $consulta->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    
    
    public function Eliminar($idobj){
        try {
            $sql = "DELETE from colprestamo where idobj = ?";
            $this->pdo->prepare($sql)
                 ->execute(array($idobj));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}

?>