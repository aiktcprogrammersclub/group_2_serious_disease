<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html><head>

  
  <link rel="stylesheet" type="text/css" href="design2.css">
<title> Take Care </title>
 <?php
	$con= mysql_connect('localhost','root','') or die("Could not connect to server..");
	mysql_select_db('take_care') or die("Could not connect to database..");
?>	
  <meta content="text/html; charset=ISO-8859-1" http-equiv="content-type">
  </head><body style="color: rgb(0, 0, 0);" alink="white" link="white" vlink="white">
<div style="width: 35%; float: left; background-color: rgb(0, 0, 74); color: white; height: 130px; text-align: left;">
<h2>&nbsp;<img style="width: 108px; height: 97px; margin-bottom:10px" alt="" src="dallas%20cowboys.jpg"><big><big><big><big><span style="font-family: Lucida Calligraphy;"> 
<big>Take Care</big></span></big></big></big></big></h2>
</div>
<div style="width: 65%; float: left; background-color: rgb(0, 0, 74); color: white; height: 65px; font-family: Lucida Calligraphy; text-align: right;">
<?php
	if(empty($_SESSION)) 
		session_start();
	if(isset($_SESSION['admin']))
		echo '<big>Hi, <font color="#993333">'.$_SESSION['name'].'</font> | <a href="accounts.php">User Accounts</a></big> | <a href="logout.php">Logout</a></big>'; 
	else if(isset($_SESSION['uname']))
		echo '<big>Hi, <font color="#993333">'.$_SESSION['name'].'</font> | <a href="logout.php">Logout</a></big>'; 
	else
		echo '<big><a href="login.php">Login</a> | <a href="register.php">Register</a></big>';
?>		
</div>
<div style="width: 65%; float: left; background-color: rgb(0, 0, 74); color: white; height: 65px; font-family: Lucida Calligraphy; font-style: italic;">
<table style="width: 100px; text-align: left; margin-left: auto; margin-right: 10px; margin-top: 10px;" border="0" cellpadding="0" cellspacing="0">
  <tbody>
    <tr>
      <td> <button class="btnExample" name="home" onclick="parent.location='home.php'"><font weight="bold" size="4">Home</font></button> </td>
      <td> <button class="btnExample" name="gallery" onclick="parent.location='gallery.php'"><font weight="bold" size="4">Gallery</font></button> </td>
      <td> <button class="btnExample" name="feedback" onclick="parent.location='feedback.php'"><font weight="bold" size="4">Feedback</font></button> </td>
      <td> <button class="btnExample" name="blog" onclick="parent.location='blog.php'"><font weight="bold" size="4">Blog</font></button> </td>
      <td> <button class="btnExample" name="contact" onclick="parent.location='contact_us.php'"><font weight="bold" size="4">Contact us</font></button> </td>
      <td> <big> </big><br>
      </td>
    </tr>
  </tbody>
</table>
</div>


<div style="width:100%; float:left; background-color: rgb(0,0,74); height: 30px; font-family: Lucida Calligraphy; font-style: italic;"> </div>
<div style="width:100%; float:left; height: 10px; font-family: Lucida Calligraphy; font-style: italic;"> </div>

<div style="width:20%; float:left; background-color: rgb(0,0,74); text-align:center; height: 800px; font-family: Lucida Calligraphy; font-style: italic; color:white;"> <big><big>
<br><br><a href="login.php">
Cancer</a>
<br><br><a href="login.php">
Diabetease</a>
<br><br><a href="login.php">
Asthama</a>
</div>
<div style="width:1%; height:800px; float:left; font-family: Lucida Calligraphy; font-style: italic;"> </div>
<div style="width:79%; float:left;">

</body></html>