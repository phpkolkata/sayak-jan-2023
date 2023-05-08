<?php
require "db-connection.php";

extract($_POST);

$sql = "UPDATE `category` SET `name`='$cname', `is_active`='$is_active' WHERE `id`='$cid'";
$res = mysqli_query($con, $sql) or die(mysqli_error($con) . "error 1");

header("location:category.php?msg=record Updated!");
