<?php
class Database{
private static $dbname="node_mcu_rfidrc522_mysql";
private static $dbhost="localhost";
private static $dbusername="root";
private static $dbpassword="";

private static $cont= null;

public function construct(){
    die('Init function is not allowed');
}

public static function connect(){
    if(null==self::$cont)
    {
        try{
            self::$cont= new PDO("mysql:host=".self::$dbhost.";"."dbname=".self::$dbname, self::$dbusername,self::$dbpassword);
        }
        catch(PDOException $e)
        {
            die($e->getMessage());
        }
}
return self::$cont;
}
public static function disconnect(){
    self::$cont=null;
}
}


?>