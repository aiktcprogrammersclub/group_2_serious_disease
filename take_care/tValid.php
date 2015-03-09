<?php
	

	$cnoE = $cnameE = $cwE = $edE = $dnoE = "";
	if(isset($_POST["pay"]))
	{
		$cname = $_POST["cname"];
		$cno = $_POST["cno"];
		$cw = $_POST["cw"];
		$m = $_POST["m"];
		$y = $_POST["y"];
		$dno = $_POST["dno"];
		
		$year = date("Y");
		$month = date("m");
		if(!is_numeric($cno) || strlen($cno) != 16 )
			$cnoE="You must enter a valid card number";
		if(!is_numeric($dno))
			$dnoE="You must enter a valid amount";	
		if(empty($cname) || !preg_match("/^[a-zA-Z ]+$/",$cname))
			$cnameE="You must enter the exact name specified on your card";	
		if(strlen($cw) != 3 || !is_numeric($cw))
			$cwE="You must enter the valid CVC2 / CW2";
		if($m < 1 || $m >13 || !is_numeric($m) || !is_numeric($y))
			$edE = "The date entered was not valid";
		if(($y < $year) || ($y == $year && $m < $month))
			$edE = "Your card has expired";

			
		if( empty($cnoE) && empty($cnameE) && empty($cwE) && empty($dateE) && empty($dnoE) && empty($edE))
		
				echo '<script> alert("Your amount was transferred successfully."); </script>';
			
			
			
	}
?>