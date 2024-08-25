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

    echo "Hello world you have been assigned a photo with the following options";
    // header('Location:login-registers.php');
    // exit();
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-l-r.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Connexion et Inscription Moderne avec Visibilité du Mot de Passe</title>
</head>
<body>
<div class="container" id="container">
    <div class="form-container sign-up-container">
        <form id="signupForm" method="post">
            <h1>Créer un compte</h1>
            <div class="social-container">
                <a href="#"><i class="fa-brands fa-github"></i></a>
                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
            </div>
            <p>Ou pouvez vous nous retrouver.</p>
            <input type="text" placeholder="Nom" aria-label="Entrez votre nom" name="pseudo"  id="signupName" required autocomplete="on"/>
            <input type="email" placeholder="Email" aria-label="Entrez votre email" name="email" id="signupEmail" required autocomplete="on"/>
            <div class="input-group">
                <input type="password" placeholder="Mot de passe" name="mot_de_passe" aria-label="Entrez votre mot de passe" id="signupPassword" required autocomplete="current-password"/>
                <i class="far fa-eye password-toggle" id="signupPasswordToggle"></i>
            </div>
            <div class="password-strength">
                <div class="password-strength-bar" id="passwordStrengthBar"></div>
            </div>
            <button type="submit" name="ok">S'inscrire</button>
            <div id="signupMessage"></div>
        </form>
    </div>
    <div class="form-container sign-in-container">
        <form id="signinForm">
            <h1>Se connecter</h1>
            <div class="social-container">
                <a href="#" aria-label=""><i class="fa-brands fa-github"></i></a>
                <a href="#" aria-label=""><i class="fa-brands fa-youtube"></i></a>
                <a href="#" aria-label=""><i class="fa-brands fa-instagram"></i></a>
            </div>
            <p>Ou pouvez vous nous retrouver.</p>
            <!-- <input type="email" placeholder="Email" aria-label="Entrez votre email" id="signinEmail" required /> -->
            <input type="text" placeholder="Nom" aria-label="Entrez votre nom" name="pseudo-c" id="signinEmail" required autocomplete="on"/>
            <div class="input-group">
                <input type="password" placeholder="Mot de passe" name="mot_de_passe-c" autocomplete="current-password" aria-label="Entrez votre mot de passe" id="signinPassword" required />
                <i class="far fa-eye password-toggle" id="signinPasswordToggle"></i>
            </div>
            <a href="#" id="forgotPassword" style="color: var(--primary-color); text-decoration: none; margin: 15px 0;">Mot de passe oublié ?</a>
            <button type="submit" name="ok-c">Se connecter</button>
            <div id="signinMessage"></div>
        </form>
    </div>
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-left">
                <h1>Bon retour!</h1>
                <p>Pour rester connecté avec nous, veuillez vous connecter avec vos informations personnelles</p>
                <button class="ghost" id="signIn">Se connecter</button>
            </div>
            <div class="overlay-panel overlay-right">
                <h1>Bonjour!</h1>
                <p>Entrez vos détails personnels et commencez votre voyage avec nous</p>
                <button class="ghost" id="signUp">S'inscrire</button>
            </div>
        </div>
    </div>
</div>
<script src="connexion-registration.js"></script>
</body>
</html>