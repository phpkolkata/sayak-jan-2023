<?php

function dd($arr,$die = false){
    print "<pre>";
    print_r($arr);
    if($die) die();
}

// associative array declearation methods

// 1. with array function
$std = array("name"=>"raj","sec"=>"A","roll"=>22);

// dd($std);


// 2. direct with keys

$arr['name'] = "raj";
$arr['sec'] = "A";
$arr['roll'] = 23;

dd($arr);