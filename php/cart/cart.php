<?php
session_start();

$cart = $_SESSION['cart'];

foreach($cart as $pid=>$qnty){
    print "Product $pid - Qnty $qnty<br>";
}