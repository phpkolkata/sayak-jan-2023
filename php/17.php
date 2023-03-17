<?php

//  approach 1 -  for figure 17.jpg

$arr = array(
            array("b",
                array("c","d")),
            "a",
            array("e",  
                array("g","h"), 
                "f")
);
print "<pre>";
print_r($arr);


// approach 2 - for figure 17.jpg (recommended)

// 3rd diamension
$c = array("c","d");
$g = array("g","h");

// 2nd diamension
$b = array("b",$c);
$e = array("e",$g,"f");

// 1st diamension
$arr2 = array($b,"a",$e);

print "<pre>";
print_r($arr2);