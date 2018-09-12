<?php


//06-surcharge-abstraction-finalisation-interface-trait
  //interface.php


  interface Mouvement  
  {// on utilise le mot clé 'interface' et non 'class'
      public function start ();
      public function turnRight (); //  Quant on implements une interface on a l'obligation de redéfinir toutes les méthodes de l'interface.
      public function turnLeft ();

  }


  class Bateau implements Mouvement // On utilise le mot clé 'implements' et non 'extends'
  {
      public function start () {

      }

      public function turnLeft () {

      }

      public function turnRight () {

      }
  }

  class Avion implements Mouvement
  {
      public function start () {

      }

      public function turnLeft () {

      }

      public function turnRight () {
          
      }
  }


  /**
   *  Commentaires :
   *    
   *    - Une interface est une liste de méthodes (sans contenu) qui permet de garantir que toutes les classes qui vont implémenter l'interface contiendront les même noms de méthodes.
   * 
   *    C'est une sorte de contrat qui est passé entre le lead dev' et les autres dev'. C'est un plan de fabrication d'une classe.
   * 
   *    - Une interface ne peut pas être instanciée 
   *    - Une classe peut implémenter plusieurs interfaces
   *    -Une classe peut à la fois extends une classe mère et implements une ou plusieurs interface (s).
   *    - Les méthodes d'une interface doivent forcément être public sinon on ne peut pas les redéfinir .
   * 
   * 
   * 
   * 
   */
