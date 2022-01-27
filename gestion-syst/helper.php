<?php
// générer du HTML

// fonction helper  qui génére une partie de la page html
function renderNavBar (){
    return "
    <nav>
        <a href=\"index.php\">Accueil</a>
        <a href=\"contact.php\">Nous contacter</a>
    </nav>
    ";
        
}

function renderPiedPage(){
    require "const.php"; // on appelle la focntion 
    return $DOMAIN;
}
?>