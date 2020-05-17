<?php

	include_once '_classes/Connect.php';

	class CommentManager extends Connect {

		public function reportComment() {

			//$_POST['reportComment']
		}

		public function getAllReportedComments($reported) {

			$db = $this->dbConnect();

			$actualPost = $db->prepare('SELECT id, comment, author, datecomment
										FROM comments
										WHERE reported = ?
										ORDER BY id DESC');
			$actualPost->execute(array($reported));

			return $actualPost->fetchAll();

		}

		public function deleteComment($id_deleted_comment) {

			$db = $this->dbConnect();

			$reqComment = $db->prepare('DELETE FROM comments WHERE id = ?');
			$reqComment->execute(array($id_deleted_comment));
		}
	}

?>