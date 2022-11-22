<!doctype html>
<html>
  <head>
    <title>Ajout d'un type de véhicule</title>
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
                
              </font>Clients</font></a>
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
          <h1 class="jumbotron-heading">Ajout d'un type Engin</h1>
          <p class="lead text-muted">Formulaire pour ajouter une type engin</p>
        </div>
      </section>
    </main>
    <div class="container">
      <h1>Ajout d'un type engin</h1>
      <img src="" id="photo"  width=20% class="img-responsive float-right" >
      <form method="post" action="AjoutTypeEngin.php" id="form" enctype="multipart/form-data" novalidate>
        <div class="form-row">
          <div class="form-control-group col-md-3">
            <label for="idTypeEngin">idTypeEngin</label>
            <input pattern="[A-Z]{2,4}" class="form-control" name="idTypeEngin" id="idTypeEngin" placeholder="Ex : EPA" required>
            <div class="invalid-feedback">
              L'id du type Véhicule est obligatoire ( Il est constitué de 3 à 4 caractère en majuscule )
            </div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-3">
            <label for="image">Photo</label>
            <input type="file" onchange="actuPhoto(this)" id="image" name="image" accept="image/jpeg, image/png, image/gif">
            <div class="invalid-feedback">
              La date de naissance est obligatoire
            </div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-control-group col-md-6">
            <label for="LblEngin">Libellé de l'engin</label>
            <input class="form-control" name="LblEngin" id="LblEngin" required>
            <div class="invalid-feedback">
              Le libellé de l'engin est obligatoire
            </div>
          </div>
        </div>
        <div class="form-row">
          <input type="submit" value="Ajouter" class="btn btn-primary" name="valider" />
        </div>
      </form>
    </div>


    <script>
     (function() {
        "use strict"
        window.addEventListener("load", function() {
          var form = document.getElementById("form")
          form.addEventListener("submit", function(event) {
            if (form.checkValidity() == false) {
              event.preventDefault()
              event.stopPropagation()
            }
            form.classList.add("was-validated")
          }, false)
        }, false)

      }())

      function actuPhoto(element)
      {
        var image=document.getElementById("image");
        var fReader = new FileReader();
        fReader.readAsDataURL(image.files[0]);
        fReader.onloadend = function(event)
        {
          var img = document.getElementById("photo");
          img.src = event.target.result;
        }
      }
    </script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
  </body>
</html>