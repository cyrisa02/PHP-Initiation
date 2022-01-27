<?php
// plusieurs fonctions => traitements

//fonction récupére dans une BD les infos

function getUsers(){
    return [
        [
            "id"=>1,
            "nom" => "Alain",
            "isAdmin" => true
        ],
        [
            "id"=>2,
            "nom" => "Beatrice",
            "isAdmin" => true
        ],
    ];
}


// fonction helper  qui génére une partie de la page html
function renderNavBar (){
    return "
    <nav>
        <a href=\"index.php\">Accueil</a>
        <a href=\"contact.php\">Nous contacter</a>
    </nav>
    ";
        
}
// Maintenant du HTML qui utilise nos deux fonctions
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
    <h2>Ce fichier est le premier, la structure du script n'est pas bonne 
        car elle présente trois façon de gérer les fonctions avec PHP et Html
    </h2>
    <br>
    <h2>Nous allons donc créer des fichiers à part bdd.php et helper.php et accueil2.php</h2>
    <?= renderNavBar() ?>
    <div class="">
        <?php $users = getUsers() ?>
        <?php foreach($users as $user) :?>
            <h2><?= $user["nom"] ?></h2>
            <p>qui a un id : <?=$user["id"] ?></p>
        <?php endforeach ?>
    </div>
</body>
</html>