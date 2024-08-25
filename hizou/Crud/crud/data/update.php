<?php

$dbh = new PDO('mysql:host=localhost;dbname=crud', "root", "root");

$id = $_GET['id'];
$titre = $_POST['titre'];
$description = $_POST['description'];

$requete = $dbh->prepare("UPDATE `article` SET `titre`='$titre',`description`='$description' WHERE id=$id");
$requete->execute();

?>