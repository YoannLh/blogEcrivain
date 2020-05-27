
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

		<?php showAllPosts() ?>

		<?php include_once 'views/includes/footer.php'; ?>

	</body>
</html>

