<?php

	if (isset($_SESSION['connect']) && isset($_SESSION['pseudo'])) {

		header('location: home');
		exit();

	}

	if(!empty($_POST['mail']) && !empty($_POST['password'])) {

		$mail = str_secur($_POST['mail']);
		$password = str_secur($_POST['password']);

		if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {

			echo "Authentification impossible :/";

		}

		$req = $db->prepare('SELECT mail as askingEmailExists FROM users WHERE mail = ?');
		$req->execute(array($mail));

		while($user_identification = $req->fetch()) {

			if($user_identification['askingEmailExists'] == $mail) {

				$req = $db->prepare('SELECT password, pseudo FROM users WHERE mail = ?');
				$req->execute(array($mail));

				while($compare_password = $req->fetch()) {

					if($compare_password['password'] == password_verify($password, $compare_password['password'])) {

						$_SESSION['connect'] = 1;
						$_SESSION['pseudo'] = ucfirst($compare_password['pseudo']);

						header('location: home');
						exit();

					} else {

						echo "Authentification impossible :/";
			
					}
				}
			} 
		}
	}
?>
