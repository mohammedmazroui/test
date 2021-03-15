<?php
session_start();
$_SESSION['nom'] = $_POST['name'];
$_SESSION['code'] = $_POST['code'];

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=ecomerce;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
    

$reponse = $bdd->query('SELECT * FROM utilisateurs WHERE pseudo = \'' . $_POST['name'] . '\' AND mot_de_passe = \'' . $_POST['code'] . '\'');




$user = $reponse->fetch();


    if ($user ) {

        header('location:ajoutproduit.html');
        
    }

        else {

            header('location:connexionajout.html');
            
        }

        


$reponse->closeCursor(); // Termine le traitement de la requête
?>