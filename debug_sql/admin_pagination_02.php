<!--début la navigation par pages ATTENTION il y a du code php spécifique à chaque page avant la navigation en include-->

	<nav aria-label="Page navigation">
        <!-- Add class .pagination-lg for larger blocks or .pagination-sm for smaller blocks-->
        <ul class="pagination pagination-sm">
			<li class="page-item"><a class="page-link" href="<?php echo $_SERVER['PHP_SELF'] ?>" data-toggle="tooltip" data-placement="top" title="1ère page" ><span aria-hidden="true">	&lsaquo;</span></a></li>

<?php
	//pour précédent ======================
	if($debut>0){//si on est pas sur la première page on fait le calcul suivant
		$precedent=$debut-$increment; // on calcule par rapport à la page où on est pour revenir d'une page avant en soustrayant l'incrément à la valeur affichée
		$avant = $deb-1;

		}else{
		$precedent=0;//sinon on est sur la première page et on y reste
		$deb = 1;
	} 
									 
	echo('<li class="page-item"><a class="page-link" aria-label="Previous" data-toggle="tooltip" data-placement="top" title="précédente" href="'.$_SERVER['PHP_SELF'].'?debut='.$precedent.'&deb='.$avant.'"><span aria-hidden="true">&laquo;</span><span class="sr-only">Précédente</span></a></li> ');

	//pour numéros à afficher ======================
	for($i=$deb;$i<$numeros+$deb;$i+){
		if($i>$nbrdepage){
			break;
				}
				if($i<=$deb){
					echo ('<li class="page-item active" aria-current="page" href="#"><a class="page-link">'.$i).' </a></li> ';
					}else{
					$j= ($i-1) * $increment;
				echo('<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?debut='.$j.'&deb='.$i.'" data-toggle="tooltip" data-placement="top" title="'.$increment.' par page">'.($i).'</a> </li> ');
			}
	}

	//pour suivant ======================
	if($debut<($nbrdepage-1)*$increment){//si on n'est pas sur la dernière page on calcule la variable de la page suivante
		$suivant=$debut+$increment;//variable suivante est égale à début plus le nombre d'incréments
		$arriere = $deb+1;

		}else{//sinon on est sur la dernière page et
		$suivant=($nbrdepage-1)*$increment;// on y reste
	}

	echo('<li class="page-item"> <a class="page-link" href="'.$_SERVER['PHP_SELF'].'?debut='.$suivant.'&deb='.$arriere.'" data-toggle="tooltip" data-placement="top" title="suivante"> <span aria-hidden="true">&raquo;</span> <span class="sr-only">Suivante</span> </a> </li> ');


			</ul>
        <!--		fin de la pagination-->
</nav>


