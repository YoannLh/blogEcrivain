<?php

	include_once 'models/Inscription_model.php';

	if (isset($_SESSION['connect']) && isset($_SESSION['pseudo'])) {

		header('location: ?page=home');
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

		if ($password != $password_two) {

			echo "Vos mots de passe ne sont pas identiques !";

		}

		$inscription = new Inscription;

		if($inscription->checkIfMailExists($mail)['numberEmail'] != 0) {

			echo "Adresse mail déjà utilisée.";

		} else { 
		
			if(filter_var($mail, FILTER_VALIDATE_EMAIL) && $password == $password_two) {

				$passwordCrypted = password_hash($password, PASSWORD_DEFAULT);
				$secret = rand().rand();
				$rank = "visitor";

				$inscription->sendAllInformations($mail, $pseudo, $passwordCrypted, $secret, $rank);

				header('location: ?page=identification');
				exit();
			} 
		}	
	}

?>
