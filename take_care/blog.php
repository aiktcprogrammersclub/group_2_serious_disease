<?php include 'layout.php'; ?>

<div style="width: 100%; background-color:white; float: left; vertical-align: top; font-size:18px; color:rgb(102,51,0);"><big>

<div align="center"> 
	<button name="add" onclick="parent.location='add_post.php'" class="btnExample2"><font weight="bold" size="4">New Post</font></button></form><br><br>
	<table align="center" style="width:80%;" cellpadding="5"></div>
	<?php	
	$result = mysql_query("select * from blog_data");
	$i=1;
	while( $row = mysql_fetch_array($result) )
	{
	
?>
	<tr>
		<td  style="text-align:right; color:green;">Posted by,<big><b><br><?php echo $row['uname']; ?>:</big></b>
		
		<td  style="text-align:left;"><h2><?php echo $row['title'];?><br><br></td>
	<tr><td> </td>
		<td></h2><?php 
				$img = $row['image'];
				echo "<img width=300 height=300 align='right' src='images/".$img."'>";
				echo '<br/><br>';
				$data = $row['data'];
				$data = nl2br($data);
				echo $data; ?>
				<br><br><hr> </td>
				
	</tr>		
<?php
	$i++;
	}
?>	
</table>
</div></div></div><br>
<?php include 'footer.php';?>

