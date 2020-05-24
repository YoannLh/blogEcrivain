<?php


	include_once '_classes/Connect.php';

	class CreateNewPassword extends Connect {

		public function checkIfMailExists($mail) {

			$db = $this->dbConnect();

			$reqMail = $db->prepare('SELECT mail as askingMail FROM users WHERE mail = ?');

			$reqMail->execute(array($mail));

			return $reqMail->fetch();
		}

		public function sendNewPassword($password_two, $mail) {

			$db = $this->dbConnect();

			$sendNewPassword = $db->prepare('UPDATE users SET password = ? WHERE mail = ?');

			$sendNewPassword->execute(array($password_two, $mail));
		}
	}


?>