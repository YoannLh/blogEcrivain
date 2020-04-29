<?php

	if (isset($_SESSION['connect']) && isset($_SESSION['pseudo'])) {

		header('location: home');
		exit();

	}

	if (!empty($_POST['mail']) && !empty($_POST['pseudo']) && !empty($_POST['password']) && !empty($_POST['password_two'])) {

		$mail = str_secur($_POST['mail']);
		$pseudo = str_secur($_POST['pseudo']);
		$password = str_secur($_POST['password']);
		$password_two = str_secur($_POST['password_two']);

		if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {

			echo "Votre adresse email est invalide.";

		}

		$req = $db->prepare('SELECT count(*) as numberEmail FROM users WHERE email = ?');

		$req->execute(array($mail));

		while($mail_verification = $req->fetch()) {

			if($mail_verification['numberEmail'] != 0) {

				echo "Adresse mail déjà utilisée.";

			}
		}

		if ($password != $password_two) {

			echo "Vos mots de passe ne sont pas identiques !";


		} 

		if(filter_var($mail, FILTER_VALIDATE_EMAIL) && $password == $password_two) {

			$passwordCrypted = password_hash($password, PASSWORD_DEFAULT);
			$secret = rand().rand();

			$req = $db->prepare('INSERT INTO users(mail, pseudo, password, secret) VALUES (?, ?, ?, ?)');

			$req->execute(array($mail, $pseudo, $passwordCrypted, $secret));

			header('location: ?page=identification');
			exit();
		}
	}

?>
