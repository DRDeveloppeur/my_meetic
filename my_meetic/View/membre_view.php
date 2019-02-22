<?php session_start(); ?>
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
    <link rel="stylesheet" href="View/style/style_slider.css">
    <script src=
    "https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity=
    "sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5lgXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
    <script src=
    "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
    integrity=
    "sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
    crossorigin="anonymous"></script>
    <script
    src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js">
    </script>
    <script src="Model/menu.js"></script>
    <title>My meetic/Membre</title>
  </head>
  <body>
    <?php include 'View/header.php' ?>
    <div class="container mt-5">
      <div class="container filter">
        <form method="post">
          <div class="row">
            <div class="form-group col-lg-2 offset-lg-3">
              <label for="age">Tranche d'age : </label>
              <select multiple class="form-control" name="ages" id="age">
                <option value="18">18/25 ans</option>
                <option value="25">25/35 ans</option>
                <option value="35">35/45 ans</option>
                <option value="45">+45 ans</option>
              </select>
            </div>
            <div class="form-group col-lg-2">
              <label for="ville">Recherche par ville : </label>
              <input class="form-control" type="text" name="ville" placeholder="Ville...">
              <input class="form-control" type="text" name="ville2" placeholder="Ville...">
              <input class="form-control" type="text" name="ville3" placeholder="Ville...">
            </div>
            <div class="form-group col-lg-2">
              <label for="sex">Vous chercher des : </label>
              <select class="form-control" name="sex" id="sex">
                <option>Homme</option>
                <option>Femme</option>
                <option>Autre</option>
              </select>
              <input type="submit" class="btn btn-primary btni" value="Search">
            </div>
          </div>
        </form>
      </div>
      <div class="conatainer profils">
        <ul>
          <label>
          <input type="radio" name="change" class="ville"> Changer la ville
          </label>
          <label>
          <input type="radio" name="change" class="mail"> Changer de mail
          </label>
          <label>
          <input type="radio" name="change" class="passe"> Changer de mot de passe
          </label>
          <li><p>Nom : <?= $_SESSION['nom'] ?></p></li>
          <li class="prenom"><p>Prenom : <?= $_SESSION['prenom'] ?></p></li>
          <li class="date_naissance"><p>
            Date de naissance : <?= $_SESSION['date_naissance'] ?></p></li>
          <li><p>Age : <?= floor($_SESSION['age']) ?> Ans</p></li>
          <li class="sex"><p>Sexe : <?= $_SESSION['sex'] ?></p></li>
          <li class="ville"><p>Ville : <?= $_SESSION['ville'] ?></p></li>
          <li class="mail"><p>Mail : <?= $_SESSION['mail'] ?></p></li>
        </ul>
        <div class="container offset-lg-4">
          <form action="Model/update_model.php" method="post">
            <div class="inputch">
              <input type="" class="in" placeholder="" name=""
              style="display:none;">
              <input type="submit" class="btn btn-primary sn"
              value="Changer" style="display:none;">
            </div>
            <button type="button" class="btn btn-primary mod">
              Modifier mon compte</button>
            <button type="submit" class="btn btn-primary sup"
            name="sup">Supprimer mon compte</button>
          </form>
        </div>
      </div>
      <div id="carrousel">
        <?php for ($i=0; $i < $nbrresult; $i++) {
          $membre = new MembreModel($result[$i]);
          ?>
          <ul>
            <!-- <li>Id: <?php echo $membre->id()."<br>"; ?></li> -->
            <li>Nom: <?php echo $membre->nom()."<br>"; ?></li>
            <li>Prenom: <?php echo $membre->prenom()."<br>"; ?></li>
            <li>Date de naissance:
            <?php echo $membre->date_naissance()."<br>"; ?></li>
            <li>Sexe: <?php echo $membre->sex()."<br>"; ?></li>
            <li>Ville: <?php echo $membre->ville()."<br>"; ?></li>
            <li>Mail: <?php echo $membre->mail()."<br>"; ?></li>
            <li>Age: <?php echo floor($membre->age())."<br>"; ?></li>
          </ul>
          <?php
        } ?>
      </div>
      <li class="result"><?= $nbrresult;?>
        Resultat trouvée.</li>
    </div>

    <script src='Model/slider.js'></script>
  </body>
</html>
