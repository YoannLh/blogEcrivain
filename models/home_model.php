<?php

	include_once '_classes/Connect.php';

	class ShowPost extends Connect {

		public $reqAllPost;

		public function getAllPosts() {

			$db = $this->dbConnect();

			$reqAllPost = $db->prepare('SELECT id, title, post, hour FROM posts ORDER BY id DESC');
			$reqAllPost->execute(array());

			return $reqAllPost->fetchAll();
		}
	}

?>