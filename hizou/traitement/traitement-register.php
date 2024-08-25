<?php

include 'db.php';

if(isset($_POST['ok'])){
    // Verification des donné avec var_dump
        // var_dump($_POST);
    
    // Assignation des variables

    $email = $_POST['email'];
    $pseudo = $_POST['pseudo'];
    $pass = $_POST['mot_de_passe'];
    // $pass = password_hash($_POST['mot_de_passe'], PASSWORD_BCRYPT);

    $requete = $bdd->prepare("INSERT INTO utilisateurs VALUES (NULL, :pseudo, :email, :mot_de_passe, NULL, :photo_de_profil)");
    $requete->execute(
        array(
            "pseudo" => $pseudo,
            "email" => $email,
            "mot_de_passe" => $pass,
            "photo_de_profil" => 'compte.png'  // Par défaut, on met le nom du compte par défaut (ici 'compte.png') à la photo de profil. Il faudra changer cette valeur en fonction du nom de votre photo par défaut.
        )
    );

    header('Location:connexion.php');
    exit();
}

?>