<?php require 'connexion.php' // connexion PDO ?>
<?php

//gestion des contenus, mise à jour d'un client
if (isset($_POST['nom'])){//a-t-on reçu le formulaire de mise à jour ?

	$nom=addslashes($_POST['nom']);
	$prenom=addslashes($_POST['prenom']);
	$email=addslashes($_POST['email']);
	$motdepasse=addslashes($_POST['motdepasse']);
	$tel=addslashes($_POST['tel']);
	$adresse=addslashes($_POST['adresse']);
	$code_postal=addslashes($_POST['code_postal']);
	$ville=addslashes($_POST['ville']);
	$pays=addslashes($_POST['paysCB']);
	$zone_geo=addslashes($_POST['zone_geo']);
	$portable=addslashes($_POST['portable']);
	$id_client=$_POST['id_client'];

	$pdoDEBUG->exec(" UPDATE t_clients SET nom='$nom', prenom='$prenom', email='$email', motdepasse='$motdepasse', tel='$tel', adresse='$adresse', code_postal='$code_postal', ville='$ville', pays='$pays', zone_geo='$zone_geo', portable='$portable' WHERE id_client='$id_client'");
	header('location:li_clients.php');
	// exit();
}

//je récupère le client quand on a cliqué sur le bouton et que cela passe dans l'url mais je dis qu'id_client est égal à 0 quand je ne le passe pas en $_get
if(isset($_GET['id_client'])){
	$id_client=$_GET['id_client'];
}else{
	$id_client=0;
}

$sql = $pdoDEBUG->query("SELECT * FROM t_clients WHERE id_client = '$id_client'");// la requête égale à l'id du client
$sql -> execute();
$ligne_modif_client = $sql->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">	
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Junior - Modif client</title>
	
	<?php include("admin_head_01.php") ?><!--	seconde partie de head-->
