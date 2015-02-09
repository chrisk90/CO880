<!-- 
Author: C.Kelly
Date:2014-NOV-17
Description:Layout css styles used for the site 
-->
<?php include 'inchead.php';
	  include 'incfooter.php';
	  include 'conn.php';
?>

<!DOCTYPE html>
<title>Taxi App</title>
<head>
	<link rel="stylesheet" href="css/layout.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="js/main.js" type="text/javascript"></script>
</head>
<body id="body"s>
	<div class="header">
		<a href="drivers.php"><div class="left-button button">Cancel</div></a>
		<div class="add-title">Add Driver</div>
		<a href="drivers.php"><div class="right-button button" onclick="submitDriver()">Done</div></a>
	</div>
	<div>
		<form method="post" action="adddriver.php">
			<table>
				<tbody>
					<tr>
						<td class="title-field">Driver ID</td>
					</tr>
					<tr>
						<td class="field"><input type="text" name="driverid" placeholder="Driver ID"></td>
					</tr>
        	        <tr>
						<td class="title-field">Name</td>
					</tr>
					<tr>
						<td class="field"><input type="text" name="drivername" placeholder="Name"></td>
					</tr>
					<tr>
						<td class="title-field">Contact Phone</td>
					</tr>
					<tr>
						<td class="field"><input type="text" name="drivernumber" placeholder="Number"></td>
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
						<td class="field"><input type="text" name="driveremail" placeholder="E-mail"></td>
					</tr>
				</tbody>
			</table>
			<input class="right-button button" type="submit" value="Done" onclick="submitDriver()">
		</form>
	</div>
	<div class="footer">
		<a href="viewbookings.php"><div class="bookings button2">Bookings</div></a>
		<a href="calendarview.php"><div class="calendar button2">Appointments</div></a>
		<a href="more.php"><div class="more button2">More</div></a>
	</div>
	<?php
		$_POST['driverid'] = $_SESSION['driverid'];
		$_POST['drivername'] = $_SESSION['drivername'];
		$_POST['drivernumber'] = $_SESSION['drivernumber'];
		$_POST['address'] = $_SESSION['address'];
		$_POST['driveremail'] = $_SESSION['driveremail'];

		$driver_id = isset($_REQUEST['driverid'])?$_SESSION["driver_id"]:'';
		$drivername = isset($_REQUEST['drivername'])?$_SESSION["drivername"]:'';
		$driverphone = isset($_REQUEST['driverphone'])?$_SESSION["drivernumber"]:'';
		$address = isset($_REQUEST['address'])?$_SESSION["address"]:'';
		$email = isset($_REQUEST['driveremail'])?$_SESSION["driveremail"]:'';
		//calendar_id should already be owned by user
		$calendar = 'if7rflqiqu3honr4tstj9db3e4@group.calendar.google.com';

		$sql = "INSERT INTO `driver` (`driver_id`, `name`, `address`, `phone_number`, `email_address`, `calendar_id`, `holiday_id`, `active`) VALUES
('".$driver_id."', '".$drivername."', '".$address."', '".$drivernumber."', '".$driveremail."', '".$calendar."','something', 1)";
	?>
</body>
</html>