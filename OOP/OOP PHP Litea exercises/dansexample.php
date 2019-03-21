<?php

class Human
{

    public $name;
    public $age;


    public function greeting($name)
    {


        echo "Hi" . " " . $name . ", " . " I am" . " " . $this->name . " " . "and I am". " " . $this->age . " " . "years old" .".". "<br>";
    }



    public function friends($friend, $buddy){

        echo "My friends are"." ".$friend .' '. 'and'.' '.$buddy.".". "<br>";
    }
}


class Person
{

    public $name;
    public $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function greeting($name)
    {

        echo "Hi" . " " . $name . ", " . " I am" . " " . $this->name . " " . "and I am". " " . $this->age . " " . "years old" .".". "<br>";
    }

    public function friends($friend, $buddy){

       echo "My friends are"." ".$friend .' '. 'and'.' '.$buddy .".". "<br>";
    }

    public function calculate($a,$b){


        $result=$a - $b;

        return $this->name .' '.'counts'.' '."$result" .".";
    }

}


$dan = new Person("Dan", 20);


$karel = new Human();
$karel->name = "Karel";
$karel->age = 40;

$pepa = new Person("Pepa", 30);


$karel->greeting('Dan');
$pepa->greeting("Dan");

$karel->friends('Pepa', 'Dan');
$pepa->friends('Karel', 'Dan');
$dan->friends('Pepa', 'Karel');

echo $pepa->calculate(10,20);



