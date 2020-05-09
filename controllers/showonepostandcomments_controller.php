<?php

	include_once 'models/showmepostandcomments_model.php';

	if(isset($_GET['id']) && !empty($_GET['id'])) {

		$id = str_secur($_GET['id']);

	}

	function showTitleAndPost() {

		global $id;

		$showOnePost = new ShowOnePostAndComments;

		$_POST['actualTitle'] = $showOnePost->getAllPost($id)['title'];
		$_POST['actualPost'] = $showOnePost->getAllPost($id)['post'];

		echo '<div class="center"> 
				<h4 class="blog-post-title">' . $_POST['actualTitle'] . '</h4>
				<p>' . $_POST['actualPost'] . '</p>
			</div>';

	}

	if (!empty($_POST['comment']) && isset($_POST['submit'])) {

		$comment = new ShowOnePostAndComments;

		$comment->postNewComment(str_secur($_POST['comment']));

	}

	function showComments($comment) {

		echo '<form class="row" method="post">
				<div class="col-6-lg">
					<input class="form-control" type="text" name="comment">
				</div>
				<div class="col-6-lg">
					<button class="btn btn-outline-primary" type="submit">Commenter</button>
				</div>
			</form>';

	}




















?>