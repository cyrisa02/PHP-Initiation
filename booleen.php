<?php

//boolean true ou false

$test1 = "true"; //string
$test2 = true ; // booleen var_dump()

//réaliser des comparaison avec un resultat booléen

$estMajeur = 18 > 12;

var_dump($estMajeur);

// == égale en valeur  === égale en type et en valeur (égalité stricte)
// !== strictement différent

$isOK = "bonjour" == "hello";  // false
var_dump($isOK);

$isOk2="bonjour" != "hello";// true
var_dump($isOk2);

$verif1 = 2 == 2;
var_dump($verif1);

$verif2 = "2" == 2; // la valeur est la même Mais string == int avec le transtypage donne true et pas false!

$verif3 = "2px" == 2;
var_dump($verif3); // false et c'est normal

$verif4 = "2" === 2; // false
var_dump($verif4); 

$somme = 2 + "4";
var_dump($somme); // étonnant c'est 6! transtypage

$somme2 = 12 + "20px";
var_dump($somme2); // donne 32!!!!

$somme2=@(12+ "20px"); // mieux écrit mais bizar

// site internet gmail => login et mot de passe, il faut que les deux soient ok en MEME Temps
$loginBdd = "alain";
$mdpBdd = "password";

$seConnecterABoiteMailGmail = "Alain" == $loginBdd && "password" == $mdpBdd;
//                        A majuscule false   && true

var_dump($seConnecterABoiteMailGmail); // false

// || c'est ou pipe, si la personne habite dans le 92 ou 93 => elle habite en région parisienne
$departement = 92;


$isParisien =  $departement === 92 || $departement === 93;

var_dump($isParisien);

// ! contraire  NOT 

$isAdmin = true;
var_dump(!$isAdmin);

$auteur ="Victor Hugo";
var_dump(!$auteur); // toujorus false, transtypage

$vide ="";
var_dump(!$vide); // transtypage c'est true!!!

$prix = 1234;
var_dump(!$prix); // false transtypage!!!


$gratuit = 0;
var_dump(!$gratuit); // true transtypage!!!

// condition

$age = 30;
if ($age >=18) {
    echo "je suis majeur<br>";

    }

$distance=200;

if($distance<=10){
    echo "vous êtes pas loin de chez vous!";
    }

elseif ($distance<=50){
    echo "vous êtes près du travail";
}
elseif ($distance<=150){
    echo "vous êtes près de la montagne";
}
else {
    echo " valeur incorrecte!";
}

// if ternaire

$poids = 50;
if ($poids < 100) {
    echo "je suis le cas numéro 1";
} else {
    echo "je suis le cas numéro 2";
}

// on peut l'écrire de la manière suivante

echo($poids < 100) ? "je suis le cas numéro 1" : "je suis le cas numéro 2";
var_dump(($poids < 100) ? "je suis le cas numéro 1" : "je suis le cas numéro 2");

// on vérifie qu'une SEULE valeur switch case

$formation = "PHP";

switch($formation) {
    case "javascript":
        echo "j'adore js";
        break;
    case "css":
        echo "je fais mon cv en ligne";
        break;
    case "PHP":
        echo "j'aime les langages back";
        break;
    default :
        echo "langage inconnu";

    }

// attention bien mettre la commande break sinon ce n'est pas bon, cela enchaine et c'est bof





