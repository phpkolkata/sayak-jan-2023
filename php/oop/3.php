<?php
require "Category.interface.php";

class myCategory implements Category
{
    public function hi()
    {
        echo "hi";
    }
    public function bye()
    {
        echo "bye";

    }
}
