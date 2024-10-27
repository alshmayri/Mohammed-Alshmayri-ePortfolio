<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="keywords" content="Color Picker">
     <meta name="description" content="Color Picker">
     <title>Color Mixer</title>
</head>

<body>

	<h1>Color Mixer</h1>
	
	<form action="color2.php" method="post">
	 
	 <p>Choose your two primary colors (additive color model):</p>
	 
	 <p>Color 1:
		<input type="radio" name="color1" value="blue">Blue &nbsp;
		<input type="radio" name="color1" value="green">Green &nbsp;
		<input type="radio" name="color1" value="red">Red &nbsp;
		
	</p>
	<p>Color 2:
		<input type="radio" name="color2" value="blue">Blue &nbsp;
		<input type="radio" name="color2" value="green">Green &nbsp;
		<input type="radio" name="color2" value="red">Red &nbsp;
		
	</p>
		
		<p><input type="submit" value="Mix Color"></p>
	 
	 </form>
   
   
</body>
</html>