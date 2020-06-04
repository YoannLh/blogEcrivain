<?php

	include_once '_classes/Connect.php';

	class Contact extends Connect {

		public function checkIfPseudoExists($pseudo) {

			$db = $this->dbConnect();

			$reqPseudo = $db->prepare('SELECT mail, pseudo FROM users WHERE pseudo = ?');

			$reqPseudo->execute(array($pseudo));

			return $reqPseudo->fetch();

		}
	}

?>