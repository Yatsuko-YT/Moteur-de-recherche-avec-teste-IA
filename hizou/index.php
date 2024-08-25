<?php
 session_start();
?>
<?php
    // Connexion a la base de donnée et aux fichier
    include 'db.php';

    // include 'config/session/img-profile.php';
?>
<?php

$_SESSION["user"] = $_SESSION['pseudo'];

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />    
    <link rel="shorcut icon" href="images/hizou.png">
    <title>Weeble</title>
</head>
<body>
    <div id="contnet_name">
        <h1>Weeble</h1>
    </div>
    <div id="cmi">
        <i class="fa-solid fa-bars" id="im"></i>
    </div>
    <div id="contentconnexion">
        <?php if (isset($_SESSION['pseudo'])): ?>
            <?php if ($_SESSION['role'] == 'admin'): ?>
                <li class="code"><a class="connexion" href="admin_page.php" style="margin: 0 20px 0 0;">Admin Page</a></li>
            <?php endif; ?>
            <li class="code"><a class="connexion" href="logout.php">Déconnexion</a></li>
        <?php else: ?>
            <li class="code"><a class="connexion" href="connexion.php">Connexion</a></li>
        <?php endif; ?>
    </div>
    <div id="wrapper-modal">
        <div id="modal">
            <span id="close">X</span>
            <ul id="menu-wm">
                <div id="contenticonmulti1">
                    <li class="liiconmulti"><a href="http://" target="_blank"><i class="fa-solid fa-user" style="height: 100%;width: 100%;border-radius: 10px;font-size: 40px;color: black;position: relative;top: 14px;left: 19px;"></i></a></li>
                    <li class="liiconmulti"><a href="http://" target="_blank"><i class="fa-solid fa-gear" style="height: 100%;width: 100%;border-radius: 10px;font-size: 40px;color: black;position: relative;top: 14px;left: 19px;"></i></a></li>
                    <li class="liiconmulti"><a href="http://" target="_blank"><i class="fa-solid fa-shield-halved" style="height: 100%;width: 100%;border-radius: 10px;font-size: 40px;color: black;position: relative;top: 14px;left: 19px;"></i></a></li>
                </div>
                <div id="contenticonmulti2">
                    <li class="liiconmulti"><a href="Aurora/Aurora.html" target="_blank"><img style="height: 100%;width: 100%;border-radius: 10px;" src="images/aurora.png"></a></li>
                    <li class="liiconmulti"><a href="http://" target="_blank"></a></li>
                    <li class="liiconmulti"><a href="http://" target="_blank"></a></li>
                </div>
                <div id="contenticonmulti3">
                    <li class="liiconmulti"><a href="http://" target="_blank"></a></li>
                    <li class="liiconmulti"><a href="http://" target="_blank"></a></li>
                    <li class="liiconmulti"><a href="http://" target="_blank"></a></li>
                </div>
            </ul>
        </div>
    </div>
    <section id="search_bar">
        <div id="content_bar_search">
            <!-- Action du form -->
                <!-- search.php -->
                <!-- https://google.com/search -->
            <!-- <form action="search.php" method="get" target="_blank"> -->
            <form action="result.php" method="get" target="_blank">
                <input type="text"  name="query" placeholder="Surfer sur le web ...">
                <button type="sumbit" id="loupe">Q</button>
                <button type="reset" id="loupe">X</button>
                <!-- <span><i class="fa-solid fa-xmark" id="loupe"></span> -->
                <!-- <span><i class="fa-solid fa-magnifying-glass" id="loupe"></span> -->
            </form>
        </div>
        <main>
        <div id="results">
            <?php if (isset($_GET['query'])): ?>
                <?php include 'search.php'; ?>
            <?php endif; ?>
        </div>
    </main>
    </section>
    <section>
    <div id="contentcase">
        <div class="content-interieur">
            <a id="a1" href="https://www.hostinger.fr" target="_blank"></a>
            <a id="a2" href="https://copilot.microsoft.com" target="_blank"></a>
            <a id="a3" href="https://discord.com" target="_blank"></a>
            <a id="a4" href="https://open.spotify.com/intl-fr" target="_blank"></a>
        </div>
        <br>
        <div class="content-interieur">
            <a id="a5" href="https://odoo.com" target="_blank"></a>
            <a id="a6" href="https://www.opera.com/fr" target="_blank"></a>
            <a id="a7" href="" target="_blank"></a>
            <a id="a8" href="" target="_blank"></a>
        </div>
    </div>
    </section>
    <div id="bar_left">
        <div>
        <?php if (isset($_SESSION['pseudo'])): ?>
            <?php
            $profileImage = getProfileImage($pdo, $_SESSION['pseudo']);
            ?>
            <a href="conexion-compte.php" target="_blank" id="pp" style="background-image: url(<?php echo htmlspecialchars($profileImage); ?>);background-repeat: no-repeat;background-size: cover;border-radius: 100%;margin: 0 0 40px 0;"></a>
        <?php else: ?>
            <a href="connexion.php" target="" method="get" id="a"><i class="fa-solid fa-user" id="shild-2"></i></a>
        <?php endif; ?>
            <a href="Protection/shild.htmll:kcx" target="_blank"><i class="fa-solid fa-shield-halved" id="shild"></i></a>
            <a href="Awi/Awi.html" target="_blank"><img class="chieur-image" src="images/Awi.png"></a>
            <a href="https://www.instagram.com/" target="_blank"><img class="chieur-image" src="images/Instagram.webp"></a>
            <a href="https://www.facebook.com/" target="_blank"><img class="chieur-image" src="images/facebook.webp"></a>
            <a href="https://www.whatsapp.com/" target="_blank"><img class="chieur-image" src="images/logo_wat.jpeg"></a>
            <a href="" target="_blank"></a>
            <a href="" target="_blank"></a>
            <a href="" target="_blank"></a>
            <a href="" target="_blank"></a>
        </div>
    </div>
    <div id="modal-pop-up">
        <div id="modal-pop-upinter">
            <div id="pop-up-icon">
                <img src="images/boite-a-cookies.png">
            </div>
            <div id="pop-up-text">
                <h2>Accepter les cookies</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, iste ab. Reiciendis natus aut dolorem 
                   molestiae officiis, quam facere quasi est impedit neque, rerum voluptatibus voluptas officia? Odio
                   corporis, maxime nam sequi deleniti voluptate voluptatum ipsum!</p>
                <span>Attends lit le texte si dessus !</span>
            </div>
            <div id="reponse-pop-up">
                <button id="btn-pop-up-2">Personaliser</button>
                <button id="btn-pop-up-1">Accepter les cookies</button>
            </div>
        </div>
        <div id="cookie">
            <div id="content-choix">
                <h2>Choisissez vos cookies !</h2>
                <p>Attention ce choix sera définitif.</p>
            </div>
            <ul>
                <li><p></p><input type="checkbox" name="" id=""></li>
                <li><p></p><input type="checkbox" name="" id=""></li>
                <li><p></p><input type="checkbox" name="" id=""></li>
                <li><p></p><input type="checkbox" name="" id=""></li>
                <li><p></p><input type="checkbox" name="" id=""></li>
            </ul>
            <div id="reponse-pop-up">
                <button id="btn-pop-up-3">Retour</button>
                <button id="btn-pop-up-4">Confirmer votre séléction</button>
            </div>
        </div>
    </div>
</body>
<!-- <script src="https://feedyourback.com/tunnel.js" data-id='clz4fagnn002s4num1cv1qv58' différer ></script> -->
<script src="script.js"></script>
</html>