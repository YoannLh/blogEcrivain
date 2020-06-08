<?php

	if(isset($_POST['deconnexion'])) {

		$_SESSION = array();

		header('location: ?page=home');
		exit();
	}

	if(isset($_POST['return'])) {

		header('location: ?page=home');
		exit();
	}

	if(isset($_POST['writeNew']) && $_SESSION['rank'] == "admin") {

		header('location: ?page=tiny');
		exit();
	}

	if(isset($_POST['moderate']) && $_SESSION['rank'] == "admin") {

		header('location: ?page=comment_manager');
		exit();
	}

	include_once 'models/home_model.php';

	if($_SESSION['rank'] == "admin") {

	    include_once 'views/includes/headerIfAdmin.php';

	} else if(isset($_SESSION['connect']) && isset($_SESSION['pseudo'])) {

	    include_once 'views/includes/headerIfLogged.php';

	} else {

		include_once 'views/includes/header.php';

	}

	function showThreeLastPosts() { 

		$showPost = new ShowPost;

		$i = 0;

		foreach($showPost->getAllPosts() as $allpost) { 

			$i++;

			if($i <= 3) { 

				$_POST['id'] = $allpost['id'];
				$_POST['title'] = $allpost['title'];
				$_POST['post'] = $allpost['post'];
				$_POST['hour'] = $allpost['hour'];
				$_POST['author'] = "Jean Forteroche";

				echo '<div class="blog-post">
						<a href=?page=showonepostandcomments&amp;id=' . $_POST['id'] . '>
				        	<h2 class="blog-post-title">' . $_POST['title'] . '</h2>
				        	<p class="blog-post-meta">publié le ' . $_POST['hour'] . " " . 'par' . " " . $_POST['author'] . 
				        	'</p>' . '<p class="colorPost">' . $_POST['post'] . '</p>
			        	</a>
			        </div>';

			} else {

				echo "";
			}
		}
	}

	function showAllLastPosts() {

		$showPost = new ShowPost;

		$i = 0;
	
			echo '<div class="p-4 center">
			        <h4 class="font-italic" style="margin-bottom: 20px">Tous les posts</h4>
				    <ol class="list-unstyled mb-0">';
						
					foreach($showPost->getAllPosts() as $allpost) {

						$i++;

						if($i >= 4) { 

							$_POST['title'] = $allpost['title'];
							$_POST['id'] = $allpost['id'];

				          	echo '<li><a href=?page=showonepostandcomments&amp;id=' . $_POST['id'] . '>' . $_POST['title'] . '</a></li>';

				      	} else {

				       		echo "";
				        }
					}

				    '</ol>
		      	</div>';
	}

?>