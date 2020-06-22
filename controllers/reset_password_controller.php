<?php

	if (isset($_SESSION['connect']) && isset($_SESSION['pseudo'])) {

		header('location: home');
		exit();

	}

	function sendMail($checkingMail) {

		$token = time();
		$destinataire = $checkingMail;
		$sujet = "Récupération mot de passe";
		$headers[] = 'MIME-Version: 1.0';
     	$headers[] = 'Content-type: text/html; charset=iso-8859-1; charset=utf-8';
     	$headers[] = 'From: Jean_forteroche@blog.com';
 
		// Le lien d'activation est composé du login(log) et de la clé(cle)
		$message = '<html><head><title></title></head><body><div>
						<p>Bonjour,</p>
						<p>Vous avez demandé une récupération de mot de passe. Afin de procéder, veuillez cliquer sur le lien ci-dessous.
						</p>
 
						<p>http://lhostisyoann.com/projet-4/create_new_password?log=' . 
						urlencode($destinataire) . 
						'</p>

						<p>Ce lien s\'autodétruira dans 5 minutes.</p>
 
 
						<p>---------------</p>

						<p>Ceci est un mail automatique, Merci de ne pas y répondre.</p>
					</div></body></html>';

		$reset_password = new ResetPassword;

		$reset_password->sendTokenTime($token, $destinataire);
 
		mail($destinataire, $sujet, $message, implode("\r\n", $headers)); 

	}

	function checkIfMailExists() { 

		if(!empty($_POST['checkingMail'])) {

			$checkingMail = str_secur($_POST['checkingMail']);

			$reset_password = new ResetPassword;

			if($reset_password->checkIfMailExists($checkingMail)['numberEmail'] == 1) {

				sendMail($checkingMail);

			} else {

				echo "Ce compte n'existe pas !";

			}
		} 

		if (!empty($_POST['checkingMail']) && !filter_var($checkingMail, FILTER_VALIDATE_EMAIL)) {

			echo "Mail non valide :/";
			
		}
	}

?>