</head><!--fin head-->
<body class="fondbody">
	<button onclick="topFunction()" id="myBtn" title="Haut de page" data-toggle="tooltip" data-placement="top" type="button" class="btn btn-warning btn-lg"><i class="fas fa-arrow-circle-up"></i></button>
	<?php include("admin_navbar.php"); ?><!--	  navbar-->
		<div class="container"><!--	  container-->
			<div class="jumbotron"><!--	jumbotron pour l'en-tête-->
				
			  <h1 class="display-4"><i class="fas fa-edit"></i> index DEBUG - Modifier un client</h1>
			  <hr class="my-1">
			</div><!-- fin jumbotron -->
			
			<div class="row"><!--	rangée 1 pour le fil d'ariane-->
				<div class="col-xl-6">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
							<li class="breadcrumb-item"><a href="#">Clients</a></li>
							<li class="breadcrumb-item active" aria-current="page">index DEBUG - Mise à jour fiche client</li>
						</ol>
					</nav>
				</div><!--fin col 1 rangée 1 rangée pour le fil d'ariane-->
			</div><!-- fin rangée 1 pour le fil d'ariane-->
			
			
				<form id="selectClient" name="selectClient" method="GET" action="index_debug.php">
					<div class="form-row aliceblue">
							
						<div class="col-xl-8 col-md-6">&nbsp;</div><!--fin form group col 9-->
						<div class="form-group col-xl-4 col-md-6">
						<div class="card mt-1">
							<div class="card-body">
								
									<div class="form-group">
										<label for="nom">Nom</label>
										<select name="id_client" class="form-control form-control-sm">
										<option value="0">Clients</option>
										<?php
										foreach($pdoDEBUG->query("SELECT * FROM t_clients ORDER BY nom ASC") as $ligne_client){ 
										
											echo '<option value="'.$ligne_client['id_client'].'">'.$ligne_client['nom'].' '.$ligne_client['prenom'].'</option>';
										}
									
										?>
									</select>
									</div>
								<div class="form-group">
								<button type="submit" name="Submit" value="Sélectionner" class="btn btn-outline-success btn-block">Choisir le client</button>
								</div>
							</div>
							</div><!--fin card-->
						</div>
							
			</form><!--fin form-->
					</div><!--fin form-row-->
			<div class="row">
		<div class="col-xl-12 col-md-12 col-sm-12"><hr></div>
	</div><!--	fin rangée 2 pour le contenu-->
		<form action="" method="POST" name="">
			<div class="form-row aliceblue p-1">
				<div class="form-group col-xl-3 col-md-6">
							<label for="nom">Nom de famille</label>
							<input type="text" id= "nom" name="nom" value="<?php echo $ligne_modif_client['nom']; ?>" class="form-control form-control-sm">
				</div><!--fin form group col 3-->
				<div class="form-group col-xl-3 col-md-6">
						<label for="prenom">Prénom</label>
						<input type="text" id= "prenom" name="prenom" value="<?php echo $ligne_modif_client['prenom']; ?>" class="form-control form-control-sm">
				</div><!--fin form group col 3-->
				<div class="form-group col-xl-3 col-md-6">
						<label for="email">Courriel</label>
						<input type="text" id= "email" name="email" value="<?php echo $ligne_modif_client['email']; ?>" class="form-control form-control-sm">
				</div><!--fin form group col 3-->
				<div class="col-xl-3 col-md-6"><p class="bg-success text-center text-white">identifiant <?php echo $ligne_modif_client['id_client']; ?></p></div><!--fin form group col 3-->
				<div class="form-group col-xl-3 col-md-6">
						<label for="motdepasse">Mot de passe</label>
						<input type="text" id= "motdepasse" name="motdepasse" value="<?php echo $ligne_modif_client['motdepasse']; ?>" class="form-control form-control-sm">
				</div><!--fin form group col 3-->
				
				<div class="col-xl-9 col-md-6">&nbsp;</div><!--fin form group col 9-->
				<div class="form-group col-xl-3 col-md-6">
						<label for="tel">Téléphone</label>
						<input type="text" id="tel" name="tel" value="<?php echo $ligne_modif_client['tel']; ?>" class="form-control form-control-sm">
				</div><!--fin form group col 3-->
				<div class="form-group col-xl-3 col-md-6">
						<label for="portable">Portable</label>
						<input type="text" id="portable" name="portable" value="<?php echo $ligne_modif_client['portable']; ?>" class="form-control form-control-sm">
				</div><!--fin form group col 3-->
				<div class="col-xl-6 col-md-6">&nbsp;</div><!--fin col 3-->
				<div class="form-group col-xl-3 col-md-6">
						<label for="adresse">Adresse</label>
						<textarea name="adresse" cols="40" rows="2" id="adresse" class="form-control form-control-sm"><?php echo $ligne_modif_client['adresse']; ?></textarea>
				</div><!--fin form group col 3-->
				<div class="form-group col-xl-2 col-md-6">
						<label for="code_postal">Code postal</label>
						<input name="code_postal" type="text" id="code_postal" tabindex="7" value="<?php echo $ligne_modif_client['code_postal']; ?>" class="form-control form-control-sm">
				</div><!--fin form group col 2-->
				<div class="form-group col-xl-2 col-md-6">
						<label for="ville">Ville</label>
						<input name="ville" type="text" id="ville" tabindex="7" value="<?php echo $ligne_modif_client['ville']; ?>" class="form-control form-control-sm">
				</div><!--fin form group col 2-->
				<div class="form-group col-xl-2 col-md-6">
						<label for="paysCB">Pays</label>
						<select name="paysCB" class="form-control form-control-sm">>
								<option value="0">Je modifie mon pays</option>
								<?php
								foreach($pdoDEBUG->query("SELECT id_paysCB, paysCBFR FROM t_payscb ORDER BY paysCBFR ASC") as $ligne_paysCB)
								{
									echo '<option value="'.$ligne_paysCB['paysCBFR'].'"';
									if($ligne_paysCB['paysCBFR']==$ligne_modif_client['pays']){
										echo ' selected="selected"';
									}
									echo '>'.$ligne_paysCB['paysCBFR'].'</option>';
								}
								?>
							</select>
				</div><!--fin form group col 2-->
				<div class="col-xl-1 col-md-6">&nbsp;</div><!--fin col 1-->
				<div class="form-group col-xl-2 col-md-6">
						<label for="zone_geo">Zone géographique</label>
					<select name="zone_geo" id="zone_geo" class="form-control form-control-sm">
							<option value="0" <?php if (!(strcmp(0, $ligne_modif_client['zone_geo']))) {echo "selected=\"selected\"";} ?>>Zone de livraison</option>
							<option value="FR" <?php if (!(strcmp("FR", $ligne_modif_client['zone_geo']))) {echo "selected=\"selected\"";} ?>>France</option>
							<option value="A" <?php if (!(strcmp("A", $ligne_modif_client['zone_geo']))) {echo "selected=\"selected\"";} ?>>Europe</option>
							<option value="B" <?php  if (!(strcmp("B", $ligne_modif_client['zone_geo']))) {echo "selected=\"selected\"";} ?>>Hors Europe</option>
							<option value="C" <?php if (!(strcmp("C", $ligne_modif_client['zone_geo']))) {echo "selected=\"selected\"";} ?>>USA Asie autres</option>
						</select>
				</div><!--fin form group col 2-->
				<div class="col-xl-4 col-md-6">&nbsp;</div><!--fin col 1-->
				<div class="form-group col-xl-4 col-md-8">
					<button type="submit" value="Mettre à jour la fiche client" class="btn btn-outline-success btn-block">Mettre à jour le client</button>
				</div><!--fin form group col 2-->
				<div class="col-xl-4 col-md-6">&nbsp;</div><!--fin col 1-->
			
			</div><!--	fin form row -->
			<input type="hidden" name="id_client" value="<?php echo $ligne_modif_client['id_client']; ?>">
			<input type="hidden" name="date_inscription" value="<?php echo $ligne_modif_client['date_inscription']; ?>">
		</form><!--	fin form -->
		
		</div><!--	fin container-->
	
	<!-- Optional JavaScript LE TOUT EN CDN-->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
	
	<!--	mes scripts -->
	<!-- <script src="juniorJS.js"></script> -->
	
	<!--	pour le tootip s'il est utilisé sur la page -->
	<script>
		$(document).ready(function(){
		$('[data-toggle="tooltip"]').tooltip();
		});
	</script>
		<!-- jQuery EN LOCAL (necessary for Bootstrap's JavaScript plugins) --> 
<!--	<script src="../js/jquery-3.2.1.min.js"></script>-->
		<!-- Include EN LOCAL all compiled plugins (below), or include individual files as needed -->
<!--	<script src="../js/popper.min.js"></script>-->
<!--	le script ci dessous pour travailler hors ligne-->
<!--	<script src="../js/bootstrap-4.0.0.js"></script>-->
</body>
</html>