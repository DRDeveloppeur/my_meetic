<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href=
    "https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
    integrity=
    "sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4"
    crossorigin="anonymous">
    <link rel="stylesheet" href="View/style/style_co.css">
    <script src=
    "https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity=
    "sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
    <script src=
    "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
    integrity=
    "sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
    crossorigin="anonymous"></script>
    <title>My meetic/Connexion</title>
  </head>
  <body>
    <?php include 'header.php' ?>
    <div class="container col-lg-2 col-offset-6 centered">
      <img class="logo" src="View/image/images.png" alt="logo" width="80%">
    </div>
    <div class="container col-lg-6 col-offset-6 centered">
      <form class="form-inline" method="POST">
        <div class="input-group mb-2 mr-sm-2">
          <div class="input-group-prepend">
            <div class="input-group-text">@</div>
          </div>
          <input type="mail" name="mail" class="form-control"
          placeholder="Mail" required>
        </div>

        <input type="password" name="pass" class="form-control mb-2 mr-sm-2"
        placeholder="Mot de passe">
        <button type="submit" class="btn btn-primary mb-2">Connexion</button>
        <p>Vous n'etes pas encore inscrit.
          <a href="index.php?page=inscription_controller">Vous inscrir ici !</a>
        </p>
      </form>
    </div>
  </body>
</html>
