<?php


// 02-getter-setter-constructeur-this
    // Etudiant.class.php 


    // Consignes :

    class Etudiant
    {
        private $prenom;

        public function __construct($const){
            //$this -> prenom = $const;
            $this -> setPrenom ($const);
        }

        public function setPrenom($prenom){
            $this -> prenom = $prenom;
        }

        public function getPrenom () {
            return $this -> prenom;
        }
    }


// ------------

$etudiant = new Etudiant('Mohamed');


echo 'Prenom :' .$etudiant -> getPrenom();

/**
 *  Commentaires :
 * 
 *      -La méthode magique __construct () s'éxécute automatiquement au moment de l'instanciation.
 *      -Il n'est pas oblgatoire de la déclarer. En théorie on ne la déclare que si on a besoin.
 * 
 *      -Elle prend en argument les informations déclarées dans la parenthèse au moment de l'instanciation ($etudiant = new Etudiant ('Mohamed'))
 * 
 * 
 * 
 * 
*/
