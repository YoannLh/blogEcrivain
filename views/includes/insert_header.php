<?php

	function insertHeader() { 

		if($_SESSION['rank'] == "admin") {

		    include_once 'views/includes/headerIfAdmin.php';

		} else if(isset($_SESSION['connect']) && isset($_SESSION['pseudo'])) {

		    include_once 'views/includes/headerIfLogged.php';

		} else {

			include_once 'views/includes/header.php';

		}
	}

?>
