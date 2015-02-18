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
		<a href="#"><div class="left-button button">Edit</div></a>
		<div class="view-title">Bookings</div>
		<a class="add" href="addbooking.php"><div class="right-button button"><strong>+</strong></div></a>
	</div>
	<div>
		<table>
			<tbody>
				<?php
					require_once("conn.php");
					$results = DB::query("SELECT customer_id, pickup, driver_id, pickup_address, dropoff_address, comment FROM booking");
					foreach ($results as $row) {
						$passenger = DB::query("SELECT passenger_name FROM customer where customer_id = '".$row['customer_id']."'");
						echo "<tr>";
						echo "<td class='field'>".$row['customer_id']." - ".$passenger."<br />".$row['driver_id']."<br />".$row['pickup']."<br />".$row['pickup_address']."<br />".$row['dropoff_address']."<br />".$row['comment']."</td>";
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