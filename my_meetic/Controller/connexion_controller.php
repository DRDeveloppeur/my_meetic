<?php
class ConnexionController
{
  public function verif()
  {
    include 'Model/connexion_model.php';
    include 'View/connexion_view.php';
    if (!empty($_POST['mail'])) {
      $verif = new ConnexionModel($_POST['mail']);
      $verif->verif();
    }
  }
}
$connexion = new ConnexionController;
$connexion->verif();
