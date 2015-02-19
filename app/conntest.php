<!-- 
Author: A.Norwood & C.Kelly
Date:2014-DEC-12
Description: This file is where the data is submitted to the database
-->
<?php
session_start();
date_default_timezone_set('Europe/London');
require_once("classes/meekrodb.2.3.class.php"); // Refer to http://www.meekro.com/quickstart.php

$driver_id = isset($_REQUEST['driver_id'])?$_REQUEST["driver_id"]:"";
$drivername = isset($_REQUEST['name'])?$_REQUEST["name"]:"";
$address = isset($_REQUEST['address'])?$_REQUEST["address"]:"";
$drivernumber = isset($_REQUEST['phone_number'])?$_REQUEST["phone_number"]:"";
$driveremail = isset($_REQUEST['email'])?$_REQUEST["email"]:"";

$customer_id = isset($_REQUEST['customer_id'])?$_REQUEST["customer_id"]:"0";
$passenger_name = isset($_REQUEST['passenger_name'])?$_REQUEST["passenger_name"]:"";
$customer_number = isset($_REQUEST['customer_number'])?$_REQUEST["customer_number"]:"";
$customer_email = isset($_REQUEST['customer_email'])?$_REQUEST["customer_email"]:"";

$company_id = isset($_REQUEST['company_id'])?$_REQUEST["company_id"]:"0";
$company_name = isset($_REQUEST['company_name'])?$_REQUEST["company_name"]:"";
$company_address = isset($_REQUEST['company_address'])?$_REQUEST["company_address"]:"";
$contact_name = isset($_REQUEST['contact_name'])?$_REQUEST["contact_name"]:"";
$company_number = isset($_REQUEST['company_number'])?$_REQUEST["company_number"]:"";
$company_email = isset($_REQUEST['company_email'])?$_REQUEST["company_email"]:"";

$booking_id = isset($_REQUEST['booking_id'])?$_REQUEST["booking_id"]:"0";
$pickup = isset($_REQUEST['pickup'])?$_REQUEST["pickup"]:"";
$pickup_name = isset($_REQUEST['pickup_name'])?$_REQUEST["pickup_name"]:"";
$pickup_address = isset($_REQUEST['pickup_address'])?$_REQUEST["pickup_address"]:"";
$dropoff_address = isset($_REQUEST['dropoff_address'])?$_REQUEST["dropoff_address"]:"";
$payment_method = isset($_REQUEST['payment_method'])?$_REQUEST["payment_method"]:"";
$comment = isset($_REQUEST['comment'])?$_REQUEST["comment"]:"";
$cal_id = isset($_REQUEST['cal_id'])?$_REQUEST["cal_id"]:"";
$type_id = isset($_REQUEST['type_id'])?$_REQUEST["type_id"]:"";

$password = isset($_REQUEST['password'])?$_REQUEST["password"]:"";
$fname = isset($_REQUEST['fname'])?$_REQUEST["fname"]:"";
$lname = isset($_REQUEST['lname'])?$_REQUEST["lname"]:"";
$user_email = isset($_REQUEST['user_email'])?$_REQUEST["user_email"]:"";

$method = $_SESSION['method'];

DB::$user = 'usr_taxi';
DB::$password = 'taxi';
DB::$dbName = 'mydb';

$name ="mydb";
$user = 'usr_taxi';
//calendar_id should already be owned by user
$calendar = 'if7rflqiqu3honr4tstj9db3e4@group.calendar.google.com';
$holiday = "something";

define('DB_TYPE', 'mysql');
define('DB_HOST', 'localhost');
define('DB_USER', 'usr_taxi');
define('DB_PASS', 'taxi');

$database = new PDO(DB_TYPE.':host='.DB_HOST, DB_USER, DB_PASS);

