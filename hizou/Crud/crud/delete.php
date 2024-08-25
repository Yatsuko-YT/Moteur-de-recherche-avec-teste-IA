<?php

$dbh = new PDO('mysql:host=localhost;dbname=crud', "root", "root");

$id = $_GET['id'];

$requete = $dbh->prepare("DELETE FROM `article` WHERE id=$id");
$requete->execute();

header("Location: index.php");

?>