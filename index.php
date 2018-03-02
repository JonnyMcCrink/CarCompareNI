<!DOCTYPE html>

<?php include 'database/connect_db.php';
$sql = "SELECT * FROM dealership";
$custResult = $conn->query($sql);
$result = $conn->query($sql);
?>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--Linking to the external jQuery Library -->
		<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
		
		<!--Linking to an external Font Library -->
		<script src="https://use.fontawesome.com/ee4234232f.js"></script>
				
		<!--Linking to the external CSS Style sheet where the styling of this webpage comes from -->
		<link href="CSS/CarCompareNI-main.css" rel="stylesheet">
		
		<!--Linking to the local jQuery script file where the functionality of this webpage comes from -->
		<script src="scripts/ccni-script.js"></script>
	</head>
	
	<body>
		
		<!--<nav id="home">
			<div class="navbar">
				<a class="menu" href="#home">Home</a>
				<a class="menu" href="#history">VW's History</a>
				<a class="menu" href="#throughTheYears">Through the Years</a>
				<a class="menu" href="#gallery">Gallery</a>
				<a class="menu" href="#Golf_Range">The VW Golf Range</a>
				<a class="menu" href="#AnimatedGolf">Add Your Reg to a Golf</a>
				<a class="menu" href="#emailSignUp">Sign Up for Updates</a>			
			</div>
		</nav>-->

		<section id="home" class="main_banner" >
			<div class="container">
				<div>
					<div class="text">
						<h2 class="title">CAR COMPARE NI</h2>
						<p class="sub-title">
							UUJ Final Year Project<br>
							Jonathan McCrink-B00656761<br>
						</p>	
					</div>
				</div>
			</div>
		</section>
		
		<section id="history" class="about" >
			<div class="container">
				<div class="section-title">
					<p>
						Welcome to Car Compare NI..
					</p>
				</div>
				<div class="history" >
					Welcome to Car Compare NI...<br>
				
					<div align="center">
						<button class="historyButtons" id="ReadMore">Launch Site <i class="fa fa-arrow-down" aria-hidden="true"></i></button>
					</div>									
				</div>
				
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
		</section>
		<br>
		<footer class="footer">
			<div class="container">
			&copy; <script>var dteNow = new Date(); var intYear = dteNow.getFullYear(); document.write(intYear); </script>
			Car Compare NI <br>Designed and developed by <a href="mailto:McCrink-J@ulster.ac.uk">Jonathan McCrink</a>	
			</div>
		</footer>	
	</body>
</html>
