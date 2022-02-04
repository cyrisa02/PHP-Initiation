<?php

class A {
    public $url= "http://google.fr";
    public function a(){}
}

class B{
    public $url= "http://google.fr";
    public function b(){}
}


// on peut utiliser l'héritage pour éviter de répeter google en + c'est plus facile pour google par yahoo dans le futu

class CParent {
    public $url ="http://yahoo.fr";
}

class AEnfant extends CParent {
    public function a () {}
}

class BEnfant extends CParent {
    public function b () {}
}

$a=new AEnfant();
var_dump($a->url);
$a->a();

$b=new BEnfant();
var_dump($b->url);
$b->b();
// NEW Static
echo "<br>"; 
class Librairie{
    static public $prix = 123;

    static public function addition(){}
    
    static public function soustraction(){}


    static public function faireCalcul(){
        self::addition(); 
        
        var_dump(self::$prix);   
    }
    
}
// self remplace $this

// méthode static : on peut utiliser sans avoir besoin d'instancier la class hors de la class

/*$1=new Librairie
$1->addition();*/

Librairie::addition();
var_dump(Librairie::$prix);

?>