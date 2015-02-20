<!-- 
Author: C.Kelly
Date:2014-NOV-17
-->
<?php
date_default_timezone_set('Europe/London');
$driver_id = isset($_REQUEST['driver_id'])?$_REQUEST["driver_id"]:"";

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
		<div class="cal-title">Appointments</div>
	</div>
	<form method="post" action="calendarview.php">
		<div>
			<table>
				<tbody>
					<?php
					if ($driver_id == null) {
						echo "<tr>";
						echo "<td class='title-field'>Please input your Driver ID</td>";
						echo "</tr>";
						echo "<tr>";
						echo "<td class='field'><input type='text' name='driver_id' placeholder='Driver ID'></td>";
						echo "</tr>";
						echo "</tbody>";
						echo "</table>";
						echo "<div class='right-button done'><input type='submit' value='Done'></div>";
					}
					else {
						require_once("conn.php");
						$results = DB::query("SELECT customer_id, pickup, driver_id, pickup_address, dropoff_address, comment FROM booking WHERE driver_id = '".$driver_id."'");
						foreach ($results as $row) {
							echo "<tr>";
							echo "<td class='field'>".$row['customer_id']."<br />".$row['driver_id']."<br />".$row['pickup']."<br />".$row['pickup_address']."<br />".$row['dropoff_address']."<br />".$row['comment']."</td>";
							echo "</tr>";
						}
					}
					?>
				</tbody>
			</table>
		</div>
	</form>
	<div class="footer">
		<a href="viewbookings.php"><div class="bookings button2">Bookings</div></a>
		<a href="calendarview.php"><div class="calendar button2">Appointments</div></a>
		<a href="more.php"><div class="more button2">More</div></a>
	</div>
</body>
</html>