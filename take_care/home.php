<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html><head>
<link rel="stylesheet" type="text/css" href="design.css">
<meta content="text/html; charset=ISO-8859-1" http-equiv="content-type"><title>home</title></head>
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
		echo '<big>Hi, <font color="brown">'.$_SESSION['name'].'</font> | <a href="accounts.php">User Accounts</a></big> | <a href="logout.php">Logout</a></big>'; 
	else if(isset($_SESSION['uname']))
		echo '<big>Hi, <font color="brown">'.$_SESSION['name'].'</font> | <a href="logout.php">Logout</a></big>'; 
	else
		echo '<big><a href="login.php">Login</a> | <a href="register.php">Register</a></big>';
?>		

</div>
<div style="float: right; width: 70%; margin-left: 20px; height: 62px;">
<table style="text-align: left; width: 515px; " border="0" cellpadding="0" cellspacing="0">
<tbody style="margin-left: 23px; width: 585px;">
<tr>
<td> <button class="btnExample" name="home" onclick="parent.location='home.php'"><font weight="bold" size="4">Home</font></button> </td>
      <td> <button class="btnExample" name="gallery" onclick="parent.location='gallery.php'"><font weight="bold" size="4">Gallery</font></button> </td>
      <td> <button class="btnExample" name="feedback" onclick="parent.location='feedback.php'"><font weight="bold" size="4">Feedback</font></button> </td>
      <td> <button class="btnExample" name="blog" onclick="parent.location='blog.php'"><font weight="bold" size="4">Blog</font></button> </td>
	  <td> <button class="btnExample" name="donation" onclick="parent.location='donation.php'"><font weight="bold" size="4">Donation</font></button> </td>  
<td> <button class="btnExample" name="about us" onclick="parent.location='aboutus.php'"><font weight="bold" size="4">About Us</font></button> </td>     	  
      </td>
</tr>
</tbody>
</table>
</div>
</div>
<br>
<div style="width: 100%; background-color: rgb(255, 197, 140); vertical-align: top; height: 557px;">
<br>
<br>
<table style="width: 1138px; height: 457px; text-align: left; margin-left: auto; margin-right: auto;" border-right-color="" border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td style="vertical-align: top; width: 430px; text-align: center;"><span style="color: rgb(102, 51, 0); font-weight: bold;"><big><br>
GIVE SMILES . GIVE HOPE.<br>
<big style="color: rgb(102, 51, 0);"><br>
</big></big></span>
<div style="text-align: left;"><big style="color: rgb(102, 51, 0);">Giving someone Hope to Smile
is the best thing you can ever do in this world. Join us and be a
source of a reason behind the smile of someone &#9829;</big><br>
<br>
<br>
<br>
<br>
<br>
<br>
<div style="text-align: left;">&nbsp;
&nbsp; &nbsp;&nbsp;
<button class="btnExample2" value="LOGIN" onclick="parent.location='login.php'"><big><font weight="bold" size="4">login</font></button>&nbsp;
&nbsp; &nbsp;&nbsp;&nbsp;
<button class="btnExample2" value="REGISTER" onclick="parent.location='register.php'"><font weight="bold" size="4">&nbsp;
register</font></button></big>
</div>
</div>
<span style="color: rgb(102, 51, 0); font-weight: bold;"></span></td>
<td style="width: 702px; background-color: white;">&nbsp;
&nbsp;<img style="width: 677px; height: 431px;" alt="h" src="Top-5-Healthcare-1-1.jpg">&nbsp;</td>
</tr>
</tbody>
</table>
</div>
<div>
<table style="height: 320px; text-align: left; margin-left: auto; margin-right: auto; width: 1029px;" border="0" cellpadding="0" cellspacing="30">
<tbody>
<tr>
<td style="width: 302px;"><img style="width: 300px; height: 200px;" alt="cancer" src="1.jpg"></td>
<td style="width: 296px;"><img src="Diabetes-is-killing-one-patient-every-six-seconds.jpg" alt="diabetes" style="width: 300px; height: 200px;"></td>
<td style="width: 301px;"><img style="width: 300px; height: 200px;" alt="asthama" src="30-asthma.jpg"></td>
</tr>
<tr>
<td style="color: rgb(102, 51, 0); width: 302px;"><span style="font-size: 20px;"><br>Cancer
is a class of diseases characterized by out-of-control cell growth.
There are over 100 different types of cancer, and each is classified by
the type of cell that is initially affected.<br><br>
<br>
<br>
<br>
</span>
<div style="text-align: center;"><a href="cancer.php" target="_top"><span style="font-size: 20px; color: rgb(102, 51, 0);"><button class="btnExample2" value="cancer">&nbsp;
Cancer</button></span></a></div>
</td>
<td style="width: 296px; font-size: 20px;color: rgb(102, 51, 0);"><br>Diabetes
mellitus,commonly referred to as diabetes, is a group of metabolic
diseases in which there are high blood
sugarlevels over a prolonged period.<br>
<br>
<br>
<br>
<br>
<br>
<div style="text-align: center;"><a href="diabetes.php" target="_top"><span style="font-size: 20px; color: rgb(102, 51, 0);"><button class="btnExample2" value="diabetes">&nbsp;<b>
Diabetes</font></button></span></b></a></div>
</td>
<td style="color: rgb(102, 51, 0); width: 301px;"><span style="font-size: 20px;"><br>
Asthma (AZ-ma) is a chronic (long-term) lung disease that inflames and
narrows the airways. Asthma causes recurring periods of wheezing (a
whistling sound when you breathe), chest tightness, shortness of
breath, and coughing.<br>
<br>
<br><br>
</span>
<div style="text-align: center;"><a href="asthma.php" target="_top"><span style="font-size: 20px color: rgb(102, 51, 0);;"><button class="btnExample2" value="asthma">&nbsp;
Asthma</font></button></span></a></div>
<span style="font-size: 18px;"></span></td>
</tr>
</tbody>
</table>
</div></div>

<?php include 'footer.php'; ?>