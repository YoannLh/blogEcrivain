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

		$identification = new Identification;

		$identification->checkIfMailAlreadyExists($mail);

		while($user_identification = $identification->checkIfMailAlreadyExists($mail)) {

			if($user_identification['askingEmailExists'] == $mail) {

				while($compare_password = $identification->getAllInformationsAboutUser($mail)) {

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
