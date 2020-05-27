<?php

	include_once '_classes/Connect.php';

	class AllPosts extends Connect {

		public function getAllPosts() {

			$db = $this->dbConnect();

			$reqAllPosts = $db->prepare('SELECT title, post FROM posts ORDER BY id');
			$reqAllPosts->execute(array());

			return $reqAllPosts->fetchAll();
		}
	}

?>