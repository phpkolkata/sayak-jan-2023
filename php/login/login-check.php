<?php
session_start();

extract($_POST);

if($email == "admin@test.com" && $pass == "admin"){
    $_SESSION['login'] = true;
    header("location:home.php");
}
else{
    header("location:index.php?msg=wrong user/pass");
}
