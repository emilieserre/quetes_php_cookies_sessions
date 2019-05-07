<?php
require 'inc/head.php';
session_destroy();
header('Location: login.php');
