<?php
$title = "Logout";
include "includes/head.view.php";

session_destroy();
header('location:/admin');
?>