<!DOCTYPE html>
<html lang="fr">
	
	<?php include_once 'views/includes/head.php' ?>

	<body>
		<div class="flex">
			<form class="formInscriptionEtIdentification" method="post">
				<h3>S'inscrire</h3>
				<table>
					<tr><td>Adresse mail</td><td><input type="mail" name="mail" type="text"></td></tr>
					<tr><td>Pseudo</td><td><input name="pseudo" type="text"></td></tr>
					<tr><td>Mot de passe</td><td><input name="mot_de_passe" type="text"></td></tr>
					<tr><td>Vérification du mot de passe</td><td><input name="mot_de_passe_2" type="text"></td></tr>
				</table>
				<button type="submit">Envoyez</button>
			</form>
		</div>

		<?php include_once 'views/includes/footer.php' ?>

	</body>
</html>