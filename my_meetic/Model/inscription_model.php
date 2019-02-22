<?php

class Manager
{

  public function add(array $perso)
  {
    $bdd = new PDO ('mysql:host=localhost;dbname=my_meetic;charser=utf8',
    'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    if (!empty($_POST)) {
      $req = $bdd -> prepare('INSERT INTO membre(nom, prenom, date_naissance,
        age, sex, ville, mail, passe)
        VALUES(?, ?, ?, ?, ?, ?, ?, ?)');
      $dates = new DateTime($_POST['date_naissance']);
      $date = $dates->format('d.m.Y');
      $age = ((time() - strtotime($date))
        / 3600 / 24 / 365);
      $age = floor($age);
      $pass_hache = password_hash(htmlspecialchars($_POST['pass']),
      PASSWORD_DEFAULT);

      $this->verif($age, $bdd);
      $this->verif2();
    }
    $req->execute(array(htmlspecialchars($_POST['nom']),
    htmlspecialchars($_POST['prenom']),
    htmlspecialchars($_POST['date_naissance']),
    htmlspecialchars($age),
    htmlspecialchars($_POST['sex']),
    htmlspecialchars($_POST['ville']),
    htmlspecialchars($_POST['mail']),
    $pass_hache));

    header('Location: index.php');
  }

  public function verif($age, $bdd)
  {
    if ($_POST['pass'] == $_POST['pass_c']) {
      $reponse = $bdd->query('SELECT mail FROM membre
        WHERE mail = "' . $_POST['mail'] . '" ');
      $mail = $reponse->fetch();
      if (strtolower($_POST['mail']) == strtolower($mail['mail']))
      {
        ?>
        <div class="alert alert-danger" role="alert">
          Cette adresse mail est déjà utilisée.</div><?php
        exit;
      }
      if ($age < 18) {
        ?><div class="alert alert-danger" role="alert">
          Il faut avoir +18 ans pour pouvoir s'inscrire.</div><?php
        exit;
      }
    }
    else {
      ?>
      <div class="alert alert-danger" role="alert">
        Les deux mot de passe ne corespendent pas !</div><?php
      exit;
    }
  }

  public function verif2(){
    if ($_POST['sex'] != "Homme" && $_POST['sex'] != "Femme") {
      ?>
      <div class="alert alert-danger" role="alert">
        Injection interdite, Attention <?= $_POST['sex']; ?> !</div><?php
        exit;
    }
  }
}
