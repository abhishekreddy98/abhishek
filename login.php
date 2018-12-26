<html>
<head>
<link rel="stylesheet" type="text/css" href="back2.css">
</head>
<body bgcolor="pink">
<form action="login.php" method="POST">
<table border="0" width="100%" cellspacing="20">
<tr align="center">
<td>
<img src="user1.png" width="100" height="100">
</td>
</tr>
<tr>
<td align="center">
<input type="text" name="t1" maxlength="25" placeholder="Enter username" required/><br><br>
<input type="password" name="t2" placeholder="Enter Password" required/><br><br>
<button name="login" value="click">SIGN IN</button>
<br><br><br><br>
<h2>New User</h2>
<a href="registration.php" target=main><h4>New User Registration<h4></a>
</td>
</tr>
</table>
</body>
</html>
<?php
if(isset($_POST['login']))
{
$con=mysqli_connect("localhost","root","","mydb");
$user=$_POST['t1'];
$pass=$_POST['t2'];
$res=mysqli_query($con,"SELECT * from register WHERE username='$user' AND password='$pass'");
if($user==''||$pass=='')
echo "<h1>Enter username and password</h1>";
$row=mysqli_fetch_assoc($res);
if(!$row)
{
echo "<h1>Enter valid credentials</h1>";
}
else
{
session_start();
$_SESSION['user']=$user;
header('Location: home.php');	
}
}
?>