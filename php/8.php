<?php

// functions
// 1. user defined function
// 2. pre defined function


// 1. function name
// 2. arguments / parameters
// 3. optional params
// 4. return / process
// 5. return type


// function sayHello(){
//     print "hello";
// }
// sayHello();

function sayHello()
{
    return "Hello<br>";
}

$greet = sayHello();
$name = "Raj";

echo $greet." ".$name;


function sayHello2($nm){
    return "Hello ".$nm."<br>";
}
echo sayHello2("Suman");


function add($v1, $v2){
    $total =  $v1 + $v2."<br>";
    return $total;
}

function sub($v1, $v2){
    $total =  $v1 -$v2."<br>";
    return $total;
}

echo add(30,40);
echo sub(30,40);