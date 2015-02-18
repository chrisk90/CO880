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
<body id="body"></body>
<form method="post" action="conntest.php">
	<div class="header">
		<a href="login.php"><div class="left-button button">Cancel</div></a>
		<div class="add-title">Register</div>
		<div class="right-button button"><input type="submit" value="Sign up"></div>
	</div>

	<div>
			<table>
				<tbody>
					<tr>
						<td class="title-field">First Name</td>
					</tr>
					<tr>
						<td class="field"><input type="text" name="fname" placeholder="First Name"></td>
					</tr>
					<tr>
						<td class="title-field">Last Name</td>
					</tr>
					<tr>
						<td class="field"><input type="text" name="lname" placeholder="Last Name"></td>
					</tr>
					<tr>
						<td class="title-field">Password</td>
					</tr>
					<tr>
						<td class="field"><input type="text" name="password" placeholder="Password"></td>
					</tr>
					<tr>
						<td class="title-field">E-mail Address</td>
					</tr>
					<tr>
						<td class="field"><input type="text" name="user_email" placeholder="E-mail"></td>
					</tr>
				</tbody>
			</table>
		</div>
</form>

<div class="footer"></div>
<?php
	session_start();
	$_SESSION['method'] = "Register";
?>
</html>