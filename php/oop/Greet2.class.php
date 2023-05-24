<?php
require "Greet.class.php";

// Greet - parant
// Greet2 - child

class Greet2 extends Greet
{
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function hello()
    {
        $this->hi();
        echo "hello " . $this->name . "age is " . parent::$age;
    }
}
