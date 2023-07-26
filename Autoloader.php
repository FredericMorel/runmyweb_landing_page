<?php

namespace App;

class Autoloader{

    static function register(){

        spl_autoload_register([
            __CLASS__,
            'autoload'
        ]);
    }

    static function autoload($class){
        // on récupère dans $class la totalité du namespace de la classe concernée (App/Client/Compte)
        // On retire App\ (client\compte)
        $class= str_replace(__NAMESPACE__.'\\','',$class);

        // on remplace les \ par des /
        $class= str_replace('\\','/',$class);

        $file= __DIR__.'/'.$class.'.php';
        if(file_exists($file)){
            require_once $file;
        }

    }

}