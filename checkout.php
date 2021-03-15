<?php
try
{
  $bdd = new PDO('mysql:host=localhost;dbname=ecomerce;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// On ajoute une entrée dans la table jeux_video
$req = $bdd->prepare('INSERT INTO info(firstname, lastname, country, adress, city, Ndecarte) VALUES(:firstname,:lastname,:country;:adress,:city,:Ndecarte)');

  $req->execute(array(
  'firstname' => $_POST['firstname'],
  'lastname' => $_POST['lastname'],
  'country' => $_POST['country'],
  'adress' => $_POST['adress'],
  'city' => $_POST['city'], 
  'Ndecarte' => $_POST['Ndecarte'],
  
  
  ));


header('location:reussi.html');
?>