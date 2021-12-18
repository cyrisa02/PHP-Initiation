<?php

$prenom = "Victor";
$nom = "Hugo";

//concatener

$auteurFr=$prenom." ".$nom; // différent de js!!!!

var_dump($auteurFr);

// Victor Hugo a écrit les Misérables

$phrase1 = $auteurFr." a écrit les Misérables";

var_dump($phrase1);

$phrase2 = $prenom . " " . $nom . " a écrit à sa mère";

var_dump($phrase2);

$phrase3 = "$prenom $nom a écrit à son père";
var_dump($phrase3); // uniqnt avec les guillemets pas avec les apostrophes!

//saut de lignes

$articleHtml = "
    <h2>je suis un article</h2>
    <p>lorem ipsum $prenom $nom</p>
    ";

var_dump($articleHtml);


$listeHtml = '
<ul>
    <li>Pomme</li>
    <li>Poire</li>
    <li>Cerise</li>
</ul>
';

var_dump($listeHtml);


// constante nommée URL

define ("URL", "http://google.fr");

var_dump(URL);

$action = "je vais sur " . URL;
var_dump($action);

//opé unaire concatenation

$page = "<h1>titre page</h1>\n";
$page = $page . "<p>lorem ipsum</p>\n"; // \n permet le saut de ligne
$page .= "<p>lorem ipsum</p>";

var_dump($page);

// Tableau

$options = [
    "largeur" => 20,
    "hauteur" => 10,
    "unité" => "px"
];

$info = "la fenêtre à une largeur de " . $options["largeur"] . $options["unité"];
var_dump($info);

$info2 = "la fenêtre a une largeur de {$options["largeur"]} {$options["unité"]}";

var_dump($info2);



?>