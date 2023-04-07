<?php
print"GET";
print_r($_GET);

print"<br>POST";
print_r($_POST);

print"<br>REQUEST";
print_r($_REQUEST);

// $nm = strtoupper($_GET['nm']);
// $age = $_GET['age'];


// extract($_GET);
// extract($_POST);
extract($_REQUEST);

// $nm = $_REQUEST['nm'];
// $age = $_REQUEST['age'];

$nm = strtoupper($nm);


// print "Hello $_GET[nm], your age is $_GET[age]";

print "Hello $nm, your age is $age";
print "Hello $nm, your age is $age";
print "Hello $nm, your age is $age";
print "Hello $nm, your age is $age";