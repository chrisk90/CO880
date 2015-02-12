<?php
session_start();
date_default_timezone_set('Europe/London');
require_once("classes/meekrodb.2.3.class.php"); // Refer to http://www.meekro.com/quickstart.php

$driver_id = isset($_REQUEST['driver_id'])?$_REQUEST["driver_id"]:"";
$drivername = isset($_REQUEST['name'])?$_REQUEST["name"]:"";
$address = isset($_REQUEST['address'])?$_REQUEST["address"]:"";
$drivernumber = isset($_REQUEST['phone_number'])?$_REQUEST["phone_number"]:"";
$driveremail = isset($_REQUEST['email'])?$_REQUEST["email"]:"";
$method = $_SESSION['method'];

// echo "<script type='text/javascript'>alert('$method');</script>";

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

IF ($method === 'AddDriver'){
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
	
    // if ($conn->query($sql) === TRUE) {
    //     echo "New driver record created successfully";
    // } else {
    //     echo "Error: " . $sql . "<br>" . $conn->error;
} 
//}elseif ($method === 'AddCustomer'){
//    
//    if ($conn->query($sql) === TRUE) {
//        echo "New customer record created successfully";
//    } else {
//        echo "Error: " . $sql . "<br>" . $conn->error;
//    }
//}elseif ($method === 'AddCompany'){
//    
//    if ($conn->query($sql) === TRUE) {
//        echo "New company record created successfully";
//    } else {
//        echo "Error: " . $sql . "<br>" . $conn->error;
//    } 
//}elseif ($method === 'AddBooking'){
//    
//    if ($conn->query($sql) === TRUE) {
//        echo "New booking record created successfully";
//    } else {
//        echo "Error: " . $sql . "<br>" . $conn->error;
//    }
//}elseif ($method === 'Companies'){
//    
//    if ($conn->query($sql) === TRUE) {
//        echo "Company returned";
//    } else {
//        echo "Error: " . $sql . "<br>" . $conn->error;
//    }
//}elseif ($method === 'Drivers'){
//    
//    if ($conn->query($sql) === TRUE) {
//        echo "Driver returned";
//    } else {
//        echo "Error: " . $sql . "<br>" . $conn->error;
//    }
//}elseif ($method === 'ViewBookings'){
//    
//    if ($conn->query($sql) === TRUE) {
//        echo "Booking returned";
//    } else {
//        echo "Error: " . $sql . "<br>" . $conn->error;
//    }
// }
session_destroy();
?>
<!-- <!DOCTYPE html>
<title>Something</title>
<head>
<META http-equiv="refresh" content="5;URL=drivers.php">
</head>
</html> -->