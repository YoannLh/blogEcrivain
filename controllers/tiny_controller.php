<?php

	include_once 'views/tiny_model.php';

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

	if (!empty($_POST['newPost'])  && !empty($_POST['title']) && isset($_POST['submit'])) {

		header('location: ?page=home');

	}

	function editPost() { 

		if (!empty($_SESSION['edit_post']) && isset($_POST['submit'])) {

			$post = new Post;

			$post->postEditedPost($_POST['title'], $_POST['newPost'], $_SESSION['edit_post']['id']);

			$_SESSION['edit_post'] = array();

		} 
	}

	function sendPost() { 

		if (!empty($_POST['title']) && 
			!empty($_POST['newPost']) && 
			isset($_POST['submit']) && 
			empty($_SESSION['edit_post'])) {

			$post = new Post;

			$post->postNewPost($_POST['title'], $_POST['newPost']);

		}
	}


?>