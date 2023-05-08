<?php
require "db-connection.php";

extract($_POST);

$sql = "INSERT INTO `category` VALUES (NULL,'$cname', '$is_active')";
$res = mysqli_query($con, $sql) or die(mysqli_error($con) . "error 1");

header("location:category.php?msg=record Added!");
