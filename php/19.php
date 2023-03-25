<?php

$p_22 = array("name"=>"raj", "age"=>22);
$m_22 = array("eng"=>33, "math"=>43,"sci"=>45);
$a_22 = array("class"=>"5", "sec"=>"A","marks"=>$m_22);
$roll_22 = array("personal"=>$p_22, "academic"=>$a_22);

$p_35 = array("name"=>"suman", "age"=>12);
$m_35 = array("eng"=>55, "math"=>36,"sci"=>27);
$a_35 = array("class"=>"5", "sec"=>"B","marks"=>$m_35);
$roll_35 = array("personal"=>$p_35, "academic"=>$a_35);

$std = array("22"=>$roll_22, "35"=>$roll_35);

// print_r($std);
// $x =7;
// if(is_array($x)){
//     echo "yes";
// }
// else{
//     echo "no";
// }

foreach($std as $k=>$v){
    print "<h1>Roll:$k</h1>";
    foreach($v as $k1=>$v1){
        print "<b>$k1:</b><br>";
        foreach($v1 as $k2=>$v2){
            if(!is_array($v2))
            print "$k2-$v2<br>";
            else{
                print "<b>$k2:</b><br>";
                foreach($v2 as $k3=>$v3){
                    print "$k3-$v3<br>";
                }
            }
        }
    }
}