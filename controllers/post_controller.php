<?php

	include_once 'models/post_model.php';

	$showPost = new ShowPost;

	$showPost->getAllPost();

	while($allPosts = getAllPost()->fetch()) {

		$_SESSION['post'] = "test";
	}

	$_SESSION['post'] = "test";

?>