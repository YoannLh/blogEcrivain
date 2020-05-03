<?php

	include_once '_classes/Connect.php';

	class Post extends Connect {

		public function checkIfCommentExists($id) {

			$db = $this.dbConnect();

			$reqComment = $db->query('SELECT * FROM posts');
			
			return $reqComment;

		}

		public function postNewPost($post) {

			$db = $this->dbConnect();

			$reqPost = $db->prepare('INSERT INTO posts (post) VALUES (?)');
			
			$reqPost->execute(array($post));

		}

		public function showAllPosts() {

			$db = $this->dbConnect();

			$reqShow = $db->query('SELECT * post FROM posts');

			return $reqShow;

		}

		public function showLastPost() {

			$db = $this->dbConnect();

			$reqShowLastPost = $db->query('SELECT * post FROM posts');

			return $reqShowLastPost;
		}
	}

?>