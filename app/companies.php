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
		<div class="customer-title">Companies</div>
		<a class="add" href="addcompany.php"><div class="right-button button"><strong>+</strong></div></a>
	</div>
	<div>
		<table>
			<tbody>
				<tr>
					<td class="title-field">Companies</td>
				</tr>
				<?php
					require_once("conn.php");
					$results = DB::query("SELECT * FROM company");
					if ($results == null) {
						echo "No results";
					}
					else {
						foreach ($results as $row) {
							echo "<tr>";
							echo "<td class='field'>".$row['name']."<br />".$row['address']."</td>";
							echo "</tr>";
						}
					}
				?>
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