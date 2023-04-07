<?php
session_start();
if(!$_SESSION['login']){
    header("location:index.php?msg=Wrong Attempt, please try login");
    die;
}
?>
<h1>Home page</h1>