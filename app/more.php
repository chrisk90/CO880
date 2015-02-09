<!-- 
Author: C.Kelly
Date:2014-NOV-17
Description:Layout css styles used for the site 
-->
<?php require_once("inchead.php");
	  require_once("incfooter.php");
	  require_once("conn.php");
?>
<!DOCTYPE html>
<title>Taxi App</title>
<head>
	<link rel="stylesheet" href="css/layout.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="js/main.js" type="text/javascript"></script>
	<script type="text/javascript">
	function nightMode() {
		$("body").css("color", "black");
		$(".header").css("background-color", "#08088A");
		$(".footer").css("background-color", "#08088A");
	}
	function dayMode() {
		$("body").css("color", "black");
		$(".header").css("background-color", "yellow");
		$(".footer").css("background-color", "yellow");
	}
</script>
</head>
<body id="body">
	<div class="header">
		<div class="more-title">More</div>
	</div>
	<div>
		<table>
			<tbody>
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
				<tr>
					<td class="field night" onclick="dayMode()">Day Time Mode</td>
				</tr>
				<!-- <tr>
					<td class="field night" onclick="nightMode()">Night Time Mode</td>
				</tr> -->
				<tr>
					<td class="field">Logout</td>
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