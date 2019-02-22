<?php
class ConnexionModel
{
  private $_mail;

  public function __construct($mail)
  {
    $this->_mail = $mail;
  }

  public function getMail()
  {
    $mail = $this->_mail;
  }

  public function setMail($mail)
  {
    $this->_mail = $mail;
  }

  public function verif()
  {
    $bdd = new PDO ('mysql:host=localhost;dbname=my_meetic;charser=utf8',
    'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    if (!empty($_POST)) {
      $req = $bdd->prepare('SELECT *, DATE_FORMAT(date_naissance, "%d.%m.%Y")
      AS date_naissance FROM membre
      WHERE mail = :mail');
      $req->execute(array(':mail' => htmlspecialchars($_POST['mail'])));
      $resultat = $req->fetch();
      $isPasswordCorrect = password_verify(htmlspecialchars($_POST['pass']),
      $resultat['passe']);
      $this->cond($resultat, $isPasswordCorrect);
    }
    session_start();
    $_SESSION['id'] = $resultat['id_membre'];
    $_SESSION['nom'] = $resultat['nom'];
    $_SESSION['prenom'] = $resultat['prenom'];
    $_SESSION['date_naissance'] = $resultat['date_naissance'];
    $_SESSION['sex'] = $resultat['sex'];
    $_SESSION['ville'] = $resultat['ville'];
    $_SESSION['pass'] = $resultat['passe'];
    $_SESSION['mail'] = $resultat['mail'];
    $age = ((time() - strtotime($resultat['date_naissance']))
    / 3600 / 24 / 365);
    $_SESSION['age'] = $age;
    header('location: ?page=membre_controller');
  }

  public function cond($resultat, $isPasswordCorrect)
  {
    if (!$resultat || !$isPasswordCorrect) {
      ?><div class="alert alert-danger" role="alert">
        Pseudo ou Mot de passe incorect !</div><?php
        exit;
    }
    if ($resultat['activ'] == 0) {
      ?><div class="alert alert-danger" role="alert">
        Votre compte à était supprimer !</div><?php
        exit;
      }
  }
}
