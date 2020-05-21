<?php

	if (isset($_SESSION['connect']) && isset($_SESSION['pseudo'])) {

		header('location: home');
		exit();

	}

	function checkIfMailExists() { 

		if(!empty($_POST['checkingMail'])) {

			$checkingMail = str_secur($_POST['checkingMail']);

			echo $checkingMail;

			$reset_password = new ResetPassword;

			debug($reset_password->checkIfMailExists($checkingMail));

			if($reset_password->checkIfMailExists($checkingMail)['numberEmail'] == 1) {

				echo "go mail()";

			} else {

				echo "Ce compte n'existe pas !";

			}
		} 

		if (!empty($_POST['checkingMail']) && !filter_var($checkingMail, FILTER_VALIDATE_EMAIL)) {

			echo "Mail non valide :/";
			
		}
	}

?>