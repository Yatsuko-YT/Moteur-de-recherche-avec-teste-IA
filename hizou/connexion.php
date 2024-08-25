<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $pseudo = $_POST['pseudo'];
    $mot_de_passe = $_POST['mot_de_passe'];

    $requete = $bdd->prepare("SELECT * FROM utilisateurs WHERE pseudo = '$pseudo' AND mot_de_passe = '$mot_de_passe'");
    $requete->execute([$pseudo]);
    $user = $requete->fetch();

    if ($user && password_verify($mot_de_passe, $user['mot_de_passe'])) {
        session_start();
        $_SESSION['pseudo'] = $user['pseudo'];
        $_SESSION['role'] = $user['role'];
        header('Location:index.php');
        exit();
    } else {
        $error = 'Identifiants de connexion invalides';
    }
}
// if ($_SERVER['REQUEST_METHOD'] == 'POST'){
//     $email = $_POST['email'];
//     $pass = $_POST['mot_de_passe'];
// }
// if($email != "" && $pass != ""){

//     $requete = $bdd->query("SELECT * FROM utilisateurs WHERE email = '$email' AND mot_de_passe = '$pass'");
//     $rep = $requete->fetchAll();
//     if($rep['id'] != false){
//         $_SESSION['email'] = $user['email'];
//         $_SESSION['role'] = $user['role'];
//         echo "YES";
//         header('Location:index.php');
//     } else {
//         $error = 'Identifiants de connexion invalides';
//     }
// }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de connexion</title>
    <link rel="stylesheet" href="p_connexion.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="wrapper">
        <form method="POST">
            <h1>Se connecter</h1>
            <?php if (isset($error)): ?>
                <p><?php echo $error; ?></p>
            <?php endif; ?>
            <div class="input-box">
                <label for="pseudo"></label>
                <input type="text" placeholder="Pseudo" name="pseudo" id="pseudo" autocomplete="on" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <label for="mot_de_passe"></label>
                <input type="password" placeholder="Mot de passe" name="mot_de_passe" id="mot_de_passe" autocomplete="on" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <div class="remember-forgot">
                <a href="#">Mot de passe oublié</a>
            </div>
            <button type="submit" class="btn">Se connecter</button>
            <div class="register-link">
                <p><a href="register.php">Je n'ai pas de compte ?</a></p>
            </div>
        </form>
    </div>
    <footer>
        <!-- <script src="connexion.js"></script> -->
    </footer>
</body>
</html>