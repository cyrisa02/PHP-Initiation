<?php

require ("helper.php");  //c'est come le link
require ("bdd.php");  
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?= renderNavBar() ?>
    <h2>Ce fichier est le deuxième , la structure du script est  bonne 
        
    </h2>
    <br>
    <h2>Nous avons donc créé des fichiers à part bdd.php et helper.php et accueil2.php</h2>
    <h2>Faire des boucles en php</h2>
    <p>Pour relier helper.php à ce fichier on a besoin de la focntion require</p>
    <p>require donne une erreur si le fichier n'existe pas</p>
    <p>include est pareil que require mais  rend l'erreur si le fichier n'existe pas et execute le programme</p>
    
    <div class="">
        <?php $users = getUsers() ?>
        <?php foreach($users as $user) :?>
            <h2><?= $user["nom"] ?></h2>
            <p>qui a un id : <?=$user["id"] ?></p>
        <?php endforeach ?>
    </div>

    <footer>
        <?= renderPiedPage() ?>
    </footer>
</body>
</html>