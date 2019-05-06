<?php

session_start();
$cookie_name = "basket";
$cookie_value = json_encode($_SESSION["basket"]);
setcookie($cookie_name, $cookie_value, time() + (86400 * 30 * 365), "/"); // 86400 = 365 dayS
session_destroy();
header("Location: index.php");