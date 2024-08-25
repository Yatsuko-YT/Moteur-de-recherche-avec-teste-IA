<?php

$dbh = new PDO('mysql:host=localhost;dbname=crud', "root", "root");

$id = $_GET['id'];

$requete = $dbh->prepare("SELECT * FROM `article` WHERE id=$id");
$requete->execute();

$articles = $requete->fetch();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?= $articles['titre']; ?></h1>

    <h2><?= $articles['description']; ?></h2>
</body>
</html>