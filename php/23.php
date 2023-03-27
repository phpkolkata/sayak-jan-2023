<?php
$arr = array("name"=>"raj", "age"=>33);

// $name = $arr['name'];
// $age = $arr['age'];

extract($arr);

echo "hello $name, your age is $age";