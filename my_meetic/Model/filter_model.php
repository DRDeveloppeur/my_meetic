<?php

class Search
{
  public function Membres($post)
  {
    $bdd = new PDO ('mysql:host=localhost;dbname=my_meetic;charser=utf8',
    'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $q = $bdd->prepare('SELECT *, DATE_FORMAT(date_naissance, "%d.%m.%Y")
    AS date_naissance FROM membre WHERE age BETWEEN :age AND :ages
    AND (sex = :sex AND ville IN (:ville, :ville2, :ville3))
    AND activ = TRUE');
    if (!empty($post['ages'])) {
      if ($post == 18) {
        $q->bindValue(':ages', (int) $post['ages']+8);
      }
      if ($post == 45) {
        $q->bindValue(':ages', (int) $post['ages']+9999999);
      }
      else {
        $q->bindValue(':ages', (int) $post['ages']+10);
      }
      $q->bindValue(':age', (int) $post['ages']);
    }
    else {
      $post['ages'] = 18;
      $q->bindValue(':age', $post['ages']);
      $q->bindValue(':ages', $post['ages']+99999);
    }
    $q->bindValue(':ville', htmlspecialchars($post['ville']));
    $q->bindValue(':ville2', htmlspecialchars($post['ville2']));
    $q->bindValue(':ville3', htmlspecialchars($post['ville3']));
    $q->bindValue(':sex', $post['sex']);
    $q->execute();
    return $result = $q->fetchAll();
  }

  public function MembresALL() {
    $bdd = new PDO ('mysql:host=localhost;dbname=my_meetic;charser=utf8',
    'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    $req = $bdd->prepare('SELECT *, DATE_FORMAT(date_naissance, "%d.%m.%Y")
    AS date_naissance  FROM membre WHERE activ = TRUE');
    $req->execute();
    return $result = $req->fetchAll();
  }
}
