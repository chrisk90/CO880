<?php
date_default_timezone_set('Europe/London');

$firstname = $_POST('firstname');
$lastname = $_POST('lastname');
$drivername = $_POST('name');
$address = $_POST('address');
$dateandtime = $_POST('dateandtime');
$pickup = $_POST('pickup');
$dropoff = $_POST('dropoff');
$phonenumber = $_POST('phonenumber');
$company = $_POST('company');
$comments = $_POST('comments');
$driver = $_POST('driver');
$email_address = $_POST('driveraddress');
$method = $_POST('method');

date_default_timezone_set('Europe/London');
DB::$user = 'usr_taxi';
DB::$password = 'taxi';
DB::$dbName = 'mydb';

$name ="mydb";
$user = 'usr_taxi';
//calendar_id should already be owned by user
$calendar = 'if7rflqiqu3honr4tstj9db3e4@group.calendar.google.com';

define('DB_TYPE', 'mysql');
define('DB_HOST', 'localhost');
define('DB_USER', 'usr_taxi');
define('DB_PASS', 'taxi');

$database = new PDO(DB_TYPE.':host='.DB_HOST, DB_USER, DB_PASS);

//IF ($method === 'AddDriver'){
    $sql = "INSERT INTO `driver` (`driver_id`, `name`, `address`, `phone_number`, `email_address',`active`) VALUES
    ('$driver_id', '$drivername', '$address', '$phone_number', '$email_address', 1)";

    if ($conn->query($sql) === TRUE) {
        echo "New driver record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
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
?>