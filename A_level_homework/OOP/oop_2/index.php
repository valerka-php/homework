<?php

require_once 'interface.php';


//Single responsibility  - принцип единой зависимости но я не уверен что его можно сюда применить
// потому что у класса должна быть лишь одна сфера ответственности ( отвечать за что либо одно) ,
// и распрастраняеться ли это на дочерние классы они ведь наследуют методы родителей и могут уже содержать после
// наследований несколько методов. Хотя с другой стороны класс Animal выводит лишь только информацию )

abstract class Animal
{
    public $name , $speed ;

    function __construct($name = 'noname' ,$speed = 0) {
       $this->name = $name;
       $this->speed = $speed;
    }

    abstract function getInfo();
}


// Liskov substitution - принцип при котором если родительский класс Сat убрать то функционал не пострадает ,
// но в моем случае это приведет к тому что не будет выводиться информацияб  а лишь только будет доступен интерфейс.

class Mammal extends Animal{
//принцип  Open/Closed  свойство protected дает закрытый доступ для изменений но в то же время
// класс можно дополнить в дочернем классе

    protected $class = 'Mammal';
    public function getInfo()
    {
        return "This is {$this->name} and its speed {$this->speed} , class =  {$this->class}";
    }


}


//принцип Interface Segregation  - добавляем интерфейс animalVoica =)
class Cat extends Mammal implements animalVoice {

    public function makeSound()
    {
        return 'Meow-meow';
    }
}



class Dog extends Mammal{

}


$cat = new Cat('Helga', 3);
echo $cat->getInfo();
echo $cat->makeSound();

echo '<hr>';

$dog = new Dog();
echo $dog->getInfo();


echo '<hr>';


// Dependency Inversion - я понял этот принцип как максимального использования интерфейсов
// что бы изменение самого класса не сильно отражалось на его потомках