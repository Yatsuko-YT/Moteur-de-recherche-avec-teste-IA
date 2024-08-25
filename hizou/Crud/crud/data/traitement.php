<?php

$titre = $_POST['titre'];
$description = $_POST['description'];

try {
    $dbh = new PDO('mysql:host=localhost;dbname=crud', "root", "root");

    $requete = $dbh->prepare("INSERT INTO `article`(`id`, `titre`, `description`) VALUES (NULL,'$titre','$description')");

    $requete->execute();

    header("refresh:5; url=../index.php");

} catch (PDOException $e) {

    echo $e; die;
    // tenter de réessayer la connexion après un certain délai, par exemple
}


?>