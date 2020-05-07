<?php

	include_once 'views/tiny_model.php';

	if(isset($_POST['deconnexion'])) {

		$_SESSION = array();

		header('location: home');
		exit();
	}

	if (!empty($_POST['newPost']) && isset($_POST['submit'])) {

		$post = new Post;

		$post->postNewPost($_POST['newPost']);

	}

?>