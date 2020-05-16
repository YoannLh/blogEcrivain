<?php 

	if($_SESSION['rank'] == "admin") {

		$buttonReportOrDelete = '<button class="btn btn-link" id="buttonReportOrDelete" name="deleteComment">
									Supprimer
								</button>';

	} else {

		$buttonReportOrDelete = '<button class="btn btn-link" id="buttonReportOrDelete" name="reportComment">
									Signaler	
								</button>';

	}

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

	if(isset($_GET['id']) && !empty($_GET['id'])) {

		$id = str_secur($_GET['id']);

	}

	// RECUPERE ET AFFICHE LES POSTS
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

	// RECUPERE ET AFFICHE LES COMMENTAIRES PAR POSTS
	function showAllCommentsByPost() {

		global $id;

		global $buttonReportOrDelete;

		$getComments = new ShowOnePostAndComments;

		foreach($getComments->getAndShowAllCommentsByPost($id) as $allComments) {

			$comment = $allComments['comment'];
			$author = $allComments['author'];
			$date = $allComments['datecomment'];

			echo '<ol class="list-unstyled mb-0">

					<li class="comment">' . '<p><span class="authorComment">' . $author . '</span>' . " a posté le " . $date . '</p><p>' . '"' . $comment . '"' . '</p><form method="post">' . $buttonReportOrDelete . '</form></li>

				</ol>';

		}
	}

	// ENVOIE LES COMMENTAIRES A LA BDD
	function getComments() {

		global $id;

		if (isset($_POST['comment']) && !empty($_POST['comment']) && isset($_SESSION['pseudo'])) {

			$comments = new ShowOnePostAndComments;

			$comments->postNewComment($id, str_secur($_POST['comment']), $_SESSION['pseudo']);

			header('location: home?page=showonepostandcomments&id=11');
  	
		} else if (!empty($_POST['comment']) && isset($_POST['comment']) && !isset($_SESSION['pseudo'])) {

			echo '<div style="text-align: center; color: red">Vous devez être connecté(e) pour poster ou signaler un commentaire !</div>';
		}

		echo    '<form id="commentForm" method="post">
					<div class="container">
						<div class="row input-group" style="margin: 10px">
							<div class="col-9">
								<input class="form-control" type="text" name="comment">
							</div>
							<div class="col">
								<button class="btn btn-outline-primary" type="submit">Laissez un commentaire</button>
							</div>
						</div>
					</div>
				</form>';
	}

?>