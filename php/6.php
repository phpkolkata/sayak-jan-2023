<?php
// Class -      1-5     6-12
// -----------------------------
// < 33 -       D       fail
// 33-45 -      C       3rd
// 46-65 -      B       2nd
// 65 above -   A       1st div

$avg = 32;
$class = 8;


if($class <= 5){
    // Grade System
    if($avg <=32){
        echo "D";
    }
    else if($avg <= 45){
        echo "C";
    }
    else if($avg <= 65){
        echo "B";
    }
    else{
        echo "A";
    }
}
else{
    // divission system
    if($avg <=32){
    echo "fail";
    }
    else if($avg <= 45){
        echo "3rd";
    }
    else if($avg <= 65){
        echo "2nd";
    }
    else{
        echo "1st";
    }
}

