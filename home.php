<?php
session_start();
if(!isset($_SESSION["user"]))
{
      header('Location:main.php#popup');
}
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="back.css">
</head>
<body>
<table width="100%">
<tr>
<td>
<h1 align="center">STUDENT RECRUITMENT PORTAL</h1>
</td>
<td align="right">
<h3><a href="details1.php">Apply</a>
</td>
<td align="right">
<h3><a href="main.php">Logout</a>
</td>
</tr>
<tr>
<td>
<h2 align="center">Welcome <?php echo $_SESSION["user"] ?></h2>
<tr>
<td>
<a href="Collegedetails.php">College_Details</a><br><br>
</td>
</tr>
<tr>
<td>
<a href="Howtoapply.php">How_To_Apply</a><br><br>
</td>
</tr>
<tr>
<td>
<a href="Importantdates.php">Important_Dates</a><br><br>
</td>
<tr>
<td>
<a href="Contactus.php">Contact_Us</a><br><br>
</td>
</tr>
<tr>
<td>
<a href="status.php">Final_list</a>
</td>
</tr>
<table align="center">
<tr>
<td>
<img src="logo-1.png" width="300" height="150"/>
</td>
</tr>
</table>
<table align="center">
<tr>
<td>
<h2 align="center">Welcome to Sree Vidyanikethan Family</h2>
</td>
</tr>
</body>
</html>