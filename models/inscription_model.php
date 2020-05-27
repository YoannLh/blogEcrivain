<?php

	require_once '_classes/Connect.php';

	class Inscription extends Connect {

		public function checkIfMailExists($mail) {

			$db = $this->dbConnect();

			$reqMail = $db->prepare('SELECT count(*) as numberEmail FROM users WHERE mail = ?');

			$reqMail->execute(array($mail));

			return $reqMail->fetch();

		}

		public function sendAllInformations($mail, $pseudo, $passwordCrypted, $secret, $rank) {

			$db = $this->dbConnect();

			$reqSend = $db->prepare('INSERT INTO users(mail, pseudo, password, secret, rank) VALUES (?, ?, ?, ?, ?)');

			$reqSend->execute(array($mail, $pseudo, $passwordCrypted, $secret, $rank));

		}
	}

?>
