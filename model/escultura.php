<?php 
class Escultura
{
    private $pdo;

    private $idobj;
    private $estilEscul;
    private $materialEscul;
    private $alturaEscul;
    private $pesoEscul;
  

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

    public function getestilEscul()
    {
        return $this->estilEscul;
    }

    public function setestilEscul($estilEscul)
    {
        $this->estilEscul = $estilEscul;
        return $this;
    }

    public function getmaterialEscul()
    {
        return $this->materialEscul;
    }

    public function setmaterialEscul($materialEscul)
    {
        $this->materialEscul = $materialEscul;
        return $this;
    }

     public function getalturaEscul()
    {
        return $this->alturaEscul;
    }

    public function setalturaEscul($alturaEscul)
    {
        $this->alturaEscul = $alturaEscul;
        return $this;
    }

    public function getpesoEscul()
    {
        return $this->pesoEscul;
    }

    public function setpesoEscul($pesoEscul)
    {
        $this->pesoEscul = $pesoEscul;
        return $this;
    }

    public function getEscultura(){
        try {
            $sql = "SELECT * FROM escultura";
            $consulta = $this->pdo->prepare($sql);
            $consulta->execute();

            return $consulta->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    
    public function Eliminar($idobj){
        try {
            $sql = "DELETE from escultura where idobj = ?";
            $this->pdo->prepare($sql)
                 ->execute(array($idobj));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}

?>