<?php 
class Bitacora
{
    private $pdo;
    
 

    private $id;
    private $operacion;
    private $usuario;
    private $host;
    private $modificado;
    private $tabla;


    public function __CONSTRUCT(){
        $this->pdo = BaseDeDatos::Conectar();
    }

   public function getidbitacora()
    {
        return $this->id;
    }

    public function setibitacora($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getOperacion()
    {
       return $this->operacion;
    }

        public function setOperacion($operacion)
    {
        $this->operacion = $operacion;
        return $this;
    }

    public function getUsuario()
    {
        return $this->usuario;
    }
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
        return $this;
        
    }
    
    public function getHost()
    {
        return $this->host;
    }

     public function setHost($host)
    {
        $this->host = $host;
        return $this;
    }

    public function getModificado()
    {
        return $this->modificado;
    }

     public function setModificado($modificado)
    {
        $this->modificado = $modificado;
        return $this;
    }

    public function getTabla()
    {
        return $this->tabla;
    }

     public function setTabla($tabla)
    {
        $this->tabla = $tabla;
        return $this;
    }

    public function getBitacora(){
        try {
            $sql = "SELECT * FROM bitacora";
            $consulta = $this->pdo->prepare($sql);
            $consulta->execute();

            return $consulta->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function add($datos){
        // print_r($datos);die;
        try {
            $sql = "INSERT INTO bitacora (operacion, usuario, host, modificado, tabla) VALUES ('$datos->operacion','$datos->usuario','$datos->host','$datos->modificado','$datos->tabla');";
            $consulta = $this->pdo->prepare($sql);
            $consulta->execute();

            return $consulta->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}

?>