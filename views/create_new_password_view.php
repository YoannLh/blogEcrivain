<!DOCTYPE html>
<html lang="fr">

	<?php include_once 'views/includes/head.php' ?>

	<body id="bodyIdentification">

		<div class="flex">
			<form class="formInscriptionEtIdentification" method="post">
				<h3>Nouveau mot de passe</h3>
				<table>
					<tr><td>Mot de passe</td><td><input name="password_one" type="text"></td></tr>
					<tr><td>Confirmer mot de passe</td><td><input name="password_two" type="text"></td></tr>
				</table>
				<input type="submit" value="Confirmer" name="sendNewPassword"/>
				<a href="?page=">Retour au site</a>
			</form>
		</div>

		<?php checkMailAndTokenAndSendNewPassword() ?>

	</body>
</html>