<?php
class Greet
{
    public $name = "noName";

    public function hi()
    {
        echo "hi " . $this->name . "<br>";
    }

    public function bye()
    {
        // $this->hi();
        echo "bye " . $this->name . "<br>";
    }
}
