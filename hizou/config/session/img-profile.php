<?php
include '/db/db.php';
?> 
<?php
// Fonction pour récupérer l'image de profil de l'utilisateur
function getProfileImage($pdo, $username) {
    $stmt = $pdo->prepare("SELECT photo_de_profil FROM utilisateurs WHERE pseudo = :username");
    $stmt->execute(['username' => $username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    return $user ? $user['photo_de_profil'] : 'default_profile.png';
}
$profileImage = getProfileImage($pdo, $_SESSION['pseudo']);
?>