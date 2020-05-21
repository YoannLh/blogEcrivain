<!doctype html>
<html lang="fr">
	<head>

	    <?php include_once 'includes/head.php'; ?>

	    <title><?= ucfirst($page) ?></title>

	</head>

	<body>

	    <!-- CONTENU -->

	    <div class="nav-scroller py-1 mb-2">
		    <nav class="nav d-flex justify-content-between">
		      <a class="p-2 text-muted" href="#">Le roman</a>
		      <a class="p-2 text-muted" href="#">Tous les billets</a>
		      <a class="p-2 text-muted" href="#">Livre d'or</a>
		      <a class="p-2 text-muted" href="#">L'auteur</a>
		      <a class="p-2 text-muted" href="#">Contact</a>
		    </nav>
 		 </div>

		  <div class="firstPicture jumbotron p-4 p-md-5 text-white rounded bg-dark">
		    <div class="col-md-6 px-0">
		      <h1 style="text-shadow: 1px 1px 2px black" class="display-4 font-italic">Plongez dans une épopée glaçiale...</h1>
		      <p style="text-shadow: 1px 1px 2px black" class="lead my-3">Either est une archéologue envoyée en Alaska pour ce qui ne devait être qu'une simple fouille. Mais bien des secrets sommeillent profondemment dans la glace...</p>
		      <p style="text-shadow: 1px 1px 2px black" class="lead mb-0">
		      	<a href="home?page=showonepostandcomments&id=12" class="text-white font-weight-bold">Commencez : Chapitre Un</a>
		      </p>
		    </div>
		  </div>

		
		  <div class="row mb-2">
		    <div class="col-md-6">
		      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
		        <div class="col p-4 d-flex flex-column position-static">
		          <strong class="d-inline-block mb-2 text-primary">Du même auteur</strong>
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
		          <strong class="d-inline-block mb-2 text-success">Du même auteur</strong>
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
		        Les derniers posts
		      </h3>

		      <?= showThreeLastPosts() ?>

		      <nav class="blog-pagination">
		        <a class="btn btn-outline-primary" href="#">Older</a>
		        <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
		      </nav>

		    </div><!-- /.blog-main -->

		    <aside class="col-md-4 blog-sidebar">
		      <div class="p-4 mb-3 bg-light rounded">
		        <h4 class="font-italic">A propos de l'auteur</h4>
		        <p class="mb-0">Jean Forteroche est l'auteur du très controversé "Du Rififi Chez Les Fifous". On ne sort jamais vraiment indemme de ses romans souvent très noirs, mais toujours humoristiques...</p>
		      </div>

		      <?= showAllLastPosts(); ?>

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


