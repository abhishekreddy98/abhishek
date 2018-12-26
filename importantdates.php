<?php
session_start();
if(!isset($_SESSION["user"]))
{
header('Location:main.php#popup');
}
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="back8.css">
</head>
<body>
<h2>Important Dates</h2>
<h3>Applying Dates : Jan 12 - May 30 , 2018<br><hr><br>
Admission Dates : Jun 1 - Jul 20 , 2019 <br><hr><br>
Joining Dates : Jul 21 - Aug-30 , 2019 <hr></h3>
</body>
</html>
details.php
<?php
session_start();
if(!isset($_SESSION["user"]))
{
header('Location:main.php#popup');
}
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="back3.css">
</head>
<body bgcolor="pink">
<form name="f1" action="details1.php" method="POST">
<table align="center">
<tr align="center">
<td>
<h1>Welcome to Recruitment Portal</h1>
<td>
<td align="right">
<a href="login.php">Logout</a>
</td>
</tr>
<tr>
<td>
<h2><marquee>Enter Your Details</marquee></h2>
</td>
</tr>
<tr>
<td>
<h3>FIRSTNAME</h3>
</td>
<td>
<input type="text" name="firstname" size="30"/>
</td>
</tr>
<tr>
<td>
<h3>LASTNAME</h3>
</td>
<td>
<input type="text" name="lastname" size="30"/>
</td>
</tr>
<tr>
<td>
<h3>DATEOFBIRTH</h3>
</td>
<td>
<input type="date" name="dateofbirth"/>
</td>
</tr>
<tr>
<td>
<h3>NATIONALITY</h3>
</td>
<td>
<input type="text" name="nationality" size="30"/>
</td>
</tr>
<tr>
<td>
<h3>MOBILE NO</h3>
</td>
<td>
<input type="text" name="mobileno" size="30"/>
</td>
</tr>
<tr>
<td>
<h3>EMAIL ADDRESS</h3>
</td>
<td>
<input type="text" name="email" size="30"/>
</td>
</tr>
<tr>
<td>
<h3>SCHOOL</h3>
</td>
<td>
<input type="text" name="school" size="30"/>
</td>
</tr>
<tr>
<td>
<h3>COLLEGE</h3>
</td>
<td>
<input type="text" name="college" size="30"/>
</td>
</tr>
<tr>
<td>
<h3>SSC PERCENTAGE</h3>
</td>
<td>
<input type="number" name="ssc" size="10"/>
</td>
</tr>
<tr>
<td>
<h3>INTERMEDIATE MARKS</h3>
</td>
<td>
<input type="number" name="inter" size="10"/>
</td>
</tr>
<tr>
<td>
<h3>EAMCET RANK</h3>
</td>
<td>
<input type="number" name="eamcet" size="10"/>
</td>
</tr>
<tr>
<td>
<h3>PHOTO</h3>
</td>
<td>
<input type="file" name="image" access=".img,.jpg,.jpeg,.png"/>
</td>
</tr>
<tr align="center">
<td>
<input type="Submit" value="Submit" name="Submit">
<input type="Reset" value="Reset" name="Reset">
</td>
</tr>
</table>
</form>
</body>
</html>
<?php
if(isset($_POST['Submit']))
{
$fn=$_POST['firstname'];
$ln=$_POST['lastname'];
$dob=$_POST['dateofbirth'];
$na=$_POST['nationality'];
$mn=$_POST['mobileno'];
$em=$_POST['email'];
$sch=$_POST['school'];
$clg=$_POST['college'];
$ssc=$_POST['ssc'];
$inter=$_POST['inter'];
$eam=$_POST['eamcet'];
$img=$_POST['image'];
$con=new mysqli("localhost","root",'',"mydb");
$sql="insertintovalidate(firstname,lastname,dateofbirth,nationality,mobileno,email,school,college,ssc,inter,eamcet,image,status)values('$fn','$ln','$dob','$na','$mn','$em','$sch','$clg','$ssc','$inter','$eam','$img','Not Eligible');";
if($con->query($sql)===true)
{
echo "<h1>Details Entered Successfully<h1>";
}
 else
{
echo "Error:".$sql."<br>".$con->error;
 }
$con->close();
}
?>
Store.php
<html>
<head>
<title>registration</title>
<link rel="stylesheet" type="text/css" href="back1.css">
</head>
<body bgcolor="cyan">
<form action="store.php" method="POST">
<h1 align="center"> REGISTRATION FORM </h1>
<form name="registration">
<table align="center">
<tr>
<td>
<h3>FIRSTNAME</h3>
</td>
<td>
<input type="text" name="firstname" size="30"/>
</td>
</tr>
<tr>
<td>
<h3>LASTNAME</h3>
</td>
<td>
<input type="text" name="lastname" size="30"/>
</td>
</tr>
<tr>
<td>
<h3>GENDER</h3>
</td>
<td>
<h4> male<input type="radio" name="gender" value="male"/></h4>
<h4> female<input type="radio" name="gender" value="female"/></h4>
</td>
</tr>
<tr>
<td>
<h3>DATEOFBIRTH</h3>
</td>
<td>
<input type="date" name="dateofbirth"/>
</td>
</tr>
<tr>
<td>
<h3>USERNAME</h3>
</td>
<td>
<input type="text" name="username" size="30"/>
</td>
</tr>
<tr>
<td>
<h3>PASSWORD</h3>
</td>
<td>
<input type="password" name="password" size="30"/>
</td>
</tr>
<tr>
<td>
<h3>CONFIRMPASSWORD</h3>
</td>
<td>
<input type="password" name="confirmpassword" size="30"/>
</td>
</tr>
<tr>
<td>
<h3>ADDRESS</h3>
</td>
<td>
<textarea  name="address" rows="6" cols="20">
</textarea>
</td>
</tr>
<tr>
<td>
<h3>PINCODE</h3>
</td>
<td>
<input type="number" name="pincode" size="6"/>
</td>
</tr>
<tr>
<td>
<h3>MOBILE NO</h3>
</td>
<td>
<input type="number" name="mobileno" size="10"/>
</td>
</tr>
<tr>
<td>
<h3>E-MAIL</h3>
</td>
<td>
<input type="text" name="email" size="30"/>
</td>
</tr>
<tr align="center">
<td>
<input type="Submit" value="Submit" name="Submit">
<input type="Reset" value="Reset" name="Reset">
</td>
</tr>
</table>
</form>
</body>
</html>

