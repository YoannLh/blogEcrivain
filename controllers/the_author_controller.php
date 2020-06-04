<?php

	if(isset($_POST['deconnexion'])) {

		$_SESSION = array();

		header('location: ?page=home');
		exit();
	}

?>