<?php

	require_once '_classes/Connect.php';

	class Identification extends Connect {

		public function checkIfMailAlreadyExists($mail) {

			$db = $this->dbConnect();

			$reqMail = $db->prepare('SELECT mail as askingEmailExists FROM users WHERE mail = ?');
			$reqMail->execute(array($mail));

			return $reqMail->fetch();
		}

		public function getAllInformationsAboutUser($mail) {

			$db = $this->dbConnect();

			$reqPassword = $db->prepare('SELECT password, pseudo, rank FROM users WHERE mail = ?');
			$reqPassword->execute(array($mail));

			return $reqPassword->fetch();
		}
	}

?>