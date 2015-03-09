<?php
	$nameE = $emailE = $unameE = $pw1E = $pw2E = $mobE = $acceptE = "";
	if(isset($_POST["register"]))
	{
		$name=$_POST["name"];
		$email=$_POST["email"];
		$uname=$_POST["uname"];
		$pw1=$_POST["pw1"];
		$pw2=$_POST["pw2"];
		$mob=$_POST["mob"];
		$country=$_POST["country"];
		$dob=$_POST["dob"];
		if(empty($name))
			$nameE="You must enter a name";
		else if(!preg_match("/^[a-zA-Z ]+$/",$name))
			$nameE="Only letters and white space allowed";
		if(empty($email))
			$emailE="You must enter an email id";
		else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
			$emailE="Not a valid email id";
		if(empty($uname))
			$unameE="You must select a username";	
		if(strlen($pw1) < 8)
			$pw1E="Pasword length must be atleast 8 charachters";
		else if($pw1 != $pw2)
			$pw2E="Entered passwords are not matching";
		if(empty($mob))
			$mobE="You must enter your mobile number";
		else if(strlen($mob) != 10 || !is_numeric($mob))
			$mobE="Not a valid mobile number";
		if(!isset($_POST["accept"]))
			echo '<script> alert("You must agree to the terms & conditions of the website"); </script>';
		if( empty($nameE) && empty($emailE) && empty($unameE) && empty($pw1E) && empty($pw2E) && empty($mobE) && isset($_POST["accept"]))
		{
			$sql= "INSERT INTO users (name, email,uname, password, country, mob, dob) VALUES ('$name', '$email', '$uname', '$pw1', '$country', '$mob', '$dob')";
			if(!mysql_query($sql))
				echo '<script> alert("The user name is not available")</script>';
			else
				header("location: notify.php");
		}	
	}
?>