<?php

class MembreModel {
  private $_id_membre;
  private $_nom;
  private $_prenom;
  private $_date_naissance;
  private $_sex;
  private $_ville;
  private $_mail;
  private $_age;

  public function __construct(array $donnees) {
    $this->hydrate($donnees);
  }

  public function hydrate (array $donnees)
  {
    foreach ($donnees as $key => $value) {
      $method = 'set'.ucfirst($key);
      if (method_exists($this, $method)) {
        $this->$method($value);
      }
    }
  }

  public function id() { return $this->_id_membre; }
  public function nom() { return $this->_nom; }
  public function prenom() { return $this->_prenom; }
  public function date_naissance() { return $this->_date_naissance; }
  public function sex() { return $this->_sex; }
  public function ville() { return $this->_ville; }
  public function mail() { return $this->_mail; }
  public function age() { return $this->_age = ((time() - strtotime
    ($this->_date_naissance))/ 3600 / 24 / 365); }

  public function setId_membre($id) { $this->_id_membre = $id; }
  public function setNom($nom) { $this->_nom = $nom; }
  public function setPrenom($prenom) { $this->_prenom = $prenom; }
  public function setDate_naissance($date_naissance)
  { $this->_date_naissance = $date_naissance; }
  public function setSex($sex) { $this->_sex = $sex; }
  public function setVille($ville) { $this->_ville = $ville; }
  public function setMail($mail) { $this->_mail = $mail; }
  public function setAge($age) { $this->_age = $age; }

}
