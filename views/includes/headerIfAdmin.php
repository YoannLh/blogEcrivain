<div class="container">
<header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        <p class="text-muted" style="margin-top: 17px">Bienvenue <?= $_SESSION['pseudo'] ?></p>
      </div>
      <div class="col-4 text-center">
        <h1 class="blog-header-logo cold-blue">Billet simple pour l'Alaska</h1> 
      </div>
      <div class="col-4 d-flex" style="height: 100px">
        <form method="post">
          <button class="btn btn-sm btn-outline-secondary" 
                  style="position: absolute; top: 1px; right: 18px;"
                  type="submit" 
                  name="deconnexion">
                Déconnexion
          </button>
          <div style="margin-top: 62px">
            <button class="btn btn-sm btn-outline-secondary" type="submit" name="return">Retour</button>
            <button class="btn btn-sm btn-outline-secondary" type="submit" name="writeNew">Ecrire un billet</button>
            <button class="btn btn-sm btn-outline-secondary" type="submit" name="moderate">Commentaires signalés</button>
        </div>
        </form>
      </div>
    </div>
  </header>