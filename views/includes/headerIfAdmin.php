<div class="container">
<header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        <p class="text-muted" style="margin-top: 17px">Bienvenue <?= $_SESSION['pseudo'] ?></p>
      </div>
      <div class="col-4 text-center">
        <h1 class="blog-header-logo cold-blue"><a href="?page=home">Billet Simple Pour l'Alaska</a></h1> 
      </div>
      <div class="col-4 d-flex" style="height: 100px">
        <form method="post">
          <button class="btn btn-sm btn-outline-secondary" 
                  style="position: absolute; top: 1px; right: 18px;"
                  type="submit" 
                  name="deconnexion">
                Déconnexion
          </button>
          <div style="margin-top: 65px">
            <button class="btn btn-sm btn-outline-secondary" type="submit" name="return">Acceuil</button>
            <button class="btn btn-sm btn-outline-secondary" type="submit" name="writeNew">Ecrire un post</button>

            <button class="btn btn-sm btn-outline-secondary" type="submit" name="moderate" style="position: relative">
              Commentaires signalés

              <?php 

              getAllReportedComments();

                function getAllReportedComments() {

                  $db = new PDO('mysql:host='.DATABASE_HOST.';dbname='.DATABASE_NAME.';charset=utf8', DATABASE_USER, DATABASE_PASSWORD);

                  $reportedComments = $db->prepare('SELECT count(*) as number FROM comments WHERE reported = 1');
                  $reportedComments->execute(array());

                  while($nb_of_reported_comments = $reportedComments->fetch()) {

                    if($nb_of_reported_comments['number'] > 0) { 

                      $_SESSION['alert'] = '<div class="alertReportedComments">' . $nb_of_reported_comments['number'] . '</div>';

                      echo $_SESSION['alert'];

                    } else {

                      echo "";
                    }

                  }
                  
                }

      

              ?>
           
          </button>
            
        </div>
        </form>
      </div>
    </div>
  </header>