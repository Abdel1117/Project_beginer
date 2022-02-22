<?php

class Personnage{

    public $nom;
    public $vie;
    public $actif;
    public $exp;


    public function __construct(string $nom, int $vie,bool $actif,int $exp)
    {
        $this->nom = $nom;
        $this->vie = $vie;
        $this->actif = $actif;
        $this->exp = $exp;
    }


    public function attacker(){
        return $this->nom . " a une puissance de " ; 
    }

}

class Magicien extends Personnage{

    public $mana;

    public function __construct(string $nom, int $vie,bool $actif,int $exp, int $mana)
    {
        parent::__construct($nom,$vie,$actif,$exp,);
        $this->mana = $mana;
    }

    public function attacker(){
        return parent::attacker()  . ($this->exp * $this->mana);
    }
}


class Guerrier extends Personnage{

    public $force;

    public function __construct(string $nom, int $vie,bool $actif,int $exp, int $force)
    {
        parent::__construct($nom,$vie,$actif,$exp);
        $this->force = $force;
    }

    public function attacker(){
        return parent::attacker()  . ($this->exp * $this->force);
    }
}

$mage = new Magicien("Richard", 500 ,true , 50 , 150);
$guerrier = new Guerrier("Rachid" , 2000 , true , 100 , 150);



echo $mage->attacker();

?> 