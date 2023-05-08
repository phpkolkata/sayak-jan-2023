<?php
require "db-connection.php";

$id = $_REQUEST['id'];

$sql = "delete from category where id='$id'";
$res = mysqli_query($con, $sql);
header("location:category.php?msg=record deleted!");
