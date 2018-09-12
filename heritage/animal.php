<?php

// 05-heritage
    //animal.php


class Animal 
{
    public function manger () {
        return ' Je mange  ! ';
    }

    protected function deplacement () {
        return ' Je me déplace ';
    }
    // Redéfinition de 
}

//-------------------

class Elephant extends Animal // Extends signifie que la class Elephant hérite de la classe Animal
{
    public function quiSuisJe () {
        return ' Je suis un éléphant ' . $this -> deplacement ();
    }
}

//---------------------

class Chat extends Animal
{
    public function quiSuisJe () {
        return ' Je suis un chat';
    }
    
    public function manger () {
        return ' Je mange peu ! ';
    }

}

//------------
//Elephant :
$eleph = new Elephant;
echo ' Elephant ' . $eleph -> manger () .'<br>';
echo ' Elephant ' . $eleph -> quiSuisJe () .'<br>';

//-----------
// Chat

$chat = new Elephant;
echo ' Chat ' . $chat -> manger () .'<br>';
echo ' Chat ' . $chat -> quiSuisJe () .'<br>';

/*
 * Commentaires :
 *  
 *      -l'héritage est l'un des fondements de la programmation en objet.
 *      -Lorsqu'une class hérite d'une autre classe, c'est comme si tout le code était importé. Les éléments (Nom private) sont donc accessibles
 * 
 *      avec $this -> 
 * 
 *      -Redéfinition : Une classe enfant (héritiére) peut modifier le comportement global d'une méthode dont elle a héritée.
 *      - Surchage : Une classe enfant (héritère) peut modifier EN PARTIE le comportement d'une méthode dont elle a héritée (Voir chapitre 06, fichier surcharge.php)
*      /!\ redéfinition != surcharge

*      Dans le cas l'héritage, l'interprêteur va regarder dans la classe enfant si les méthodes exécutées existent, et s'il ne les trouve pas il regarde dans la classe parent
 * 
 * 
 * 
*/