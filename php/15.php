<?php
$arr = array("name"=>"raj", "age"=>22, "class"=>5, "section"=>"A");

// loop with values only
// foreach($arr as $val){
//     echo $val."<br>";
// }

// loop with key & value
foreach($arr as $key=>$val){
    echo $key."=".$val."<br>";
}