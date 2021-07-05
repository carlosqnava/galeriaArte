<?php 
class Colpermanente
{
    private $pdo;

    private $idobj;
    private $fechAdq;    
    private $estado; 
    private $costo;   


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

    public function getfechAdq()
    {
        return $this->fechAdq;
    }

    public function setfechAdq($fechAdq)
    {
        $this->fechAdq = $fechAdq;
        return $this;
    }

    public function getestado()
    {
        return $this->estado;
    }

    public function setestado($estado)
    {
        $this->estado = $estado;
        return $this;
    }
    public function getcosto()
    {
        return $this->costo;
    }

    public function setcosto($costo)
    {
        $this->costo = $costo;
        return $this;
    }

    


    public function getColpermanente(){
        try {
            $sql = "SELECT * FROM colpermanente";
            $consulta = $this->pdo->prepare($sql);
            $consulta->execute();

            return $consulta->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    
    public function Eliminar($idobj){
        try {
            $sql = "DELETE from colpermanente where idobj = ?";
            $this->pdo->prepare($sql)
                 ->execute(array($idobj));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}

?>