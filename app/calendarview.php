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
	<div class="header">
		<div class="left-button button add"><</div>
		<div class="cal-title">Appointments</div>
		<div class="right-button button add">></div>
	</div>
	<div>
		<table>
			<tbody>
				<tr>
					<td class="field"></td>
				</tr>
				<tr>
					<td class="field"></td>
				</tr>
				<tr>
					<td class="field"></td>
				</tr>
				<tr>
					<td class="field"></td>
				</tr>
				<tr>
					<td class="field"></td>
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