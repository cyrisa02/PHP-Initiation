<?php
//Que des fonctions qui commpuniquent avec un BD

function getUsers(){
    return [
        [
            "id"=>1,
            "nom" => "Alain",
            "isAdmin" => true
        ],
        [
            "id"=>2,
            "nom" => "Beatrice",
            "isAdmin" => true
        ],
    ];
}

?>