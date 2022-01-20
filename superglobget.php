<?php

echo "<p> Varible GET</p>";
echo "<br>";

var_dump($_GET);

if(!empty($_GET["articles"])){
    echo "<p>requête en base de données sur table articles</p> <br>";
    $data = ["article1", "article2","article3"];
}

if(!empty($_GET["categorie"])){
    echo "<p>requête en base de données sur table categorie </p><br>";
    $data = ["produit1", "produit2","produit3"];
}



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

<a href="http://localhost/superglobget.php?categorie=jean&tri=des&critere=prix">accéder la liste de produits</a>
<br>
<a href="http://localhost/superglobget.php?articles=php&auteur=Cyril">accéder la liste des articles</a>

<?php

var_dump ($data);

echo "<br>";
echo "<h2> POST</h2>";
echo "<br>";
echo "<p> POST est un tableau vide comme GET, pour le remplir il faut un formulaire avec un attribut name!  et mettre un méthod POST</p>";
echo "<br>";
echo "<p> Une fois le formulaire saisi, POST envoie les infos dans l'URL</p>";

?>

<form action="" method="POST">
    <input type="number" name="prix" placeholder="saisir un prix">
    <input type="text" name="description" placeholder="saisir une description">
    <br>
    <textarea name="commentaire" cols="30" rows="10" placeholder="saisir un commentaire"></textarea>
    <input type="submit">

</form>

<?php

var_dump($_POST); //ajoute le tableau
if(!empty($_POST["prix"]&&!empty($_POST["description"]&&!empty($_POST["commentaire"])))){
    //requete en BD ajouter les infos dans la table
    // envoyer une email de confirmation merci pour l'info
    echo "merci pour votre message <br>";
}else {
    //veuillez remplir tous les champs
}

?>

<h1>Variable session</h1>

<?php

// créer absolument un efocntion start

session_start();

var_dump($_SESSION);

echo "<br>";

echo "<p>Par Défaut, il faut la définir, on obtient un tab vide, elle stocke des infos de manière persistante au niveau de chaque internaute</p>";

$urlPageEnCours = $_SERVER['REQUEST_SCHEME']. "://". $_SERVER
['SERVER_NAME'] . dirname($_SERVER['REQUEST_URI']);
$urlPageEnCours=dirname($urlPageEnCours);

echo "<a href='$urlPageEnCours/paiment.php'>accéder à la page de paiement</a>";

$_SESSION["panier"] = [ 
     ["ref" => 5489, "nom" => "produit 1", "qte" =>3 , "prixUnitaire"=>10],
     ["ref" => 7469, "nom" => "produit 2", "qte" =>5 , "prixUnitaire"=>15],
     ["ref" => 2499, "nom" => "produit 3", "qte" =>7 , "prixUnitaire"=>1],
     ["ref" => 1489, "nom" => "produit 4", "qte" =>33 , "prixUnitaire"=>20],
];

echo "<br>";

echo "<p>Peu importe la page sur laquelle on se trouve on garde le panier en memoire, du coup aller sur le fichier créé qui represente une autre page web paiment.php</p>";
?>

<h1>Token de la session/h1>
    <p>Pour récupérer la clé, le token de la session</p>
    <p>Ouvrir la console / Réseau  / Tout / En-têtes / descendre et trouver Cookie PHPSESSID ou cliquer sur cookie</p>

    <h1>FILE</h1>
    <p>on a besoin d'un form avec un input de type file</p>
    <p>on peut parcouri pour choisir un fichier</p>

    <?php
var_dump($_FILES);
// image=> dans un dossier
// move_uploaded_file() php
// $_FILES["presentation"]['size'] taille du fihier
// $_FILES["presentation"]['type'] png  du fihier
// $_FILES["presentation"]['name'] nom du fihier

?>

<form action="" enctype="multipart/form-data" method="post">
    <input type="file" name="presentation">
    <input type="submit">

</form>

