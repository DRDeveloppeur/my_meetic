<?php
class Messages {

  public function message_recue(){
    $bdd = new PDO ('mysql:host=localhost;dbname=my_meetic;charser=utf8',
    'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $sd = $bdd->prepare('SELECT *, DATE_FORMAT(date_envoi, "%d.%m.%Y à %H:%m") AS date_envoi FROM messagerie WHERE id_membre = :id AND archive = TRUE');
    $sd->bindValue(':id', $_SESSION['id']);
    $sd->execute();
    while ($mes = $sd->fetch()) {
      $_SESSION['par'] = $mes['envoye_par'];
      $_SESSION['messages'] = $mes['message'];
      $_SESSION['date_envoi'] = $mes['date_envoi'];
    }
  }
}
