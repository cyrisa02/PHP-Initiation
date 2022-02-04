<?php

class EtudiantSuperieur {  // convention de nommage des class PascalCase

}
// une classe est une super variable qui peut contenir des variables et des fonctions
// pas possible d'utiliser une class directement dans le code

// à partir d'une class on peut créer un objet = instance de classe

// on crée une variable

$etudiant= new EtudiantSuperieur();
// $etudiant est un objet qu'on peut utiliser cf $

// ds la class on définit ce que va faire l'objet
// la class est le moule à gateau et la class produit l'objet le gateau

// variable = propriété de la class  mettre le mot clé public
// fonction= méthodes de la class
// l'ensemble des deux sont les membres de la class

class Arbre {
    public $taille = 200 ;
    public $unite = "cm";
    public $nom = "chêne";
}

// pour accéder une propriété stockée dans une class => on doit générer un objet

$arbre = new Arbre ();

// utilier la propriété 

var_dump($arbre->taille); // affiche 200

//écrire dans une page web

echo"<br>";

$phrase = "j'ai un arbre de ".$arbre->taille. " " . $arbre->unite."dans mon jardin";

var_dump($phrase);
echo"<br>";
// fonction de base
function calcul ($a, $b) {
    return $a + $b;
}

class Vehicule {
    public function faireBruit(){ // fonction dans une class mettre public= méthode
        var_dump("VROUM");
    }
    public function getProprietaire(){
        return "Enzo";
    }

    public function getAnneeAchat(){
        return 2011;
    }
}

    $v =new Vehicule();
    $v->faireBruit(); //seul moyen pour appeler une méthode qui est à l'intérieur d'une class
    echo "<br>";
    var_dump($v->getProprietaire());
    echo "<br>";
    var_dump($v->getAnneeAchat());

// NEW: class qui contient à la fois des propriétés et des méthodes

class Formation {
    public $nom ="développeur web";
    public $organisme = "Studi";
    public $duree = 12;
    public $unite = "mois";

    public function getDescription() {
        var_dump($this->duree);  //$this est équivalent  à $f = new Formation();

    }

    public function getDescriptionComplete(){
        return "je suis une formation" .$this->duree." " .$this->unite;
    }

    public function useFonction(){
        var_dump($this->getDescriptionComplete()."auprès de ". $this->organisme);
    }

}

// hors de ma class
$f = new Formation(); //OBLIGATOIRE on crée l'objet
var_dump($f->duree);
echo "<br>";

var_dump ($f->getDescriptionComplete());
echo "<br>";

$f->useFonction() ; //pas besoin de var dump car il est déjà dans la fonction, na pas oublier les parenthèses

//NEW Encapsulation


class C {

    private $prop1=20;
    private function method1(){}
}
// non-modifiable, on peut l'utiliser que dans la class, on peut pas faire //de var dump à l'extérieur on otient une erreur
class B {
    private $prop1 = 20;
    private function method1(){
        
    } //pour récuperer une private j'ai besoin d'un assesseur (getter) getProp1
  
    public function getProp1(){
        return $this->prop1;
    }
//setter
    public function setProp1($val){
        if(gettype($val)==="integer" && $val >= 20){
            $this->prop1=$val;
        }
    }
}

$b = new B();

echo "<br>";

var_dump($b->getProp1()); // pour pouvoir acceder grâce à l'assesseur à la variable





?>