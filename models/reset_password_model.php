<?php

	include_once '_classes/Connect.php';

	class ResetPassword extends Connect {

		public function checkIfMailExists($checkingMail) {

			$db = $this->dbConnect();

			$reqMail = $db->prepare('SELECT count(*) as numberEmail FROM users WHERE mail = ?');

			$reqMail->execute(array($checkingMail));

			return $reqMail->fetch();
		}
	}

?>