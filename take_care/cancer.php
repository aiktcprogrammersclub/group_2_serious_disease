<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="design.css" /><title>CANCER</title>

<script language="javascript" type="text/javascript">
var timerid = 0;
var images = new Array( "1.jpg",
"2.jpg",
"3.jpg",
"4.jpg",
"5.jpg");
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
Cancer</a></big></big></big>
<ul>
	<li><a href="rc.php">Reason and avoidance</a>
	<li><a href="tc.php">Treatments available at Hospitals</a>
	<li><a href="ic.php">Increasing costs of medicines</a>
	<li><a href="ac.php">Aids</a>
	<li><a href="mc.php">Medicine info</a>
	<li><a href="gs.php">Government Schemes</a>
	<li><a href="nc.php">NGO’s</a>
	</ul>
<br><br><a href="diabetes.php"><big><big><big>
Diabetes</a>
<br><br><a href="asthma.php">
Asthma</a>
</div></big></big></big>
<div style="width: 2%; float: left; vertical-align: top; height: 800px;"></div>

<div style="width: 78%; float: left; text-align:center; height:500px;">
<span style="color:green; font-size:50px; text-align:center; font-weight:bold;"> Cancer </span><br>
<img style="width: 603px; height: 402px;" id="img1" src="d0.jpg" align="center"><br></div>
<br />
<br />
<div style="width: 78%; float: left; background-color: rgb(255, 197, 140); vertical-align: top;">
<span style="color:green; font-size:50px; text-align:center"> Cancer </span>
<span style="color: rgb(102, 51, 0); font-weight: normal; font-size: 12pt; margin-top:10px">
is the name
given to a collection of related diseases. In all types of cancer, some
of the body’s cells begin to divide without stopping and spread into
surrounding tissues.</span><br style="color: rgb(102, 51, 0); font-weight: normal;" />
<span style="color: rgb(102, 51, 0); font-weight: normal;">Cancer
can start
almost anywhere in the human body, which is made up of trillions of
cells. Normally, human cells grow and divide to form new cells as the
body needs them. When cells grow old or become damaged, they die, and
new cells take their place.</span><br style="color: rgb(102, 51, 0); font-weight: normal;" />
<span style="color: rgb(102, 51, 0); font-weight: normal;">When
cancer
develops, however, this orderly process breaks down. As cells become
more and more abnormal, old or damaged cells survive when they should
die, and new cells form when they are not needed. These extra cells can
divide without stopping and may form growths called tumors.</span><br style="color: rgb(102, 51, 0); font-weight: normal;" />
<span style="color: rgb(102, 51, 0); font-weight: normal;">Many
cancers form
solid tumors, which are masses of tissue. Cancers of the blood, such as
leukemias, generally do not form solid tumors.</span><br style="color: rgb(102, 51, 0); font-weight: normal;" />
<span style="color: rgb(102, 51, 0); font-weight: normal;">Cancerous
tumors are
malignant, which means they can spread into, or invade, nearby tissues.
In addition, as these tumors grow, some cancer cells can break off and
travel to distant places in the body through the blood or the lymph
system and form new tumors far from the original tumor.</span><br style="color: rgb(102, 51, 0);" />
<span style="color: rgb(102, 51, 0);"><span style="font-weight: bold;"></span></span><span style="color: rgb(102, 51, 0);"><br />
<span style="font-weight: bold; color:green; font-size:30px;">CANCER TOPICS</span></span><br />
<span style="color: rgb(102, 51, 0);"></span>
<ul style="text-align: left; color: rgb(102, 51, 0);">
<li><a href="RC.php" target="_top">Reason and avoidance</a></li>
<li><a href="tC.php" target="_top"><span style="font-size: 12pt; font-family: 'Times New Roman';">Treatments&nbsp;available&nbsp;at&nbsp;Hospitals</span></a></li>
<li><a href="ic.php" target="_top"><span style="font-size: 12pt; font-family: 'Times New Roman';">Increasing&nbsp;costs&nbsp;of&nbsp;medicines</span></a></li>
<li><a href="ac.php" target="_top"><span style="font-size: 12pt; font-family: 'Times New Roman';">Aids</span></a></li>
<li><a href="mc.php" target="_top"><span style="font-size: 12pt; font-family: 'Times New Roman';">Medicine info</span></a></li>

<li><a href="gs.php" target="_top"><span style="font-size: 12pt; font-family: 'Times New Roman';">Government&nbsp;Schemes</span></a></li>
<li><a href="nc.php" target="_top"><span style="font-size: 12pt; font-family: 'Times New Roman';">NGO’s</span></a></li>
</ul>
</div></div>
<br />
<?php include 'footer.php'; ?>