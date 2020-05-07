<?php

	include_once 'models/home_model.php';

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

	function showThreeLastPosts() { 

		$showPost = new ShowPost;

		$i = 0;

		foreach($showPost->getAllPosts() as $allpost) { 

			$i++;

			if($i <= 3) { 

				$_POST['title'] = $allpost['title'];
				$_POST['post'] = $allpost['post'];
				$_POST['hour'] = $allpost['hour'];
				$_POST['author'] = "Jean Forteroche";

				echo '<div class="blog-post">
			        	<h2 class="blog-post-title">' . $_POST['title'] . '</h2>
			        	<p class="blog-post-meta">publié le ' . $_POST['hour'] .  'par <a href="#">' . $_POST['author'] . 
			        	'</a></p>' . '<p>' . $_POST['post'] . '</p>
			        </div>';

			} else {

				echo "";
			}
		}
	}

	function showAllLastPosts() {

		$showPost = new ShowPost;

		$i = 0;
	
			echo '<div class="p-4">
			        <h4 class="font-italic">Tous les posts</h4>
			        <ol class="list-unstyled mb-0">';
					
					foreach($showPost->getAllPosts() as $allpost) {

						$i++;

						if($i >= 4) { 

							$_POST['title'] = $allpost['title'];

				          	echo '<li><a href="#">' . $_POST['title'] . '</a></li>';

			          	} else {

			          		echo "";
			          	}

					}

			        '</ol>
		      	</div>';
	}

?>