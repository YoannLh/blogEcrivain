<?php

	include_once '_classes/Connect.php';

	class ShowOnePostAndComments extends Connect {

		public function getAllPost($id) {

			$db = $this->dbConnect();

			$actualPost = $db->prepare('SELECT title, post FROM posts WHERE id = ?');
			$actualPost->execute(array($id));

			return $actualPost->fetch();

		}

		public function postNewComment($comment) {

			$db = $this->dbConnect();

			$reqComment = $db->prepare('INSERT INTO comments (comment) VALUES (?)');
			$reqComment->execute($comment);

		}

		public function showPosts($id) {

			$db = $this->dbConnect();

			$actualPost = $db->prepare('SELECT comment FROM comments WHERE id = ?');
			$actualPost->execute(array($id));

			return $actualPost->fetch();
		}
	}

?>