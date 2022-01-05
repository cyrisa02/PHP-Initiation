<?php

// empty() isset(), fonction native de php retourne un booléen
// empty vérifie l'existence de la variable et si la valeur n'est pas vide

$verif1 = empty($a);

var_dump($verif1); // true, vu que la variable n'a pas été créée avt elle n'existe pas!

$b =null;
$verif2 = empty($b);
var_dump($verif2); //true

// si variable stocke les valeurs suivantes null ou "" ou 0 ou []
// empty est à true

$teste = "coucou";

var_dump(empty($teste)); // false)

$tableau=[1];
var_dump(empty($tableau)); // false

// isset permet de vérifier uniquement si la variable existe, true elle existe

// tableau associatif

$formation = [
    "budget" => 100,
    "unite" => "euros",
    "description" => ""
];

var_dump(isset($formation["description"])); // true
var_dump(empty($formation["description"])); // true


var_dump(isset($formation["inconnue"])); // false
var_dump(empty($formation["incconue"])); // true



?>