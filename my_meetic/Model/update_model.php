<?php
session_start();
class Updates {
  public function update(array $perso)
  {
    $bdd = new PDO ('mysql:host=localhost;dbname=my_meetic;charser=utf8',
    'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    foreach ($perso as $key => $value) {
    $q = $bdd->prepare('UPDATE membre
      SET '.$key.' = :'.$key.'
      WHERE id_membre = :id');
      if (!empty($perso[$key])) {
        if ($key == "passe") {
          $pass_hache = password_hash(htmlspecialchars($perso['passe']),
          PASSWORD_DEFAULT);
          $q->bindValue(':'.$key, $pass_hache);
          $q->bindValue(':id', $_SESSION['id']);
        }
        else {
          $q->bindValue(':'.$key, htmlspecialchars($perso[$key]));
          $q->bindValue(':id', $_SESSION['id']);
        }
      }
    }
    $q->execute();
  }

  public function delete($id)
  {
    $bdd = new PDO ('mysql:host=localhost;dbname=my_meetic;charser=utf8',
    'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    $q = $bdd->prepare('UPDATE membre
      SET activ = FALSE
      WHERE id_membre = :id');
      $q->bindValue(':id', $id);
      $q->execute();
  }
}

if (isset($_POST['sup'])) {
  $up = new Updates;
  $up->delete($_SESSION['id']);
  header('location: ../index.php');
}
if (!empty($_POST)) {
  $up = new Updates;
  $up->update($_POST);
  header('location: ../index.php');
}
