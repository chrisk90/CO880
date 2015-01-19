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
		<div class="driver-title">Drivers</div>
		<a class="add" href="adddriver.php"><div class="right-button button"><strong>+</strong></div></a>
	</div>
	<div>
		<table>
			<tbody>
				<tr>
					<td class="title-field">Drivers</td>
				</tr>
				<tr>
					<td class="field">Name<br />Available?</td>
				</tr>
				<tr>
					<td class="field">Name<br />Available?</td>
				</tr>
				<tr>
					<td class="field"></td>
				</tr>
				<tr>
					<td class="field"></td>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="footer">
		<a href="viewbookings.php"><div class="bookings button2">Bookings</div></a>
		<a href="calendarview.php"><div class="calendar button2">Appointments</div></a>
		<a href="more.php"><div class="more button2">More</div></a>
	</div>
</body>
</html>