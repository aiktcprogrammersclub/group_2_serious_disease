<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="design.css" />
<title>CANCER</title>
</head>

<body alink="green" link="green" vlink="green">
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
</div>
<br>
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
<div style="width: 2%; float: left; vertical-align: top; height: 400px;"></div>
<div style="width: 78%; float: left; background-color: rgb(255, 197, 140); vertical-align: top;">
