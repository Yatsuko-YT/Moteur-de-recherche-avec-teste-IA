<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $pseudo = $_POST['pseudo'];
    $mot_de_passe = $_POST['mot_de_passe'];

    $stmt = $pdo->prepare('SELECT * FROM utilisateurs WHERE pseudo = ?');
    $stmt->execute([$pseudo]);
    $user = $stmt->fetch();

    if ($user && password_verify($mot_de_passe, $user['mot_de_passe'])) {
        session_start();
        $_SESSION['pseudo'] = $user['pseudo'];
        $_SESSION['role'] = $user['role'];
        header('refresh:2; url=compte/compte.php');
        exit();
    } else {
        $error = 'Identifiants de connexion invalides';
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon identité</title>
    <link rel="stylesheet" href="p_connexion.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="wrapper">
        <form method="post">
            <h1>Votre identité</h1>
            <?php if (isset($error)): ?>
                <p><?php echo $error; ?></p>
            <?php endif; ?>
            <div class="input-box">
                <input type="text" placeholder="Pseudo" name="pseudo" required id="PP2" onchange="teste2()">
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Mot de passe" name="mot_de_passe" required id="PP3" onchange="teste3()">
                <i class='bx bxs-lock-alt'></i>
            </div>
            <!-- <div class="remember-forgot">
                <a href="#">Mot de passe oublié</a>
            </div> -->
            <button type="submit" class="btn">Se connecter</button>
            <div id="content-ex">
                <p id="texte">Cette page de connexion permet de confirmer votre identité.</p>
                <span><a id="texte" href="" target="_blank">En savoir plus.</a></span>
            </div>
        </form>
    </div>
    <footer>
        <script src="connexionjs.js"></script>
    </footer>
</body>
</html>