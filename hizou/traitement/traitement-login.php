<?php

    include 'db.php';

    // if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //     $email = $_POST['e-mail'];
    //     $mot_de_passe = $_POST['mot_de_passe'];

    //     $stmt = $pdo->prepare('SELECT * FROM utilisateurs WHERE pseudo = ?');
    //     $stmt->execute([$pseudo]);
    //     $user = $stmt->fetch();

    //     if ($user && password_verify($mot_de_passe, $user['mot_de_passe'])) {
    //         session_start();
    //         $_SESSION['pseudo'] = $user['pseudo'];
    //         $_SESSION['role'] = $user['role'];
    //         // setcookie(){"username", $pseudo, time() + 3600};
    //         header('refresh:2; url=index.php');
    //         exit();
    //     } else {
    //         $error = 'Identifiants de connexion invalides';
    //     }
    // }

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $email = $_POST['email'];
        $pass = $_POST['mot_de_passe'];
    }
    if($email != "" && $pass != ""){

        $requete = $bdd->query("SELECT * FROM utilisateurs WHERE email = '$email' AND mot_de_passe = '$pass'");
        $rep = $requete->fetchAll();
        if($rep['id'] != false){
            $_SESSION['email'] = $user['email'];
            $_SESSION['role'] = $user['role'];
            echo "YES";
            header('Location:index.php');
        } else {
            $error = 'Identifiants de connexion invalides';
        }
    }
?>