<?php

$week = array("sun","mon","tue","wed", "thu", "fri", "sat");

// echo $week[0]."<br>";
// echo $week[1]."<br>";
// echo $week[2]."<br>";
// echo $week[3]."<br>";
// echo $week[4]."<br>";
// echo $week[5]."<br>";
// echo $week[6]."<br>";n


for($i=0;$i<=6;$i++){
    echo $week[$i]."<br>";
}

print "<select>";

for($i=0;$i<=6;$i++)
print "<option>$week[$i]</option>";

print"</selec>";