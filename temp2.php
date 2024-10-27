<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="keywords" content="Average Temperature Calculator">
     <meta name="description" content="Average Temperature Calculator">
     <title>Average Temperature Calculator</title>
</head>

<body>

     <h1>Average Temperature Calculator</h2>
	 
	 <?php
		$zipcode = substr(filter_input(INPUT_POST, 'zipcode', FILTER_SANITIZE_NUMBER_INT),0,5);
		$monday = substr(filter_input(INPUT_POST, 'monday', FILTER_SANITIZE_NUMBER_INT),0,5);
		$tuesday = substr(filter_input(INPUT_POST, 'tuesday', FILTER_SANITIZE_NUMBER_INT),0,5);
		$wednesday = substr(filter_input(INPUT_POST, 'wednesday', FILTER_SANITIZE_NUMBER_INT),0,5);
		$thursday = substr(filter_input(INPUT_POST, 'thursday', FILTER_SANITIZE_NUMBER_INT),0,5);
		$friday = substr(filter_input(INPUT_POST, 'friday', FILTER_SANITIZE_NUMBER_INT),0,5);
		$saturday = substr(filter_input(INPUT_POST, 'saturday', FILTER_SANITIZE_NUMBER_INT),0,5);
		$sunday = substr(filter_input(INPUT_POST, 'sunday', FILTER_SANITIZE_NUMBER_INT),0,5);
		
		
		if ($zipcode == "" or $monday == "" or $tuesday == "" or $wednesday == "" or $thursday == "" or $friday == "" or $saturday == "" or $sunday == "")
		exit("Invalid input. You must enter at least 0 for all fields <a href=\"javascript:history.go(-1)\">Go back</a>");
	
	$average = ($monday+$tuesday+$wednesday+$thursday+$friday+$saturday+$sunday)/7;
	
	echo "<p>Average weekly temperature is: " . round($average,0);
	
	if ($average >= 100 )
		echo " degrees. <br> <br> That's hot.</p>";
	elseif ($average >= 75 )
		echo " degrees. <br> <br> That's warm.</p>";
	elseif ($average >= 50 )
		echo " degrees. <br> <br> That's chilly.</p>";
	elseif ($average < 50 )
		echo " degrees. <br> <br> That's cold.</p>";
		
?>

	<p>Look up weather information at
	<a href= https://www.almanac.com/weather/history/zipcode/ + $zipcode >The Old Farmer's Almanac</a>
	</p>
	
	
</body>
</html>