<?php
session_start();
if(!isset($_SESSION["user"]))
{
header('Location:main.php#popup');
}
?>
<html>
<body bgcolor="skyblue">
<table>
<tr>
<td>
<h2>Steps to Apply</h2>
</td>
</td>
</tr>
<tr>
<td>
<h3>Step 1:</h3>
</td>
<td>
<h4>Visit the official website</h4>
</td>
</tr>
<tr>
<td>
<h3>Step 2:</h3>
</td>
<td>
<h4>Register</h4>
</td>
</tr>
<tr>
<td>
<h3>Step 3:</h3>
</td>
<td>
<h4>Login</h4>
</td>
</tr>
<tr>
<td>
<h3>Step 4:</h3>
</td>
<td>
<h4>Enter all your details</h4>
</td>
</tr>
<tr>
<td>
<h3>Step 5:</h3>
</td>
<td>
<h4>You can check in final list whether you are eligible or not</h4>
</td>
</tr>
</table>
</body>
</html>