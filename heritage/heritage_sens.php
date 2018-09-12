
<?php
// 05-heritage
    //heritage_sens.php


    //Tansitivité : Si une classe B hérite d'une classe A, et que la classe C hérite de la classe B, alors la classe C hérite de la class A.

    class A 
    {
        public function testA () {
            return 'Test A';
        }
    }

//-----------
    class B extends A
    {
        public function testB () {
            return 'Test B';
        }
    }

//---------
    class C extends B
    {
        public function testC () {
            return 'Test C';
        }
    }


//---------------

$c = new C;

echo $c -> testA() . '<br>'; // Méthode de A accessible par C (héritage indirect)
echo $c -> testB() . '<br>'; // Méthode de B accessible par C (héritage direct)
echo $c -> testC() . '<br>'; // Méthode de C accessible par C

echo '<pre>';
var_dump(get_class_methods($c));
echo '</pre>';

/**
 * Commentaires :
 * 
 *    - Transitivité :
 *      Si B hérite de A
 *          Et que C hérite de B 
 *              .....Alors C hérite de A (indirectement)
 * 
 *      --> Même les méthode protected de A sont accessible dans C malgré l'héritage indirect.
 * 
 *     -L'héritage est :
 * 
 *       - Non reflexif : class D extends D : Une classe ne peut hérite d'elle-même.
 *       - Non Symétrique : Si E extends F, alors F n'est pas extends de E
 *       - Sans cycle : Si E extens F, alors il est impossible que F extends E
 *       - Non multiple : class N extends M, P : PHP il n'existe pas d'héritage multiple ...
 * 
 *    - Une classe parente peut avoir un nombre infini d'héritiers.
 * 
 * 
 * 
 */