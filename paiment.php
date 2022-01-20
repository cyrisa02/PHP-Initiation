<?php
session_start();

//unset($_SESSION["panier"]); //supprime une propriété

if(!empty($_SESSION["panier"])){
    echo 'paiement <br>';
    var_dump($_SESSION["panier"]);

}
else {
    echo 'veuillez ajouter un produit dans votre panier<br>';

}
?>
