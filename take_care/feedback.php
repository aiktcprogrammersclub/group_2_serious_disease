<?php
	include 'layout.php';
	echo '<h1>Customer Reviews</h1><br>';
	$result = mysql_query("select * from feedback");
	$count = mysql_num_rows($result);
	$count = $count * 2 / 100;
	$result = mysql_query("select sum(content),sum(ease),sum(visual),sum(recommend),sum(rate) from feedback");
	$row = mysql_fetch_array($result);

	echo '<table style="width:50%;">';	
	echo "<tr><td>Content:<td>".$row['sum(content)']/$count."%";
	echo "<tr><td>Ease of Navigation:<td>".$row['sum(ease)']/$count."%";
	echo "<tr><td>Visuals:<td>".$row['sum(visual)']/$count."%";
	echo "<tr><td>Plans for Recommendation:<td>".$row['sum(recommend)']/$count."%";
	echo "<tr><td>Overall Rating:<td>".$row['sum(rate)']/$count."%";
	
?>	
  <tr><th colspan="2"> <button onclick="parent.location='feedback2.php'" class="btnExample2"> Give Feedback </button>
  </table>
  </div></div>
  <?php include 'footer.php';?>