<?php


// 1. if(condition){}

// 2. if(condition){} else {}

// 3. if(condition){} else if(condition){} else if(condition){} else{}

$age = 2;

if($age <=3){
    echo "toddler";
}
else if($age <= 12){
    echo "kid";
}
else if($age <= 19){
    echo "teenager";
}
else{
    echo "mature enough";
}

// if($age <=3){
//     echo "toddler";
// }
//  if($age > 3 && $age <= 12){
//     echo "kid";
// }
//  if($age > 12 && $age <= 19){
//     echo "teenager";
// }
// else{
//     echo "mature enough";
// }