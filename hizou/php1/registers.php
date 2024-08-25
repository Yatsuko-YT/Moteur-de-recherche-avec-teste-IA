<?php
include 'db.php';
?> 
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="p_connexion.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<?php
if(isset($_POST['ok'])){
    $email = $_POST['email'];
    $pseudo = $_POST['pseudo'];
    $mot_de_passe = $_POST['mot_de_passe'];

    $host = 'localhost';
    $dbname = 'hizou';
    $username = 'root';
    $password = 'root';

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

        $requete = $pdo->prepare("INSERT INTO `utilisateurs`(`id`, `pseudo`, `email`, `mot_de_passe`, `role`, `photo_de_profil`) VALUES (NULL,'$pseudo','$email', '$mot_de_passe', 'membre', 'compte.png')");

        $requete->execute();

        header("refresh:2; url=login.php");
        exit();
    

    } catch (PDOException $e) {
        // echo 'Connection failed: ' . $e->getMessage();
        echo $e; die;
    }
}
?>
<body>
    <div class="wrapper">
        <form method="post">
            <h1>Inscription</h1>
            <div class="input-box">
                <input type="email" placeholder="E-mail" name="email" required id="PP1">
                <i class='bx bx-envelope'></i>
            </div>
            <div class="input-box">
                <input type="text" placeholder="Prénom/Pseudo" name="pseudo" required id="PP2">
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Mot de passe" name="mot_de_passe" required id="PP3">
                <i class='bx bxs-lock-alt'></i>
            </div>
            <input type="submit" name="ok" class="btn" value="S'inscrire">
            <div class="register-link">
                <p><a href="login.php">J'ai déjà un compte</a></p>
            </div>
        </form>
    </div>
</body>
</html>