<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="design.css" /><title>ASTHMA</title>

<script language="javascript" type="text/javascript">
var timerid = 0;
var images = new Array( "a1.jpg",
"a2.jpg",
"a6.jpg",
"a5.jpg",
"a3.jpg");
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
      
</tr>
</tbody>
</table>
</div>
</div><br />
<div style="width=100%">
<div style="width: 20%; float: left; background-color: rgb(234, 198, 127); vertical-align: top; height: 800px; margin-top:10px;">
<big><big><big>
<br><br><a href="cancer.php">
Cancer</a><br><br>
<a href="diabetes.php">
Diabetes</a>
<br><br><a href="asthma.php">
Asthma</a>
</big></big></big>
<ul>
	<li><a href="ra.php">Reason and avoidance</a>
	<li><a href="ta.php">Treatments available at Hospitals</a>
	<li><a href="ia.php">Increasing costs of medicines</a>
	<li><a href="ma.php">Medicine info</a>
	<li><a href="gs.php">Government Schemes</a>
	</ul>

</div></big></big></big>
<div style="width: 2%; float: left; vertical-align: top; height: 800px;"></div>

<div style="width: 78%; float: left; text-align:center; height:500px;">
<span style="color:green; font-size:50px; text-align:center; font-weight:bold;"> Asthma </span><br>
<img style="width: 603px; height: 402px;" id="img1" src="d0.jpg" align="center"><br></div>
<br />
<br />
<div style="width: 78%; float: left; background-color: rgb(255, 197, 140); vertical-align: top;">

<span style="color: rgb(102, 51, 0);"><span style="font-weight: normal;"><span style="color:green; font-size:50px; text-align:center">Asthma</span>
is a disease affecting the airways that carry air to and from your
lungs. People who suffer from this chronic condition long-lasting or
recurrent) are said to be asthmatic.<br />The inside walls of an
asthmatic's airways are swollen or inflamed. This swelling or
inflammation makes the airways extremely sensitive to irritations and
increases your susceptibility to an allergic reaction. As inflammation
causes the airways to become narrower,less air can pass through them,
both to and from the lungs. Symptoms of the narrowing include wheezing
(a hissing sound while breathing), chest tightness, breathing problems,
and coughing. Asthmatics usually experience these symptoms most
frequently during the night and the <br />early morning. Asthma is an
incurable illness. However, with good treatment and management there is
no reason why a person with asthma cannot live a normal and active life.<br />In
some asthma attacks, the airways are blocked such that oxygen fails to
enter the lungs. This also prevents oxygen from entering&nbsp;the blood
stream and traveling to the body's vital organs. Asthma attacks of this
type can be fatal, and the patient may require &nbsp;urgent
hospitalization. Asthma attacks can be mild, moderate, severe and very
severe. At onset, an asthma attack does allow enough air to get into
the lungs, but it does not let the carbon dioxide leave the lungs at a
fast enough rate.&nbsp;<br /><br /></span></span><span style="font-weight: bold; color:green; font-size:30px;">ASTHMA TOPICS</span><br />
<span style="color: rgb(102, 51, 0);"></span>
<ul style="text-align: left; color: rgb(102, 51, 0);">
<li><a href="ra.php" target="_top">Reason and avoidance</a></li>
<li><a href="ta.php" target="_top"><span style="font-size: 12pt; font-family: 'Times New Roman';">Treatments&nbsp;available&nbsp;at&nbsp;Hospitals</span></a></li>
<li><a href="ia.php" target="_top"><span style="font-size: 12pt; font-family: 'Times New Roman';">Increasing&nbsp;costs&nbsp;of&nbsp;medicines</span></a></li>
<li><a href="ma.php" target="_top"><span style="font-size: 12pt; font-family: 'Times New Roman';">Medical&nbsp;Resources&nbsp;</span></a></li><li><a href="gs.php" target="_top"><span style="font-size: 12pt; font-family: 'Times New Roman';">Government&nbsp;Schemes</span></a></li>

</ul>
</div></div>
<br />
<?php include 'footer.php'; ?>