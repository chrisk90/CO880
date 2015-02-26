<!-- 
Author: C.Kelly
Date:2014-NOV-17
-->
<?php
date_default_timezone_set('Europe/London');
require_once("classes/meekrodb.2.3.class.php"); // Refer to http://www.meekro.com/quickstart.php
?>
<!DOCTYPE html>
<title>Taxi App</title>
<head>
	<?php
		include("inc/head.php");
	?>
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
					$results = DB::query("SELECT * FROM driver");
					if ($results == null) {
						echo "<tr>";
						echo "<td class='field'>No results</td>";
						echo "</tr>";
					}
					foreach ($results as $row) {
						echo "<tr>";
						echo "<td class='field'>".$row['driver_id']." - ".$row['name']."<br />".$row['email_address']."<br />Active: ".$row['active']."</td>";
						echo "</tr>";
					}
				?>
				<tr>
					<td class="field" style="color:blue;"><a href="javascript:history.go(0)">Load More ...<span class="arrow">></span></a></td>
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