if ($method === 'AddDriver'){
	DB::insert('driver', array (
	'driver_id' => $driver_id,
	'name' => $drivername,
	'address' =>$address ,
	'phone_number' => $drivernumber,
	'email_address' => $driveremail,
	'calendar_id' => $calendar,
	'holiday_id' => $holiday,
	'active' => "1"
	));
	DB::insert('users', array (
	'user_id' => '0',
	'password' => "driver",
	'fname' => $drivername,
	'lname' => "Driver",
	'email' => $driveremail,
	'driver_id' => $driver_id
	));
	DB::insertId();
	echo "<!DOCTYPE html>";
	echo "<title>Taxi App</title>";
	echo "<head>";
	echo "<META http-equiv='refresh' content='2;URL=drivers.php'>";
	echo "</head>";
	echo "<body>";
	echo "<p>Successfully added data!</p>";
	echo "</body>";
	echo "</html>";
}
elseif ($method === 'AddCustomer'){
    DB::insert('customer', array (
    'customer_id' => '0',
   	'passenger_name' => $passenger_name,
   	'phone_number' => $customer_number,
   	'email_address' => $customer_email
   	));
    DB::insertId();
   	echo "<!DOCTYPE html>";
	echo "<title>Taxi App</title>";
	echo "<head>";
	echo "<META http-equiv='refresh' content='2;URL=customers.php'>";
	echo "</head>";
	echo "<body>";
	echo "<p>Successfully added data!</p>";
	echo "</body>";
	echo "</html>";
}
elseif ($method === 'AddCompany'){
	DB::insert('customer', array (
    'company_id' => '0',
	'name' => $company_name,
	'address' => $company_address,
	'contact_name' => $contact_name,
	'phone_number' => $company_number,
	'email_address' => $company_email
	));
	DB::insertId();
   	echo "<!DOCTYPE html>";
	echo "<title>Taxi App</title>";
	echo "<head>";
	echo "<META http-equiv='refresh' content='2;URL=companies.php'>";
	echo "</head>";
	echo "<body>";
	echo "<p>Successfully added data!</p>";
	echo "</body>";
	echo "</html>";
}
elseif ($method === 'AddBooking'){
	$customer_id = DB::queryFirstField("SELECT customer_id FROM customer WHERE passenger_name = '".$pickup_name."'");
	$driver_id = DB::queryFirstField("SELECT driver_id FROM driver WHERE active = '1'");
	if ($payment_method == "Card") {
		$payment_method_id = 1;
	}
	elseif ($payment_method == "Cash") {
		$payment_method_id = 2;
	}
	else {
		$payment_method_id = 0;
	}
	DB::insert('booking', array (
	'booking_id' => '0',
	'pickup' => $pickup,
	'pickup_address' => $pickup_address,
	'dropoff_address' => $dropoff_address,
	'customer_id' => $customer_id,
	'driver_id' => $driver_id,
	'payment_method_id' => $payment_method_id,
	'comment' => $comment
	));
	DB::insertId();
	echo "<!DOCTYPE html>";
	echo "<title>Taxi App</title>";
	echo "<head>";
	echo "<META http-equiv='refresh' content='2;URL=viewbookings.php'>";
	echo "</head>";
	echo "<body>";
	echo "<p>Successfully added data!</p>";
	echo "</body>";
	echo "</html>";
}
elseif ($method === 'Login'){
	$result = DB::query("SELECT * FROM users WHERE email = '".$user_email."' AND password = '".$password."'");
	
	if (DB::count() > 0) {
		if ($password == "driver") {
			DB::query("UPDATE driver SET active = 1 WHERE email_address ='".$user_email."'");
		}
		$_SESSION['user'] = $user_email;
		echo "<!DOCTYPE html>";
		echo "<title>Taxi App</title>";
		echo "<head>";
		echo "<META http-equiv='refresh' content='0;URL=viewbookings.php'>";
		echo "</head>";
		echo "<body>";
		echo "</body>";
		echo "</html>";
		
	}
	elseif (DB::count() == 0) {
		echo "<!DOCTYPE html>";
		echo "<title>Taxi App</title>";
		echo "<head>";
		echo "<META http-equiv='refresh' content='1;URL=login.php'>";
		echo "</head>";
		echo "<body>";
		echo "<p>Cannot find user, please try again.</p>";
		echo "</body>";
		echo "</html>";
	}
}
elseif ($method === 'Register'){
	DB::insert('users', array (
	'user_id' => '0',
	'password' => $password,
	'fname' => $fname,
	'lname' => $lname,
	'email' => $user_email
	));
	DB::insertId();
	echo "<!DOCTYPE html>";
	echo "<title>Taxi App</title>";
	echo "<head>";
	echo "<META http-equiv='refresh' content='2;URL=login.php'>";
	echo "</head>";
	echo "<body>";
	echo "<p>Successfully added data!</p>";
	echo "</body>";
	echo "</html>";
}
elseif ($method === 'Logout'){
	$driverresult = DB::query("SELECT * FROM driver WHERE email_address = '".$user_email."'");
	if (DB::count() > 0) {
		DB::query("UPDATE driver SET active = '0' WHERE email_address = '".$user_email."'");
	}
	echo "<!DOCTYPE html>";
	echo "<title>Taxi App</title>";
	echo "<head>";
	echo "<META http-equiv='refresh' content='2;URL=login.php'>";
	echo "</head>";
	echo "<body>";
	echo "<p>Successfully logged out!</p>";
	echo "</body>";
	echo "</html>";
}
?>