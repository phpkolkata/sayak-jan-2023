<?php
// Multi-diamensional Array

$x = array("a","b", "x");
$y = array("c", "d");

$z = array($x,$y);

print "<pre>";
print_r($z);

// echo $z[1][1];

// foreach($z as $v){
//     foreach($v as $v1){
//         echo $v1."<br>";
//     }
// }


foreach($z as $v){
   echo $v[0];
   echo $v[1];
}
