<?php

	if(isset($_POST['sendNewPassword'])) { 

		header('location: ?page=identification');
					
	}

	function checkMailAndSendNewPassword() { 

		if (isset($_GET['log']) && !empty($_GET['log']) && !isset($_SESSION['pseudo'])) {

			if(isset($_POST['password_one']) && isset($_POST['password_two']) && $_POST['password_one'] == $_POST['password_two']) {

				$password_one = str_secur($_POST['password_one']);
				$password_two = str_secur($_POST['password_two']);
				$mail = str_secur($_GET['log']);

				$createNewPassword = new createNewPassword;

				if($createNewPassword->checkIfMailExists($mail)['askingMail'] == $mail) {
		
					$createNewPassword->sendNewPassword($password_two, $mail);

				}
			}
		}
	}


?>