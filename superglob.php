<?php

echo "<h1>super variable</h1>";
echo "<br>";
$variable = 10; // varaible classique, on ne peut pas l'introduire dans une fonction

// donc on va la rendre global
// constante
define ("LARGEUR", 30);

function calculDistance(){
    global $varaible; // on la rend global pour pouvoir l'utiliser dans la focction
    echo $variable;
}
echo "<br>";
echo "<h1> variable superglobale</h1>";
echo "<br>";
echo "<p> les variables globales sont des tabelaux associatifs avec un eclé token et une valeur</p>";
echo "<br>";
echo "<h2> variable serveur</h2>";

var_dump($_SERVER);
echo "<br>";
echo "<p> renvoie un tab associatif avec clé et valeur</p>";
echo "<br>";
echo "<p> Server permet de savoir quel est le fichier php exécuté, le nom du domaine</p>";

var_dump($_SERVER['SCRIPT_FILENAME']);
echo "<br>";
var_dump($_SERVER['SERVER_NAME']);
echo "<br>";
var_dump($_SERVER['REQUEST_URI']);
echo "<br>";
echo "<p> avec un econcaténation</p>";
echo "<br>";
$urlPageEnCours = $_SERVER['REQUEST_SCHEME']. "://". $_SERVER
['SERVER_NAME'] . dirname($_SERVER['REQUEST_URI']);
$urlPageEnCours=dirname($urlPageEnCours);
var_dump($urlPageEnCours);
echo "<br>";
echo "<p> chemin absolu de l'image</p>";
echo "<br>";

echo "<a href='$urlPageEnCours/image.png'>ouvrir l'image</a>";

echo "<br>";
echo "<p> Varible GET</p>";
echo "<br>";

var_dump($_GET);
echo "<br>";
echo "<p> GET récupère la partie après l'URL</p>";
echo "<br>";
echo "<p> GET permet de rajouter des paramètres ?name=Cyril&age=47</p>";
echo "<br>";
echo "<p>  ?name=Cyril&age=47 : rajouter dans l'URL comme ceci http://localhost/superglob.php/?name=Cyril&age=47&token=5687&dt_arrivee=12122022</p>";
echo "<br>";
echo "<p>  ca crée un tableau</p>";
echo "<br>";
echo "<p>  très pratique pour passer des infos d'une page vers une autre</p>";


?>