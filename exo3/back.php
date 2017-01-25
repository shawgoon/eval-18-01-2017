<?php
// connection à la BDD
$user = "root";
$mdp = "";
$host = "localhost";
$dbName = "exo3";

try {
  $instance = new PDO ("mysql:host=".$host.";dbname=".$dbName, $user, $mdp);
} catch (PDOException $e) {
  die('Erreur :'.$e->getMessage());
}

// création d'une nouvelle voiture en BDD
if (!empty($_POST)) {
  // on ajoute le msg en BDD
  $marque = ($_POST['marque']);
  $modele = ($_POST['modele']);
  $annee = ($_POST['annee']);
  $couleur = ($_POST['couleur']);
  $sql = "INSERT INTO voiture (marque, modele, annee, couleur) VALUES (?, ?, ?, ?)";
  $createSuccess = $instance->prepare($sql);
  $createSuccess -> execute(array($marque, $modele, $annee, $couleur));

  // on retourne un success
  header('Content-Type: application/json');
  // je dis que ma réponse est du JSON pas HTML
  // je formate une réponse en JSON
  echo json_encode(array("success" => true));
} 

// confirmation de l'inscription
if($createSuccess){
  echo '<p>L\'ajout du nouveau véhicule est bien pris en compte</p>';
} else {  echo '<p>Une erreur s\'est produite, veuillez recommancer</p>';
}

}?>
