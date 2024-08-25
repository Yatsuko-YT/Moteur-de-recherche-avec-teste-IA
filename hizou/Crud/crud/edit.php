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
    <h1>Modification de l'article <?= $articles['titre']; ?></h1>

    <form action="data/update.php?id=<?= $articles['id']; ?>" method="post">
        <div>
            <label for="titre">Titre</label>
            <input type="text" name="titre" value="<?= $articles['titre']; ?>">
        </div>
        <div>
            <label for="description">Description</label>
            <input type="text" name="description" value="<?= $articles['description']; ?>">
        </div>
        <div>
            <input type="submit" value="Envoyer">
        </div>
    </form>
</body>

</html>