<?php

$animaux = ['Chien', 'chat', 'loutre', 'perroquet'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach($animaux as $anm){ ?>
        <h2><?= $anm; ?></h2>
    <?php } ?>
</body>
</html>