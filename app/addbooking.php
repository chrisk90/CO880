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
</head>
<body id="body">
	<form method="post" action="conntest.php">
		<div class="header">
			<a href="viewbookings.php"><div class="left-button button">Cancel</div></a>
			<div class="add-title">Add Bookings</div>
			<div class="right-button button"><input type="submit" value="Done"></div>
		</div>
		<div>
			<table>
				<tbody>
					<tr>
						<td class="title-field">Customer Name & Surname</td>
					</tr>
					<tr>
						<td class="field"><input type="text" name="pickup_name" placeholder="Name & Surname"></td>
					</tr>
					<tr>
						<td class="title-field">Time of Pickup</td>
					</tr>
					<tr>
						<td class="field"><input type="text" name="pickup" placeholder="YYYY-MM-DD HH:MM:SS"></td>
					</tr>
					<tr>
						<td class="field"><input type="text" name="pickup_address" placeholder="Pick Up Address"></td>
					</tr>
					<tr>
						<td class="field"><input type="text" name="dropoff_address" placeholder="Drop Off Address"></td>
					</tr>
					<tr>
						<td class="title-field">Payment Method</td>
					</tr>
					<tr>
						<td class="field"><input type="text" name="payment_method" placeholder="Card/Cash"></td>
					</tr>
<!-- 					<tr>
						<td class="title-field">Phone Number</td>
					</tr>
					<tr>
						<td class="title-field">Company</td>
					</tr> -->
					<tr>
						<td class="title-field">Comments</td>
					</tr>
					<tr>
						<td class="field"><textarea rows="4" cols="35" name="comment"></textarea></td>
					</tr>
				</tbody>
			</table>
		</div>
	</form>
	<div class="footer">
		<a href="viewbookings.php"><div class="bookings button2">Bookings</div></a>
		<a href="calendarview.php"><div class="calendar button2">Appointments</div></a>
		<a href="more.php"><div class="more button2">More</div></a>
	</div>
	<?php
		session_start();
		$_SESSION['method'] = "AddBooking";
	?>
</body>
</html>