<?php

var_dump(glob("./*")); // donne moi tous les dossiers dans le fichier en cours


// pour un dossier image c'est très interssant de parcourir le fichier de cette manière

$imgs = glob("./img/*"); // dossier image dans un autre repertoire
foreach($imgs as $img) {
    echo "<img src=\"img\" alt=\"\ style=\"max-width=200px\">";
}

?>