<!doctype html>
<html>
  <head>
    <title>Types de Véhicules de pompier</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Liaison au fichier css de Bootstrap -->
    <link href="Bootstrap/css/bootstrap.css" rel="stylesheet">

  </head>

  <body>
  <header>
    <div class="px-3 py-2 text-bg-dark">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Amorcer"><use xlink:href="#bootstrap"></use></svg>
          </a>

          <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
            <li>
              <a href="#" class="nav-link text-secondary">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#home"></use></svg><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                Maison
              </font></font></a>
            </li>
            <li>
              <a href="#" class="nav-link text-white">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#speedometer2"></use></svg><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                Tableau de bord
              </font></font></a>
            </li>
            <li>
              <a href="#" class="nav-link text-white">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#table"></use></svg><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                Ordres
              </font></font></a>
            </li>
            <li>
              <a href="#" class="nav-link text-white">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#grid"></use></svg><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                Des produits
              </font></font></a>
            </li>
            <li>
              <a href="#" class="nav-link text-white">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#people-circle"></use></svg><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                Clients
              </font></font></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="px-3 py-2 border-bottom mb-3">
      <div class="container d-flex flex-wrap justify-content-center">
        <form class="col-12 col-lg-auto mb-2 mb-lg-0 me-lg-auto" role="search">
          <input type="search" class="form-control" placeholder="Chercher..." aria-label="Chercher">
        </form>

        <div class="text-end">
          <button type="button" class="btn btn-light text-dark me-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Connexion</font></font></button>
          <button type="button" class="btn btn-primary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">S'inscrire</font></font></button>
        </div>
      </div>
    </div>
  </header>
    <main role="main">
      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Les véhicules de pompier</h1>
          <p class="lead text-muted">Voici la liste des types de véhicules que l'on peut trouver dans une caserne de pompiers.</p>
        </div>
      </section>
      

      <div class="album py-5 bg-light">
        <div class="container">
          <div class="row">
          <?php
                require 'connection.php';
                $listeVeh = "SELECT idTypeEngin, LblEngin, image FROM DSC.TypeEngin;";
                foreach ($pdo->query($listeVeh) as $row) 
                {?>            
                  <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                      <img class="card-img-top" src="images/<?php echo $row["image"]?>" alt="Card image cap">
                      <div class="card-body">
                        <p class="card-text"> <?php echo ucwords($row["LblEngin"])?> </p>
                        <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group">
                            <a href="ModifTypeEngin.php?id=<?php echo ($row["idTypeEngin"])?>" type="button" class="btn btn-sm btn-outline-secondary">Modifier</a>
                            <a href="SuppTypeEngin.php?id=<?php echo ($row["idTypeEngin"])?>" type="button" class="btn btn-sm btn-outline-secondary">Supprimer</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>        
                <?php }
          ?>
          </div>
        </div>
      </div>
    </main>
    <!-- Bouton Ajout -->
    <div class="container"> 
      <div class="row"> 
        <div class="col text-center"> 
           <a href="FormAjoutTypeEngin.php" type="button" class="btn btn-primary btn-lg">Ajouter</a>
        </div> 
      </div> 
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
  </body>
</html>