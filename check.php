<html>
<head>
<link rel="stylesheet" type="text/css" href="back2.css">
</head>
<body bgcolor="pink">
<form action="check.php" method="POST">
<table border="0" width="100%" cellspacing="20">
<tr align="center">
<td>
<img src="user1.png" width="100" height="100">
</td>
</tr>
<tr>
<td align="center">
<input type="text" name="t1" maxlength="25" placeholder="Enter intermarks"/><br><br>
<input type="text" name="t2" placeholder="Enter EAMCET Rank"/><br><br>
<button name="login" value="click">Submit</button>
</td>
</tr>
</table>
</body>
</html>
<?php
if(isset($_POST['login']))
{
$inter=$_POST['t1'];
$eam=$_POST['t2'];
$con=new mysqli("localhost","root",'',"mydb");		    $sql1="update validate set status='Eligible' where inter>='$inter' and eamcet<='$eam';";
if($con->query($sql1)===true)
echo "<h1>Details updated Successfully<h1>";
}
?>