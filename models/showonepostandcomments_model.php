<?php

	include_once '_classes/Connect.php';

	class ShowOnePostAndComments extends Connect {

		public function getAllPost($id) {

			$db = $this->dbConnect();

			$actualPost = $db->prepare('SELECT title, post FROM posts WHERE id = ?');
			$actualPost->execute(array($id));

			return $actualPost->fetch();

		}

		public function postNewComment($comment, $author) {

			$db = $this->dbConnect();

			$reqComment = $db->prepare('INSERT INTO comments(comment, author) VALUES (?, ?)');
			$reqComment->execute(array($comment, $author));

		}

		public function getAndShowAllCommentsByPost() {

			$db = $this->dbConnect();

			$allComments = $db->prepare('SELECT comment, author, datecomment FROM comments ORDER BY id DESC');
			$allComments->execute(array());

			return $allComments->fetchAll();

		}
	}

?>