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
	<link rel="stylesheet" href="css/layout.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<body id="body">
	<form method="post" action="conntest.php">
		<div class="header">
			<a href="companies.php"><div class="left-button button">Cancel</div></a>
			<div class="add-title">Add Company</div>
			<div class="right-button button"><input type="submit" value="Done"></div>
		</div>
		<div>
			<table>
				<tbody>
					<tr>
						<td class="title-field">Name</td>
					</tr>
					<tr>
						<td class="field"><input type="text" name="company_name" placeholder="Company Name"></td>
					</tr>
					<tr>
						<td class="field"><input type="text" name="contact_name" placeholder="Contact Name"></td>
					</tr>
					<tr>
						<td class="title-field">Contact Phone</td>
					</tr>
					<tr>
						<td class="field"><input type="text" name="company_number" placeholder="Number"></td>
					</tr>
					<tr>
						<td class="title-field">E-mail Address</td>
					</tr>
					<tr>
						<td class="field"><input type="text" name="company_email" placeholder="E-mail"></td>
					</tr>
					<tr>
						<td class="title-field">Address</td>
					</tr>
					<tr>
						<td class="field"><input type="text" name="company_address" placeholder="Address"></td>
					</tr>
				</tbody>
			</table>
		</div>
	</form>
	<div class="footer">
		<a href="viewbookings.php"><div class="bookings button2">Bookings</div></a>
		<a href="calendarview.php"><div class="calendar button2">Appointments</div></a>
		<a href="more.php"><div class="more button2">More</div></a>
	</div>
	<?php
		session_start();
		$_SESSION['method'] = "AddCompany";
	?>
</body>
</html>