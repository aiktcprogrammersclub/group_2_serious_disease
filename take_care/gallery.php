<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html><head>
<link rel="stylesheet" type="text/css" href="design.css">
<meta content="text/html; charset=ISO-8859-1" http-equiv="content-type"><title>gallery</title>

<style>
div.img {
margin: 10px;
padding: 18px;
border: 0;
height: 150px;
width: 150px;
float: left;
text-align: center;
} div.img img {
display: inline;
margin: 5px;
border: 0:
}
div.img a:hover img {
border: 1px solid #0000ff;
}
div.desc {
text-align: center;
font-weight: normal;
width: 120px;
margin: 5px;
}
</style></head>
<body alink="green" link="green" vlink="green">
<div style="text-align: center; background-color: rgb(234, 198, 127); width: 100%; height: 212px;">
<div style="float: left; background-color: rgb(234, 198, 127); height: 200px; text-align: left; width: 300px;"><big style="font-weight: bold;"><img style="width: 307px; height: 212px;" alt="tc" src="pizap.com14255645201653.jpg"> </big></div>
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
<table style="text-align: left; width: 515px; margin-left: 135px;" border="0" cellpadding="0" cellspacing="0">
<tbody style="margin-left: 23px; width: 585px;">
<tr>
<td> <button class="btnExample" name="home" onclick="parent.location='home.php'"><font weight="bold" size="4">Home</font></button> </td>
      <td> <button class="btnExample" name="gallery" onclick="parent.location='gallery.php'"><font weight="bold" size="4">Gallery</font></button> </td>
      <td> <button class="btnExample" name="feedback" onclick="parent.location='feedback.php'"><font weight="bold" size="4">Feedback</font></button> </td>
      <td> <button class="btnExample" name="blog" onclick="parent.location='blog.php'"><font weight="bold" size="4">Blog</font></button> </td>
      </td>
</tr>
</tbody>
</table>
</div><br>
</div><br>
<div style="width: 100%; background-color: rgb(255, 197, 140); vertical-align: top; height: 1200px; color: rgb(102, 51, 0);">

<div style="text-align: center;"><big>
<span style="font-weight: bold; font-size:30px;"><br><a href="cancer.php">
CANCER</span><br></a>
</big></div>
<div style="">
<div class="img"> <a target="_blank" href="c1.php"><img src="0.jpg" alt="Klematis" height="200" width="150"></a>
</div>
&nbsp;
<div class="img"> <a target="_blank" href="c2.php"><img src="2.jpg" alt="Klematis" height="200" width="150"></a>
</div>
<div class="img"> <a target="_blank" href="c3.php"><img src="3.jpg" alt="Klematis" height="200" width="150"></a>
</div>
<div class="img"> <a target="_blank" href="c4.php"><img src="4.jpg" alt="Klematis" height="200" width="150"></a>
</div>
<div class="img"> <a target="_blank" href="c5.php"><img src="5.jpg" alt="Klematis" height="200" width="150"></a>
</div>
<div class="img"> <a target="_blank" href="c6.php"><img src="6.jpg" alt="Klematis" height="200" width="150"></a>
</div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div style="text-align: center;"><big>
<span style="font-weight: bold;font-size:30px;"><br><a href="diabetes">
DIABETES</span><br></a>
</big></div>
<div style="">
<div class="img"> <a target="_blank" href="d1.php"><img src="d0.jpg" alt="Klematis" height="200" width="150"></a>
</div>
&nbsp;
<div class="img"> <a target="_blank" href="d2.php"><img src="d2.jpg" alt="Klematis" height="200" width="150"></a>
</div>
<div class="img"> <a target="_blank" href="d3.php"><img src="d3.jpg" alt="Klematis" height="200" width="150"></a>
</div>
<div class="img"> <a target="_blank" href="d4.php"><img src="d4.jpg" alt="Klematis" height="200" width="150"></a>
</div>
<div class="img"> <a target="_blank" href="d5.php"><img src="d5.jpg" alt="Klematis" height="200" width="150"></a>
</div>
<div class="img"> <a target="_blank" href="d6.php"><img src="d6.jpg" alt="Klematis" height="200" width="150"></a>
</div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<div style="text-align: center;"><big>
<span style="font-weight: bold;font-size:30px;"><br><a href="asthma.php">
ASTHMA</span><br></a>
</big></div>
<div style="">
<div class="img"> <a target="_blank" href="a1.php"><img src="a1.jpg" alt="Klematis" height="200" width="150"></a>
</div>
&nbsp;
<div class="img"> <a target="_blank" href="a2.php"><img src="a2.jpg" alt="Klematis" height="200" width="150"></a>
</div>
<div class="img"> <a target="_blank" href="a3.php"><img src="a3.jpg" alt="Klematis" height="200" width="150"></a>
</div>
<div class="img"> <a target="_blank" href="a4.php"><img src="a4.jpg" alt="Klematis" height="200" width="150"></a>
</div>
<div class="img"> <a target="_blank" href="a5.php"><img src="a5.jpg" alt="Klematis" height="200" width="150"></a>
</div>
<div class="img"> <a target="_blank" href="a6.php"><img src="a6.jpg" alt="Klematis" height="200" width="150"></a>
</div>
</div>
</div>
<br>
<div style="height: 250px; background-color: rgb(141, 135, 145); vertical-align: top;">
<div style="text-align: center;">
<table style="text-align: left; width: 1170px; height: 202px;" border="0" cellpadding="0" cellspacing="40">
<tbody>
<tr>
<td style="text-align: left; vertical-align: top; height: 162px; width: 345px;">&nbsp;
&nbsp; &nbsp; <img style="width: 145px; height: 100px;" alt="tc" src="pizap.com14255645944244.jpg"><br>
Our
vision is a healthy world
Formed in 1980, this Association is the world's leading voluntary
health organization in diseases care, support and research<span style="font-weight: bold;">.</span> </td>
<td style="vertical-align: top; text-align: center; height: 150px; width: 699px;">
<big style="color: white;"><big><span style="font-weight: bold;">GET SOCIAL WITH US</span></big></big><br>
<table style="width: 782px; height: 150px; text-align: left; margin-left: auto; margin-right: auto;" border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td style="text-align: center;"><img style="width: 100px; height: 100px;" alt="FB" src="fb-logo-grey.png"> &nbsp; &nbsp;&nbsp; <img style="width: 100px; height: 100px;" alt="T" src="twitter-logo-grey1_thumb.png"></td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</body></html>