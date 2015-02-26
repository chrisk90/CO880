<!-- 
Author: C.Kelly
Date:2014-NOV-17
Description:Login page 
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
	<form method="post" action="conntest.php">
		<div class="header">
			<a href="register.php"><div class="left-button button">Register</div></a>
			<div class="add-title">Login</div>
			<div class="right-button button"><input type="submit" value="Login"></div>
		</div>
	
		<div>
			<table>
				<tbody>
					<tr>
						<td class="title-field">Email</td>
					</tr>
					<tr>
						<td class="field"><input type="text" name="user_email" placeholder="Email"></td>
					</tr>
		        	      <tr>
						<td class="title-field">Password</td>
					</tr>
					<tr>
						<td class="field"><input type="password" name="password" placeholder="Password"></td>
					</tr>
				</tbody>
			</table>
			
		</div>
	</form>
	<div class="footer"></div>
	<?php
		session_start();
		$_SESSION['method'] = "Login";
	?>
</body>
</html>