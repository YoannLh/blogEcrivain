<?php

	$createNewPassword = new createNewPassword;

	$tokenTest = time();

	if($tokenTest > $createNewPassword->ckeckTokenTime($_GET['log'])['token'] + 300) {

		echo "Le temps de validité du lien a expiré. Veuillez renouveler votre demande de modification de mot de passe.";
		exit();
	}

	if(isset($_POST['sendNewPassword'])) { 

		header('location: ?page=identification');
	}

	function checkMailAndTokenAndSendNewPassword() { 

		if (isset($_GET['log']) && !empty($_GET['log']) && !isset($_SESSION['pseudo'])) {

			if(isset($_POST['password_one']) && isset($_POST['password_two']) && $_POST['password_one'] == $_POST['password_two']) {

				$password_one = str_secur($_POST['password_one']);
				$password_two = str_secur($_POST['password_two']);
				$mail = str_secur($_GET['log']);

				$createNewPassword = new createNewPassword;

				$createNewPassword->ckeckTokenTime($mail)['token'];

				if($createNewPassword->checkIfMailExists($mail)['askingMail'] == $mail) {

					if(isset($_POST['sendNewPassword'])) { 

						$passwordCrypted = password_hash($password_two, PASSWORD_DEFAULT);
		
						$createNewPassword->sendNewPassword($passwordCrypted, $mail);
					}
				}
			}
		}
	}


?>