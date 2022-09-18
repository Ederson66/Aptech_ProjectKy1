<?php

session_start();

require_once './PhpSetting/User.php';

$u = new User();
echo (string) $_SESSION["Username"];

// clear session
session_destroy();
?>
