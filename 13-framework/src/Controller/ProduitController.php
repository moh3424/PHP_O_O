<?php
//src/Controller/ProduitController.php


namespace Controller;
class ProduitController extends Controller
{

    //www.monsite.com/produit/boutique
    //www.monsite.com/produit/affiche/12
    //www.monsite.com/produit/categorie/pull

    // afficheall()  ->boutique
    public function afficheall(){
        //1 : Je récupère les infos dont j'ai besoin
        $produits = $this -> getRepository() -> getAllProduit();
        $categories = $this -> getRepository() -> getAllCategorie();

        //2 : J'envoie la vue correspopndante
        require __DIR__ .'/../View/Produit/boutique.php';
    }

    public function affiche($id){

    }

    public function categorie($cat){

    }

}