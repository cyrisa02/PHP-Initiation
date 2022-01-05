<?php

$chiffre1 = 10;
$chiffre2 = 20; //int

// 4 opé de base

$addition = $chiffre1+$chiffre2;
$soustraction = $chiffre1-$chiffre2;
$multiplication = $chiffre1*$chiffre2;
$division=$chiffre2/$chiffre1;

var_dump($addition);

var_dump($soustraction,$multiplication,$division);

$puissance = 2 ** 4;

var_dump($puissance);

//modulo

$resteEntier = 10 % 5;

var_dump($resteEntier);

$resteEntier2 = 10%3;

var_dump($resteEntier2);


// est ce qu'un nbre est un multiple d'un autre

// est ce que 30 est un multiple de 2???
// est ce que le reste entier == 0

$resteEntier3 = 30 % 2;

var_dump($resteEntier3 == 0); // on attend un bouleen true

// opérateur unaires => variable opérateur

$operation = 12 +10;

// opérateur chiffre

$total = 100;
//prendre $total incrementer de 10

$total = $total +10;

var_dump ($total);

// utilisation opé unaire pareil -> incrementer
$total += 10;

var_dump ($total);

$total -= 30;

var_dump ($total);

// TVA
$prix= 15.5;

$prix *= 1.2;


var_dump ($prix);

// opérateur ++ incremente de 1 pour les boucles

$distance = 10;
$a=$distance++; // post incrementation ligne  +1  10 11
var_dump($a,$distance);

$hauteur=12;
$c=++$hauteur;
var_dump($c,$hauteur); // 13 13 pre incrementation


?>
