<!DOCTYPE html>
<html lang="fr" style="scroll-behavior: smooth">
	<head>

		<?php include_once 'views/includes/head.php'; ?>

	</head>
	<body id="body" class="container">

		<?php 

			include_once 'views/includes/insert_header.php';

			insertHeader();

		?>
		
		<div class="flex" style="width: 100%">
			<img style="height: 300px; margin: 50px auto" src="assets/images/air.jpg" alt="couverture_livre" />
		</div>

		<div class="readingPost" style="margin: auto">
			<p>
				Résumé : Une attaque massive d'armes chimiques a anéanti la majorité de l'humanité et rendu l'air irrespirable. Le gouvernement des Etats-Unis a hâtivement construit une poignée de bunkers improvisés, dans lesquels des scientifiques sont maintenus en sommeil cryogénique jusqu'à ce que l'air extérieur ne soit plus toxique. Chacun de ces bunkers est entretenu par deux techniciens, eux aussi en cryo-sommeil, qui sont réveillés deux heures tous les six mois afin d'effectuer des tâches de routine et des inspections pour maintenir l'installation en état de marche.
			</p>
		</div>

		<?php include_once 'views/includes/footer.php'; ?>

	</body>
</html>