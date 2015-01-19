<!-- 
Author: C.Kelly
Date:2014-NOV-17
Description:Layout css styles used for the site 
-->
<?php require_once("inchead.php");
	  require_once("incfooter.php");
?>
<!DOCTYPE html>
<title>Taxi App</title>
<head>
	<link rel="stylesheet" href="css/layout.css">
</head>
<body>
	<div class="header">
		<a href="viewbookings.php"><div class="left-button button">Cancel</div></a>
		<div class="add-title">Add Bookings</div>
		<a href="viewbookings.php"><div class="right-button button">Done</div></a>
	</div>
	<div>
		<table>
			<tbody>
				<tr>
					<td class="title-field">Customer Name & Surname</td>
				</tr>
				<tr>
					<!-- <td class="field">Name<span class="arrow">Detail ></span></td> -->
					<td class="field"><input type="text" name="name" placeholder="Name"></td>
				</tr>
				<tr>
					<td class="title-field">Time & Addresses</td>
				</tr>
				<tr>
					<td class="field"><input type="text" name="dateandtime" placeholder="Date & Time"></td>
				</tr>
				<tr>
					<td class="field"><input type="text" name="pickup" placeholder="Pick Up"></td>
				</tr>
				<tr>
					<td class="field"><input type="text" name="dropoff" placeholder="Drop Off"></td>
				</tr>
				<tr>
					<td class="title-field">N<sup>o</sup> of Passengers</td>
				</tr>
				<tr>
					<td class="field"><input type="text" name="nopassengers" placeholder="Number"></td>
				</tr>
				<tr>
					<td class="title-field">Phone Number</td>
				</tr>
				<tr>
					<td class="field"><input type="text" name="phonenumber" placeholder="Phone Number"></td>
				</tr>
				<tr>
					<td class="title-field">Company</td>
				</tr>
				<tr>
					<td class="field"><input type="text" name="company" placeholder="Company"></td>
				</tr>
				<tr>
					<td class="title-field">Comments</td>
				</tr>
				<tr>
					<td class="field"><textarea rows="4" cols="35" name="comments"></textarea></td>
				</tr>
				<tr>
					<td class="title-field">Drivers</td>
				</tr>
				<tr>
					<td class="field"><input type="text" name="driver" placeholder="Driver"></td>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="footer">
		<a href="viewbookings.php"><div class="bookings button2">Bookings</div></a>
		<a href="calendarview.php"><div class="calendar button2">Appointments</div></a>
		<a href="more.php"><div class="more button2">More</a></div>
	</div>
</body>
</html>