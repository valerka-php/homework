<?php

class Cat
{
    protected $info = [];
    public $name = 'Helga';


    public function __set($key, $value)
    {
        $this->info[$key] = $value;
    }

    public function __get($key)
    {
        return $this->info[$key];
    }

    public function getInfo()
    {
        foreach ($this->info as $item => $value){
            echo $item . '=>' . $value;
        }
    }

//    public function __unset($name)
//    {
//        unset($this->name);
//    }

    public function __construct()
    {
       echo 'This is cat';
    }
    
    private function __clone(){}


//    public function  __isset($name)
//    {
//        return isset($this->name);
//    }
}

$cat = new Cat();
$cat->age = 3;
$cat->color = 'grey';
$cat->getInfo();
echo $cat->name;

$cat2 = clone $cat;
$cat2->getInfo();














