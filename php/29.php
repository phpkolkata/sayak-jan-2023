<?php
// hw: filter @ from content`

$fp = fopen("db.txt", "r");
$str = "";
while (!feof($fp)) {
//    $str .= fgetc($fp);
    $str = $str . fgetc($fp);
}
$data = str_replace("@", "", $str);
fclose($fp);

$fp = fopen("db.txt", "w");
fwrite($fp, $data);
fclose($fp);
