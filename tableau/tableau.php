<?php
//ancienne méthode pour créer des tableaux
$tableau = array(1,2,3,4);

// nouvelle manière pour tableaux indéxé et associatif
$tableau2 = [1,2,3,4];


//echo $tableau2; // erreur

print_r($tableau2); //l'index commence à 0 

echo "<br>";

var_dump($tableau2);

$saisons = ["été", "automne", "hiver", "printemps"];

// toutes les valeurs du tab print ou vardump 
// une seule et unique valeur echo

echo "<br>";

// c'est un tab indéxé à 4 valeurs string

var_dump($saisons);

echo "<br>";

$phrase = "je vais aller en vacance cet " . $saisons[0] ;

echo $phrase;
echo "<br>";

// le dernier élément de mon tableau

echo $saisons[3];
echo "<br>";

echo $saisons[ 4 - 1 ]."<br>" ;

echo count($saisons)."<br>"; // le nombre d'élément dans le tab

echo $saisons[count($saisons) - 1]."<br>"."<br>"; // IMPORTANT affiche la dernière valeur du tableau

// tableau associatif

echo "tableau associatif"."<br>";

$tableau_indexe = ["lundi", "mardi", "mercredi"];

$tableau_associatif = [
    "premier"=> "lundi",
    "deuxième"=>"mardi",
    "dernier"=>"mercredi"    
];

var_dump($tableau_associatif);
echo "<br>";

// si je veux une valeur, ce n'est plus les index numériques 

echo "si je veux une valeur particulière"."<br>";

echo $tableau_associatif["dernier"]."<br>";


echo "tableau multimensionnel"."<br>";
echo "mixer tableau indexé avec des tableaux associatifs"."<br>";

$page = [
    "titre" => "Article numéro 1",
    "contenu"=> "lorem ipsum",
    "auteur" => [
        "prenom"=>"Victor",
        "nom"   =>"Hugo",        
    ],
    "categories"=>["PHP", "HTML", "CSS"],
    "sommaire" => [
        ["lorem ispum 1", "conclusion"],
        ["lorem ipsum 2", "conclusion 2"],
    ]

    ];

    var_dump($page);
    echo "<br>";
    echo "je veux récupérer le nom de l'auteur"."<br>";

    echo $page["auteur"]["nom"]."<br>";

    echo $page["categories"][2]."<br>";
    echo $page["categories"][count($page["categories"])-1]."<br>";
    echo $page["sommaire"][1][1]."<br>"."<br>";//conclusion2

    // A connaître par coeur

    //https://www.php.net/manual/fr/ref.array.php

    echo "Fonctions natives"."<br>";

    $stack = array("orange","banana");
    array_push($stack,"apple","raspberry");
    print_r($stack);

    echo "<br>";

    array_push($stack,"cherry", 1, false, [4,8]);
    print_r($stack);

    echo "<br>";

    echo "je veux mettre lundi et mardi en début de tableau"."<br>";

    array_unshift($stack,"lundi","mardi");
    print_r($stack);

    echo "<br>";

    echo "faire un pannier, et ajouter au panier"."<br>";
    $panier=[];

    array_push($panier, ["qte"=>1, "nom"=>"article1"]);
    
    array_push($panier, ["qte"=>10, "nom"=>"article25"]);
    
    array_push($panier, ["qte"=>2, "nom"=>"article99"]);
 

    var_dump($panier);

    echo "<hr>";

    echo "suppression d'un article du pannier"."<br>";

    // unset ou array_splice

    unset($panier[0]); 
    // suppression du panier dans sa totailté => unset($panier);

    var_dump($panier);

    echo "<hr>";

    array_splice($panier,1); // supprime le deuxième élément

    var_dump($panier);

    echo "<hr>";

    echo "supprimer le deuxième élément"."<br>";

    $fruits=["pomme","poire","abricot","fraise"];

    array_splice($fruits,1); // supprime à partir de 1!

    var_dump($fruits);

    echo "<br>";

    $fruits=["pomme","poire","abricot","fraise"];

    array_splice($fruits,1,1); //supprime l'index 1 poire

    var_dump($fruits);

    echo "<br>";

    $fruits=["pomme","poire","abricot","fraise"];

    array_splice($fruits,1,2); //supprime à partir de  l'index 1 et 2 éléments poire et abricot

    var_dump($fruits);


    echo "<hr>";
    echo "suppression du dernier élément";
    $arbres=["chêne", "sapin", "bouleau", "hêtre"];

    array_splice($arbres, count($arbres)-1);
    var_dump($arbres);
// ou on peut faire

array_pop($arbres);
var_dump($arbres);

echo "<hr>";
echo "je veus supprimer le premier élément";

array_shift($arbres);
var_dump($arbres);

echo "<hr>";

$budget =[10,20,100];
echo "on veut sommer tous les éléments du tableau on peut faire une boucle sinon array_sum"."<br>";

echo array_sum($budget) . "<br>";

echo "<hr>";

$courses=["pomme","poire","abricot","fraise"];

echo "je veux vérifier si j'ai des fraises, réponse 1 = true"."<br>";

$estQueFraiseEcrit = in_array("fraise",$courses);

echo $estQueFraiseEcrit ."<br>";

$estQueTomateEcrit  = in_array("tomate",$courses);

echo $estQueTomateEcrit . "<br>";
echo "il ne retourne rien! sinon prendre var dump";

var_dump($estQueTomateEcrit);

echo "<hr>";

$tab = ["fille","garçon","parent", "oncle"];
echo "je veux résupérer le premier élément du tableau"."<br>";

echo current($tab)."<br>";

echo "je veux le dernier élément"."<br>";

echo end ($tab)."<br>";
echo "<hr>";


$liste = [
    "toto" => "Alain",
    "tata" => "Doe",
    "adresse" => "75 rue du Paradis"
];

echo "je veux savoir si j'ai une clé téléphone et tata"."<br>";

var_dump(array_key_exists("telephone", $liste));
var_dump(array_key_exists("tata", $liste));

echo "<hr>";

echo "je veux insérer une valeur au milieu de mon tableau"."<br>";

$t = [1,2];
array_splice($t,1,0,"a");
var_dump($t);










