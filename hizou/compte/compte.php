<?php
session_start();
include 'db.php';
$user = $_SESSION['pseudo'];

if (!isset($_SESSION['pseudo'])) {
    header('Location: login.php');
    exit();
}
$user = $_SESSION['pseudo'];
$pseudo = $_SESSION['pseudo'];

// Traitement de la mise à jour du pseudo
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['nouveau_pseudo'])) {
    $nouveau_pseudo = $_POST['nouveau_pseudo'];

    // Mise à jour dans la base de données
    $stmt = $pdo->prepare('UPDATE utilisateurs SET pseudo = ? WHERE pseudo = ?');
    if ($stmt->execute([$nouveau_pseudo, $pseudo])) {
        // Mettre à jour la session
        $_SESSION['pseudo'] = $nouveau_pseudo;
        $pseudo = $nouveau_pseudo;
        $message = "Pseudo mis à jour avec succès";
    } else {
        $error = "Erreur lors de la mise à jour du pseudo";
    }
}

$stmt = $pdo->prepare('SELECT * FROM utilisateurs WHERE pseudo = ?');
$stmt->execute([$pseudo]);
$user = $stmt->fetch();

if (!$user) {
    echo 'Utilisateur non trouvé';
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Compte</title>
    <link rel="stylesheet" href="p_compte.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <nav id="content_name_page">
        <img src="../images/hizou.png" alt="">
        <h2>Mon Compte - Paramètre</h2>
    </nav>
    <section>
        <div id="content_reglage">
            <ul id="menu">
                <li id="myprofil" class="color-button selected"><a href="#"><i class='bx bx-user'></i> Mon Profil</a></li>
                <li id="pub" class="color-button"><a href="#"><i class='bx bx-home'></i> Pas de pub !</a></li>
                <li id="setting" class="color-button"><a href="#"><i class='bx bx-cog'></i> Paramètres</a></li>
                <!-- <li id="amis" class="color-button"><a href="#"><i class='bx bx-plus-circle'></i> Mes amis</a></li>
                <li id="message" class="color-button"><a href="#"><i class='bx bx-message-rounded'></i></i> Mes Messages</a></li> -->
                <li id="notif" class="color-button"><a href="#"><i class='bx bx-message-square-detail'></i> Notifications</a></li>
                <li id="deco" class="color-button"><a href="logout.php"><i class='bx bx-log-out'></i> Déconnexion</a></li>
            </ul>
        </div>
        <div id="wrapper1">
            <h1>Mon Compte</h1>
            <?php if (isset($message)): ?>
                <p><?php echo $message; ?></p>
            <?php endif; ?>
            <?php if (isset($error)): ?>
                <p><?php echo $error; ?></p>
            <?php endif; ?>
            <div id="profile-info">
                <div id="profile-photo">
                    <img src="<?php echo htmlspecialchars(getProfileImage($pdo, $pseudo)); ?>" alt="">
                </div>
                <div id="profile-details">
                    <form method="post">
                        <label for="nouveau_pseudo">Pseudo:</label>
                        <input type="text" name="nouveau_pseudo" value="<?php echo htmlspecialchars($user['pseudo']); ?>" required>
                        <!-- <button type="submit" id="btn">Mettre à jour le pseudo</button> -->
                    </form>
                    <p>Email: <?php echo htmlspecialchars($user['email']); ?></p>
                    <p>Mot de passe: --_--********</p>
                </div>
            </div>
        </div>
        <div id="wrapper2">
            <h2>Bloqueur de Pub</h2>
            <input type="checkbox" id="input2">
            <label for="input2" id="label2"></label>
            <p id="des2">Activer le bloqueur de Pub, pour ne plus avoir de pub sur la plateform.</p> 
        </div>
        <div id="wrapper3">
            <h2>Paramètre</h2>
            <div class="content-para"></div>
            <div class="content-para"></div>
            <div class="content-para"></div>
        </div>
        <div id="wrapper4">
            <h2>Notifications</h2>
            <nav id="menu_notif">
                <ul>
                    <li>Non lues</li>
                    <p> | </p>
                    <li>Indésirables</li>
                    <p> | </p>
                    <li>Corbeille</li>
                </ul>
            </nav>
            <div id="content_notif">
                <!-- Endroit massage -->
                <ul>
                    <li></li>
                </ul>
            </div>
        </div>
    </section>
</body>
<script src="script.js"></script>
</html>

