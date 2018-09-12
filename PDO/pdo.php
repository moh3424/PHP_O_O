<?php

// 11-PDO

        //pdo.php

// Les différentes fonctions pour éxécuter une requête :

    /**
     * 
     * query ():  - SELECT - SHOW
     *            -Succès : PDOStatement (obj)
     *            -Echec  : FALSE (Bool)  
     * 
     * exec() :   - INSERT - DELETE  REPLACE - UPDATE
     *            -Succès : X (int)   correspond au nombre
     *              d'enregistrement affectés par la requête.
     *            -Echec : FALSE (bool) 
     * 
     * prepare () + execute () : 
     *                    - Dès qu'on a une info sensible (GET / POST) dans la requête.
     * 
     *                    -> prepare ():
     *                          -Succès : PDOStatement (obj)
     *                          -Echec :  False (bool)
     * 
     *                    -> execute ()   :
     *                          -Succès :  True (bool)
     *                          -Echec  :  False (bool)
     * 
     */



// 1 : Connexion sans erreur :
$pdo = new PDO ('mysql:host=localhost;dbname=entreprise', 'root', ''); 

// Les erreurs SQL ne s'affiche pas.

// $resultat = $pdo -> query ("ftyftyffkfufkfk");


// 2 : Connexion en mode erreur Warning :

$pdo = new PDO ('mysql:host=localhost;dbname=entreprise', 'root', '', array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
)); 

// $resultat = $pdo -> query ("ftyftyffkfufkfk");


// 2 : Connexion en mode erreur Exception :

$pdo = new PDO ('mysql:host=localhost;dbname=entreprise', 'root', '', array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
)); 

try{

    $resultat = $pdo -> query("hfshqfjhsghsdh");

}

catch(PDOException $e){
    echo '<div style="background:red;padding: 10px; color: white">';
    echo 'Erreur SQL : <br>';
    echo 'Erreur : ' .$e -> getMessage() . '<br>';
    echo 'Fichier : ' . $e -> getFile() . '<br>';
    echo 'Ligne: ' . $e -> getLine() . '<br>';
    echo '</div>';

    $f = fopen ('erreur.txt', 'a' );
    $ligne = 'Erreur SQL : ' . date('d/m/y h:i:s') . '<br>' ."\r\n"; // ""\r\n" permet de passer à la ligne dans le code source
    fwrite ($f, $ligne);
    exit;
}