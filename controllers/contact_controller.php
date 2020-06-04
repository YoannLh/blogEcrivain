<?php

	function sendMailToAuthor() {

		if($_SESSION['connect'] && isset($_SESSION['pseudo'])) {

			if(isset($_POST['submit']) &&
				isset($_POST['pseudo']) && 
				!empty($_POST['pseudo']) && 
				isset($_POST['message']) && 
				!empty($_POST['message'])) { 

				$pseudo = str_secur($_POST['pseudo']);
				$message = $pseudo . " vous dit :" . str_secur($_POST['message']);
				$mail = "yolhostis@live.fr";
				$subject = "Message";

				$contact = new Contact;

				$contact->checkIfPseudoExists($pseudo);

				if($contact->checkIfPseudoExists($pseudo)['pseudo'] == $pseudo) {

					$headers[] = 'From: ' . $contact->checkIfPseudoExists($pseudo)['mail'];

					echo $headers[0];

					mail($mail, $subject, $message, $headers);

				}
			}
		}

		if(isset($_POST['submit']) && !isset($_SESSION['connect'])) {

			echo "Vous devez être connecté pour envoyer un message !";
		}
	}

?>