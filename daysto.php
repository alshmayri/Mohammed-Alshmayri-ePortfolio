<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="keywords" content="Extra Credit #4">
     <meta name="description" content="Extra Credit #4">
     <title>Extra Credit #4</title>
</head>

<body>

     <ol>
		<li> <?php
					$today      = new DateTime('now');
					$tomorrow   = new DateTime('tomorrow');
					$difference = $today->diff($tomorrow);
					echo $difference->format('There are %h hours %i minutes and %s seconds left in today');
		
		?>
		<li> <?php
					  $date1 = new DateTime('now');  //current date or any date
					  $date2 = new DateTime("2022-11-08");   //Future date
					  $diff = $date2->diff($date1)->format("%a");  //find difference
					  $days = intval($diff);   //rounding days
					  echo ("There are $days days remaining to Election Day");
					  //it return 365 days omitting current day
		
			?>
		
		<li> <?php 
					  $date1 = new DateTime('now');  //current date or any date
					  $date2 = new DateTime("2021-11-25");   //Future date
					  $diff = $date2->diff($date1)->format("%a");  //find difference
					  $days = intval($diff);   //rounding days
					  echo ("There are $days days remaining to Thanksgiving");
					  //it return 365 days omitting current day
				?>
		<li> <?php 
					  $date1 = new DateTime('now');  //current date or any date
					  $date2 = new DateTime("2022-01-01");   //Future date
					  $diff = $date2->diff($date1)->format("%a");  //find difference
					  $days = intval($diff);   //rounding days
					  echo ("There are $days days remaining to the New Year");
					  //it return 365 days omitting current day
			?>
		
	</ol>	

</body>
</html>