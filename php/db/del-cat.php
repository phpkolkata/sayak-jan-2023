<?php
$con = mysqli_connect("localhost", "asif","asif", "mobile_demo");
if(!$con){
    die("connection error");
}


$id = $_REQUEST['id'];

$sql = "delete from category where id='$id'";
$res = mysqli_query($con, $sql);
header("location:category.php?msg=record deleted!");

