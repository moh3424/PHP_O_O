<?php require 'connexion.php' // connexion PDO ?>

<!DOCTYPE html>
<html lang="fr">	
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Junior - Liste des clients</title>
	<!--	seconde partie de head-->
	<?php include("admin_head_01.php") ?>
</head>
<body class="fondbody">
	<button onclick="topFunction()" id="myBtn" title="Haut de page" data-toggle="tooltip" data-placement="top" type="button" class="btn btn-warning btn-lg"><i class="fas fa-arrow-circle-up"></i></button>
		<!--	  navbar-->
	<?php include("admin_navbr.php"); ?>
		<!--	  container-->
		<div class="container">
		<!--	rangée pour l'en-tête-->
		<div class="jumbotron">
			<?php
				$sql = $pdoDEBUG->prepare("SELECT id_client FROM t_client"); //pour compter le nombre de client l'afficher et préparer la navigation
				$sql->execute();
				$nbr_clients = $sql->rowCount();
				echo $nbr_clients;
			
			$increment = 30; //c'est le nombre de résultats à afficher par page
			$nbrdepage = ceil($nbr_clients/$increment);//on calcule le nombre de page en fonction des résultats et on le divise par l'incrément
			?>
			<h1 class="display-4">Clients <i class="fas fa-users"></i> : <?php echo $nbr_clients; ?></h1>
			<hr class="my-1">
		</div>
		<!-- fin jumbotron -->

		<!--	rangée pour le fil d'ariane-->
		<div class="row">
			<div class="col-xl-6">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
						<li class="breadcrumb-item"><a href="#">Clients</a></li>
						<li class="breadcrumb-item active" aria-current="page">Liste des clients</li>
					</ol>
				</nav>
			</div>
		</div>		<!-- fin row 1 -->		
		<div class="row aliceblue"><!--	rangée 2 pour le contenu-->
		<div class="col-xl-9 col-sm-12 col-md-12"><!--	colonne pour la pagination et le contenu principal -->
			<hr>
	<!-- pagination en iclude et code spécifique à chaque page -->
	<?php 
	$numeros=10; // nbre de num à afficher dans la nav
	$deb = 1;// représente le 1er num à afficher
	$debut = 0;// représente l'indice de la bdd
	$avant=1; // pour naviguer précédent
	$arriere = $nbrdepage;// pour naviguer suivant

	if(isset($_GET['debut'])){
			$debut = $_GET['debut'];
			$deb= $_GET['deb'];
		} ?>
	<?php include("admin_pagination_02.php"); ?>
			
<!--			pagination -->
		<table class="table table-hover"><!--	début des contenus dans un tableau-->
				<thead>
					<tr class="table-primary">
						<th>Client, adresse  &amp; courriel</th>
						<th>Tél.  &amp;  mdp</th>
					</tr>
				</thead>
				
				<tbody>
					<?php
					if(isset($_GET['debut'])){//premier indice = 0, autres indices passés dans l'url
				$ledebut = $_GET['debut'];
			}else{
				$ledebut = 0;
			}
					$sql = $pdoDEBUG->query("SELECT * FROM t_clients ORDER BY nom ASC LIMIT $ledebut, $increment ");//la requête varie en fonction du clique sur les items de la pagination 
					while($ligne=$sql->fetch())
				{
				?>
					<tr>
						<td>
							<div class="card">
								<div class="card-body">
									<h5 class="card-title"><?php echo $ligne['prenom'].' '.$ligne['nom']; ?> // id client : <?php echo $ligne['id_client']; ?></h5>
									<address>
										<?php echo $ligne['adresse']; ?><br>
										<?php echo $ligne['code_postal'].' '.$ligne['ville']; ?> <?php echo $ligne['pays']; ?>
									</address>
									<p>
										<?php echo "zone : ";
										if($ligne['zone_geo']=='FR'){
											echo 'France - ';
											}elseif($ligne['zone_geo']=='A'){
											echo 'Europe - ';
											}elseif($ligne['zone_geo']=='B'){
											echo 'Hors Europe - ';
											}elseif($ligne['zone_geo']=='C'){
											echo 'USA Asie reste du monde - ';
										}
								?>
										<a href="mailto:<?php echo $ligne['courriel']; ?>" data-toggle="tooltip"  data-placement="right" title="Lui écrire"><?php echo $ligne['email']; ?></a></p>
									
								<p><a href="index_debug.php?id_client=<?php echo $ligne['id_client']; ?>" class="btn btn-outline-primary btn-sm btn-block mt-auto"><i class="fas fa-edit"></i> Mettre à jour le client</a></p>
								</div>
							 </div>
						</td>
						<td>
							<div class="card">
							<div class="card-body">
								<p class="card-text"><?php echo $ligne['tel'].'<br>'.$ligne['port'].'<hr> mdp : '. $ligne['motdepasse']; ?></p>
									</div>
							</div>
						</td>
						</tr>		
			<?php } ?>
				
			</tbody>	
		</table>
		
			<?php include("admin_pagination_01.php"); ?><!-- pagination -->
		<hr>
		<!--	fin colonne largeur 9-->
		</div>
			<div class="col-xl-3 col-sm-12 col-md-12">
				<hr>
			</div>
		<!--	  fin de la rangée principale-->
		</div>
		</div><!--	fin container-->
	
	<!-- Optional JavaScript LE TOUT EN CDN-->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
	
	<!--	mes scripts -->
	<script src="juniorJS.js"></script>
	
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