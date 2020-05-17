<?php

	if(isset($_POST['deconnexion'])) {

		$_SESSION = array();

		header('location: home');
		exit();
	}

	if(isset($_POST['return'])) {

		header('location: home');
		exit();
	}

	if(isset($_POST['writeNew'])) {

		header('location: tiny');
		exit();
	}

	if(isset($_POST['moderate'])) {

		header('location: comment_manager');
		exit();
	}

	function showAllReportedComment() { 

		if(isset($_POST['reportComment']) && isset($_SESSION['pseudo']) && $_SESSION['rank'] == "visitor") {

			$commentManager = new CommentManager;

		}
		
	}














?>