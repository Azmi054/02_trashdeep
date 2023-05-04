<?php
session_start();
$_SESSION['session_username'] = "";
$_SESSION['session_password'] = "";
$_SESSION['session_no_telepon'] = "";

session_destroy();
header("location:../Login/login.php")
?>