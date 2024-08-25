<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de connexion</title>
    <link rel="stylesheet" href="p_connexion.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
    <?php
        $host = 'localhost';
        $dbname = 'hizou';
        $username = 'root';
        $password = 'root';

        try {
            $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $pseudo = $_POST['pseudo'];
            $mot_de_passe = $_POST['mot_de_passe'];

            if($pseudo != "" && $mot_de_passe != ""){
                $req = $pdo->query("SELECT * FROM utilisateurs WHERE pseudo = '$pseudo' AND mot_de_passe = '$mot_de_passe'");
                $rep = $rep->fetch();
                if($rep['id'] != false){
                    header('Location: index.php');
                    exit();
                }else{
                    $error = "Identifiants incorrects";
                }
            }
        }
    ?>
<body>
    <div class="wrapper">
        <form method="POST">
            <h1>Se connecter</h1>
            <?php if (isset($error)): ?>
                <p><?php echo $error; ?></p>
            <?php endif; ?>
            <div class="input-box">
                <input type="text" placeholder="Pseudo" name="pseudo" required id="PP2">
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Mot de passe" name="mot_de_passe" required id="PP3">
                <i class='bx bxs-lock-alt'></i>
            </div>
            <div class="remember-forgot">
                <label>
                    <input type="checkbox">
                    Souviens-toi de moi
                </label>
                <a href="#">Mot de passe oublié</a>
            </div>
            <button type="submit" class="btn">Se connecter</button>
            <div class="register-link">
                <p><a href="registers.php">Je n'ai pas de compte ?</a></p>
            </div>
        </form>
    </div>
    <footer>
        <!-- <script src="connexion.js"></script> -->
    </footer>
</body>
</html>
