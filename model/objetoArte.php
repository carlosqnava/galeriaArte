<?php 
class ObjetoArte
{
    private $pdo;

    private $idObjeto;
    private $pais;
    private $anio;
    private $titulo;
    private $epoca;
    private $descripcion;

    public function __CONSTRUCT(){
        $this->pdo = BaseDeDatos::Conectar();
    }

    public function getIdObjeto()
    {
        return $this->idObjeto;
    }

    public function getObjetoById($id){
        try {
            $sql = "SELECT * FROM objetoarte WHERE idobj=$id";
            $consulta = $this->pdo->prepare($sql);
            $consulta->execute();

            return $consulta->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
     
    public function setIdObjeto($idObjeto)
    {
        $this->idObjeto = $idObjeto;
        return $this;
    }

    public function getPais()
    {
        return $this->pais;
    }

    public function setPais($pais)
    {
        $this->pais = $pais;
        return $this;
    }

    public function getAnio()
    {
        return $this->anio;
    }

    public function setAnio($anio)
    {
        $this->anio = $anio;
        return $this;
    }
 
    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
        return $this;
    }

    public function getEpoca()
    {
        return $this->epoca;
    }

    public function setEpoca($epoca)
    {
        $this->epoca = $epoca;
        return $this;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
        return $this;
    }

    public function getObjetosArte(){
        try {
            $sql = "SELECT * FROM objetoarte";
            $consulta = $this->pdo->prepare($sql);
            $consulta->execute();

            return $consulta->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    
    public function Eliminar($idobj){
        try {
            $sql = "DELETE from objetoarte where idobj = ?";
            $this->pdo->prepare($sql)
                 ->execute(array($idobj));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}

?>