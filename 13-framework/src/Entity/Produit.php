<?php

//src/Entity/Produit.php
namespace Entity;

class Produit
{
    private $id_produit;
    private $reference;
    private $categorie;
    private $titre;
    private $description;
    private $couleur;
    private $taille;
    private $public;
    private $photo;
    private $prix;
    private $stock;

    /**
     * setter/getter reference
     */

    public function setId_produit ($id){
        $this -> id_produit = $id;
    }

    public function getId_produit (){
       return  $this -> id_produit ;
    }



    public function setReference ($reference){
        $this -> reference = $reference;
    }

    public function getReferencet (){
       return  $this -> reference ;
    }


    public function setCategorie ($categorie){
        $this -> categorie = $categorie;
    }

    public function getCategorie (){
       return  $this -> categorie ;
    }

    public function setPhoto ($photo){
        $this -> photo = $photo;
    }

    public function getphoto (){
       return  $this -> photo ;
    }

    
    public function setTitre ($titre){
        $this -> titre = $titre;
    }

    public function getTitre (){
       return  $this -> titre ;
    }



    public function setDescription ($description){
        $this -> description = $description;
    }

    public function getDescription (){
       return  $this -> description ;
    }


    public function setCouleur ($couleur){
        $this -> couleur = $couleur;
    }

    public function getCouleur (){
       return  $this -> couleur ;
    }

    public function setTailler ($taille){
        $this -> taille = $taille;
    }

    public function getTaille (){
       return  $this -> taille ;
    }

    public function setPublic ($public){
        $this -> public = $public;
    }

    public function getPublic (){
       return  $this -> public ;
    }

    public function setPrix ($prix){
        $this -> prix = $prix;
    }

    public function getPrix(){
       return  $this -> prix ;
    }


    public function setStock ($stock){
        $this -> stock = $stock;
    }

    public function getStock(){
       return  $this -> stock ;
    }

}