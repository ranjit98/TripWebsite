<!DOCTYPE html>

<html>
<body style="background-color:lightgreen;">
	<center>
	<h2>Here is your cost of travel !</h2>
	<?php
	$city=$_POST["city"];
	$days=$_POST["days"];
	$people=$_POST["people"];
	if(strtolower($city)=="delhi")
	{
		echo "Welcome to ".$city."<br>";
		echo "No. of days : ".$days."<br>";
		echo "No. of people : ".$people."<br>";

		echo "Availability of bus : YES<br/>";
		echo "Availability of train : YES<br/>";
		echo "Availability of metro : YES<br/>";
		echo "Availability of aeroplane : YES<br/>";
		
		$total=1000*($days)*($people);
		echo "Total travel cost for city tour  by bus: $total<br/>";
		echo "Total travel cost for city tour by metro : ".($total+100)."<br/>";
	}


	if(strtolower($city)=="mumbai")
	{
		echo "Welcome to ".$city."<br/>";
		echo "No. of days : ".$days."<br/>";
		echo "No. of people : ".$people."<br/>";

		echo "Availability of bus : YES<br/>";
		echo "Availability of train : YES<br/>";
		echo "Availability of metro : YES<br/>";
		echo "Availability of aeroplane : YES<br/>";
		

		$total=800*$days*$people;
		echo "Total travel cost for city tour by bus : $total<br/>";
		echo "Total travel cost for city tour by metro : ".($total+100)."<br/>";
	
	}
	
	if(strtolower($city)=="kolkata")
	{
		echo "Welcome to ".$city."<br/>";
		echo "No. of days : ".$days."<br/>";
		echo "No. of people : ".$people."<br/>";

		echo "Availability of bus : YES<br/>";
		echo "Availability of train : YES<br/>";
		echo "Availability of metro : YES<br/>";
		echo "Availability of aeroplane : YES<br/>";

		$total=700*($days)*($people);
		echo "Total travel cost for city tour by bus : $total<br/>";
		echo "Total travel cost for city tour by metro : ".($total+100)."<br/>";
	
	}
	
	if(strtolower($city)=="goa")
	{
		echo "Welcome to ".$city."<br/>";
		echo "No. of days : ".$days."<br/>";
		echo "No. of people : ".$people."<br/>";

		echo "Availability of bus : YES<br/>";
		echo "Availability of train : YES<br/>";
		echo "Availability of metro : NO<br/>";
		echo "Availability of aeroplane : YES<br/>";

		$total=600*($days)*($people);
		echo "Total tavel cost for goa tour by bus: $total<br/>";
	
	}
	
	?>
</center>
</body>
</html>
