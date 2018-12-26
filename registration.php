<html>
<head>
<title>registration</title>
<link rel="stylesheet" type="text/css" href="back1.css">
</head>
<body bgcolor="cyan">
<form action="registration.php" method="POST">
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
$sql=”insertintoregister(firstname,lastname,gender,dateofbirth,username,password,confirmpassword,address,pincode,mobileno,email)values('$fn','$ln','$gen','$dt','$un','$pwd','$cp','$ad','$pc','$mn','$em');";
if($fn==''||$ln==''||$dt==''||$un==''||$pwd==''||$cp==''||$ad==''||$pc==''||$mn==''||$em=='')
echo "<h1>Enter all Details</h1>";
else if($con->query($sql)===true)
echo "<h2>Registered Successfully</h2>";
}
else
{
echo "<h2>Already Registered</h2>";
}
$con->close();
}
?>