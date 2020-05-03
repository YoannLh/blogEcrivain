<?php

	if(isset($_POST['writeNew'])) {

		header('location: tiny');
		exit();

	}

	if(isset($_POST['deconnexion'])) {

		$_SESSION = array();

		header('location: home');
		exit();
	}

?>