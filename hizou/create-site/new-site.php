<?php
session_start();
$user = $_SESSION['pseudo'];
include 'db.php';
include 'config/session/img-profile.php'
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="styles.css">
    <title>Crée un site</title>
</head>
<body>
    <section id="sec1">
        <nav>
            <h2>Ajouter un site</h2>
            <div>
            <?php if (isset($_SESSION['pseudo'])): ?>
                <a href="conexion-compte.php" target="_blank" class="user-avatar" style="background-image: url(<?php echo htmlspecialchars($profileImage); ?>);background-repeat: no-repeat;background-size: cover;border-radius: 100%;"></a>
            <?php else: ?>
                <a href="connexion.php" target="" method="get" id="a"><i class="fa-solid fa-user" id="shild-2"></i></a>
            <?php endif; ?>
                <a  href="conexion-compte.php" target="_blank" class="user-name"><?php echo htmlspecialchars($user); ?></a>
            </div>
        </nav>
    </section>
</body>
</html>