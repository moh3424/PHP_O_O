<?php
// 02- getter-setter-constructeur-this
        // Homme.class.php 



class Homme 
{
    private $prenom;
    private $nom;

    public function setPrenom($argument) {
        if(is_string($argument)) {
            if(strlen($argument) > 2 && strlen($argument) < 30) {
                $this -> prenom = $argument;
            }
        }
    }

    public function getPrenom(){
        return $this -> prenom;
    }


    
    public function setNom($argument) {
        if(is_string($argument)) {
            if(strlen($argument) > 2 && strlen($argument) < 30) {
                $this -> nom = $argument;
            }
        }
    }

    public function getNom(){
        return $this -> nom;
    }


}

//-----------------

$homme = new  Homme;

//$homme -> prenom = 'Mohamed'; // Erreur : Impossible d'accéder à un élément private depuis l'extérieur de la classe;

$homme -> setPrenom('mohamed');

echo 'Bonjour ' . $homme -> getPrenom() . ' !<br>';

$homme -> setNom('YESSAD');

echo 'Nom : ' . $homme -> getNom() . ' !<br>';


/**
 * Commentaires :
 * 
 *  - Pourquoi faire des getters et des setters ,
 * 
 *  Le PHP est un langage qui ne type pas ses variables .... Il faut donc constament vérifier l'intégrité ds données.
 * Mettre une propriété en visibilité private, et donc passer par les accesseurs (getter/setter), permet de vérifier à un seul endroit (une seule fois) les données.
 * C'EST UNE BONNE CONTRAINTE
 * Tout dev' qui voudra affecter une valeur devra passer par le setter.
 * 
 * $this : représente l'OBJET en cours de manipulation.
 * 
 * Getter : Accéder ! 
 * Setter : Affecter
 * 
 * Nous aurons autant de getter et de setter que de propriétés PRIVATE.
 * 
 * 
 * 
 * 
 */