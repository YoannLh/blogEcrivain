<?php

	function showAllPosts() {

		$allPosts = new AllPosts;

			echo '<div class="p-4">
				    <ol class="list-unstyled mb-0 readingPost">';
						
					foreach($allPosts->getAllPosts() as $allpost) {

						$_POST['title'] = $allpost['title'];
						$_POST['post'] = $allpost['post'];

				        echo '<li>' . '<h4 class="blog-post-title center">' . $_POST['title'] . '</h4>' . $_POST['post'] . '</li>';

				      	}
					}

				    '</ol>
		      	</div>';
	

?>