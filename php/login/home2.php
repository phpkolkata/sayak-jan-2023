<?php
session_start();
if(!$_SESSION['login']){
    header("location:index.php?msg=Wrong Attempt, please try login");
    die;
}
?>
<h1>Home 2 page</h1>