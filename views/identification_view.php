<!DOCTYPE html>
<html lang="fr">

	<?php include_once 'views/includes/head.php' ?>

	<body>
		<div class="flex">
			<form class="formInscriptionEtIdentification" method="post">
				<h3>S'identifier</h3>
				<table>
					<tr><td>Adresse mail</td><td><input type="mail" name="mail" type="text"></td></tr>
					<tr><td>Mot de passe</td><td><input name="mot_de_passe" type="text"></td></tr>
				</table>
				<button type="submit">S'identifier</button>
			</form>
		</div>
	</body>
</html>