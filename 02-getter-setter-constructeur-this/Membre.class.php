<?php

// 02-getter-setter-constructeur-this
    // Membre.class.php 


// Consigne : Au regard de la classe ci-dessous, veuillez affecter des valeurs à $pseurdo et $email et les afficher dans la page


class Membre 
{
    private $pseudo;
    private $email;

    // getter et setter de pseudo

    public function setPseudo($argument) {
        if(is_string($argument)) {
            if(strlen($argument) > 2 && strlen($argument) < 30) {
                $this -> pseudo = $argument;
            }
        }
    }

    public function getPseudo(){
        return $this -> pseudo;
    }

    // getter et setter email
    
    public function setEmail($argument) {
       
            if(FILTER_VAR ($argument, FILTER_VALIDATE_EMAIL)) {
                $this -> email = $argument;
            }
      
    }

    public function getEmail(){
        return $this -> email ;
    }


}

$membre = new  Membre;

//$homme -> prenom = 'Mohamed'; // Erreur : Impossible d'accéder à un élément private depuis l'extérieur de la classe;

$membre -> setPseudo('momo');

echo 'Bonjour ' . $membre -> getPseudo() . ' !<br>';

$membre -> setEmail('YESSAD@gmail.com');

echo 'email : ' . $membre -> getEmail() . ' !<br>';
