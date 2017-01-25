<?php
class Chat {
  private $prenom = '';
  private $age = '';
  private $couleur = '';
  private $sexe = '';
  private $race = '';

  public function __construct($prenom, $age, $couleur, $sexe, $race) {
    $this -> prenom = $prenom;
    $this -> age = $age;
    $this -> couleur = $couleur;
    $this -> sexe = $sexe;
    $this -> race = $race;
  }

    // méthode d'info
  public function getInfos() {
    $sql = "SELECT * FROM chat" ;
    $result = $instance -> prepare($sql);
    $result -> execute (array($_POST['prenom']),
      ($_POST['age']),
      ($_POST['couleur']),
      ($_POST['sexe']),
      ($_POST['race']));
      $data = $result -> fetch ();
      if ($data != false) {
        return $data;
      }
  }

}


 ?>
