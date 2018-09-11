<?php

// 01-classes-objet-instance-visibilite
    // Panier.class.php
    
class Panier {

    public $nbProduit; // Propriété (par défaut : NULL)

    public function ajouterProduit () {
        // traitements de la fonction
        return 'Le produit a été ajouté';
    }

    protected function retirerProduit () {
        return 'Le produit a été retiré !';
    }

    private function affichagePanier () {
        return 'Voici les produits dans le panier !';
    }

}

//--------------------

$panier = new Panier; // $panier est un objet de la classe Panier . C'est une instance de la classe Panier. On parle d'instanciation.

echo '<pre/>';
    print_r($panier);// utiliser on 
echo '<pre/>';

echo '<pre/>';
    var_dump($panier);// utilser on class
    var_dump(get_class_methods($panier));
echo '<pre/>';

$panier -> nbProduit = 5; // affectation la valeur 5 dans la propriété nbProduit de mon objet $panier.

echo 'Le nombre de produit dans le panier est :  ' . $panier -> nbProduit .'!<br>';

echo 'Panier : ' . $panier -> ajouterProduit () .'<br>';

// echo 'Panier : ' . $panier -> retirerProduit () .'<br>'; 

// echo 'Panier : ' . $panier -> affichagePanier () .'<br>';


/**
 *  -New est mot clé qui permet de créer un objet issu d'une class. INSTANCIATION
 * 
 *  -On peut créer plusieurs objets d'une même classe.
 *  
 *  -Niveau de visibilité :
 * 
 *  --> Public : Accessible partout
 * 
 *  --> Protected : Accessible à l'interieur de la classes enfants
 * 
 *  --> Private : Accessible uniquement dans la classe où l'élément est déclaré.
 * 
 * 
 * 
 * 
 * 
 * 
 */