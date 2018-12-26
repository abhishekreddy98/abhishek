<?php
session_start();
if(!isset($_SESSION["user"]))
{
header('Location:main.php#popup');
}
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="back5.css">
</head>
<body>
<table>
<tr>
<td>
<h2>Vision</h2>
</td>
</tr>
<tr>
<td>
<h4>To be one of the Nation's premier Engineering Colleges by achieving the highest order of excellence in Teaching and Research.</h4>
</td>
</tr>
<tr>
<td>
<h2>Mission</h2>
</td>
</tr>
<tr>
<td>
<h4>Through multidimensional excellence, we value intellectual curiosity, pursuit of knowledge building and dissemination, academic</h4>
<h4> freedom and integrity to enable the students to realize their potential. We promote technical mastery of Progressive Technologies,</h4>
<h4> understanding their ramifications in the future society and nurture the next generation of skilled professionals to compete in</h4>
<h4> an increasingly complex world, which requires practical and critical understanding of all aspects.</h4>
</td>
</tr>
<tr>
<td>
<h2>Core Values of SVEC</h2>
</td>
</tr>
<tr>
<td>
<h4>Excellence : Commitment to continuous improvement and innovation in Teaching, Learning, research and extension</h4>
<h4>Ethics : Pledge to honesty, integrity, mutual respect, transparency and accountability</h4>
<h4>Diversity : Respect to all aspects of diversity</h4>
<h4>Student First : Student centric planning and development</h4>
<h4>Collaboration : Stakeholder partnership for holistic institutional development and synergistic growth</h4>
</td>
</tr>
</table>
</body>
</html>