<?php
	include 'layout.php';
	if(isset($_SESSION['uname']))
		$uname = $_SESSION['uname'];
	else if(isset($_SESSION['admin']))
		$uname = $_SESSION['admin'];
	else
		header("location: login.php");	
?>

<form action="add_post.php" method="post" name="blog_data" enctype="multipart/form-data">
	<table style="width:80%" align="center">
		<tr><td>
			Title:<br><input type="text" name="title" style="width:460px;"><br><br>
			Image: <input type="file" name="file"><br><br>
			Data: <br><textarea rows="20" cols="80" name="data"></textarea><br><br>
			
			<input type="submit" name="post" value="post" class="btnExample3" >
	</table>
</form>	
			
<?php
	if(isset($_POST['post'])) { 
		$title = $_POST['title'];
		$data = $_POST['data'];
		$file = $_FILES['file'];
		$file_name = $file['name'];
		$file_type = $file['type'];
		$file_size = $file['size'];
		$file_path = $file['tmp_name'];
		
		
		if($file_name!="")
			if(move_uploaded_file($file_path,'images/'.$file_name))
				if(mysql_query("insert into blog_data values('','$uname','$title','$file_name','$data')"))
					header("location: blog.php");
	}		
?>			
			</div></div><br>
	<?php include 'footer.php';?>		