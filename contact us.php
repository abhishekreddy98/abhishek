<?php
session_start();
if(!isset($_SESSION["user"]))
{
header('Location:main.php#popup');
}
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="back9.css">
</head>
<body>
<h1 align="center">Contact Details</h1><br><br><br><br>
<h3 align="center">Phone no:</h3>
<h3 align="center">9876543210</h3><br>
<h3 align="center">Email Address:</h3>
<h3 align="center">vidyanikethan@gmail.com</h4>
</body>
<html>