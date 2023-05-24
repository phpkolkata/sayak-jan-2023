<?php
class Greet
{
    public $name = "noName";
    public static $age = 30;

    public function hi()
    {
        // :: - scope resolutions sign
        echo "hi " . $this->name . " Your age is " . self::$age . "<br>";
    }

    public function bye()
    {
        // $this->hi();
        echo "bye " . $this->name . "<br>";
    }
}
