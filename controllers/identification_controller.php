<?php

	if (isset($_SESSION['connect']) && isset($_SESSION['pseudo'])) {

		header('location: ?page=home');
		exit();

	}

	if(isset($_POST['forgotten_password'])) {

		header('location: ?page=reset_password');
		exit();
	}

	if(!empty($_POST['mail']) && !empty($_POST['passwordIdentification'])) {

		$mail = str_secur($_POST['mail']);
		$password = str_secur($_POST['passwordIdentification']);

		if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {

			echo "Mail non valide :/";

		}

		$reqMail = $db->prepare('SELECT mail as askingEmailExists FROM users WHERE mail = ?');
		$reqMail->execute(array($mail));

		// if($reqMail->fetch()['askingEmailExists'] == NULL) {

		// 	echo "Authentification impossible :/";
		// }

		while($user_identification = $reqMail->fetch()) {

			if($user_identification['askingEmailExists'] == $mail) {

				$reqPassword = $db->prepare('SELECT password, pseudo, rank FROM users WHERE mail = ?');
				$reqPassword->execute(array($mail));

				while($compare_password = $reqPassword->fetch()) {

					if($compare_password['password'] == password_verify($password, $compare_password['password'])) {

						$_SESSION['connect'] = 1;
						$_SESSION['pseudo'] = ucfirst($compare_password['pseudo']);
						$_SESSION['rank'] = $compare_password['rank'];

						header('location: ?page=home');
						exit();

					} else {

						echo "Authentification impossible :/";
			
					}
				}
			}
		}	
	}
?>
