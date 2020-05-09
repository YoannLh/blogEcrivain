<?php

	include_once 'views/comments_model.php';

	if(isset($_POST['deconnexion'])) {

		$_SESSION = array();

		header('location: home');
		exit();
	}

	if (!empty($_POST['comment']) && isset($_POST['submit'])) {

		$comment = new Comment;

		$post->postNewComment(str_secur($_POST['comment']));

	}

?>