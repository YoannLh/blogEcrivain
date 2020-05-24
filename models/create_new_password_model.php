<?php


	include_once '_classes/Connect.php';

	class CreateNewPassword extends Connect {

		public function checkIfMailExists($mail) {

			$db = $this->dbConnect();

			$reqMail = $db->prepare('SELECT mail as askingMail FROM users WHERE mail = ?');

			$reqMail->execute(array($mail));

			return $reqMail->fetch();
		}

		public function sendNewPassword($passwordCrypted, $mail) {

			$db = $this->dbConnect();

			$sendNewPassword = $db->prepare('UPDATE users SET password = ? WHERE mail = ?');

			$sendNewPassword->execute(array($passwordCrypted, $mail));
		}
	}


?>