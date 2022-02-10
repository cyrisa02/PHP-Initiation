

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Liste des ventes annuelles</h1>
<p>Dommage c'est à l'envers!</p>
<ul>
<?php

$sales = [
  'janvier' => 64,
  'fevrier' => 45,
  'mars' => 32,
  'avril' => 45,
  'mai' => 35,
  'juin' => 47,
  'juillet' => 68,
  'aout' => 76,
  'septembre' => 43,
  'octobre' => 23,
  'novembre' => 83,
  'decembre' => 15,
];

$lastMonth=0;
$total=0;
foreach ($sales as $sale => $value) {
    echo '<li>'.$value.($lastMonthQuantity > $quantity ? '-' : '+').':'.$sale.'</li> <br>';
    $lastMonth=$value;
    $total +=$value;
    
}

?>
</ul>
<?php
    echo $total;
    ?>
</body>
</html>