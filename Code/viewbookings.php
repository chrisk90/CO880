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
		<!-- <a href="#"><div class="left-button button">Edit</div></a> -->
		<div class="view-title">Bookings</div>
		<a class="add" href="addbooking.php"><div class="right-button button"><strong>+</strong></div></a>
	</div>
	<div>
		<table>
			<tbody>
				<?php
					require_once("conn.php");
					$results = DB::query("SELECT customer_id, pickup, driver_id, pickup_address, dropoff_address, comment FROM booking");
					if ($results == null) {
						echo "<tr>";
						echo "<td class='field'>No results</td>";
						echo "</tr>";
					}
					foreach ($results as $row) {
						$passenger = DB::queryFirstField("SELECT passenger_name FROM customer where customer_id = '".$row['customer_id']."'");
						echo "<tr>";
						echo "<td class='field'>".$row['customer_id']." - ".$passenger."<br />Driver: ".$row['driver_id']."<br />Pickup Time:".$row['pickup']."<br />Pickup: ".$row['pickup_address']."<br />Dropoff: ".$row['dropoff_address']."<br />Comments: ".$row['comment']."</td>";
						echo "</tr>";
					}
				?>
				<tr>
					<td class="field" style="color:blue;"><a href="javascript:history.go(0)">Load More ...<span class="arrow">></span></a></td>
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