<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <title>PHP Example #4</title>
</head>

<body>

    <?php
	echo "<p>Grade Calculator</p>";
	$grade = 96.5;
	if ($grade > 100)
		echo "<p>Your grade is an A+</p>";
	elseif ($grade >= 90)
		echo "<p>Your grade is an A</p>";
	elseif ($grade >= 80)
		echo "<p>Your grade is an B</p>";
	elseif ($grade >= 70)
		echo "<p>Your grade is an C</p>";
	elseif ($grade >= 60)
		echo "<p>Your grade is an D</p>";
	else
		echo "<p>Your grade is an E</p>";
	?>

</body>
</html>