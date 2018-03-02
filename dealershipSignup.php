<?php include 'database/connect_db.php';
$sql = "SELECT * FROM dealership";
$custResult = $conn->query($sql);
$result = $conn->query($sql);
?>
<?php include 'includes/landing-header.php'; ?>

<section id="dealershipSignupHead" class="main_banner" >
	<div class="container">
		<div>
			<div class="text">
				<h2>REGISTER WITH<br>CAR COMPARE NI</h2>
			</div>
		</div>
	</div>
</section>

<section id="dealershipSignup" class="about" >
	<div class="container">
		<div class="signUpIntro">
			<div class="col-lg-4 col-md-4 col-sm-4">
				<p style="font-size:23px">YOU'RE JUST 6 STEPS AWAY!<br></p>
				<p class="col-lg-3 col-md-3 col-sm-3">
					Step 1:
				</p>
				<p class="col-lg-9 col-md-9 col-sm-9">
					Complete the registration form, filling in your company details and click REGISTER!
				</p><br>
				<p class="col-lg-3 col-md-3 col-sm-3">
					Step 2:
				</p>
				<p class="col-lg-9 col-md-9 col-sm-9">
					Obtain your website domain and Admin login details.
				</p><br>
				<p class="col-lg-3 col-md-3 col-sm-3">
					Step 3:
				</p>
				<p class="col-lg-9 col-md-9 col-sm-9">
					Go to your new site using the domain from Step 2 and login to the Admin dashboard.
				</p><br>
				<p class="col-lg-3 col-md-3 col-sm-3">
					Step 4:
				</p>
				<p class="col-lg-9 col-md-9 col-sm-9">
					Add your company branding to your website!
				</p><br>
				<p class="col-lg-3 col-md-3 col-sm-3">
					Step 5:
				</p>
				<p class="col-lg-9 col-md-9 col-sm-9">
					Add your current stock file to your website!
				</p><br>
				<p class="col-lg-3 col-md-3 col-sm-3">
					Step 6:
				</p>
				<p class="col-lg-9 col-md-9 col-sm-9">
					Invite your customers to visit your new website and start to notice your sales grow!
				</p><br>
			</div>	
			<div class=" col-lg-8 col-md-8 col-sm-8">
				<p style="font-size:23px">YOUR COMPANY REGISTRATION<br></p>
				
				<form action="insertDealership.php" method="get" name="dealershipRegistration" onsubmit="return validateRegistration()">
					<p><h5>Fields marked with a * are required</h5>
					<fieldset>
						<div class="col-lg-6 col-md-6 col-sm-6">
							<div class="form-group">
								<label for="inputOwnerName" class="col-lg-3 col-md-3 col-sm-3 control-label">Owner:<font color="red">*</font></label>
								<div class="col-lg-9 col-md-9 col-sm-9">
									<input type="text" class="form-control" name="ownerName" placeholder="Your Name">
								</div>
							</div>
							<div class="form-group">
								<label for="inputCompName" class="col-lg-3 col-md-3 col-sm-3 control-label">Name:<font color="red">*</font></label>
								<div class="col-lg-9 col-md-9 col-sm-9">
									<input type="text" class="form-control" name="compName" placeholder="Your Company's Name">
								</div>
							</div>
							<div class="form-group">
								<label for="inputTel" class="col-lg-3 col-md-3 col-sm-3 control-label">Phone:<font color="red">*</font></label>
								<div class="col-lg-9 col-md-9 col-sm-9">
									<input type="text" class="form-control" name="compTel" placeholder="Company Phone Number">
								</div>
							</div>
							<div class="form-group">
								<label for="inputCompEmail" class="col-lg-3 col-md-3 col-sm-3 control-label">Email:<font color="red">*</font></label>
								<div class="col-lg-9 col-md-9 col-sm-9">
									<input type="email" class="form-control" name="compEmail" placeholder="Company Email Address">
								</div>
							</div>
							<div class="form-group">
								<label for="inputstockAmount" class="col-lg-3 col-md-3 col-sm-3 control-label">Stock:</label>
								<div class="col-lg-9 col-md-9 col-sm-9">
									<input type="number" class="form-control" name="compStockAmount" placeholder="Number of cars currently for sale">
								</div>
							</div>
							

						</div>
						<div class="col-lg-6 col-md-6">
							<div class="form-group">
								<label for="inputCompAddress1" class="col-lg-3 col-md-3 col-sm-3 control-label">Address:<font color="red">*</font></label>
								<div class="col-lg-9 col-md-9 col-sm-9">
									<input type="text" class="form-control" name="compAddress1" placeholder="Address Line 1">
								</div>
							</div>
							<div class="form-group">
								<label for="inputCompAddress2" class="col-lg-3 col-md-3 col-sm-3 control-label"><font color="red"></font></label>
								<div class="col-lg-9 col-md-9 col-sm-9">
									<input type="text" class="form-control" name="compAddress2" placeholder="Address Line 2">
								</div>
							</div>
							
							<div class="form-group">
								<label for="inputCompTown" class="col-lg-3 col-md-3 col-sm-3 control-label">Town/City:<font color="red">*</font></label>
								<div class="col-lg-9 col-md-9 col-sm-9">
									<input type="text" class="form-control" name="compTown" placeholder="Company Town / City">
								</div>
							</div>
							
							<div class="form-group">
								<label for="inputCompCounty" class="col-lg-3 col-md-3 col-sm-3 control-label">County:<font color="red">*</font></label>
								<div class="col-lg-9 col-md-9 col-sm-9">
									<input type="text" class="form-control" name="compCounty" placeholder="Company County">
								</div>
							</div>
							
							<div class="form-group">
								<label for="inputCompPcode" class="col-lg-3 col-md-3 col-sm-3 control-label">Postcode:<font color="red">*</font></label>
								<div class="col-lg-9 col-md-9 col-sm-9">
									<input type="text" class="form-control" name="compPcode" placeholder="Company Postcode">
								</div>
							</div>
						</div>
						<button type="submit "class="formSubmit" id="register">
							REGISTER <i class="fa fa-arrow-circle-right"></i>
						</button>
					</fieldset>
				</form><br>
				
				<div class="signUpLogo">
					<img src="images/logo.png">
				</div>
				
			</div>
		</div>
	</div>
</section>
<br>
<?php include 'includes/main-footer.php'; ?>

