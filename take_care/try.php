<?php include 'layout.php'; ?>
	<form name="blog" action="" method ="post">
		Blog Name: <input type="tex" name="name"><br>
		<textarea name="content" rows="25" cols="60"> </textarea>
		<input type="submit" name="post" value="post">
	</form>

	<?php 
		
		if(isset($_POST['post']))
		{
			$name = $_POST['name'];
			$content = $_POST['content'];
			mysql_query("insert into blog_data (name , data) values( '$name' , '$content' )");
			$result = mysql_query("select * from blog_data");
			while($row = mysql_fetch_array($result)) {
			$content = $row['data'];
			$content = nl2br($content);
			echo $content;
			}
		}
	?>
	
	
	