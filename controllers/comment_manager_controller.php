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

	$buttonReportOrDelete = '<button type="submit" class="btn btn-link" id="buttonReportOrDelete" 											name="deleteComment">
							Supprimer
							</button>';

	$nb_reported_comments = 1;

	function showAllReportedComment() { 

		global $buttonReportOrDelete;

		global $nb_reported_comments;

		$commentManager = new CommentManager;

		foreach($commentManager->getAllReportedComments(1) as $allReportedComments) {

			$nb_reported_comments++;

			$id_comment = $allReportedComments['id'];
			$comment = $allReportedComments['comment'];
			$author = $allReportedComments['author'];
			$date = $allReportedComments['datecomment'];

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
							$buttonReportOrDelete . 
							'<textarea name="id_reported_comment" style="display: none">' .
								$id_comment .
							'</textarea>
						</form>
					</li>

				</ol>';

		}
	}

	function showReportedCommentsInAlert() {

		global $nb_reported_comments;

		echo $nb_reported_comments;

		return $_SESSION['$nb_reported_comments'] = $nb_reported_comments;
	}

	function deleteComment() {

		if(isset($_POST['id_reported_comment']) && isset($_SESSION['pseudo']) && $_SESSION['rank'] == "admin") {

			$id_deleted_comment = $_POST['id_reported_comment'];

			$commentManager = new CommentManager;

			$commentManager->deleteComment($id_deleted_comment);

		}
	}
		
?>