<?php
    //environment constants
    define("DBHOST", "localhost");
    define("DBUSER", "root");
    define("DBPASS","");
    define("DBNAME", "runmydb");
    // Data Source Name alias DSN
    // Login DSN
    $dsn = 'mysql:host='.DBHOST.';dbname='.DBNAME ;

try {
    $pdo = new PDO($dsn, DBUSER, DBPASS);
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
