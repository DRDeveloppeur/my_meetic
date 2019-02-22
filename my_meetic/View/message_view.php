<?php session_start() ?>
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
    <title>Message</title>
  </head>
  <body>
    <?php include 'header.php'; ?>
      <div class="col-lg-2" style="background:Darkgray;height:100%;position:fixed;">
        <div class="btn-group-vertical mt-5">
          <button type="button" class="btn btn-secondary">Message reçue</button>
          <button type="button" class="btn btn-secondary">Message envoyé</button>
          <button type="button" class="btn btn-secondary">Message supprimer</button>
        </div>
      </div>
      <div class="container offset-lg-2">
        <div class="mrecue">
          <h1>Messages reçue</h1>
          <div class="mes">
            <ul>
            <?php
            $new = new Messages;
            $new->message_recue();
            if (isset($_SESSION['messages'])) {
              $cnt = count($_SESSION['messages']);
              for ($i=0; $i < $cnt; $i++) {
                ?>
                <li>Envoyé par <?= $_SESSION['par'] ?></li>
                <li> <?= $_SESSION['messages'] ?></li>
                <li>Le <?= $_SESSION['date_envoi'] ?></li>
                <?php
              }
            }
            else {
              echo $_SESSION['messages'];
            ?>
            <li>Vous avez 0 messages !</li>
            <?php
            }
            ?>
          </ul>
          </div>
        </div>
      </div>
  </body>
</html>
