<?php 

	$mysqli = new mysqli("localhost", "db2425687", "ManUnited123#", "db2425687");

	if ($mysqli -> connect_errno) {
	  die("Failed to connect to MySQL: ".$mysqli -> connect_error);
	  exit();
	}
	
	// echo ("Connection successful");

	$sql = "SELECT Restaurant_name, Cuisine, Average_price, Opening_date FROM restaurants";
	
	$result = $mysqli->query($sql);
	
	if (!$result) {
		die('Data retrieval failed.');
		exit();
	}	
	// echo ("Data retrieval successful"); 
	
?> 	

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
	<title>Restaurant Names</title>

    <style>
        table {
			border collapse: collapse;
			width: 100%
		}
		
		th, td {
		    border: 1px solid black;
			padding: 8px
			text-align: left;
		}
		
		th {
			background-color: #eeeeee;
		}
		
	</style>
</head>

<body>
    <h1>Restaurant Names</h1>
	
	<table>
	    </thead>
		    <tr>
			    <th>Restaurant name</th>
				<th>Cuisine</th>
				<th>Average Price</th>
				<th>Opening date</th>
			</tr>
		</thead>
		
		<tbody>
		    <?php while ($a_row = mysqli_fetch_assoc($result)): ?>		
				<tr>
					<td><?= $a_row['Restaurant_name']?> </td>
					<td><?= $a_row['Cuisine'] ?> </td> 
					<td>&pound<?= $a_row['Average_price'] ?> </td>
					<<td><?= $a_row['Opening_date'] ?></td>
				</tr>
			<?php endwhile; ?>
		</tbody>
	</table>
	
	<?php mysqli_free_result($result); ?>
</body>
</html> 