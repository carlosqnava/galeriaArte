<?php 
class BaseDeDatos
{
    const servidor = "localhost";// nombre del servidor
    const usuario = "root";// nombre del usuario
    const password = "";// contraseña para la base de datos
    const basedatos = "museoartedb";// nombre de la base de datos
    

    public static function Conectar(){
        try {
            $conexion = new PDO("mysql:host=".self::servidor.";dbname="
            .self::basedatos.";charset=utf8",self::usuario,self::password);
            $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            // Se crea una variable que sera de retorno, devolviendo la conexion
            // a la base de datos
            return $conexion;
        } catch (PDOException $e) {
            return "Fallo la conexion a la base de datos".$e->getMessage();
        }
    }
}
?>


