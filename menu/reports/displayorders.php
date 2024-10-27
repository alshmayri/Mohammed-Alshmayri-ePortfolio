<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="keywords" content="CIS Restaurant, Lunch Menu">
	<meta name="description" content="CIS Restaurant: Lunch Menu">
	<title>CIS Restaurant Menu</title>
	<link rel="stylesheet" type="text/css" href=" ../style.css">
	<style>
	table {
		border-collapse:	collapse;
	}
	th	{
		background-color:		#876019;
		color:					white;
		padding:				7px;
	}
	tr:hover  {
		background-color:		#dbcbad;
		text-align:				center;
	}
	td, th {
		font-size:				1.05vw;
	}
	td {
		text-align:				center;
	}
	.tablectr {
		margin-left:			auto;
		margin-right:			auto;
	}
	p {
		text-align: 			center;
	}
	</style>
</head>

<body>
<div id="container">
<h2 class="blue center">CIS 122 Restaurant - Menu Orders</h2>

<?php
// database login credentials
include('../../../connect.php');
// Establish database connection with PDO
try {
 $DBH = new PDO("mysql:host=$host;dbname=$database", $username, $password);
}
catch(PDOException $e) {
 echo $e->getMessage();
}
// Run Query
$sql= "SELECT * FROM payment ORDER BY orderdate DESC";
$stmt = $DBH->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();

echo "<table id=\"myTable2\" class=\"table2 tablectr\">";
echo "<tr><th onclick=\"sortTable(0)\">Payment No</th>
	<th onclick=\"sortTable(1)\">Order Date/Time</th>
	<th onclick=\"sortTable(2)\">Last Name</th>
	<th onclick=\"sortTable(3)\">First Name</th>
	<th onclick=\"sortTable(4)\">Phone No</th>
	<th onclick=\"sortTable(5)\">Email</th>
	<th>SubTotal</th>
	<th>Taxes</th>
	<th>Discount</th>
	<th>Total</th>
	<th>Details</th></tr>";
foreach($result as $row)
{
	echo '<tr">';
	echo "<td>". htmlspecialchars($row['payment_id']) . "</td>";
	$newdate = date( 'm/d/y g:i A', strtotime($row['orderdate']));
	echo "<td>" . $newdate . "</td>";
	echo "<td>" . htmlspecialchars($row['lastname']) . "</td>";
	echo "<td>" . htmlspecialchars($row['firstname']) ."</td>";
	echo "<td>(" . htmlspecialchars($row['phone1']) . ") ";
	echo htmlspecialchars($row['phone2']) . "-";
	echo htmlspecialchars($row['phone3']) ."</td>";
	echo "<td>" . htmlspecialchars($row['email']) . "</td>";
	echo "<td>$" . htmlspecialchars($row['subtotal']) ."</td>";
	echo "<td>$" . htmlspecialchars($row['taxes']) ."</td>";
	echo "<td>$" . htmlspecialchars($row['discount']) ."</td>";
	echo "<td>$" . htmlspecialchars($row['total']) ."</td>";
	echo "<td><a href=\"displayorders2.php?payment_id=" . htmlspecialchars($row['payment_id'])
. "\">Details</a></td>";
echo "</tr>";
}
echo "</table>";

// Close database connection
$DBH = null;
?>
<br>
</div>
<br>
</body>
</html>