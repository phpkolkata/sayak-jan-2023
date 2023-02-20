<?php

// < 33 - fail
// 33-45 - 3rd
// 46-65 - 2nd
// 65 above - 1st div

$avg = 50;

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