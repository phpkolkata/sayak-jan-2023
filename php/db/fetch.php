<?php

// db connection
// host,user,pass,db
// $con = mysqli_connect("localhost", "root","", "mobile_demo");
$con = mysqli_connect("localhost", "asif","asif", "mobile_demo");

if(!$con){
    die("connection error");
}

// execute the query 
$sql = "select * from category";
$res = mysqli_query($con, $sql);

// fetch the records
// mysqli_fetch_row
// mysqli_fetch_array
// mysqli_fetch_object
while($row = mysqli_fetch_assoc($res)){
    print "<pre>";
    print_r($row);
}