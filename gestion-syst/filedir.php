<?php
// but: récupérer le contenu d'un fichier dans un dossier assets

// le dossier assets existe? si non il faut le créer

if (!file_exists("assets")){
    mkdir("assets"); //créer le dossier
}

if(!file_exists("assets/test.php")){
    $resultat = file_get_contents("bdd.php");
    file_put_contents("assets/test.php", "je viens de crer son conetnu");// créer des fichiers
   // file_put_contents("assets/test.php", $resultat); // la c'est le contenu d'un fichier
   // str_replace("PHP, "Javascript", $resultat) ; je cherche PHP javascript dans le $resultat
}

require "assets/test.php";

$file="assets/toto.php";

if(file_exists($file)){
    unlink($file);
    echo "le fichier $file vient d'être supprimé";
}else {
    echo "le fichier $file n'existe pas"; // suppression de dossier (rmdir à la place de unlink) ou de fichier

}

?>