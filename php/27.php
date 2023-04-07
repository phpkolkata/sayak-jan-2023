<?php
session_start();
echo $_SESSION['myName'];

// 3 ways to end session
// 1. inactivity of page
// 2. manual logout out /destroy session
// 3. browser close