<?php
// DRY - Don't repeat yourself
$con = mysqli_connect("localhost", "asif", "asif", "mobile_demo");
if (!$con) {
    die("connection error");
}
