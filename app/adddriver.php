<!-- 
Author: C.Kelly
Date:2014-NOV-17
Description:Layout css styles used for the site 
-->
<?php 
date_default_timezone_set('Europe/London');
?>

<!DOCTYPE html>
<title>Taxi App</title>
<head>
	<link rel="stylesheet" href="css/layout.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="js/main.js" type="text/javascript"></script>
</head>
<body id="body"s>
	<form method="post" action="conntest.php">
		<div class="header">
			<a href="drivers.php"><div class="left-button button">Cancel</div></a>
			<div class="add-title">Add Driver</div>
			<div class="right-button button"><input type="submit" value="Done"></div>
		</div>
		<!-- onclick="submitDriver()" -->
		<div>
			<table>
				<tbody>
					<tr>
						<td class="title-field">Driver ID</td>
					</tr>
					<tr>
						<td class="field"><input type="text" name="driver_id" placeholder="Driver ID"></td>
					</tr>
        	        <tr>
						<td class="title-field">Name</td>
					</tr>
					<tr>
						<td class="field"><input type="text" name="name" placeholder="Name"></td>
					</tr>
					<tr>
						<td class="title-field">Contact Phone</td>
					</tr>
					<tr>
						<td class="field"><input type="text" name="phone_number" placeholder="Number"></td>
					</tr>
        	        <tr>
						<td class="title-field">Address</td>
					</tr>
					<tr>
						<td class="field"><input type="text" name="address" placeholder="Address"></td>
					</tr>
					<tr>
						<td class="title-field">E-mail Address</td>
					</tr>
					<tr>
						<td class="field"><input type="text" name="email" placeholder="E-mail"></td>
					</t>
				</tbody>
			</table>
			<!-- <input class="right-button button" type="submit" value="Done"> -->
		</div>
	</form>
	<div class="footer">
		<a href="viewbookings.php"><div class="bookings button2">Bookings</div></a>
		<a href="calendarview.php"><div class="calendar button2">Appointments</div></a>
		<a href="more.php"><div class="more button2">More</div></a>
	</div>
	<?php
		session_start();
		// $driver_id = isset($_REQUEST['driver_id'])?$_REQUEST["driver_id"]:'';
		// $drivername = isset($_REQUEST['name'])?$_REQUEST["name"]:'';
		// $address = isset($_REQUEST['address'])?$_REQUEST["address"]:'';
		// $drivernumber = isset($_REQUEST['phone_number'])?$_REQUEST["phone_number"]:'';
		// $driveremail = isset($_REQUEST['email'])?$_REQUEST["email"]:'';
		$_SESSION['method'] = "AddDriver";
	?>
</body>
</html>