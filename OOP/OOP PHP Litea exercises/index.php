<?php

class Dog {

    public $name =  null;
    public $breed = null;
    public $color = null;
    public $position = 'lying down';

    public function __construct($breed)
    {
        $this->breed = $breed;
    }

    public function bark(){
        echo 'Woof Woof!';
    }

    public function sit(){
        $this->position = 'sitting';
    }
}

$ferdo = new Dog(sheppard);
$max = new Dog(puddle);



class Cat {
    public $name =  null;
    public $breed = null;
    public $color = null;
    public $position = 'walking';


    public function sound(){
        echo "mnau, mnau";
    }
}


$mia = new Cat;
$mia->name = 'mia';
$mia->position = "jumping";
$mia->breed = "mix";

echo "$mia->name". " ". "is"." ".$mia->position .'<br>';
echo "$mia->breed";
