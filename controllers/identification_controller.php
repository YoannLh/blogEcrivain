<?php

	if (isset($_SESSION['connect']) && isset($_SESSION['pseudo'])) {

		header('location: home');
		exit();

	}

	if(isset($_POST['forgotten_password'])) {

		header('location: reset_password');
		exit();
	}

	// if((isset($_POST['mail']) || isset($_POST['passwordIdentification'])) && 
	// 	(empty($_POST['mail']) || empty($_POST['passwordIdentification']))) {

	// 	echo "Authentification impossible :/";

	// }	

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

						$_POST['mail'] = "";
						$_POST['passwordIdentification'] = "";

						header('location: home');
						exit();

					} else {

						$mail = "";
						echo "Authentification impossible :/";
						header('location: identification');
			
					}
				}

			} else {

				$mail = "";
				$_POST['passwordIdentification'] = "";
				echo "Authentification impossible :/";
				header('location: identification');

			}
		}	
	} 
?>
