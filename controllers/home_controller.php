<?php

	if(isset($_POST['deconnexion'])) {

		$_SESSION = array();

		header('location: home');
		exit();
	}

	if(isset($_POST['return'])) {

		header('location: home');
		exit();
	}

	if(isset($_POST['writeNew']) && $_SESSION['rank'] == "admin") {

		header('location: tiny');
		exit();
	}

	if(isset($_POST['moderate']) && $_SESSION['rank'] == "admin") {

		header('location: comment_manager');
		exit();
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
				$_POST['author'] = "Jean Forteroche"; ?>

				<div class="blog-post">
					<a href="showonepostandcomments?id=<?= $_POST['id'] ?> ">
				        <div class="blog-post-title"><?= $_POST['title'] ?></div>
				        <p class="blog-post-meta">publié le <?= $_POST['hour'] ?> par <?= $_POST['author'] ?> 
				        </p>
				        <p class="colorPost"> <?= $_POST['post'] ?>
			        </a>
			    </div>
			
			<?php
			
			} else {

				echo "";
			}
		}
	}

	function showAllLastPosts() {

		$showPost = new ShowPost;

		$i = 0; ?>
	
			<div class="p-4 center">
			        <h4 class="font-italic" style="margin-bottom: 20px">Tous les posts</h4>
				    <ol class="list-unstyled mb-0">

				    <?php
						
					foreach($showPost->getAllPosts() as $allpost) {

						$i++;

						if($i >= 4) { 

							$_POST['id'] = $allpost['id'];
							$_POST['title'] = $allpost['title']; ?>

				          	<li>
				          		<a href="showonepostandcomments?id=<?= $_POST['id']?>"> <?= $_POST['title'] ?> </a>
				          	</li>

				        <?php

				      	} else {

				       		echo "";
				        }
					}

					?>

				    </ol>
		      	</div>

	<?php	      	
	}
?>
