<?php

// print"<pre>";
// print_r($_POST);
// print"-----------------<br>";
// print_r($_FILES);

// $name       = $_FILES['im']['name'];
// $tmp_name   = $_FILES['im']['tmp_name'];
// $size       = $_FILES['im']['size'];

extract($_FILES['im']);
extract($_POST);

// simple way
// copy($tmp_name, "uploads/$name");

// proper way
$id = rand(0,99999);
$name = $id."-".$name;
$path = "uploads/".$name;

if($error == 0 ){
    if($type == "image/png" || $type == "image/jpg" || $type == "image/jpeg" || $type == "image/gif"){
        copy($tmp_name, $path);
        header("location:24.php?msg=file uploaded!");

        // print "<img src='$path' height="" width="">";
    }
    else{
        // die("wrong file format");
        header("location:24.php?msg=wrong file format");
    }
}
else{
    // die("error uploading image");
    header("location:24.php?msg=error uploading file");

}