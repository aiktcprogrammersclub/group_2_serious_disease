<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="design.css" /><title>diabetes</title>

<script language="javascript" type="text/javascript">
var timerid = 0;
var images = new Array( "d0.jpg",
"d2.jpg",
"d6.jpg",
"d4.jpg",
"d5.jpg");
var countimages = 0;
function startTime()
{
if(timerid)
{
timerid = 0;
}
var tDate = new Date();
if(countimages == images.length)
{
countimages = 0;
}
if(tDate.getSeconds() % 5 == 0)
{
document.getElementById("img1").src = images[countimages];
}
countimages++;
timerid = setTimeout("startTime()", 700);
}
</script></head>
<body onload="startTime();" alink="green" link="green" vlink="green">
<div style="text-align: center; background-color: rgb(234, 198, 127); width: 100%; height: 212px;">
<div style="float: left; background-color: rgb(234, 198, 127); height: 200px; text-align: left; width: 300px;"><big style="font-weight: bold;">
<img style="width: 307px; height: 212px;" alt="tc" src="pizap.com14255645201653.jpg"> </big></div>
<div style="float: right; width: 70%; margin-right: 20px; margin-top:10px; text-align:right; height: 150px;">
<?php
	$con= mysql_connect('localhost','root','') or die("Could not connect to server..");
	mysql_select_db('take_care') or die("Could not connect to database..");
	if(empty($_SESSION)) 
		session_start();
	if(isset($_SESSION['admin']))
		echo '<big><big>Hi, <font color="brown">'.$_SESSION['name'].'</font> | <a href="accounts.php">User Accounts</a> | <a href="logout.php">Logout</a></big></big>'; 
	else if(isset($_SESSION['uname']))
		echo '<big><big>Hi, <font color="#brown">'.$_SESSION['name'].'</font> | <a href="logout.php">Logout</a></big></big>'; 
	else
		echo '<big><big><a href="login.php">Login</a> | <a href="register.php">Register</a></big></big>';
?>		

</div>
<div style="float: right; width: 70%; margin-left: 20px; height: 62px;">
<table style="text-align: left; width: 515px;  " border="0" cellpadding="0" cellspacing="0">
<tbody style="margin-left: 23px; width: 585px;">
<tr>
<td> <button class="btnExample" name="home" onclick="parent.location='home.php'"><font weight="bold" size="4">Home</font></button> </td>
      <td> <button class="btnExample" name="gallery" onclick="parent.location='gallery.php'"><font weight="bold" size="4">Gallery</font></button> </td>
      <td> <button class="btnExample" name="feedback" onclick="parent.location='feedback.php'"><font weight="bold" size="4">Feedback</font></button> </td>
      <td> <button class="btnExample" name="blog" onclick="parent.location='blog.php'"><font weight="bold" size="4">Blog</font></button> </td>
	  <td> <button class="btnExample" name="donation" onclick="parent.location='donation.php'"><font weight="bold" size="4">Donation</font></button> </td>
<td> <button class="btnExample" name="about us" onclick="parent.location='aboutus.php'"><font weight="bold" size="4">About Us</font></button> </td>     	  
      
</tr>
</tbody>
</table>
</div>
</div><br />
<div style="width=100%">
<div style="width: 20%; float: left; background-color: rgb(234, 198, 127); vertical-align: top; height: 800px;">
<big><big><big>
<br><br><a href="cancer.php">
Cancer</a>
<br><br><a href="diabetes.php">
Diabetes</a>
</big></big></big>
<ul>
	<li><a href="rd.php">Reason and avoidance</a>
	<li><a href="td.php">Treatments available at Hospitals</a>
	<li><a href="ad.php">Aids</a>
	<li><a href="gs.php">Government Schemes</a>
	</ul>
<br><br><a href="asthma.php"><big><big><big>
Asthma</a>
</div></big></big></big>
<div style="width: 2%; float: left; vertical-align: top; height: 800px;"></div>

<div style="width: 78%; float: left; text-align:center; height:500px;">
<span style="color:green; font-size:50px; text-align:center; font-weight:bold;"> Diabetes </span><br>
<img style="width: 603px; height: 402px;" id="img1" src="d0.jpg" align="center"><br></div>
<br />
<br />
<div style="width: 78%; float: left; background-color: rgb(255, 197, 140); vertical-align: top;">
<span style="color: rgb(102, 51, 0);"><span style="font-weight: normal;"><span style="color:green; font-size:50px; text-align:center">Diabetes</span> can strike anyone,
from any walk of life.</span></span><br />
<span style="color: rgb(102, 51, 0);"><span style="font-weight: normal;">Diabetes is the most common
metabolic disorder affecting populations in
all geographical regions of the world. The prevalence of diabetes is
influenced by genetic, ethnic and socioeconomic factors. The World
Health Organization (WHO) has projected that the prevalence of diabetes
is increasing in epidemic proportions especially in developing
countries. India has the highest number of people with Diabetes in the
World.
<br />
And it does&nbsp;in numbers that are dramatically increasing. In the
last
decade, the cases of people living with diabetes jumped almost 50
percent – to more than 29 million Americans.&nbsp; Worldwide, it
afflicts more than 380 million people.&nbsp; And the World Health
Organizationestimates that by 2030, that number of people living with
diabetes will
more than double.&nbsp;&nbsp;&nbsp; It is a leading cause of blindness,
kidney failure, amputations, heart failure and stroke. Living with
diabetes places an
enormous emotional, physical and financial burden on the entire family.</span><br style="font-weight: normal;" />
</span><br />
<span style="font-weight: bold; color:green; font-size:30px;">DIABETES TOPICS</span><br />
<span style="color: rgb(102, 51, 0);"></span>
<ul style="text-align: left; color: rgb(102, 51, 0);">
<li><a href="rd.php" target="_top">Reason and avoidance</a></li>
<li><a href="td.php" target="_top"><span style="font-size: 12pt; font-family: 'Times New Roman';">Treatments&nbsp;available&nbsp;at&nbsp;Hospitals</span></a></li>

<li><a href="ad.php" target="_top"><span style="font-size: 12pt; font-family: 'Times New Roman';">Aids</span></a></li>
<li><a href="gs.php" target="_top"><span style="font-size: 12pt; font-family: 'Times New Roman';">Government&nbsp;Schemes</span></a></li>

</ul>
</div></div>
<br />
<?php include 'footer.php'; ?>