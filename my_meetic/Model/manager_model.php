<?php

require 'View/test.php';

class MembresManager
{
  private $_bdd;

  public function __construct($bdd)
  {
    $this->setBdd($bdd);
  }

  public function add(Membre $perso)
  {
    $q = $this->_bdd->prepare('INSERT INTO membre
      (nom, prenom, date_naissance, sex, ville, mail, passe)
      VALUES(:nom, :prenom, :date_naissance, :sex, :ville, :mail, :passe)');

    $q->bindValue(':nom', $perso->nom());
    $q->bindValue(':personne', $perso->personne());
    $q->bindValue(':date_naissance', $perso->date_naissance());
    $q->bindValue(':sex', $perso->sex());
    $q->bindValue(':ville', $perso->ville());
    $q->bindValue(':mail', $perso->mail());
    $q->bindValue(':passe', $perso->passe());

    $q->execute();
  }

  public function delete(Membre $perso)
  {
    $this->_bdd->exec('DELETE FROM membre
      WHERE id_membre = '.$perso->id_membre());
  }

  public function get($mail)
  {

    $q = $this->_bdd->prepare('SELECT * FROM membre WHERE mail = '.$mail);
    $donnees = $q->fetchAll(PDO::FETCH_ASSOC);
    var_dump($donnees);
    return new Membre($donnees);
  }

  public function getList()
  {
    $persos = [];

    $q = $this->_bdd->query('SELECT * FROM membre ORDER BY nom');

    while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
    {
      $persos[] = new Membre($donnees);
    }
    return $persos;
  }

  public function update(Membre $perso)
  {
    $q = $this->_bdd->prepare('UPDATE membre
      SET nom = :nom, prenom = :prenom, date_naissance = :date_naissance,
      sex = :sex, ville = :ville, mail = :mail, passe = :passe
      WHERE id_membre = :id');

    $q->bindValue(':nom', $perso->nom());
    $q->bindValue(':prenom', $perso->prenom());
    $q->bindValue(':date_naissance', $perso->date_naissance());
    $q->bindValue(':sex', $perso->sex());
    $q->bindValue(':ville', $perso->ville());
    $q->bindValue(':mail', $perso->mail());
    $q->bindValue(':passe', $perso->passe());

    $q->execute();
  }

  public function setBdd(PDO $bdd)
  {
    $this->_bdd = $bdd;
  }
}
