<?php

	class Comment extends Connect {

		public function postComments($comment) {

			$db = $this->dbConnect();

			$reqComment = $db->prepare('INSERT INTO comments (comment) VALUES (?)');
			$reqComment->execute($comment);

		}

	}

?>