<?php
function dd($arr,$die = false){
    print "<pre>";
    print_r($arr);
    if($die) die();
}

// numeric array declearation methods

// 1. with array function
$x = array("raj", "A", 22);
// dd($x);


// 2. direct with index
$y[0] = "raj";
$y[1] = "A";
$y[2] = 23;
// dd($y);

// 3. direct without index

$y[15] = "raj";
$y[] = "A";
$y[] = 24;

dd($y);