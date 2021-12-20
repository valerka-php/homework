<?php

class Animal {
    public $legs , $color, $speed, $voice;
    protected $eyes = 2;

    /**
     * @param mixed $legs
     */
    public function setLegs($legs): void
    {
        $this->legs = $legs;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color): void
    {
        $this->color = $color;
    }

    /**
     * @param mixed $speed
     */
    public function setSpeed($speed): void
    {
        $this->speed = $speed;
    }

    /**
     * @param mixed $voice
     */
    public function setVoice($voice): void
    {
        $this->voice = $voice;
    }

    /**
     * @return mixed
     */
    public function getInfo()
    {
        return 'The animal has ' . $this->legs . ' legs ' . $this->eyes . ' eyes, him color ' . $this->color . ' and speed near ' . $this->speed . ' km/per hour,' . ' than it has voice ' . $this->voice;
    }

}

$dog = new Animal();
$dog->legs = 4;
$dog->color = 'black';
$dog->speed = 15;
$dog->voice = 'Gav-gav';
echo $dog->getInfo();


echo '<hr>';

class Mammal extends Animal{

    protected $blood = 'warm-blood';


    public function getInfo()
    {
        return "animal class mammal " . parent::getInfo()  . " [blood = " . $this->blood . ']';
    }

}
$animal = new Mammal();
$animal->legs = 2;
$animal->color = 'grey';
$animal->speed = 70;
echo $animal->getInfo();

echo '<hr>';
class Cat extends Mammal {

    public $species , $wool, $name;

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @param mixed $species
     */
    public function setSpecies($species): void
    {
        $this->species = $species;
    }

    /**
     * @param mixed $wool
     */
    public function setWool($wool): void
    {
        $this->wool = $wool;
    }

    /**
     * @return mixed
     */
    public function getInfo()
    {
        return "This is " . $this->name . " =^~^= " . parent::getInfo()  . " [species = " . $this->species . "\n" . " - wool = " . $this->wool . "]";
    }

}

$cat = new Cat();
$cat->name = 'Cat';
$cat->legs = 4;
$cat->color = 'grey';
$cat->speed = 0;
$cat->voice = 'mew-meow';
$cat->species = 'British';
$cat->wool = true;
echo $cat->getInfo();