<?php
if(isset($_POST['Submit']))
{
$fn=$_POST['firstname'];
$ln=$_POST['lastname'];
$gen=$_POST['gender'];
$dt=$_POST['dateofbirth'];
$un=$_POST['username'];
$pwd=$_POST['password'];
$cp=$_POST['confirmpassword'];
$ad=$_POST['address'];
$pc=$_POST['pincode'];
$mn=$_POST['mobileno'];
$em=$_POST['email'];
$con=new mysqli("localhost","root",'',"mydb");
$sql="insertintoregister(firstname,lastname,gender,dateofbirth,username,password,confirmpassword,address,pincode,mobileno,email)values('$fn','$ln','$gen','$dt','$un','$pwd','$cp','$ad','$pc','$mn','$em');";
if($con->query($sql)===true)
{
echo "Registered Successfully";
}
else
{	
echo "Error:".$sql."<br>".$con->error;
}
$con->close();
}
?>
Login1.php
<html>
<head>
<link rel="stylesheet" type="text/css" href="back6.css">
</head>
<body>
<form action="login1.php" method="POST">
<table border="0" width="100%" cellspacing="20">
<tr>
<td align="center">
<img src="admin1.jpg" width="100" height="100">
</td>
</tr>
<tr>
<td align="center">
<input type="text" name="t1" maxlength="25" placeholder="Enter username"/><br><br>
<input type="password" name="t2" placeholder="Enter Password"/><br><br>
<button name="login" value="click">SIGN IN</button>
</table>
</body>
</html>
<?php
if(isset($_POST['login']))
{
$con=mysqli_connect("localhost","root","","mydb");
$user=$_POST['t1'];
$pass=$_POST['t2'];
$res=mysqli_query($con,"SELECT * from administrator WHERE username='$user' AND password='$pass'");
$row=mysqli_fetch_assoc($res);
if(!$row)
{
echo "<h1>Enter valid credentials</h1>";
}
else
{
session_start();
$_SESSION['user']=$user;
header('Location: home1.php');		
}
}
?>