<?php
// avant un require ou un include on peut vérifier si le fichier existe
$fichier = "const0000.php";
$verif= file_exists("const.php");// renvoie un booléen
var_dump($verif);

if (file_exists($fichier)){
    require $fichier ;
}else {
    echo "attention veuillez créer le fichier $fichier"; //parce que ce fichier const0000 n'existe pas, on gére l'erreur
}



?>
