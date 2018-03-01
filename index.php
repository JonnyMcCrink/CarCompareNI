<!DOCTYPE html>

<?php include 'database/connect_db.php';
$sql = "SELECT * FROM dealership";
$custResult = $conn->query($sql);
$result = $conn->query($sql);
?>
<html lang="en">
	<head>
	<meta charset="utf-8">
	<title>Car Compare NI</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	</head>

	<body>
		<div class="container">
			<div>
				<table>
					<thead>
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Address Line 1</th>
							<th>Address Line 2</th>
							<th>Town/City</th>
							<th>County</th>
							<th>Post Code</th>
							<th>Phone</th>
							<th>Email</th>
							<th>Stock Count</th>
						</tr>
					</thead>
					<tbody>

					<?php
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
							?>
						<tr width="100%">
							<td width=10% align="center"> <?php echo $row["ID"]; ?> </td>
							<td width=10% align="center"> <?php echo $row["DealershipName"]; ?> </td>
							<td width=10% align="center"> <?php echo $row["dealership_AddressLine_1"]; ?> </td>
							<td width=10% align="center"> <?php echo $row["dealership_AddressLine_2"]; ?> </td>
							<td width=10% align="center"> <?php echo $row["dealership_Town_City"]; ?> </td>
							<td width=10% align="center"> <?php echo $row["dealership_County"]; ?> </td>
							<td width=10% align="center"> <?php echo $row["dealership_Postcode"]; ?> </td>
							<td width=10% align="center"> <?php echo $row["dealership_phone"]; ?> </td>
							<td width=10% align="center"> <?php echo $row["dealership_email"]; ?> </td>
							<td width=10% align="center"> <?php echo $row["stock_amount"]; ?> </td>
						</tr>
					</tbody>

					<?php
					}
					} else{
						echo "0 results";
					}$conn->close();
					?>
				</table>
			</div>
		</div>
	</body>
</html>
