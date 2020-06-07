<div class="container">
<header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        <p class="text-muted" style="margin-top: 17px">Bienvenue <?= $_SESSION['pseudo'] ?></p>
      </div>
      <div class="col-4 text-center">
        <h1 class="blog-header-logo cold-blue"><a href="?page=home">Billet Simple Pour l'Alaska</a></h1> 
      </div>
      
      <div class="col-4 flex" style="justify-content: flex-end">
        <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Menu

                <?php 

                function getAllReportedComments() {

                  $db = new PDO('mysql:host='.DATABASE_HOST.';dbname='.DATABASE_NAME.';charset=utf8', DATABASE_USER, DATABASE_PASSWORD);

                  $reportedComments = $db->prepare('SELECT count(*) as number FROM comments WHERE reported = 1');
                  $reportedComments->execute(array());

                  while($nb_of_reported_comments = $reportedComments->fetch()) {

                    if($nb_of_reported_comments['number'] > 0) { 

                      echo $alert = '<div class="alertReportedComments">' . $nb_of_reported_comments['number'] . '</div>';

                    } else { 

                      echo "";
                    }

                  }
                  
                }

                if($_GET['page'] != 'comment_manager') {

                  getAllReportedComments();
                }

              ?>

              </button>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                <form method="post">
                  <button class="btn btn-link" type="submit" name="writeNew">
                    <a>Ecrire un billet</a>
                  </button>
                  <button class="btn btn-link" type="submit" name="moderate">
                    <a>Commentaires</a>
                  </button>
                  <button class="btn btn-link" type="submit" name="deconnexion">
                    <a>Déconnexion</a>
                  </button>
                </form>
              </div>
            </div>

      </div>
    </div>
  </header>