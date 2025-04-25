<!-- Chapter 2, Exercise 2-5
Coast City Computers Contact Page -->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contact Us</title>
</head>
<body style="background-color: lightgreen;">
	<?php include "ccc_header.php"; ?>

	<h2>Contact Us Today!</h2>
	<br/>
	<label>Please tell us your name:</label>
	<br/>
	<input type="text" name="cust_name" placeholder="First and Last name" />
	<br/>
	<label>What is your email?</label>
	<br/>
	<input type="email" name="cust_email" />
	<br/>
	<input type="submit" value="Submit Now!" />
	<br/>
	<br/>
	<a href="ccc_about.php">Learn More About Us!</a>
	<br/>
	<a href="ccc_home.php">Back to Home</a>

	<?php include "ccc_footer.php"; ?>

</body>
</html>