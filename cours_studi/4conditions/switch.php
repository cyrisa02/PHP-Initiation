<?php

switch ($boxeType) {
    case 'boxe anglaise':
        echo 'Poings';
        break;
    case 'savate BF':
    case 'kick-boxing américain':
        echo 'Pieds et poings';
        break;
    case 'kick-boxing japonais':
        echo 'Poings, pieds et genoux';
        break;
    default:
        echo 'Tout le haut du corps';
}


/*

Faire un tableau

<?php

$boxeType = 'boxe anglaise';
// Doit afficher "Poings"

$boxeType = 'savate BF';
// Doit afficher "Pieds et poings"

$boxeType = 'boxe khmère';
// Doit afficher "Tout le haut du corps"

$boxeType = 'kick-boxing américain';
// Doit afficher "Pieds et poings"

$boxeType = 'MMA';
// Doit afficher "Tout le haut du corps", car MMA n'est pas dans la liste

$boxeType = 'kick-boxing japonais';
// Doit afficher "Poings, pieds et genoux"


Si un type n'est pas dans la liste, on considère que l'on peut utiliser tout le haut du corps*/
