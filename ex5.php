<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <title>PHP Example #5</title>
</head>

<body>

    <?php
	$num = rand(1,4);
	echo "<h2>Recommended Movie Web Sites (Refresh for new Recommendation)</h2>";
	if ($num == 1)
		echo "<p><a href=\"https://www.netflix.com/\">https://www.netflix.com/</a></p>";
	elseif ($num == 2)
		echo "<p><a href=\"https://www.hulu.com/\">https://www.hulu.com/</a></p>";
	elseif ($num == 3)
		echo "<p><a href=\"https://www.sonypictures.com/movies\">https://www.sonypictures.com/movies</a></p>";
	elseif ($num == 4)
		echo "<p><a href=\"https://www.disneyplus.com/\">https://www.disneyplus.com/</a></p>";
	?>

</body>
</html>