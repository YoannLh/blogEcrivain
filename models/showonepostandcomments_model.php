<?php

	include_once '_classes/Connect.php';

	class ShowOnePostAndComments extends Connect {

		public function getAllPost($id) {

			$db = $this->dbConnect();

			$actualPost = $db->prepare('SELECT id, title, post FROM posts WHERE id = ?');
			$actualPost->execute(array($id));

			return $actualPost->fetch();

		}

		public function postNewComment($post, $comment, $author) {

			$db = $this->dbConnect();

			$reqComment = $db->prepare('INSERT INTO comments(id_post, comment, author) VALUES (?, ?, ?)');
			$reqComment->execute(array($post, $comment, $author));

		}

		public function getAndShowAllCommentsByPost($id) {

			$db = $this->dbConnect();

			$allComments = $db->prepare('SELECT id, id_post, comment, author, datecomment
										FROM comments
										WHERE id_post = ?
										ORDER BY id DESC');

			$allComments->execute(array($id));

			return $allComments->fetchAll();

		}

		public function sendReportComment($id_reported_comment) {

			$db = $this->dbConnect();

			$reqComment = $db->prepare('UPDATE comments SET reported = 1 WHERE id = ?');
			$reqComment->execute(array($id_reported_comment));

		}

		public function deleteComment($id_deleted_comment) {

			$db = $this->dbConnect();

			$reqComment = $db->prepare('DELETE FROM comments WHERE id = ?');
			$reqComment->execute(array($id_deleted_comment));

		}

		public function editPost() {


		}

		public function deletePost($id_post) {

			$db = $this->dbConnect();

			$reqPosts = $db->prepare('DELETE FROM posts WHERE id = ?');
			$reqPosts->execute(array($id_post));
	
		}
	}

?>