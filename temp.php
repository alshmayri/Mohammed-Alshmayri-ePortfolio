<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="keywords" content="Average Temperature Calculator">
     <meta name="description" content="Average Temperature Calculator">
	 <link rel="stylesheet" type="text/css" href="css/temp.css">
     <title>Average Temperature Calculator</title>
</head>

<body>

     <h1>Average Temperature Calculator</h1>
	 
	 <p><img src="images/sky.jpg" alt="Image of the sky"/></p>
	 
	 <form action="temp2.php" method="post">
	 
		<table>
		
			<tr>
				<td><label for="zipcode">Zip Code:</label></td>
				<td><input type="number" id="zipcode" name="zipcode" min="0" max="99999"><td>
			</tr>
			<tr>
				<td><label for="monday">Monday:</label></td>
				<td><input type="number" name="monday" min="-20" max="150"><td>
			</tr>
			<tr>
				<td><label for="tuesday">Tuesday:</label></td>
				<td><input type="number" name="tuesday" min="-20" max="150"><td>
			</tr>
			<tr>
				<td><label for="wednesday">Wednesday:</label></td>
				<td><input type="number" name="wednesday" min="-20" max="150"><td>
			</tr>
			<tr>
				<td><label for="thursday">Thursday:</label></td>
				<td><input type="number" name="thursday" min="-20" max="150"><td>
			</tr>
			<tr>
				<td><label for="friday">Friday:</label></td>
				<td><input type="number" name="friday" min="-20" max="150"><td>
			</tr>
			<tr>
				<td><label for="saturday">Saturday:</label></td>
				<td><input type="number" name="saturday" min="-20" max="150"><td>
			</tr>
			<tr>
				<td><label for="sunday">Sunday:</label></td>
				<td><input type="number" name="sunday" min="-20" max="150"><td>
			</tr>
			<tr>
			<td><input type ="submit" value="Calculate"></td>
			</tr>
			
			
			
		</table>
	 
	 </form> 
	 

</body>
</html>