<!DOCTYPE html>
<html lang="fr" style="scroll-behavior: smooth">

	<?php include_once 'views/includes/head.php' ?>

	<body id="bodyIdentification">

		<?php 

			include_once 'views/includes/insert_header.php';

			insertHeader();

		?>

		<div class="flex">
			<form class="formInscriptionEtIdentification" method="post">
				<h3>Nouveau mot de passe</h3>
				<table>
					<tr><td>Mot de passe</td><td><input name="password_one" type="text"></td></tr>
					<tr><td>Confirmer mot de passe</td><td><input name="password_two" type="text"></td></tr>
				</table>
				<input type="submit" value="Confirmer" name="sendNewPassword"/>
				<a href="?page=home">Retour au site</a>
			</form>
		</div>

		<?php checkMailAndTokenAndSendNewPassword() ?>

	</body>
</html>