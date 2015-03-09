<?php include 'layout.php'; ?>

<form method="post" action="" name="feedback">
	<table style="width:90%;">
		<tr><td style="text-align:center;">
			<br>Your Name:&nbsp;&nbsp; <input type="text" name="name"><br>
			Your Email:&nbsp;&nbsp; <input type="text" name="email"><br><br>
			<br>
		<tr>
			<td>1. Were you able to find out the information you were looking for? <br>
			&nbsp;&nbsp; <input type="radio" name="r1" value="2"> Yes I did. <br>
				&nbsp;&nbsp; <input type="radio" name="r1" value="1"> Not exactly what I was looking for. <br>
				&nbsp;&nbsp; <input type="radio" name="r1" value="0"> No I didn't. <br>
		<tr>
			<td>2. Was it easy to navigate on our website? <br>
			&nbsp;&nbsp; <input type="radio" name="r2" value="2"> Yes, it was easy. <br>
				&nbsp;&nbsp; <input type="radio" name="r2" value="1"> Neither easy nor difficult. <br>
				&nbsp;&nbsp; <input type="radio" name="r2" value="0"> No, it was difficult. <br>
		<tr>
			<td>3. How visually appealing our website is? <br>
			&nbsp;&nbsp; <input type="radio" name="r3" value="2"> Very much. <br>
				&nbsp;&nbsp; <input type="radio" name="r3" value="1"> Not much. <br>
				&nbsp;&nbsp; <input type="radio" name="r3" value="0"> Not at all. <br>
		<tr>
			<td>4. How likely is it that you would recommend this website to a friend? <br>
			&nbsp;&nbsp; <input type="radio" name="r4" value="2"> Very much. <br>
				&nbsp;&nbsp; <input type="radio" name="r4" value="1"> Not much. <br>
				&nbsp;&nbsp; <input type="radio" name="r4" value="0"> Not at all. <br>
		<tr>
			<td>5. How will you rate us out of 5? <br>
			&nbsp;&nbsp; <input type="radio" name="r5" value="2"> More than 3. <br>
				&nbsp;&nbsp; <input type="radio" name="r5" value="1"> 3. <br>
				&nbsp;&nbsp; <input type="radio" name="r5" value="0"> Less than 3.
		<tr>
			<td>6. What you liked most about our website? <br>
			 &nbsp;&nbsp; <textarea name="best" cols="70" rows="3"></textarea>
		<tr>
			<td>7. Do you have any suggestions for improvements? <br>
			&nbsp;&nbsp; <textarea name="sug" cols="70" rows="3"></textarea>
		<tr>
			<th colspan="2"> <input type="submit" name="sub" value="submit" class="btnExample3">
	</table>
</form>	
	
<?php
	if(isset($_POST['sub'])) {
		$name = $_POST['name'];
		if($name=='')
			echo '<script> alert("Name field cannot be left empty."); </script> ';
		$email = $_POST['email'];
		if($email=='')
			echo '<script> alert("Email field cannot be left empty."); </script> ';
		$r1 = $_POST['r1'];
		$r2 = $_POST['r2'];
		$r3 = $_POST['r3'];
		$r4 = $_POST['r4'];
		$r5 = $_POST['r5'];
		$best = $_POST['best'];
		$sug = $_POST['sug'];
		if(mysql_query("insert into feedback values('','$name','$email','$r1','$r2','$r3','$r4','$r5','$best','$sug')"))
			echo '<script> alert("Thank you for providing feedback"); </script> ';
	}
?>	</div></div>
<?php include 'footer.php';?>