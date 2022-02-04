<?php
//  créer une variable $

$variable= 10;

// pour 'lutiliser
var_dump($variable);

// variable tableau

$list = ["toto", "tata"];

function premier () {

}

// Execution de la fonction ,ne pas oublier ()

premier();


//fonction calacul

echo "<br>";
function calcul (){
    $a=10;
    $b=12;
    $c=15;
    var_dump($a+$b+$c);
}

calcul ();  // appel de la fonction pour éxécution

function boucle (){
    $tableau = ["lundi", "mardi","mercredi"];
    foreach($tableau as $jour){
        if ($jour !="lundi"){
            var_dump("attention");            
        }
        else {
            var_dump($jour);
        }
    }
}
echo "<br>";
boucle();

// variable à l'extérieur, portée globale, n'a pas accès à la fonction
$a = 10 ;

function test(){
    var_dump($a);

}


echo "<br>";
test();

function test2(){
    global $a;
    var_dump($a);
    $a="toto a modifié la variable a";
    var_dump($a);

}

echo "<br>";
test2();

//

function test3(){
    $b=33;  // portée locale
    var_dump($b);
    return $b; //récupère les infos sotckées dans la fonction pour les utiliser à l'extérieur de la fonction
}
echo "<br>";
test3();
echo "<br>";

$resultat = test3(); // grâce au return dans la fonction

var_dump($resultat);
echo "<br>";

// Paramètre

function calcul1 (){
    $a=1;
    $b=2;
    var_dump($a+$b);

}

echo "<br>";
calcul1();

echo "<br>";
//$a et $b sont les paramètree au moment de la création de la fonction
function calcul3($a,$b){
    var_dump($a+$b);
}

calcul3(5,6);
echo "<br>";

calcul3(150,52);//argument: ce sont les valeurs au moment de l'éxécution
echo "<br>";

//typage pas obligatoire mais ça clarifie le code, très conseillé!!!! PHP 7

function calcul5(int $a, array $b, bool $status) : void {

}

calcul5 (5, [], false);
echo "<br>";

//Arguments nommés PHP 8, rappel le nom du paramètre pdt l'éxécution

function triangle ($largeur, $hauteur, $couleur, $profondeur, $prix) {
    var_dump($profondeur);
    var_dump($prix);
}

triangle(largeur:10, hauteur:20, couleur:"#000", prix:40, profondeur:20);
//on peut changer l'ordre!

?>