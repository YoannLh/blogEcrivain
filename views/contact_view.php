<!DOCTYPE html>
<html lang="fr">

	<?php include_once 'views/includes/head.php'; ?>

	<body id="bodyIdentification">
		
		<?php 

			include_once 'views/includes/insert_header.php';

			insertHeader();

		?>

		<div class="flex">
			<form class="formInscriptionEtIdentification" method="post">
				<h3>Contact</h3>
				<p>Vous pouvez contacter directement l'auteur ici :</p>
				<table>
					<tr><td>Pseudo</td><td><input name="pseudo" type="text" /></td></tr>
					<tr><td>Message</td><td>
						<textarea class="form-control" name="message" type="text" placeholder="Votre message...">
						</textarea>
					</td></tr>
				</table>
				<input type="submit" name="submit" value="Envoyer" />
				<a href="home">Retour au site</a>
			</form>
		</div>

		<?php sendMailToAuthor(); ?>

	</body>
</html>