<?php
require "Greet.class.php";

// Greet - parant
// Greet2 - child

class Greet2 extends Greet
{
    public function hello()
    {
        $this->hi();
        echo "hello " . $this->name;
    }
}
