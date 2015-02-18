<!-- 
Author: C.Kelly
Date:2014-NOV-17
Description:Layout css styles used for the site 
-->
<?php
date_default_timezone_set('Europe/London');
require_once("classes/meekrodb.2.3.class.php"); // Refer to http://www.meekro.com/quickstart.php
?>
<!DOCTYPE html>
<title>Taxi App</title>
<head>
	<link rel="stylesheet" href="css/layout.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<!-- <META http-equiv="refresh" content="5;URL=more.php"> -->
</head>
<body id="body">
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
				<?php
					require_once("conn.php");
					$results = DB::query("SELECT name FROM driver");
					foreach ($results as $row) {
						echo "<tr>";
						echo "<td class='field'>".$row['name']."</td>";
						echo "</tr>";
					}
				?>
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