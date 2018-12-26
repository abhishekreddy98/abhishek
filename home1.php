<?php
session_start();
if(!isset($_SESSION["user"]))
{
header('Location:main.php#popup');
}
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="back7.css">
</head>
<body>
<table width="100%">
<tr>
<td>
<h1 align="center">Sree Vidyanikethan Engineering College</h1>
</td>
<td align="right">
<a href="main.php">Logout</a>
</td>
</tr>
<tr align="center">
<td>
<h3>Welcome Admin</h3>
</td>
</tr>
<tr>
<tr>
<td>
<a href="Collegedetails.php">College_Details</a><br><br>
</td>
</tr>
<tr>
<td>
<a href="student.php">Student_Details</a><br><br>
</td>
</tr>
<tr>
<td>
<a href="status.php">Final_list</a><br><br>
</td>
</tr>
<tr>
<td>
<a href="check.php">Finalize List</a>
</td>
</tr>
<table align="center">
<tr>
<td>
<img src="logo-1.png" width="400" height="200"/>
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
Student.php
<?php
session_start();
if(!isset($_SESSION["user"]))
{
header('Location:main.php#popup');
}
?>
<?php
$con=new mysqli("localhost","root","","mydb");
$sql="select * from validate";
$ans=$con->query($sql);
if($ans->num_rows>=1)
{
echo "<table border=2 width=90%>";
echo "<tr><th>Firstname</th><th>Lastname</th><th>Email</th><th>SSC Marks</th><th>Inter Marks</th><th>EAMCET Rank</th></tr>";
while($row=$ans->fetch_assoc())
{
echo "<tr><td>".$row['firstname']."</td><td>".$row['lastname']."</td><td>".$row['email']."</td><td>".$row['ssc']."</td><td>".$row['inter']."</td><td>".$row['eamcet']."</td></tr>";
}
echo "</table>";
}
else
{
echo "no record found";
}
?>
Status.php
<?php
session_start();
if(!isset($_SESSION["user"]))
{
header('Location:main.php#popup');
}
?>
<?php
$con=new mysqli("localhost","root","","mydb");
$sql="select * from validate";
$ans=$con->query($sql);
if($ans->num_rows>=1)
{
echo "<table border=2 width=90%>";
echo "<tr><th>Firstname</th><th>Lastname</th><th>Email</th><th>Status</th></tr>";
while($row=$ans->fetch_assoc())
{
echo "<tr><td>".$row['firstname']."</td><td>".$row['lastname']."</td><td>".$row['email']."</td><td>".$row['status']."</td></tr>";
}
echo "</table>";
}
else
{
echo "no record found";
}
?>