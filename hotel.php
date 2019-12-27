<!DOCTYPE html>

<html>		
<body style="background-color:powderblue;">
	<center>
	<h2>Here is your cost of stay !</h2>
	<?php
	$city=$_POST["city"];
	$days=$_POST["days"];
	$people=$_POST["people"];
	
	if(strtolower($city)=="delhi")
	{
		echo "Welcome to $city<br>";
		echo "No. of days : $days<br>";
		echo "No. of people : $people<br>";
		
		$total=5000*$days*$people;
		echo "Total cost : $total<br>";
	}

	if(strtolower($city)=="mumbai")
	{
		echo "Welcome to $city<br>";
		echo "No. of days : $days<br>";
		echo "No. of people : $people<br>";

		$total=6000*$days*$people;
		echo "Total cost : $total<br>";
	
	}
	
	if(strtolower($city)=="kolkata")
	{
		echo "Welcome to $city<br>";
		echo "No. of days : $days<br>";
		echo "No. of people : $people<br>";

		$total=4000*$days*$people;
		echo "Total cost : $total<br>";
	
	}
	
	if(strtolower($city)=="goa")
	{
		echo "Welcome to $city<br>";
		echo "No. of days : $days<br>";
		echo "No. of people : $people<br>";

		$total=4500*$days*$people;
		echo "Total cost : $total<br>";
	
	}
	
	?>
</center>
</body>
</html>
