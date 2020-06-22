<?php 

	if($_SESSION['rank'] == "admin") {

		$buttonReportOrDeleteComment = '<button type="submit" class="btn btn-link" class="buttonReportOrDelete" 									name="deleteComment">
									Supprimer
								</button>';

		

	} else {

		$buttonReportOrDeleteComment = '<button type="submit" class="btn btn-link" class="buttonReportOrDelete" 									name="reportComment">
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

	if(isset($_POST['delete_comment']) && $_SESSION['rank'] == "admin") {

		header('location: home');

	}

	if(isset($_POST['edit_comment']) && $_SESSION['rank'] == "admin") {

			header('location: tiny');

		}

	if(isset($_GET['id']) && !empty($_GET['id'])) {

		$id = str_secur($_GET['id']);

	}

	function showTitleAndPost() {

		global $id;

		$showOnePost = new ShowOnePostAndComments;

		$_POST['actualTitle'] = $showOnePost->getAllPost($id)['title'];
		$_POST['actualPost'] = $showOnePost->getAllPost($id)['post'];

		echo '<div class="readingPost"> 
				<h4 class="blog-post-title center">' . $_POST['actualTitle'] . '</h4>
				<p>' . $_POST['actualPost'] . '</p>
			</div>';

	}

	function previousOrNextPost() {

		global $id;

		if ($id == 12) {

			$displayPrevious = "hidden";

		} else if ($id == 23) {

			$displayNext = "hidden";

		} else {

			$display = "visible";
		}

		echo '<div class="flex previousAndNext">
				<div style="visibility: ' . $displayPrevious . '">
					<a href="showonepostandcomments?id=' . ( $id - 1 ) . '">Precédent</a>
				</div>
				<div><a href="#body">Haut de page</a></div>
				<div style="visibility: ' . $displayNext . '">
					<a href="showonepostandcomments?id=' . ( $id + 1 ) . '">Suite</a>
				</div>
			</div>';
	}

	// RECUPERE ET AFFICHE LES COMMENTAIRES PAR POSTS
	function showAllCommentsByPost() {

		global $id;

		global $buttonReportOrDeleteComment;

		$getComments = new ShowOnePostAndComments;

		foreach($getComments->getAndShowAllCommentsByPost($id) as $allComments) {

			$id_comment = $allComments['id'];
			$comment = $allComments['comment'];
			$author = $allComments['author'];
			$date = $allComments['datecomment'];

			echo '<ol class="list-unstyled mb-0">

					<li class="comment">' . 
						'<p>
							<span class="authorComment">' . 
								$author . 
							'</span>' . 
							" a posté le " . $date . 
						'</p>		
						<p>' . 
							'"' . $comment . '"' . 
						'</p>
						<form method="post">' . 
							$buttonReportOrDeleteComment . 
							'<textarea name="id_reported_comment" style="display: none">' .
								$id_comment .
							'</textarea>
						</form>
					</li>

				</ol>';

		}
	}

	// ENVOIE LES COMMENTAIRES A LA BDD
	function getComments() {

		global $id;

		if (isset($_POST['comment']) && !empty($_POST['comment']) && isset($_SESSION['pseudo'])) {

			$comments = new ShowOnePostAndComments;

			$comments->postNewComment($id, str_secur($_POST['comment']), $_SESSION['pseudo']);

			header('location: showonepostandcomments&id=11');
  	
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

	function getReportedComment() {

		if(isset($_POST['id_reported_comment']) && isset($_SESSION['pseudo']) && $_SESSION['rank'] == "visitor") {

			$id_reported_comment = $_POST['id_reported_comment'];

			$comments = new ShowOnePostAndComments;

			$comments->sendReportComment($id_reported_comment);

		}
	}

	function deleteComment() {

		if(isset($_POST['id_reported_comment']) && isset($_SESSION['pseudo']) && $_SESSION['rank'] == "admin") {

			$id_deleted_comment = $_POST['id_reported_comment'];

			$comments = new ShowOnePostAndComments;

			$comments->deleteComment($id_deleted_comment);

		}
	}

	function showFormEditAndDelete() {

		if($_SESSION['rank'] == "admin") {

			echo '<div class="flex">
				<form method="post" style="margin: 3% auto">
					<table>
						<tr>
							<td>
								<input class="form_control" type="submit" name="edit_comment" value="Modifier ce post"/>
							</td>
							<td>
								<input class="form_control" type="submit" name="delete_comment" value="Supprimer ce post"/>
							</td>
						</tr>
					</table>
				</form>
			</div>';
		}
	}

	function editPost() {

		global $id;

		if(isset($_POST['edit_comment']) && $_SESSION['rank'] == "admin") {

			$managerPosts = new ShowOnePostAndComments;

			$managerPosts->editPost($id);

		}
	}

	function deletePostAndHisComments() {

		global $id;

		if(isset($_POST['delete_comment']) && $_SESSION['rank'] == "admin") {

			$managerPosts = new ShowOnePostAndComments;

			$managerPosts->deletePost($id);

			$managerPosts->deleteCommentByIdPost($id);

		}
	}


?>