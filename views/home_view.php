<!DOCTYPE html>
<html lang="fr" style="scroll-behavior: smooth">
	<head>

	    <?php include_once 'includes/head.php'; ?>

	</head>

	<body>

	    <!-- CONTENU -->
	    <?php 

			include_once 'views/includes/insert_header.php';

			insertHeader();

		?>

		<div class="container">
	    <div class="nav-scroller py-1 mb-2">
		    <nav class="nav d-flex justify-content-between">
		      <a class="p-2 text-muted" href="the_novel">Le jeu</a>
		      <a class="p-2 text-muted" href="all_posts">Tous les tips</a>
		      <a class="p-2 text-muted" href="the_author">Qui suis-je ?</a>
		      <a class="p-2 text-muted" href="contact">Contact</a>
		    </nav>
 		 </div>

		  <div class="firstPicture jumbotron p-4 p-md-5 text-white rounded bg-dark">
		    <div class="col-md-6 px-0">
		      <h1 style="text-shadow: 1px 1px 2px black" class="display-4 font-italic">Tous les trucs et astuces de New Horizons !</h1>
		      <p style="text-shadow: 1px 1px 2px black" class="lead my-3">Profitez au mieux du jeu <br/>avec des tas de clochettes !</p>
		      <p style="text-shadow: 1px 1px 2px black" class="lead mb-0">
		      	<a href="showonepostandcomments?id=12" class="text-white font-weight-bold">Astuce numéro 1</a>
		      </p>
		    </div>
		  </div>

		
		  <div class="row mb-2">
		    <div class="col-md-6">
		      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
		        <div class="col p-4 d-flex flex-column position-static">
		          <strong class="d-inline-block mb-2 text-primary">Version précédente</strong>
		          <h3 class="mb-0">Animal Crossing DS</h3>
		          <div class="mb-1 text-muted">Nov 12</div>
		          <p class="card-text mb-auto">Découvrez l'ambiance sulfureuse des bars clandestins de l'Amerique des années 30...</p>
		          <a href="book1" class="stretched-link"></a>
		        </div>
		        <div class="col-auto d-none d-lg-block">
		        	<img src="assets/images/cover_book1.jpeg" alt="ancienne_photo_hommes" style="width: 200px" />
		        </div>
		      </div>
		    </div>
		    <div class="col-md-6">
		      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
		        <div class="col p-4 d-flex flex-column position-static">
		          <strong class="d-inline-block mb-2 text-success">Version précédente</strong>
		          <h3 class="mb-0">Animal Crossing: New Leaf</h3>
		          <div class="mb-1 text-muted">Jan 18</div>
		          <p class="mb-auto">A quoi peut bien aspirer un courant d'air dans la vie ?</p>
		          <a href="book2" class="stretched-link"></a>
		        </div>
		        <div class="col-auto d-none d-lg-block">
		          <img src="assets/images/air.jpg" alt="photo_nuages" style="width: 200px" />
		        </div>
		      </div>
		    </div>
		  </div>
		</div>

		<main class="container">
		  <div class="row">
		    <div class="col-md-8 blog-main">
		      <h3 class="pb-4 mb-4 font-italic border-bottom" style="font-size: 2.7em">
		        Les dernières astuces
		      </h3>

		      <?= showThreeLastPosts() ?>

		    </div><!-- /.blog-main -->

		    <aside class="col-md-4 blog-sidebar">
		      <div class="p-4 mb-3 bg-light rounded">
		        <h4 class="font-italic">A propos de moi</h4>
		        <p class="mb-0">Passionné de jeux vidéos (et plus particulièrement d'Animal Crossing), j'ai décidé de créer un blog pour vous livrer tous les secrets qui se cachent dans New Horizons !</p>
		      </div>

		      <?= showAllLastPosts() ?>

		    </aside><!-- /.blog-sidebar -->

		  </div><!-- /.row -->

		</main>

			<?php include_once 'views/includes/footer.php'?>

	</body>
</html>


