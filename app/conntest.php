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
<<<<<<< HEAD

$customer_id = isset($_REQUEST['customer_id'])?$_REQUEST["customer_id"]:"";
$passenger_name = isset($_REQUEST['passenger_name'])?$_REQUEST["passenger_name"]:"";
$customer_number = isset($_REQUEST['customer_number'])?$_REQUEST["customer_number"]:"";
$customer_email = isset($_REQUEST['customer_email'])?$_REQUEST["customer_email"]:"";

$company_id = isset($_REQUEST['company_id'])?$_REQUEST["company_id"]:"";
$company_name = isset($_REQUEST['company_name'])?$_REQUEST["company_name"]:"";
$company_address = isset($_REQUEST['company_address'])?$_REQUEST["company_address"]:"";
$contact_name = isset($_REQUEST['contact_name'])?$_REQUEST["contact_name"]:"";
$company_number = isset($_REQUEST['company_number'])?$_REQUEST["company_number"]:"";
$company_email = isset($_REQUEST['company_email'])?$_REQUEST["company_email"]:"";

$booking_id = isset($_REQUEST['booking_id'])?$_REQUEST["booking_id"]:"";
$pickup = isset($_REQUEST['pickup'])?$_REQUEST["pickup"]:"";
$payment_method = isset($_REQUEST['payment_method'])?$_REQUEST["payment_method"]:"";
$comment = isset($_REQUEST['comment'])?$_REQUEST["comment"]:"";
$cal_id = isset($_REQUEST['cal_id'])?$_REQUEST["cal_id"]:"";
$type_id = isset($_REQUEST['type_id'])?$_REQUEST["type_id"]:"";

=======
>>>>>>> origin/master
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
<<<<<<< HEAD
    //     echo "Error: " . $sql . "<br>" . $conn->error; 
} elseif ($method === 'AddCustomer'){
   DB::insert('customer', array (
   	'customer_id' => $customer_id,
   	'passenger_name' => $passenger_name,
   	'phone_number' => $customer_number,
   	'email_address' => $customer_email
   	))

   // if ($conn->query($sql) === TRUE) {
   //     echo "New customer record created successfully";
   // } else {
   //     echo "Error: " . $sql . "<br>" . $conn->error;
   // }
} elseif ($method === 'AddCompany'){
   DB::insert('customer', array (
	'company_id' => $company_id,
	'name' => $company_name,
	'address' => $company_address,
	'contact_name' => $contact_name,
	'phone_number' => $company_number,
	'email_address' => $company_email
	))

   // if ($conn->query($sql) === TRUE) {
   //     echo "New company record created successfully";
   // } else {
   //     echo "Error: " . $sql . "<br>" . $conn->error;
   // } 
}
} elseif ($method === 'AddBooking'){
	$customer_id = DB::query("SELECT customer_id FROM customer WHERE passenger_name = '".$passenger_name."'")
	$company_id = DB::query("SELECT company_id FROM comapny WHERE contact_name = '".$passenger_name."'")
	DB::insert('booking', array (
	'booking_id' => $booking_id,
	'pickup' => $pickup,
	'customer_id' => $customer_id,
	'driver_id' => $driver_id,
	'payment_method_id' => $payment_method,
	'company_id' => $company_id,
	'comment' => $comment,
	'cal_event_id' => $cal_id,
	'type_id' => $type_id
	))
=======
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
>>>>>>> origin/master
//    if ($conn->query($sql) === TRUE) {
//        echo "New booking record created successfully";
//    } else {
//        echo "Error: " . $sql . "<br>" . $conn->error;
//    }
}
// } elseif ($method === 'Companies'){
//    
//    if ($conn->query($sql) === TRUE) {
//        echo "Company returned";
//    } else {
//        echo "Error: " . $sql . "<br>" . $conn->error;
//    }
// } elseif ($method === 'Drivers'){
//    
//    if ($conn->query($sql) === TRUE) {
//        echo "Driver returned";
//    } else {
//        echo "Error: " . $sql . "<br>" . $conn->error;
//    }
// } elseif ($method === 'ViewBookings'){
//    
//    if ($conn->query($sql) === TRUE) {
//        echo "Booking returned";
//    } else {
//        echo "Error: " . $sql . "<br>" . $conn->error;
//    }
// }
session_destroy();
?>
<<<<<<< HEAD
<!DOCTYPE html>
=======
<!-- <!DOCTYPE html>
>>>>>>> origin/master
<title>Something</title>
<head>
<META http-equiv="refresh" content="5;URL=drivers.php">
</head>
<<<<<<< HEAD
<body>
<p>Successfully added data!</p>
</body>
</html>
=======
</html> -->
>>>>>>> origin/master
