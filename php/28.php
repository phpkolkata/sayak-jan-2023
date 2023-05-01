<?php
// File Handling

// w - write,a - append, r -read
$fp = fopen("db.txt","a");
$data = "hello india";
fwrite($fp,$data);
fclose($fp);