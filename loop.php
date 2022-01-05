<?php
// 3 instructions 1/créer une variable initialisation à 0 2/ $i<3 booléen comparaison  condition de sortie de la boucle 3/ incrémentation

for($i = 0; $i < 3; $i++){
    var_dump("$i<br>");
    echo "$i<br>";
}

for($i = 0; $i < 3; $i++){
       echo "$i<br>";
       
}

// for($i = 0; $i < 3; echo "$i<br>"; $i++){ } c'est un peu comme si on avait ça: 4 instructions

echo "<br>";

for($i = 0; $i < 20; $i+=3){
    echo "$i<br>";
}

// while 1 condition de sortie + 1 incrémentation à la fin / valeur de départ en dehors!

$j=2;

while($j<5){
    echo "$j<br>";
    $j +=2;
}

// pour les tableaux

$jours = ["lundi","mardi","mercredi"];

for($i=0; $i < count($jours);$i++){
    echo "$jours[$i]   ";
}

// alias foreach

foreach($jours as $jour){
    var_dump($jour);
}

//tableau associatif avec clé et valeur

$sommaire = [
    "partie1" => "introduction à php",
    "partie2" => "les variables primitives",
    "partie3" => "conclusion"
];

// for($i=0; $i<count ($sommaire); $i++){
//     echo "$sommaire[$i]";
// }  ERREUR, il n'y a pas de clé

foreach($sommaire as $texte){ //valeur uniquement
    var_dump($texte);
}

foreach($sommaire as $cle => $texte){ //valeur et clé
    var_dump($cle,$texte);
}

// pour mettre un econdition sur la clé on peut écrire de manière identique

foreach($sommaire as $cle => $texte){
    if($cle!= "partie1"){
        var_dump($sommaire[$cle]); // c'est le texte qui s'affiche  et pas clé, avec la condition tout sauf la partie 1
    }
}

$matières = ["js","php","html","css"];

?>

<ul>
    <?php foreach($matières as $m) : ?>
        <li><?=$m?></li>
    <?php endforeach ?>    
</ul>