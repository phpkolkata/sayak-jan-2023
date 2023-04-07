<?php
// Session
// mandatory to start session every time to deal with session
session_start();

$_SESSION['myName'] = "raj";

echo $_SESSION['myName'];