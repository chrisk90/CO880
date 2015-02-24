<!-- 
Author: C.Kelly
Date:2014-NOV-17
-->
<?php
date_default_timezone_set('Europe/London');
?>
<!DOCTYPE html>
<title>Taxi App</title>
<head>
	<?php
		include("inc/head.php");
	?>
</head>
<body id="body">
	<div class="header day">
		<div class="more-title">More</div>
	</div>
	<div>
		<table>
			<tbody>
				<!-- <tr>
					<td class="title-field" id="time"></td>
				</tr> -->
				<tr>
					<td class="title-field">More Tables</td>
				</tr>
				<tr>
					<td class="field"><a href="customers.php">Customers<span class="arrow">></span></a></td>
				</tr>
				<tr>
					<td class="field"><a href="drivers.php">Drivers<span class="arrow">></span></a></td>
				</tr>
				<tr>
					<td class="field"><a href="companies.php">Companies<span class="arrow">></span></a></td>
				</tr>
				<tr>
					<td class="title-field">Settings</td>
				</tr>
<!-- 				<tr>
					<td class="field mode" onclick="dayMode()">Day Time Mode</td>
				</tr>
				<tr>
					<td class="field mode" onclick="nightMode()">Night Time Mode</td>
				</tr> -->
				<tr>
					<td class="field"><a href="logout.php">Logout</a></td>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="footer day">
		<a href="viewbookings.php"><div class="bookings button2">Bookings</div></a>
		<a href="calendarview.php"><div class="calendar button2">Appointments</div></a>
		<a href="more.php"><div class="more button2">More</div></a>
	</div>
</body>
</html>