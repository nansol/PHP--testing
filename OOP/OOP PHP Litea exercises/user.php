<?php

class User
{
//Properties:

    public $id = null;
    public $username = null;
    public $name = null;
    public $password = null;
    public $number_of_posts = null;
    public $created_at = 0;

//Method

    public function __construct($created_at)
    {
        $this->created_at = $created_at;
    }

    public function callUser(){
        return 'user id:' ." ".  $this->id . " ". 'user name:' ." ". $this->name ." ". "member since" ." "." ". $this->created_at . "<br>";
    }
}

//Object
$nancy = new User(date("F j, Y, g:i a"));
//Object properties
$nancy->name = 'Nancy';
$nancy->id = 1;
$nancy->username = 'nansol';

echo  $nancy->callUser();

$solca = new User(date("F j, Y, g:i a"));
$solca->name = 'Solca';
$solca->id = 2;
$solca->username = 'solca123';

echo $solca->callUser();








