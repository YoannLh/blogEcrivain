<?php

	if(isset($_POST['return'])) {

		header('location: ?page=home');
		exit();
	}

	if(isset($_POST['deconnexion'])) {

		$_SESSION = array();

		header('location: ?page=home');
		exit();
	}

	if(isset($_POST['moderate'])) {

		header('location: ?page=comment_manager');
		exit();
	}

	include_once 'views/tiny_model.php';

	if (!empty($_POST['newPost'])  && !empty($_POST['title']) && isset($_POST['submit'])) {

		$post = new Post;

		$post->postNewPost($_POST['title'], $_POST['newPost']);

	}

?>