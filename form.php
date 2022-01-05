<?php
    var_dump($_POST); // super globale de PHP => créée automatiquement par php

    // tant que j'appuie pas sur submit le tableau est vide, ensuite mon tableau se remplit du nom et de l'age
    // on veut vérifier que le tableau n'est pas vide

    if(!empty($_POST)){
        if(empty($_POST["nom"]) || empty($_POST["age"])){
            echo "veuillez remplir les deux champs";
        }else{
            echo "merci pour votre message!";
        }
    }

    ?>

<form action="" method="POST">
    <input type="text" name="nom" placeholder="Nom">
    <input type="text" name="age" placeholder="Age">
    <input type="submit">
</form>
