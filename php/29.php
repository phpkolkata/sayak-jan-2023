<?php

$fp = fopen("db.txt", "r");
$str = "";
while(!feof($fp)){
//    $str .= fgetc($fp);
   $str = $str . fgetc($fp);
}

echo $str;

// hw: filter @ from content`