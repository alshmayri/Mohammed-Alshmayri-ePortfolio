<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <title>HFC Tuition Calculator</title>
</head>

<body>

     <h1>Tuition Calculator</h1>
	 
	<?php
	# get and sanitize our user input
	$residency = substr(filter_input(INPUT_POST, 'residency', FILTER_SANITIZE_NUMBER_INT),0,1);
	$lower = substr(filter_input(INPUT_POST, 'lower', FILTER_SANITIZE_NUMBER_INT),0,2);
	$upper = substr(filter_input(INPUT_POST, 'upper', FILTER_SANITIZE_NUMBER_INT),0,2);
	$faid = substr(filter_input(INPUT_POST, 'faid', FILTER_SANITIZE_NUMBER_INT),0,1);
	
	# input validation on credit hour
	if (($lower == "" and $upper == "") or ($lower == 0 and $upper == 0 ))
		exit("Invalid input. You must enter at least 1 credit hour. <a href=\"javascript:history.go(-1)\">Go back</a>");
	elseif ($lower == "")
		$lower = 0;
	elseif ($upper == "")
		$upper = 0;
		
	# decision statement to calculate tuition cost
	if ($residency == 1)
	{
		$residency = "in-district";
		$tuition = ($lower * 105.75) + ($upper * 200) + (($lower + $upper) * 23) + 50 + 60;
	}
	elseif ($residency == 2)
	{
		$residency = "out-of-district";
		$tuition = ($lower * 184.50) + ($upper * 265) + (($lower + $upper) * 23) + 50 + 60;
	}
	elseif ($residency == 3)
	{
		$residency = "Out of State / International Student";
		$tuition = ($lower * 267.50) + ($upper * 350) + (($lower + $upper) * 23) + 50 + 60;
	}
	# output
	echo "<p>Total $residency tuition cost of $lower 100-200 credit hours and $upper 
	300-400 credit hour is $" . number_format($tuition,2) . "</p>";
	
	# decision statement for financial aid
	if ($faid == 2)
	{
		echo "<p>Helpful web pages</p>";
		echo "<p>
				<a href=https://www.hfcc.edu/financial-aid>Financial Aid</a>
				<br>
				<a href=https://www.hfcc.edu/tuition-and-payment/scholarships>Scholarships</a>
				<br>
				<a href=https://www.hfcc.edu/steps/payment>Payment</a>
			</p>";
	}
	?>
	

</body>
</html>