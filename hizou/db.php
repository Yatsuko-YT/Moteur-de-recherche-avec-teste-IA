<?php
$host = 'localhost';
$dbname = 'hizou';
$username = 'root';
$password = 'root';

try {
    $bdd = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

// Fonction pour récupérer l'image de profil de l'utilisateur

// function getProfileImage($bdd, $username) {
//     $stmt = $bdd->prepare("SELECT photo_de_profil FROM utilisateurs WHERE pseudo = :username");
//     $stmt->execute(['username' => $username]);
//     $user = $stmt->fetch(PDO::FETCH_ASSOC);
//     return $user ? $user['photo_de_profil'] : 'compt.png';
// }
?>
