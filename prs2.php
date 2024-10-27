<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="keywords" content="Paper Rock Scissors">
     <meta name="description" content="Paper Rock Scissors">
     <title>Paper Rock Scissors</title>
</head>

<body>

     <h1>Paper Rock Scissors Game</h1>
	 
	<?php
	# get two players move: 0 - paper 1 - rock 2 - scissors
	$choice = substr(filter_input(INPUT_POST, 'choice', FILTER_SANITIZE_NUMBER_INT),0,1);
	$computer = mt_rand(0,2);
	
	# display the users move/hand
	if ($choice == 0)
		echo "<p><img src=\"images/paper1.png\" alt=\"Photo of player hand which is Paper\">&nbsp;";
	elseif ($choice == 1)
		echo "<p><img src=\"images/rock1.png\" alt=\"Photo of player hand which is Rock\">&nbsp;";
	elseif ($choice == 2)
		echo "<p><img src=\"images/scissors1.png\" alt=\"Photo of player hand which is Scissors\">&nbsp;";
	
	# display computers move/hand
	if ($computer == 0)
		echo "<img src=\"images/paper2.png\" alt=\"Photo of computers hand which is Paper\"></p>";
	elseif ($computer == 1)
		echo "<img src=\"images/rock2.png\" alt=\"Photo of computers hand which is Rock\"></p>";
	elseif ($computer == 2)
		echo "<img src=\"images/scissors2.png\" alt=\"Photo of computers hand which is Scissors\"></p>";
	
	# display who won
	if ($choice == $computer)
		echo "<p>It's a draw.</p>";
	elseif ($choice == 0 and $computer == 1)
		echo "<p>You win.</p>";
	elseif ($choice == 0 and $computer == 2)
		echo "<p>You lose.</p>";
	elseif ($choice == 1 and $computer == 0)
		echo "<p>You lose.</p>";
	elseif ($choice == 1 and $computer == 2)
		echo "<p>You win.</p>";
	elseif ($choice == 2 and $computer == 0)
		echo "<p>You win.</p>";
	elseif ($choice == 2 and $computer == 1)
		echo "<p>You lose.</p>";
	
	?>



</body>
</html>