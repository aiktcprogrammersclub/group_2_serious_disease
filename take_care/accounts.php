
<?php include 'layout.php'; ?><br>
	<div align="center"><form method="post" name="deleting" action="">
			 <input type="text" name="uname">
			<input type="submit" value="Delete User" name="del" class="btnExample3"> || 
	<button name="add" onclick="parent.location='register.php'" class="btnExample3"><font weight="bold" size="4">Add New User</font></button></form><br><br>
	<table align="center" style="width:80%;" cellpadding="5" border="5"></div>
	<?php	
	$result = mysql_query("select * from users");
	$i=1;
	while( $row = mysql_fetch_array($result) )
	{
	echo "<tr><th colspan='2'>User ".$i;
?>
	<tr>
		<td  style="text-align:right;"><br>Name: <br>
			Email: <br>
			User name: <br>
			Country: <br>
			Mobile: <br>
			DOB: <br><br>
		<td  style="text-align:left;"><?php echo $row['name']."<br>".	
						$row['email']."<br>".
						$row['uname']."<br>".
						$row['country']."<br>".
						$row['mob']."<br>".
						$row['dob']; ?>
			<br> </td>
	</tr>		
<?php
	$i++;
	}
	if(isset($_POST['del'])) {
		$uname = $_POST['uname'];
		$query = "delete from users where uname='$uname'";
		if(mysql_query($query)) {
			echo '<script> alert("User deleted successfully."); </script>';
			header("location:accounts.php");
		}	
		else		
			echo '<script> alert("Cannot delete the specified user"); </script>';
			
		
	}
?>	
</table>
</div></div><br>
<?php include 'footer.php';?>