<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark navigation"> 
		<a class="btn btn-outline-warning" href="index_debug.php">Accueil </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span></button>
  	  <div class="collapse navbar-collapse" id="navbarSupportedContent1">
  	    <ul class="navbar-nav">
            <li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Modèles</a>
  	        	<div class="dropdown-menu" aria-labelledby="navbarDropdown1">
					<a class="dropdown-item" href="inser_modele.php"><i class="fas fa-car"></i> - Insertion</a>
					<a class="dropdown-item" href="modif_modele.php"><i class="fas fa-pencil-alt"></i> - Modifier</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="tri_catalogue.php"><i class="fas fa-sort-alpha-down"></i> - Trier</a>
					<a class="dropdown-item" href="les_etiquettes.php"><i class="fas fa-tag"></i> - Etiqueter</a>					
                <div class="dropdown-divider"></div>
					<a class="dropdown-item" href="cherche.php"><i class="fas fa-search"></i> - Recherche n°</a>
				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Plannings, promos</a>
  	        	<div class="dropdown-menu" aria-labelledby="navbarDropdown1">
					<a class="dropdown-item" href="planning_jour.php"><i class="fas fa-calendar-check"></i> - Planning/jour</a>
					<a class="dropdown-item" href="planning_semaine.php"><i class="fas fa-calendar-alt"></i> - Planning/semaines</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#"><i class="fas fa-percent"></i> - Promos</a>
				</div>
			</li>
		</ul>
		<ul class="navbar-nav ml-auto">
			
<!--		  formulaire de recherche d'un modèlé par numéro-->
		   <form id="formCherche" name="formCherche" method="GET" class="form-inline" action="cherche.php">
    <input name="numero" id="cherche" class="form-control  form-control-sm mr-sm-2" type="te xt" placeholder="N° JR">
    <button name="rechercher" class="btn btn-outline-warning" type="submit">Recherche</button>
  </form>
<!--		  fin du formulaire de recherche-->
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Vendus, cmd. </a>
  	        	<div class="dropdown-menu" aria-labelledby="navbarDropdown1">
					<a class="dropdown-item" href="li_vendus.php"><i class="fas fa-list-ul"></i> - Liste des vendus</a>
					<a class="dropdown-item" href="ventes_du_jour.php"><i class="fas fa-list-ol"></i> - Ventes du jour</a>
					<a class="dropdown-item" href="li_achats.php"><i class="fas fa-money-bill-alt"></i> - Liste des achats</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="li_cmds.php"><i class="fas fa-credit-card"></i> - Cmd CB</a>
					<a class="dropdown-item" href="li_cmds_chq.php"><i class="fas fa-chart-line"></i> - Cmd CHQ VIR.</a>
                <div class="dropdown-divider"></div>
					<a class="dropdown-item" href="cherche_commandes.php"><i class="fas fa-search"></i> - Recherche</a>
				</div>
       	  </li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Clients </a>
  	        	<div class="dropdown-menu" aria-labelledby="navbarDropdown1">
				  <a class="dropdown-item" href="li_clients.php"><i class="fas fa-users"></i> - Liste</a>
				  <a class="dropdown-item" href="index_debug.php"><i class="fas fa-edit"></i> - Modification</a>
				  <a class="dropdown-item" href="inser_client.php"><i class="fas fa-user-plus"></i> - Nouveau</a>
                <div class="dropdown-divider"></div>
            	<a class="dropdown-item" href="#"><i class="fas fa-eraser"></i> - Suppression</a>
                <div class="dropdown-divider"></div>
					<a class="dropdown-item" href="cherche_client.php"><i class="fas fa-search"></i> - Recherche</a>
				</div>
          	</li>
		  <li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">  Base de données</a>
        	<div class="dropdown-menu" aria-labelledby="navbarDropdown1">
				  <a class="dropdown-item" href="inser_colis.php"><i class="fas fa-box-open"></i> - Prix colis</a>
                <div class="dropdown-divider"></div>
					<a class="dropdown-item" href="inser_categorie.php"><i class="fas fa-server"></i> - Catégories</a>
				  <a class="dropdown-item" href="inser_client.php"><i class="fas fa-user-plus"></i> - Client</a>
					<a class="dropdown-item" href="inser_constructeur.php"><i class="fas fa-road"></i> - Constructeurs</a>
					<a class="dropdown-item" href="inser_couleur.php"><i class="fas fa-paint-brush"></i> - Couleurs</a>
					<a class="dropdown-item" href="inser_fabricant.php"><i class="fas fa-industry"></i> - Fabricants</a>
					<a class="dropdown-item" href="inser_modele.php"><i class="fas fa-car"></i> - Modèle</a>
					<a class="dropdown-item" href="inser_materiaux.php"><i class="fas fa-truck-loading"></i> - Matériaux</a>
					<a class="dropdown-item" href="inser_pays.php"><i class="fas fa-globe"></i> - Pays</a>
						<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="supr_divers.php"><i class="fas fa-eraser"></i> - Supressions</a>
			</div>
          	</li>
               <a href="#" class="nav-link"><i class="fas fa-sign-out-alt" title="Quitter">Quitter</i></a>
        </ul>
      </div>
  </nav>