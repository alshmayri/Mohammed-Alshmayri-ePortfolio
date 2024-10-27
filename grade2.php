<!DOCTYPE html>
<html lang="en">
	<head>
		 <meta charset="UTF-8">
		 <meta name="keywords" content="Grade Calculator">
		 <meta name="description" content="Grade Calculator">
		 <title>Grade Calculator</title>
	</head>
<body>

    <h1>Grade Calculator</h1>
	
<?php

	//get data from html form and sanitize it
	$hw1 = substr(filter_input(INPUT_POST, 'hw1', FILTER_SANITIZE_NUMBER_INT),0,3);
	$hw2 = substr(filter_input(INPUT_POST, 'hw2', FILTER_SANITIZE_NUMBER_INT),0,3);
	$hw3 = substr(filter_input(INPUT_POST, 'hw3', FILTER_SANITIZE_NUMBER_INT),0,3);
	$q1 = substr(filter_input(INPUT_POST, 'q1', FILTER_SANITIZE_NUMBER_INT),0,3);
	$q2 = substr(filter_input(INPUT_POST, 'q2', FILTER_SANITIZE_NUMBER_INT),0,3);
	$q3 = substr(filter_input(INPUT_POST, 'q3', FILTER_SANITIZE_NUMBER_INT),0,3);
	$q4 = substr(filter_input(INPUT_POST, 'q4', FILTER_SANITIZE_NUMBER_INT),0,3);
	$q5 = substr(filter_input(INPUT_POST, 'q5', FILTER_SANITIZE_NUMBER_INT),0,3);
	$exam1 = substr(filter_input(INPUT_POST, 'exam1', FILTER_SANITIZE_NUMBER_INT),0,3);

	// Calculate grade
	if ($hw1 == "" or $hw2 == "" or $hw3 == "" or $q1 == "" or $q2 == "" or $q3 == "" or $q4 == "" or $q5 == "" or $exam1 == "")
		exit("Invalid input. You must enter at least 0 for all fields <a href=\"javascript:history.go(-1)\">Go back</a>");
	
	$grade = (($hw1+$hw2+$hw3+$q1+$q2+$q3+$q4+$q5+$exam1)/425)*100;

	echo "<p>Current course grade is " . round($grade,0);
	
	if ($grade >= 90 )
		echo "%, which is an A.</p>";
	elseif ($grade >= 80 )
		echo "%, which is an B.</p>";
	elseif ($grade >= 70 )
		echo "%, which is an C.</p>";
	elseif ($grade >= 60 )
		echo "%, which is an D.</p>";
	else 
		echo "%, which is an E.</p>";
	
	# input validation 
	if ($hw1 == "")
		$hw1 = 0;
	elseif ($hw2 == "")
		$hw2 = 0;
	elseif ($hw3 == "")
		$hw3 = 0;
	elseif ($q1 == "")
		$q1 = 0;
	elseif ($q2 == "")
		$q2 = 0;
	elseif ($q3 == "")
		$q3 = 0;
	elseif ($q4 == "")
		$q4 = 0;
	elseif ($q5 == "")
		$q5 = 0;
	elseif ($exam1 == "")
		$exam1 = 0;
?>

</body>
</html>