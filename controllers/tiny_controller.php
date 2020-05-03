<?php

	include_once 'views/tiny_model.php';

	if(isset($_POST['deconnexion'])) {

		$_SESSION = array();

		header('location: home');
		exit();
	}

	if (!empty($_POST['newPost']) && isset($_POST['submit'])) {

		$post = new Post;

		$post->postNewPost(str_secur($_POST['newPost']));

	}

	$post = new Post;

	$_POST['lastPost'] = $post->showLastPost();

	$_POST['allPosts'] = $post->showAllPosts();

?>