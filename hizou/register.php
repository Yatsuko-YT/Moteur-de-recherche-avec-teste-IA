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

    $requete = $bdd->prepare("INSERT INTO utilisateurs VALUES (NULL, :pseudo, :email, :mot_de_passe, :membre, :photo_de_profil)");
    $requete->execute(
        array(
            "pseudo" => $pseudo,
            "email" => $email,
            "mot_de_passe" => $pass,
            "membre" => 'membre',
            "photo_de_profil" => 'compte.png'  // Par défaut, on met le nom du compte par défaut (ici 'compte.png') à la photo de profil. Il faudra changer cette valeur en fonction du nom de votre photo par défaut.
        )
    );

    header('Location:connexion.php');
    exit();
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'inscription</title>
    <link rel="stylesheet" href="p_connexion.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="wrapper">
        <form method="post">
            <h1>Inscription</h1>
            <div class="input-box">
                <input type="email" placeholder="E-mail" name="email" required>
                <i class='bx bx-envelope'></i>
            </div>
            <div class="input-box">
                <input type="text" placeholder="Prénom/Pseudo" name="pseudo" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Mot de passe" name="mot_de_passe" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <button type="submit" class="btn" name="ok">S'inscrire</button>
            <div class="register-link">
                <p><a href="">J'ai déjà un compte</a></p>
            </div>
        </form>
    </div>
</body>
</html>