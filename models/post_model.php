<?php

	class ShowPost extends Connect {

		public function getAllPost() {

			$db = $this->dbConnect();

			$reqAllPost = $db->prepare('SELECT * FROM posts');
			$reqAllPost->execute();

			return $reqAllPost;
		}

	}