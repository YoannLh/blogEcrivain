<!DOCTYPE html>
<html lang="fr">
	<head>

		<?php include_once 'views/includes/head.php'; ?>

	</head>
	<body id="body">

		<?php

			if($_SESSION['rank'] == "admin") {

		    		include_once 'views/includes/headerIfAdmin.php';

		    	} else if(isset($_SESSION['connect']) && isset($_SESSION['pseudo'])) {

		    		include_once 'views/includes/headerIfLogged.php';

				} else {

					include_once 'views/includes/header.php';

				}

		?>

		<p>
			Les Montagnes hallucinées, ou Montagnes de la folie2 (titre original : At the Mountains of Madness), est un court roman de science-fiction de l'écrivain américain Howard Phillips Lovecraft, initialement publié dans les numéros de février, mars et avril 1936 du magazine Astounding Stories.

			Rédigé par Lovecraft en février et mars 1931, ce roman a connu de nombreuses rééditions depuis la mort de l'auteur. Écrit à la première personne par le personnage narrateur de William Dyer, professeur et géologue de la prestigieuse Université de Miskatonic, le récit relate de terrifiants secrets relatifs à une expédition scientifique en Antarctique, dans l’espoir de dissuader l'envoi d’une prochaine équipe qui se risquerait à une mort certaine. Les Montagnes hallucinées est considéré par le spécialiste de Lovecraft S. T. Joshi comme un tournant majeur dans la « démythification » du mythe de Cthulhu, qu'il préfère appeler « mythe de Lovecraft ».
		</p>

		<?php include_once 'views/includes/footer.php'; ?>

	</body>
</html>