<?php

$array = ['mandarine', 'fraise', 'poire', 'pamplemousse'];

// Nous allons concaténer les valeurs de notre tableau en les séparant par une virgule
$arrayToString = implode(',', $array);


// Affichera "mandarine,fraise,poire,pamplemousseArray"
echo $arrayToString;

echo "<br>";



// On transforme une chaîne en tableau en considérant que les entrées seront les éléments séparés par une virgule
$stringToArray = explode(',', $arrayToString);

echo $stringToArray;

echo "<br>";

var_dump ($stringToArray);

echo "<br>";

print_r($stringToArray);
/* Affichera 
Array
(
    [0] => mandarine
    [1] => fraise
    [2] => poire
    [3] => pamplemousse
)
*/

