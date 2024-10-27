<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <title>PHP Example #2</title>
</head>

<body>

     <?php
			echo "<p>Random times table:";
			$num1 = mt_rand(1,12);
			$num2 = mt_rand(1,12);
			$total = $num1 * $num2;
			echo "$num1 * $num2 = $total</p>";
	
	 ?>

</body>
</html>