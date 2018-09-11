<?php

// 04-constante-static-self
        //Singleton.class.php


//Design Pattern : Litteeralement  "Modèle de conception". Un design pattern c'est une solution qui a été trouvée à un problème rencontré par la communauté.

// Singleton :C est la réponse qui a été trouvée à la question : Comment créer une classe pour laquelle il n'existe qu'un seul objet  ! 

class Singleton
{
    private static $instance = NULL; // objet Singleton

    private function __construct () {} // la fonction étant private, alors notre classe n'est plus instanciable.

    private function __clone () {} // La fonction étant private, il devient impossible de le cloner un objet de cette classe.

    public static function getInstance () {
        // if (is_null(self::$instance)) {}
        // if (self::$instance == NULL){}
        if (!self::$instance) {
            self::$instance = new self;
        }
        return self::$instance;
    }

}

// $singleton = new Singleton; // IMPOSSIBLE

$singleton = Singleton::getInstance (); // $singleton est un objet de la classe Singleton

$singleton2 = singleton::getInstance ();

echo '<pre>';
var_dump ($singleton);
var_dump ($singleton2);
echo '</pre>';

// $singleton et $singleton2 font référence au même objet (#1).