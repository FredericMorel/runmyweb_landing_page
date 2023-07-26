<?php
class MyPDO {
    private const HOST_NAME = "localhost";
    private const DB_NAME = "runmydb";
    private const USER_NAME = "root";
    private const PWD = "";

    private static $myPDOinstance = null;

    public static function getPDO(){
        if(is_null(self::$myPDOinstance)){
            try {
                $connexion = 'mysql:host='.self::HOST_NAME.';dbname='.self::DB_NAME;
                self::$myPDOinstance = new PDO($connexion,self::USER_NAME,self::PWD,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                
            }catch(PDOException $e){
                $message = "erreur de connexion à la base de donnée".$e->getMessage();
                die($message);
            }
            self::$myPDOinstance->exec("SET CHARACTER SET UTF8");
        }
        return self::$myPDOinstance;
        
    }

    }

