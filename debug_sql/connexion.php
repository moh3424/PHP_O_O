<?php
	$hote='localhost'; // le chemin vers le serveur
	$bdd='debug_sql'; // nom de la base
	$utilisateur='root'; // nom d'utilisateur pour se connecter
	$passe=''; // mot de passe de l'utilisateur pour se connecter PC NUC


	$pdoDEBUG = new PDO('mysql:host='.$hote.';dbname='.$bdd, $utilisateur, $passe);
	//$pdoDEBUG est le nom de variable de la connexion il sert partout où l'on doit se servir de cette
	//connexion PDO c'est un objet et il a des fonctions
	$pdoDEBUG->exec("SET NAMES utf8");

?>
