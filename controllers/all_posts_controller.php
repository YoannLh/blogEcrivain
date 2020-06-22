<?php

	function showAllPosts() {

		$allPosts = new AllPosts ?>

			<div class="p-4">
				<ol class="list-unstyled mb-0 readingPost">

				<?php
						
					foreach($allPosts->getAllPosts() as $allpost) {

						$_POST['title'] = $allpost['title'];
						$_POST['post'] = $allpost['post'];

				?>

					    <li>
					    	<div class="blog-post-title center"><?= $_POST['title'] ?></div>
					    	<?= $_POST['post'] ?>
					    </li>

					<?php

					}

					?>

				</ol>
		    </div>
	
	<?php

	}

?>

