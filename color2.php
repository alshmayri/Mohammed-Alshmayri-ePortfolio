<?php
# get data from the previous page
$color1 = substr(filter_input(INPUT_POST, 'color1', FILTER_SANITIZE_STRING),0,8);
$color2 = substr(filter_input(INPUT_POST, 'color2', FILTER_SANITIZE_STRING),0,8);

# run your decision statement to determine the mixed color
if (($color1 == "blue" and $color2 == "green") or
	($color2 == "blue" and $color1 == "green"))
	$color = "Cyan";
elseif (($color1 == "blue" and $color2 == "red") or
	($color2 == "blue" and $color1 == "red"))
	$color = "Magenta";
elseif (($color1 == "green" and $color2 == "red") or
	($color2 == "green" and $color1 == "red"))
	$color = "Yellow";
elseif ($color1 == $color2 and $color1 == "green")
	$color = "Green";
elseif ($color1 == $color2 and $color1 == "blue")
	$color = "Blue";
elseif ($color1 == $color2 and $color1 == "red")
	$color = "Red";
	
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="keywords" content="Color Picker">
     <meta name="description" content="Color Picker">
     <title>Color Mixer</title>
	 <style>
	 .center-div
	 {
	margin: 0 auto;
	height: 300px;
	width: 80%;
	background-color: *** <?php if($color == "Cyan") 
								echo "<p style='color:cyan';background-color:cyan;>";
								elseif($color == "Magenta")
								echo "<p style='color:magenta';background-color:Magenta;>";
								elseif($color == "Yellow")
								echo "<p style='color:yellow';background-color:Yellow;>";
								elseif($color == "Green")
								echo "<p style='color:green';background-color:Green;>";
								elseif($color == "Blue")
								echo "<p style='color:blue';background-color:Blue;>";
								elseif($color == "Red")
								echo "<p style='color:red';background-color:Red;>";
								?> ***
	text-align: center;
	}
	 </style>
</head>

<body>

	<div class="center-div">
		<h2> <?php if($color == "Cyan") 
					echo "<p>Cyan is your mixed color</p>";
					elseif($color == "Magenta") 
					echo "<p>Magenta is your mixed color</p>";
					elseif($color == "Yellow") 
					echo "<p>Yellow is your mixed color</p>";
					elseif($color == "Green") 
					echo "<p>Green is your mixed color</p>";
					elseif($color == "Blue") 
					echo "<p>Blue is your mixed color</p>";
					elseif($color == "Red") 
					echo "<p>Red is your mixed color</p>";
				?> </h2>
	
	</div>


 
</body>
</html>