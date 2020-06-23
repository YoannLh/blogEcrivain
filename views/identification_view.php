<!DOCTYPE html>
<html lang="fr" style="scroll-behavior: smooth">

	<?php include_once 'views/includes/head.php' ?>

	<body id="bodyIdentification">

		<div class="flex">
			<form class="formInscriptionEtIdentification" method="post">
				<h3>S'identifier</h3>
				<table>
					<tr><td>Adresse mail</td><td><input type="email" name="mail"></td></tr>
					<tr><td>Mot de passe</td><td><input name="passwordIdentification" type="text"></td></tr>
				</table>
				<button type="submit">S'identifier</button>
				<a href="home">Retour au site</a>
				<div class="not_yet_subscribed">
					<a href="inscription">Pas encore inscrit(e)?</a>
				</div>
				<input 
					class="btn btn-link forgotten_password" 
					type="submit" 
					name="forgotten_password" 
					value="mot de passe oublié ?"
				/>
			</form>
		</div>

		<?php include_once 'views/includes/footer.php' ?>
		
	</body>
</html>