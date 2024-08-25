<?php

$dbh = new PDO('mysql:host=localhost;dbname=crud', "root", "root");

$requete = $dbh->prepare("SELECT * FROM `article`");
$requete->execute();

$articles = $requete->fetchAll(PDO::FETCH_ASSOC);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="wrapper">
        <div id="panel">
            <div id="panel_header">
                <p class="panel_nb">N°</p>
                <p class="panel_titre">Titre</p>
                <p class="panel_description">Description</p>
                <p class="panel_action">Actions</p>
            </div>
            <div id="panel_body">
                <?php foreach($articles as $art): ?>
                <div class="ligne_article">
                    <p class="panel_nb"><?= $art['id']; ?></p>
                    <p class="panel_titre"><?= $art['titre']; ?></p>
                    <p class="panel_description"><?= $art['description']; ?></p>
                    <div class="panel_action">

                        <a href="view.php?id=<?= $art['id']; ?>" class="btn_view"><i class="fa-regular fa-eye"></i></a>
                        
                        <a href="edit.php?id=<?= $art['id']; ?>" class="btn_edit"><i class="fa-solid fa-pencil"></i></a>
                        <a href="delete.php?id=<?= $art['id']; ?>" class="btn_delete"><i class="fa-solid fa-trash-can"></i></a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div id="ajout">
            <a id="btn_ajout" href="creation.php">Ajouter un article</a>
        </div>
    </div>
</body>
</html>