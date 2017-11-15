<?php
//se coloca el nombre de la clase la cual es database
class Database
{
    private static $connection;
    private static $statement;
    public static $id;
    public static $error;
//hacemos una funcion privada la cual nos servira para crear una conexion a la base de datos
    private static function connect()
    {
        $server = "localhost";//colocamos el nombre del sevidor
        $database = "chitoshop";// nombre de la base de datos
        $username = "root";//usuario con el cual se tendra acceso
        $password = "chito1015";//y la contraseña
        //lo que hace es colocar todo a utf8 es decir para aceptar caracteres especiales
        $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "set names utf8");     
        try
        {
            @self::$connection = new PDO("mysql:host=".$server."; dbname=".$database, $username, $password, $options);
        }
        catch(PDOException $exception)
        {
            throw new Exception($exception->getCode());
        }
    }

    private static function desconnect()
    {
        self::$error = self::$statement->errorInfo();
        self::$connection = null;
    }
//Ejecutar la funcion para realizar la operacion insert update y delete
    public static function executeRow($query, $values)
    {
        self::connect();
        self::$statement = self::$connection->prepare($query);
        $state = self::$statement->execute($values);
        self::$id = self::$connection->lastInsertId();
        self::desconnect();
        return $state;
        return true;
    }
//funcion para obtener datos de mas de un registro
    public static function getRow($query, $values)
    {
        self::connect();
        self::$statement = self::$connection->prepare($query);
        self::$statement->execute($values);
        self::desconnect();
        return self::$statement->fetch();
    }
//funcion para obtener datos de un solo reigstro
    public static function getRows($query, $values)
    {
        self::connect();
        self::$statement = self::$connection->prepare($query);
        self::$statement->execute($values);
        self::desconnect();
        return self::$statement->fetchAll();
    }
    //Obtiene la cantidad de registros en la tabla
    public static function numRows($query, $values)
    {
        self::connect();
        $statement = self::$connection->prepare($query);
        $statement->execute($values);
        self::desconnect();
        return $statement->rowCount();
    }
}
?>