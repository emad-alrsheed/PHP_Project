<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>RegistrationForm_v2 by Colorlib</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>

		<div class="wrapper" style="background-image: url('images/bg-registration-form-2.jpg');">
			<div class="inner">
				<form method="POST" action="../server/signup.php">
					<h3>Registration Form</h3>
					<div class="form-group">
						<div class="form-wrapper">
							<label for="">First Name</label>
							<input name="first_name" type="text" class="form-control">
						</div>
						<div class="form-wrapper">
							<label for="">Last Name</label>
							<input name="last_name" type="text" class="form-control">
						</div>
					</div>
					<div class="form-wrapper">
						<label for="">Username</label>
						<input name="username" type="text" class="form-control">
					</div>
					<div class="form-wrapper">
						<label for="">Email</label>
						<input name="email" type="text" class="form-control">
					</div>
					<div class="form-wrapper">
						<label for="">Password</label>
						<input name="password" type="password" class="form-control">
					</div>
					<div class="form-wrapper">
						<label for="">Confirm Password</label>
						<input type="password" class="form-control">
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox"> I caccept the Terms of Use & Privacy Policy.
							<span class="checkmark"></span>
						</label>
					</div>
					<button type="submit" name="signup" value="Register Now">Register Now</button>
				</form>
			</div>
		</div>
		
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>