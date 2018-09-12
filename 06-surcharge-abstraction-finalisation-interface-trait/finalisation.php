<?php


//06-surcharge-abstraction-finalisation-interface-trait
  //finalisation.php


  final class Application 
  {
    public function run () {
        return 'L\'application se lance !';
    }

  }
$app = new Application; // une classe finale peut être instanciée

 // class Extension extends Application {} // ERREUR : on ne peut pas hérité d'une classe final

//--------------

class Application2
{
    final public function run2(){

    }
}

class Extension2 extends Application2
{ 
   // public function run2 () {} // ERREUR : On ne peut pas redéfinir ou surcharger méthode final
}


/**
 * Commentaires :
 *  -Une classe final ne peut pas être héritée 
 *  -Une classe finale peut être instanciée
 *  -Par définition une class finale ne contient que des méthodes finales ... puisqu'on ne peut pas en hériter
 *  -Une méthode finale peut être présente dans une classe normale
 */
