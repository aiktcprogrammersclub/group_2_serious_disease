<?php 
	include 'layout.php';
	$e1=$e2=$e3="";
	if(isset($_POST["alogin"]))
	{
		$uname = mysql_real_escape_string($_POST["uname"]);
		$pw = mysql_real_escape_string($_POST["pw"]);
		if(empty($uname))
			$e1="Username must be entered";
		if(empty($pw))
			$e2="Password must be entered";
		$result =  mysql_query("select * from admins where uname='$uname' and password='$pw'");
		$row = mysql_fetch_array($result);
		$count=mysql_num_rows($result);
		if($count==1)
		{
			session_start(); 
			$_SESSION['name'] = $row['name'];
			$_SESSION['admin'] = $uname;
			header("location: home.php");
		}
		else
		{
			$e3="Invalid username or password";
		}
	}
	else if(isset($_POST["login"]))
	{
		$uname = mysql_real_escape_string($_POST["uname"]);
		$pw = mysql_real_escape_string($_POST["pw"]);
		if(empty($uname))
			$e1="Username must be entered";
		if(empty($pw))
			$e2="Password must be entered";
		$result =  mysql_query("select * from users where uname='$uname' and password='$pw'");
		$row = mysql_fetch_array($result);
		$count=mysql_num_rows($result);
		if($count==1)
		{
			session_start(); 
			$_SESSION['name'] = $row['name'];
			$_SESSION['uname'] = $uname;
			header("location: home.php");
		}
		else
		{
			$e3="Invalid username or password";
		}
	}	
?>  
	<form method="post" action="" name="login">
        <table style="text-align: left; width: 50%; margin-left: auto; margin-right: auto; height: 314px;" cellpadding="2" cellspacing="6">
          <tbody>
            <tr>
              <td colspan="2" rowspan="1" style="vertical-align: top;"><br><font color="red"><big id="t2"><?php echo $e3; ?></big></font>
              </td>
            </tr>
<tr style="color: rgb(102, 0, 0);">
              <td style="height: 49px;" id="cell2"><big>Username:&nbsp; &nbsp;  <br>
              </big></td>
              <td style="vertical-align: top; height: 49px; width: 458px; font-family: Monotype Corsiva;"><big><input name="uname">
              </big><br><font color="red"><?php echo $e1; ?></font></td>
            </tr>
            
            <tr style="color: rgb(102, 0, 0);">
              <td style="height: 78px;" id="cell2"><big>Password:&nbsp; &nbsp;  </big><br>
              </td>
              <td style="vertical-align: top; width: 458px; height: 78px; font-family: Monotype Corsiva;"><big><input name="pw" type="password"> <br>
              </big><font color="red"><?php echo $e2; ?></font></td>
            </tr><tr style="font-weight: bold;" align="center">
              <td rowspan="1" style="vertical-align: top; height: 82px;"><input class="btnExample3" name="login" value="Login" type="submit"></td>
			   <td rowspan="1" style="vertical-align: top; height: 82px; text-align:left;"><input class="btnExample3" name="alogin" value="Admin Login" type="submit"></td>
            </tr><tr style="font-weight: bold; font-family: Monotype Corsiva;" align="center">
              <td colspan="2" rowspan="1" style="vertical-align: top;text-align:right;"><big><big><big><a href="register.php"><small>Click Here to Register</small></a><br>
</big></big></big></td>
            </tr>

          </tbody>
        </table>
</body></html></div></div>
<?php include 'footer.php';?>