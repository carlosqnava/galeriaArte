<?php 
class Otro
{
    private $pdo;

    private $idobj;
    private $tipoOtro;    
    private $estilOtro;   


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

    public function gettipoOtro()
    {
        return $this->tipoOtro;
    }

    public function settipoOtro($tipoOtro)
    {
        $this->tipoOtro = $tipoOtro;
        return $this;
    }

    public function getestilOtro()
    {
        return $this->estilOtro;
    }

    public function setestilOtro($estilOtro)
    {
        $this->estilOtro = $estilOtro;
        return $this;
    }

    


    public function getOtro(){
        try {
            $sql = "SELECT * FROM otro";
            $consulta = $this->pdo->prepare($sql);
            $consulta->execute();

            return $consulta->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    
    public function Eliminar($idobj){
        try {
            $sql = "DELETE from otro where idobj = ?";
            $this->pdo->prepare($sql)
                 ->execute(array($idobj));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}

?>