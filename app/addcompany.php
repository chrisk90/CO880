<!-- 
Author: C.Kelly
Date:2014-NOV-17
Description:Layout css styles used for the site 
-->
<?php require_once("inchead.php");
	  require_once("incfooter.php");
?>
<!DOCTYPE html>
<title>Taxi App</title>
<head>
	<link rel="stylesheet" href="css/layout.css">
</head>
<body>
	<div class="header">
		<a href="companies.php"><div class="left-button button">Cancel</div></a>
		<div class="add-title">Add Company</div>
		<a href="companies.php"><div class="right-button button">Done</div></a>
	</div>
	<div>
		<table>
			<tbody>
				<tr>
					<td class="title-field">Name</td>
				</tr>
				<tr>
					<td class="field"><input type="text" name="companyname" placeholder="Name"></td>
				</tr>
				<tr>
					<td class="title-field">Contact Phone</td>
				</tr>
				<tr>
					<td class="field"><input type="text" name="companynumber" placeholder="Number"></td>
				</tr>
				<tr>
					<td class="title-field">E-mail Address</td>
				</tr>
				<tr>
					<td class="field"><input type="text" name="companyemail" placeholder="E-mail"></td>
				</tr>
				<tr>
					<td class="title-field">Address</td>
				</tr>
				<tr>
					<td class="field"><input type="text" name="companyaddress" placeholder="Address"></td>
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