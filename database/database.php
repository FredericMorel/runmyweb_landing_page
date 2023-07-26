<?php

    class Database 
    {
        private const DBHOST = "localhost";
        private const DBUSER = "root";
        private const DBPASS="";
        private const DBNAME= "runmydb";
        
        private static $myPDOinstance = null;

        public static function getPDO(){
           
            if (is_null(self::$myPDOinstance)) {
                # if one instance not exist
                try {
                    $dsn = 'mysql:host='.self::DBHOST.';dbname='.self::DBNAME ;
                    $pdo = new PDO($dsn, self::DBUSER, self::DBPASS);
                    echo "<h3>on est connecté</h3>";
                    // set data to utf8
                    $pdo->exec("SET NAMES utf8");
                    foreach($pdo->query('SELECT  lastname,firstname from users') as $row) {
                        print_r($row);
                        echo "<br>";
                        print_r($row['lastname']." ".$row['firstname']);
                    }
                    $dbh = null;
                } catch (PDOException $e) {
                    print "Erreur !: " . $e->getMessage() . "<br/>";
                    die();
                }

            }
        }

    }
    $new_pdo= new Database();
    $new_pdo::getPDO();
   