<!doctype html>
<html>
	<head>

	    <?php include_once 'views/includes/head.php'?>

	    <title><?= ucfirst($page) ?></title>
	    
	</head>

	<body>

	    <?php include_once 'views/includes/header.php'?>

	    <form method="post" class="formInscriptionEtIdentification">
	    	<table>
	    		<p>Veuillez renseigner votre mail. Nous vous enverrons un lien à cette adresse afin de réinitialiser votre mot de passe :</p>
	    		<input type="text" placeholder="mail@mail.com" name="checkingMail" />
	    	</table>
	    	<button type="submit">Soumettre</button>
	    	<a href="home">Retour au site</a>
	    </form>

	    <?= checkIfMailExists() ?>

	    <?php include_once 'views/includes/footer.php'?>

	</body>
</html>