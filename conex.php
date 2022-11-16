<?php

class Database
{
    private static $servername = "localhost";
    private static $username = "root";
    private static $password = "";
    private static $db = "funday";

    private static $conn = null;

    public static function connect()
    {   
        try {
    self::$conn = new PDO("mysql:host=" .self::$servername .";dbname=". self::$db , self::$username, self::$password);
        // set the PDO error mode to exception
        // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo json_encode(["Connected successfully"]) ;
        }
        catch(PDOException $e)
        {
            die($e->getMessage());
        }
        return self::$conn;
    }
    public static function disconnect()
    {
        self::$conn=null;
    }
}
?>