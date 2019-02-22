<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href=
    "https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
    integrity=
    "sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4"
    crossorigin="anonymous">
    <link rel="stylesheet" href="View/style/style.css">
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
    <title>My meetic/Inscription</title>
  </head>
  <body>
    <?php include 'header.php'; ?>
    <div class="col-sm-7 offset-sm-3 insc">
      <form class="form-inline" method="POST">
        <div class="form-group col-sm-4">
          <label for="nom">Votre nom.</label>
          <input type="text" class="form-control" id="nom"
          name="nom" placeholder="Nom ..." required>
        </div>
        <div class="form-group col-sm-4">
          <label for="prenom">Votre prenom.</label>
          <input type="text" class="form-control" id="prenom"
          name="prenom" placeholder="Prenom ..." required>
        </div>
        <div class="form-group col-sm-4">
          <label for="date_naissance">Votre date de naissance.</label>
          <input type="date" class="form-control" id="date_naissance"
          name="date_naissance" placeholder="Date ..." required>
        </div>
        <div class="form-group col-sm-4">
          <label for="date_naissance">Sex.</label>
          <select class="form-control" id="date_naissance" name="sex">
            <option value="Homme">Homme</option>
            <option value="Femme">Femme</option>
          </select>
        </div>
        <div class="form-group col-sm-4">
          <label for="ville">Votre ville.</label>
          <input type="text" class="form-control" id="ville"
          name="ville" placeholder="Ville ..." required>
        </div>
        <div class="form-group col-sm-4">
          <label onloadedmetadata=""bel for="mail">
            Indiquer votre adresse mail.
          </label>
          <input type="email" class="form-control" id="mail"
          aria-describedby="emailHelp" name="mail" placeholder="Enter email"
          required>
        </div>
        <div class="form-group col-sm-4">
          <label for="pass">Choisir un mot de passe</label>
          <input type="password" name="pass" class="form-control" id="pass"
          placeholder="Mot de passe" required>
        </div>
        <div class="form-group col-sm-4">
          <label for="pass_c">Confirmer le mot de passe</label>
          <input type="password" name="pass_c" class="form-control" id="pass_c"
          placeholder="Mot de passe" required>
        </div>
        <button type="submit" class="btn btn-primary mt-4 ml-5">Inscription</button>
      </form>
    </div>
  </body>
</html>
