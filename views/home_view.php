<!doctype html>
<html lang="fr">
	<head>

	    <?php include_once 'includes/head.php'; ?>

	    <title><?= ucfirst($page) ?></title>

	</head>

	<body>

	    <!-- CONTENU -->

	    <?php 

	    	if($_SESSION['rank'] == "admin") {

	    		include_once 'views/includes/headerIfAdmin.php';

	    	} else if(isset($_SESSION['connect']) && isset($_SESSION['pseudo'])) {

	    		include_once 'views/includes/headerIfLogged.php';

			} else {

				include_once 'views/includes/header.php';

			}

	    ?>

	    <div class="nav-scroller py-1 mb-2">
		    <nav class="nav d-flex justify-content-between">
		      <a class="p-2 text-muted" href="#">Le roman</a>
		      <a class="p-2 text-muted" href="#">Tous les billets</a>
		      <a class="p-2 text-muted" href="#">Livre d'or</a>
		      <a class="p-2 text-muted" href="#">L'auteur</a>
		      <a class="p-2 text-muted" href="#">Contact</a>
		    </nav>
 		 </div>

		  <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
		    <div class="col-md-6 px-0">
		      <h1 class="display-4 font-italic">Title of a longer featured blog post</h1>
		      <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
		      <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
		    </div>
		  </div>

		
		  <div class="row mb-2">
		    <div class="col-md-6">
		      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
		        <div class="col p-4 d-flex flex-column position-static">
		          <strong class="d-inline-block mb-2 text-primary">World</strong>
		          <h3 class="mb-0">Featured post</h3>
		          <div class="mb-1 text-muted">Nov 12</div>
		          <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
		          <a href="#" class="stretched-link">Continue reading</a>
		        </div>
		        <div class="col-auto d-none d-lg-block">
		          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
		        </div>
		      </div>
		    </div>
		    <div class="col-md-6">
		      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
		        <div class="col p-4 d-flex flex-column position-static">
		          <strong class="d-inline-block mb-2 text-success">Design</strong>
		          <h3 class="mb-0">Post title</h3>
		          <div class="mb-1 text-muted">Nov 11</div>
		          <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
		          <a href="#" class="stretched-link">Continue reading</a>
		        </div>
		        <div class="col-auto d-none d-lg-block">
		          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
		        </div>
		      </div>
		    </div>
		  </div>
		</div>

		<main role="main" class="container">
		  <div class="row">
		    <div class="col-md-8 blog-main">
		      <h3 class="pb-4 mb-4 font-italic border-bottom">
		        From the Firehose
		      </h3>

		      <div class="blog-post">
		        <h2 class="blog-post-title">Titre</h2>
		        <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>

		        <p>Dernier post</p>

		      </div><!-- /.blog-post -->

		      <div class="blog-post">
		        <h2 class="blog-post-title">Titre 2</h2>
		        <p class="blog-post-meta">December 23, 2013 by <a href="#">Jacob</a></p>

		        <p>2eme post</p>
		      </div><!-- /.blog-post -->

		      <div class="blog-post">
		        <h2 class="blog-post-title">Titre 3</h2>
		        <p class="blog-post-meta">December 14, 2013 by <a href="#">Chris</a></p>

		        <p>3eme post</p>
		      </div><!-- /.blog-post -->

		      <nav class="blog-pagination">
		        <a class="btn btn-outline-primary" href="#">Older</a>
		        <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
		      </nav>

		    </div><!-- /.blog-main -->

		    <aside class="col-md-4 blog-sidebar">
		      <div class="p-4 mb-3 bg-light rounded">
		        <h4 class="font-italic">About</h4>
		        <p class="mb-0">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
		      </div>

		      <div class="p-4">
		        <h4 class="font-italic">Archives</h4>
		        <ol class="list-unstyled mb-0">
		          <li><a href="#">March 2014</a></li>
		          <li><a href="#">February 2014</a></li>
		          <li><a href="#">January 2014</a></li>
		          <li><a href="#">December 2013</a></li>
		          <li><a href="#">November 2013</a></li>
		          <li><a href="#">October 2013</a></li>
		          <li><a href="#">September 2013</a></li>
		          <li><a href="#">August 2013</a></li>
		          <li><a href="#">July 2013</a></li>
		          <li><a href="#">June 2013</a></li>
		          <li><a href="#">May 2013</a></li>
		          <li><a href="#">April 2013</a></li>
		        </ol>
		      </div>

		      <div class="p-4">
		        <h4 class="font-italic">Elsewhere</h4>
		        <ol class="list-unstyled">
		          <li><a href="#">GitHub</a></li>
		          <li><a href="#">Twitter</a></li>
		          <li><a href="#">Facebook</a></li>
		        </ol>
		      </div>
		    </aside><!-- /.blog-sidebar -->

		  </div><!-- /.row -->

		</main>

			<?php include_once 'views/includes/footer.php'?>

	</body>
</html>


